<?php
    require_once('./class/inquiry.php');
    
    $class = new Inquiry;
    $inquiries = $class->getInquiries();
    $data['data'] = [];

    foreach($inquiries as $inquiry){
        $json = base64_encode(json_encode($inquiry));
        $content = base64_decode($inquiry['content']);

        $array = [
            $inquiry['name']."<span class='block text-md text-gray-400'>".$inquiry['email']."</span>",
            strlen($content) > 60 ? substr($content,0,60)."..." : $content,
            $inquiry['created_at'],
            '<center><a data-inquiry="'.$json.'" href="javascript:void(0)" class="reply-btn text-white rounded py-2 px-4 bg-blue-500 hover:bg-blue-400 toggle-menu" data-toggle="#replyInquiryModal">Reply</a>
            <a href="javascript:void(0)" data-id="'.$inquiry['id'].'" data-type="Inquiry" data-url="/archive/inquiry" class="text-white rounded py-2 px-4 bg-red-500 hover:bg-red-400 archive">Archive</a></center>'
        ];

        array_push($data['data'], $array);
    }

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
?>