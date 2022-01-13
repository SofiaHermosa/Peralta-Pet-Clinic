<?php 
    require_once('./mailer/mailer.php');
    require './vendor/autoload.php';

    use Carbon\Carbon;
    use Carbon\CarbonInterval;
 

    class Appointment{
        public $appointment, $connection, $slots, $config, $mail, $date;
        
        public function __construct(){
            require $_SERVER['DOCUMENT_ROOT'] . '/controller/connection/conn.php';
            require_once('./class/services.php');

            $this->connection = $conn;
            $this->slots      = [];
            $this->date       = new DateTime($_REQUEST['date'] ?? '');
            $this->date       = $this->date->format('Y-m-d');
            $this->mail       = new Mailer;

            $config           = new Services;
            $this->config     = $config->getTimeIntervals()->intervals;
        } 

        public function getAppointment($filter = null, $notif = false, $report = false){
            $json = array();
            $date = $_REQUEST['date'] ?? null;
            
            $sqlQuery = "SELECT apt_time, end_time FROM tbl_appointment WHERE deleted_at IS NULL AND apt_time LIKE '%$date' ORDER BY id";

            if($date == null){
                $sqlQuery = "SELECT apt_time, end_time FROM tbl_appointment WHERE deleted_at IS NULL ORDER BY id";
            }
            
            if($filter != null){
                $sqlQuery = "SELECT apt_time, end_time FROM tbl_appointment WHERE deleted_at IS NULL AND status='$filter' ORDER BY id";
            }

            if($report){
                $sqlQuery = "SELECT * FROM tbl_appointment WHERE deleted_at IS NULL ORDER BY id";
            }

            $result = mysqli_query($this->connection, $sqlQuery);
            $eventArray = array();

            while ($row = mysqli_fetch_array($result)) {
                if($notif){
                    $aptDate = date("Y-m-d", strtotime($row['apt_time']));
                    $currentDate = date("Y-m-d");
                    if($currentDate === $aptDate){
                        array_push($eventArray, ['apt_time' => $row['apt_time'], 'end_time' => $row['end_time']]);
                    }
                }else if($report){
                    $row['formatted_date'] = date("F j, Y", strtotime($row['apt_time']));
                    $row['formatted_time'] = date("h:i a", strtotime($row['apt_time']));
                    $row['status_badge'] = $this->statusBadge($row['status']);
                    array_push($eventArray, $row);
                }else{
                    array_push($eventArray, ['apt_time' => $row['apt_time'], 'end_time' => $row['end_time'], 'details' => $row]);
                }
            }

            // mysqli_free_result($result);
            // mysqli_close($this->connection);

            $this->appointment = $eventArray;

            return $this;
        }

        public function statusBadge($status){
            $badge = "<center><span class='text-xs font-medium p-2 rounded bg-gray-200 text-gray-800 shadow'>PENDING</span></center>";
            if($status == 2){
                $badge ="<center><span class='text-xs font-medium p-2 rounded bg-green-100 text-green-800 shadow'>APPROVED</span></center>"; 
           }
   
           if($status == 3){
               $badge ="<center><span class='text-xs font-medium p-2 rounded bg-red-100 text-red-800 shadow'>DECLINED</span></center>";  
           }
           
           if($status == 4){
               $badge ="<center><span class='text-xs font-medium p-2 rounded bg-green-200 text-green-800 shadow'>DONE</span></center>";  
           }
           
           
           if($status == 5){
               $badge ="<center><span class='text-xs font-medium p-2 rounded bg-yellow-100 text-yellow-800 shadow'>CANCELLED</span></center>";  
           }

           return $badge;
        }

        public function updateAppointmentStatus(){
            $status = $_POST['status'] ?? 1;
            $id     = $_POST['id'] ?? '';
            $reason = base64_encode($_POST['reason']) ?? '';

            
            $result = mysqli_query($this->connection,"UPDATE tbl_appointment SET status='$status', decline_reason='$reason' WHERE id='$id'")
                    or die ("failed to query update in the appointment table");
                    
            
            if($status == 4){
                $this->archiveAppointment($id);
            }else{
                if($status != 5){
                    $this->sendAptNotif($id, $reason);
                }
            }         
            
            return $this;        
        }

        public function sendAptNotif($id, $reason){
            $sqlQuery = "SELECT * FROM tbl_appointment LEFT JOIN tbl_users ON tbl_appointment.user_id = tbl_users.id  WHERE tbl_appointment.id='$id'";

            $result = mysqli_query($this->connection, $sqlQuery);
            $eventArray = array();

            while ($row = mysqli_fetch_array($result)) {
                array_push($eventArray, $row);
            }
    
            $statusString = $eventArray[0]['status'] == 2 ? '<strong>APPROVED</strong>' : '<strong>DECLINED</strong>';
            $recepient = $eventArray[0]['email'];
            $subject   = 'Appointment Updates | #'. str_pad($eventArray[0]['id'], 6, '0', STR_PAD_LEFT);
            $view      = './views/mail/appointment-updates.php';
            $content   = 'Your appointment on '. date('D, M d, Y',strtotime($eventArray[0]['apt_time'])).' has been '.$statusString.'<br>';
            $data      = array(
                'inquirer'  => $eventArray[0]['first_name'],
                'name'      => 'Peralta Clinic Admin',
                'content'   => base64_encode($content),
                'reason'    => $reason,
                'status'    => $eventArray[0]['status']
            );

            $replyToInquiry = $this->mail->mail()->send($recepient, $subject, $view, $data);
        }



        public function getAppointmentPerStatus($filter = null, $type = 1, $user=null){
            $sqlQuery = "SELECT * FROM tbl_appointment WHERE deleted_at IS NULL ORDER BY updated_at DESC";

            if($filter != null){
                $sqlQuery = "SELECT * FROM tbl_appointment WHERE deleted_at IS NULL AND status='$filter' ORDER BY updated_at DESC";
            }

            if($type == 0){
                $sqlQuery = "SELECT * FROM tbl_appointment WHERE deleted_at IS NOT NULL";
            }

            if($user != null){
                $sqlQuery = "SELECT * FROM tbl_appointment WHERE deleted_at IS NULL AND user_id='$user' ORDER BY id DESC";
            }

            $result = mysqli_query($this->connection, $sqlQuery);
            $appointmentArray = array();

            while ($row = mysqli_fetch_assoc($result)) {
                array_push($appointmentArray, $row);
            }

            // mysqli_free_result($result);
            // mysqli_close($this->connection);

            return $appointmentArray;
        }

        public function slotAvailable(){
            $schedule = [
                'start' => $this->date.' 08:00:00',
                'end'   => $this->date.' 17:00:00',
            ];

            $start = Carbon::instance(new DateTime($schedule['start']));
            $end = Carbon::instance(new DateTime($schedule['end']));
        
            $minSlotHours = $this->config[$_REQUEST['service']]['hours'];
            $minSlotMinutes = $this->config[$_REQUEST['service']]['mins'];
            $minInterval = CarbonInterval::hour($minSlotHours)->minutes($minSlotMinutes);
        
            $reqSlotHours = $this->config[$_REQUEST['service']]['hours'];
            $reqSlotMinutes = $this->config[$_REQUEST['service']]['mins'];
            $reqInterval = CarbonInterval::hour($reqSlotHours)->minutes($reqSlotMinutes);
            
            array_push(
                $this->appointment, 
                [
                    'apt_time' => $this->date.' 12:00:00',
                    'end_time' => $this->date.' 13:00:00'
                ]
            );

        
            foreach(new DatePeriod($start, $minInterval, $end) as $slot){
                $to = $slot->copy()->add($reqInterval);

                if($this->checkSlots($slot, $to, $this->appointment)){
                    array_push($this->slots, 
                        [
                            'timestamp' => $slot->format('H:i'),
                            'text'      => $slot->format('h:ia')
                        ]
                    );
                }
            }   

            header('Content-Type: application/json; charset=utf-8');
            echo json_encode($this->slots ?? []);
        }

        function checkSlots($from, $to, $events){
           foreach($events as $event){
                $eventStart = Carbon::instance(new DateTime($event['apt_time']));
                $eventEnd = Carbon::instance(new DateTime($event['end_time']));
                
                if($from->between($eventStart, $eventEnd) && $to->between($eventStart, $eventEnd)){
                    return false;
                }
            }

            return true;
        }

        function toPercentage($current, $base){
            return ($current / $base) * 100;
        }

        public function archiveAppointment(){
            $id = $_POST['id'] ?? null ;

            $result = mysqli_query($this->connection,"UPDATE tbl_appointment SET deleted_at=now() WHERE id = '$id' ")
                    or die ("failed to query update in the appointment table");

            return $this;        
        }

    }
?>