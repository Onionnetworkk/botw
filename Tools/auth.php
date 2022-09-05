<?php
if(strpos($text,"+auth") ===0){
    if($user_id == "2059361810" or $user_id == "5606376539"){}
else{
    exit();
}
    $auth = explode(" ", $text)[1];
    $SQL = "SELECT * FROM `authorize` WHERE chats=".$auth;
    $CONSULTA = mysqli_query(mysqlcon(),$SQL);
    $f = mysqli_num_rows($CONSULTA);
    if($f > 0){
        $content = ['chat_id' => $chat_id, 'text' => "Group already Authorize ", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
    }else{
        $SQL = "INSERT INTO `authorize`(`chats`) VALUES ('$auth')";
        $cs = mysqli_query(mysqlcon(),$SQL);
        $content = ['chat_id' => $chat_id, 'text' => "Group Authorize successful", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
    }
}