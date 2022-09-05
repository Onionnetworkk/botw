<?php
if(strpos($text,'/gate')===0){
    $listak = substr($text, 5);
    $i     = explode("|", $listak);
    $gatename = $i[1];
    $gatecmd = $i[2];
    $gatestatus = $i[3];
    if(empty ($gatename)){
        $content = ['chat_id' => $chat_id, 'text' => "format is |name|cmd|off/on", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        SendMessage($content);
        exit();
    }
    $sql = "SELECT gatecmd FROM gateway WHERE gatecmd='$gatecmd'";
    $result = mysqli_query(mysqlcon(), $sql);
    
    $json_array = [];
    
    
    while ($row = mysqli_fetch_assoc($result)) {
      $json_array[] = $row;
    }
    
    $final2 = json_encode($json_array);
    
    
    $file = fopen("test.txt","w");
    echo fwrite($file,$message_id);
    fclose($file);
    
    $gatec = anicap($final2, '"gatecmd":"','"');
    mysqli_close(mysqlcon());
if($gatec == $gatecmd){
    $content = ['chat_id' => $chat_id, 'text' => "gate already added", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        SendMessage($content);
        exit();
}else{
$SQL = "INSERT INTO `gateway`(`gatename`, `gatecmd`, `status`) VALUES ('$gatename','$gatecmd','$gatestatus')";
$result = mysqli_query(mysqlcon(), $SQL);
$content = ['chat_id' => $chat_id, 'text' => "gate added", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        SendMessage($content);
        exit();
}}