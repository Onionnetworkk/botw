<?php

if(strpos($text,"/myinfo") === 0 || strpos($text,'/myinfo@YazawaChkBot') === 0){
    $sql = "SELECT planexpiry FROM administrar WHERE id='$user_id'";
    $result = mysqli_query(mysqlcon(), $sql);
    
    $json_array = [];
    
    
    while ($row = mysqli_fetch_assoc($result)) {
      $json_array[] = $row;
    }
    
    $final2 = json_encode($json_array);
    
    
    $file = fopen("test.txt","w");
    echo fwrite($file,$message_id);
    fclose($file);
    
    $planexpiry = anicap($final2, '"planexpiry":"','"');
    mysqli_close(mysqlcon());
    
    
    $sql = "SELECT plan FROM administrar WHERE id='$user_id'";
    $result = mysqli_query(mysqlcon(), $sql);
    
    $json_array = [];
    
    
    while ($row = mysqli_fetch_assoc($result)) {
      $json_array[] = $row;
    }
    
    $final2 = json_encode($json_array);
    
    $plan = anicap($final2, '"plan":"','"');
    mysqli_close(mysqlcon());
    
    $now = time();
      if ($planexpiry < $now && $planexpiry == 0) {
    }
elseif ($planexpiry < $now && $plan != "Free User") {
    
    // Check connection
    // Attempt create database query execution
    $sql = "UPDATE `administrar` SET `plan` = 'Free User' WHERE `administrar`.`id` = '$user_id';";
    $result = mysqli_query(mysqlcon(), $sql);
    // Close connection
    mysqli_close(mysqlcon());
    
    
    $sql = "UPDATE `administrar` SET `planexpiry` = '0' WHERE `administrar`.`id` = '$user_id';";
    $result = mysqli_query(mysqlcon(), $sql);
    // Close connection
    mysqli_close(mysqlcon());
    $content = ['chat_id' => $chat_id, 'text' => "<b>𝒀𝒐𝒖𝒓 𝒔𝒖𝒃𝒔𝒄𝒓𝒊𝒑𝒕𝒊𝒐𝒏 𝒑𝒍𝒂𝒏 𝒊𝒔 𝒆𝒙𝒑𝒊𝒓𝒆𝒅, 𝑷𝒍𝒆𝒂𝒔𝒆 𝒄𝒐𝒏𝒕𝒂𝒄𝒕 @BossNetworkk 𝒕𝒐 𝒓𝒆𝒏𝒆𝒘</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            $m1  = SendMessage($content);
            exit();
    }
    $SQL = "SELECT * FROM `authorize` WHERE chats=".$chat_id;
    $CONSULTA = mysqli_query(mysqlcon(),$SQL);
    $f = mysqli_num_rows($CONSULTA);
    $json_array = [];


    while ($row = mysqli_fetch_assoc($CONSULTA)) {
    $json_array[] = $row;
    }

    $final2 = json_encode($json_array);

    $chats =anicap($final2, '"chats":"','"');
    if($chats != $chat_id and $ctype == "supergroup"){
        $content = ['chat_id' => $chat_id, 'text' => "𝑻𝒉𝒊𝒔 𝒈𝒓𝒐𝒖𝒑 𝒊𝒔𝒏'𝒕 𝒂𝒖𝒕𝒉𝒐𝒓𝒊𝒛𝒆𝒅 𝒕𝒐 𝒖𝒔𝒆 𝒎𝒆, 𝒄𝒐𝒏𝒕𝒂𝒄𝒕 @BossNetworkk", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        exit();
    }
    else{
        
       
    }
    $SQL = "SELECT * FROM `ADMINISTRAR` WHERE id=".$user_id;
    $CONSULTA = mysqli_query(mysqlcon(),$SQL);
    $json_array = [];


    while ($row = mysqli_fetch_assoc($CONSULTA)) {
    $json_array[] = $row;
    }

    $final2 = json_encode($json_array);

    $plan =anicap($final2, '"plan":"','"');
    mysqli_close(mysqlcon());
    $SQL = "SELECT * FROM `ADMINISTRAR` WHERE plan=".$plan;
    if(empty($plan)){
        $content = ['chat_id' => $chat_id, 'text' => "𝑳𝒐𝒐𝒌𝒔 𝑳𝒊𝒌𝒆 𝒀𝒐𝒖 𝒉𝒂𝒗𝒆𝒏'𝒕 𝒓𝒆𝒈𝒊𝒔𝒕𝒆𝒓𝒆𝒅 𝒚𝒐𝒖𝒓 𝒔𝒆𝒍𝒇, 𝒅𝒐 /register 𝒕𝒐 𝒄𝒐𝒏𝒕𝒊𝒏𝒖𝒆", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            $m1  = SendMessage($content);
            exit();
    }else{
        
    }
    if($plan == "Free User" and $ctype == "private"){
        $content = ['chat_id' => $chat_id, 'text' => "𝒀𝒐𝒖 𝒂𝒓𝒆 𝒏𝒐𝒕 𝒂𝒖𝒕𝒉𝒐𝒓𝒊𝒛𝒆𝒅 𝒕𝒐 𝒖𝒔𝒆 𝒎𝒆 𝒊𝒏 𝒑𝒓𝒊𝒗𝒂𝒕𝒆 𝒑𝒖𝒓𝒄𝒉𝒂𝒔𝒆 𝒑𝒓𝒆𝒎𝒊𝒖𝒎 𝒇𝒓𝒐𝒎 @BossNetworkk", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            $m1  = SendMessage($content);
            exit();
    }else{
        
    }
    $SQL = "SELECT * FROM `ADMINISTRAR` WHERE id=".$user_id;
    $CONSULTA = mysqli_query(mysqlcon(),$SQL);
    $f = mysqli_num_rows($CONSULTA);

    if($f > 0)
    {} else{
        $content = ['chat_id' => $chat_id, 'text' => "𝑳𝒐𝒐𝒌𝒔 𝑳𝒊𝒌𝒆 𝒀𝒐𝒖 𝒉𝒂𝒗𝒆𝒏'𝒕 𝒓𝒆𝒈𝒊𝒔𝒕𝒆𝒓𝒆𝒅 𝒚𝒐𝒖𝒓 𝒔𝒆𝒍𝒇, 𝒅𝒐 /register 𝒕𝒐 𝒄𝒐𝒏𝒕𝒊𝒏𝒖𝒆", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        exit;
    }
    if($planexpiry == "0"){
        $expiry = "";
    }else{
        $expiry = date('l jS \of F Y h:i:s A',$planexpiry);
        $expiry = "\n[ϟ] 𝑷𝒍𝒂𝒏 𝑬𝒙𝒑𝒊𝒓𝒚: $expiry";
    }
    if(empty ($username)){
        $uusername = "Please set a username";
    }else{
        $uusername = "@$username";
    }
    $content = ['chat_id' => $chat_id, 'text' => "<b>┏━━━━━━━━━━━━━━\n┣ 🍁 𝑨𝒄𝒄𝒐𝒖𝒏𝒕 𝑫𝒆𝒕𝒂𝒊𝒍𝒔 🍁\n┗━━━━━━━━━━━━━━\n══════════════════════\n[ϟ] 𝑭𝒊𝒓𝒔𝒕𝒏𝒂𝒎𝒆 : <code>$ufname</code>\n[ϟ] 𝑼𝒔𝒆𝒓 𝑰𝒅 : <code>$user_id</code>\n[ϟ] 𝑼𝒔𝒆𝒓𝒏𝒂𝒎𝒆: $uusername\n[ϟ] 𝑹𝒐𝒍𝒆 : $plan $expiry\n══════════════════════</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
    $m1  = SendMessage($content);
}



?>