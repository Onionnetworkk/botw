<?php


if(strpos($text, '/broadcast') !== false){
    if($user_id == "2059361810" or $user_id == "5197853005"){}
    else{
        exit();
    }
    $text_to_send = trim(str_replace('/broadcast','',$text));
    $content = ['chat_id' => $chat_id, 'text' => "broadcast started", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
    $start_message=  SendMessage($content);
    $start_message_id = $start_message['result']['message_id'];
    $SQL = "SELECT * FROM `id` WHERE id";
    $query = mysqli_query(mysqlcon(), $SQL);
        $all_users = mysqli_fetch_all($query,MYSQLI_ASSOC);
        $sent = 0;
        foreach($all_users as $user){
            $user_idd = $user['id'];
            $sent += 1;
    //         $content = ['chat_id' => $user_id, 'text' => "hlo bros", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];

    // $start_message=  SendMessage($content);
            sleep(1);
            // $content = ['chat_id' => $user_idd, 'text' => "tesing", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            // SendMessage($content);
            $url = "https://api.telegram.org/bot5579015618:AAEnGaXH73gQ0wn7kjrdsskESUr8FmRgGSw/sendMessage?chat_id=".$user_idd."&text=".$text_to_send."&parse_mode=HTML";
         
        file_get_contents($url);
            $content = ['chat_id' => $chat_id, 'text' => "<b>Messages Sent : $sent\nSending to: $user_idd</b>", 'message_id' => $start_message_id, 'parse_mode' => 'html'];
        $m3  = EditMessageText($content);
        $m3i = $m3['result']['message_id'];
        }
        $content = ['chat_id' => $chat_id, 'text' => "finished $query '.$sent.' messages", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $start_message=  SendMessage($content);

    }



?>