<?php

if (strpos($text, '/ip') === 0 || strpos($text, '/ip') === 0 || strpos($text, ".ip") === 0 || strpos($text, "?ip") === 0 || strpos($text, "#ip") === 0) {
    $ip = explode(" ", $text)[1];
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
    $content = ['chat_id' => $chat_id, 'text' => "<b>𝒀𝒐𝒖𝒓 𝒔𝒖𝒃𝒔𝒄𝒓𝒊𝒑𝒕𝒊𝒐𝒏 𝒑𝒍𝒂𝒏 𝒊𝒔 𝒆𝒙𝒑𝒊𝒓𝒆𝒅, 𝑷𝒍𝒆𝒂𝒔𝒆 𝒄𝒐𝒏𝒕𝒂𝒄𝒕 @AniDec4ypt3d 𝒕𝒐 𝒓𝒆𝒏𝒆𝒘</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
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
        $content = ['chat_id' => $chat_id, 'text' => "𝑻𝒉𝒊𝒔 𝒈𝒓𝒐𝒖𝒑 𝒊𝒔𝒏'𝒕 𝒂𝒖𝒕𝒉𝒐𝒓𝒊𝒛𝒆𝒅 𝒕𝒐 𝒖𝒔𝒆 𝒎𝒆, 𝒄𝒐𝒏𝒕𝒂𝒄𝒕 @AniDec4ypt3d", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
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
        $content = ['chat_id' => $chat_id, 'text' => "𝒀𝒐𝒖 𝒂𝒓𝒆 𝒏𝒐𝒕 𝒂𝒖𝒕𝒉𝒐𝒓𝒊𝒛𝒆𝒅 𝒕𝒐 𝒖𝒔𝒆 𝒎𝒆 𝒊𝒏 𝒑𝒓𝒊𝒗𝒂𝒕𝒆 𝒑𝒖𝒓𝒄𝒉𝒂𝒔𝒆 𝒑𝒓𝒆𝒎𝒊𝒖𝒎 𝒇𝒓𝒐𝒎 @AniDec4ypt3d", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
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
    if (empty($ip)) {
        $content = ['chat_id' => $chat_id, 'text' => "𝑰𝒑 𝑳𝒐𝒐𝒌𝒖𝒑\n𝑭𝒐𝒓𝒎𝒂𝒕: <code>/ip " . rand(1, 255) . '.' . rand(1, 255) . '.' . rand(1, 255) . '.' . rand(1, 255) . '</code>', 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
    }elseif (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_IPV6)) {
        $content = ['chat_id' => $chat_id, 'text' => "❌ 𝑷𝒍𝒆𝒂𝒔𝒆 𝒑𝒓𝒐𝒗𝒊𝒅𝒆 𝒂 𝒗𝒂𝒍𝒊𝒅 𝑰𝑷 𝒂𝒅𝒅𝒓𝒆𝒔𝒔", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m2  = SendMessage($content);
    }else{
        $content = ['chat_id' => $chat_id, 'text' => "𝑷𝒍𝒆𝒂𝒔𝒆 𝒘𝒂𝒊𝒕...", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        $m1i = $m1['result']['message_id'];
        
        sendChatAction(['chat_id' => $chat_id, 'action' => "typing"]);

        $r1 = sendAPIRequest("https://slostapis.000webhostapp.com/Scamalytics/?ip=$ip", [], false);
        if(json_decode($r1)->ok != false){
            $isp     = json_decode($r1)->isp;
            $country = json_decode($r1)->country->name;
            $lan     = json_decode($r1)->country->lat;
            $lon     = json_decode($r1)->country->lon;
            $content = ['chat_id' => $chat_id, 'text' => "<b>┏━━━━━━━━━━━━━━\n┣ 🍁 𝑰𝒑 𝒍𝒐𝒐𝒌𝒖𝒑 🍁\n┗━━━━━━━━━━━━━━\n══════════════════════\nϟ 𝑰𝒑 : <code>$ip</code>\nϟ 𝑳𝒂𝒕𝒊𝒕𝒖𝒅𝒆 : <code>$lan</code>\nϟ 𝑳𝒐𝒏𝒈𝒊𝒕𝒖𝒅𝒆 : <code>$lon</code>\nϟ 𝑰𝑺𝑷 : <code>$isp</code>\nϟ 𝑪𝒐𝒖𝒏𝒕𝒓𝒚 : <code>$country</code>\n>_𝑩𝒚: @$username\n══════════════════════</b>", 'message_id' => $m1i, 'parse_mode' => 'HTML'];
            $m2  = EditMessageText($content);
        }else{
            $content = ['chat_id' => $chat_id, 'text' => "𝑬𝒓𝒓𝒐𝒓 𝒄𝒐𝒏𝒕𝒂𝒄𝒕 𝒂𝒅𝒎𝒊𝒏𝒊𝒔𝒕𝒓𝒂𝒕𝒐𝒓 @$propietario", 'message_id' => $m1i, 'parse_mode' => 'HTML'];
            $m2  = EditMessageText($content);
        }
    }

}


