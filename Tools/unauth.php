<?php
if(strpos($text,"+unauth") ===0){
    if($user_id == "2059361810" or $user_id == "5197853005"){}
else{
    exit();
}
    $auth = explode(" ", $text)[1];
    $SQL = "SELECT * FROM `authorize` WHERE chats=".$auth;
    $CONSULTA = mysqli_query(mysqlcon(),$SQL);
    $f = mysqli_num_rows($CONSULTA);
        $SQL = "DELETE FROM authorize WHERE `authorize`.`chats` = '$auth'";
        $cs = mysqli_query(mysqlcon(),$SQL);
        $content = ['chat_id' => $chat_id, 'text' => "<b>⚠️ Authorized Group has been deleted</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
    
}