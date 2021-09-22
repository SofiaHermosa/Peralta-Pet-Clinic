<?php 
    require './vendor/autoload.php';

    use Carbon\Carbon;
    use Carbon\CarbonInterval;
 

    class Appointment{
        public $appointment, $connection, $slots, $config, $date;
        
        public function __construct(){
            require $_SERVER['DOCUMENT_ROOT'] . '/controller/connection/conn.php';

            $this->connection = $conn;
            $this->slots      = [];
            $this->date       = new DateTime($_REQUEST['date'] ?? '');
            $this->date       = $this->date->format('Y-m-d');

            $config           = require_once('./config.php');
            $this->config     = $config['services'];
        } 

        public function getAppointment(){
            $json = array();
            $date = $_REQUEST['date'] ?? null;
            
            $sqlQuery = "SELECT apt_time, end_time FROM tbl_appointment WHERE apt_time LIKE '%$date' ORDER BY apt_id";

            if($date == null){
                $sqlQuery = "SELECT apt_time, end_time FROM tbl_appointment WHERE apt_time ORDER BY apt_id";
            }

            $result = mysqli_query($this->connection, $sqlQuery);
            $eventArray = array();

            while ($row = mysqli_fetch_array($result)) {
                array_push($eventArray, ['apt_time' => $row['apt_time'], 'end_time' => $row['end_time']]);
            }

            mysqli_free_result($result);
            mysqli_close($this->connection);

            $this->appointment = $eventArray;

            return $this;
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
            echo json_encode($this->slots);
        }

        function checkSlots($from, $to, $events){
            foreach($events as $event){
                $eventStart = Carbon::instance(new DateTime($event['apt_time']));
                $eventEnd = Carbon::instance(new DateTime($event['end_time']));

                if($from->between($eventStart, $eventEnd) || $to->between($eventStart, $eventEnd) || ($eventStart->between($from, $to) && $eventEnd->between($from, $to))){
                    return false;
                }

                return true;
            }
        }

    }
?>