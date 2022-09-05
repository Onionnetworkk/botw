<?php
if(strpos($text,'/updategate')===0){
    $listak = substr($text, 5);
    $i     = explode("|", $listak);

    $gatecmd = $i[1];
    $gatestatus = $i[2];
    if(empty ($gatecmd)){
        $content = ['chat_id' => $chat_id, 'text' => "format is |cmd|off/on", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        SendMessage($content);
        exit();
    }

$SQL = "UPDATE `gateway` SET `status`='$gatestatus' WHERE `gatecmd` = '$gatecmd'";
$result = mysqli_query(mysqlcon(), $SQL);
$content = ['chat_id' => $chat_id, 'text' => "gate updated", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        SendMessage($content);
        exit();
}