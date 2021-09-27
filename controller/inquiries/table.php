<?php
    require_once('./class/inquiry.php');
    
    $class = new Inquiry;
    $inquiries = $class->getInquiries();
    $data['data'] = [];

    foreach($inquiries as $inquiry){
        $json = base64_encode(json_encode($inquiry));
        $content = base64_decode($inquiry['content']);

        $array = [
            $inquiry['name'],
            strlen($content) > 60 ? substr($content,0,60)."..." : $content,
            $inquiry['created_at'],
            '<center><a data-inquiry="'.$json.'" href="javascript:void(0)" class="reply-btn text-indigo-600 rounded py-2 px-4 bg-indigo-100 hover:text-indigo-900 hover:bg-indigo-200 toggle-menu" data-toggle="#replyInquiryModal">Reply</a>
            <a href="#" class="text-red-600 rounded py-2 px-4 bg-red-100 hover:text-red-900 hover:bg-red-200">Archive</a></center>'
        ];

        array_push($data['data'], $array);
    }

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
?>