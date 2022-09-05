<?php
if(strpos($text,'/crd')===0){

$listak = substr($text, 5);
    $i     = explode("|", $listak);
    $user    = $i[1];
    $credits  = $i[2];
    $sql = "SELECT creditos FROM administrar WHERE id='$user'";
    $result = mysqli_query(mysqlcon(), $sql);
    
    $json_array = [];
    
    
    while ($row = mysqli_fetch_assoc($result)) {
      $json_array[] = $row;
    }
    
    $final2 = json_encode($json_array);
    
    
    $file = fopen("test.txt","w");
    echo fwrite($file,$message_id);
    fclose($file);
    
    $creditss = anicap($final2, '"creditos":"','"');
    mysqli_close(mysqlcon());
    $credits = $creditss + $credits;
if(!empty($user)){
$SQL = "UPDATE `administrar` SET `creditos`='$credits' WHERE `id` = '$user'";

mysqli_query(mysqlcon(), $SQL);
$content = ['chat_id' => $chat_id, 'text' => "credits updated to $user whare credits = $credits ", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
SendMessage($content);
exit();
}}