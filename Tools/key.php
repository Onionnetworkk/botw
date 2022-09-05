<?php

if (strpos($text, "+key") === 0){
if($user_id == "2059361810" or $user_id == "5606376539"){}
else{
    exit();
}



    $listak = substr($text, 5);
    $i     = explode("|", $listak);
    $plantype    = $i[0];
    $expiry  = $i[1];
    $expiry = $expiry * 86400;
    $now = time();
    $expiry = $now + $expiry;
    ///////////////////////[2nd Req is for VALIDATE]
    
    
    
    function RandomString($length = 4)
    {
        $characters       = '0123456789abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString     = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    
    
    if ($plantype == "P") {
        $plantype = "Premium User";
    }
    
    if ($plantype == "V") {
        $plantype = "Vip User";
    }
    $two = RandomString();
    $three = RandomString();
    $four = RandomString();
    $key = 'xtra-'.$two.''.$three.''.$four.'';
    // Check connection
    // Attempt create database query execution
    $SQL = "INSERT INTO nick (nick, status, plan, planexpiry) VALUES ('$key', 'ACTIVE','$plantype','$expiry')";
    $CONSULTA = mysqli_query(mysqlcon(),$SQL);
    if(mysqli_query(mysqlcon(), $SQL)){
        $result = "User Created Successfully";
    } else{
        $result = mysqli_error(mysqlcon());
    }
    
    $expiry = date('l jS \of F Y h:i:s A',$expiry);
    //=========================================================[Responses]
    $file = fopen("test.txt","w");
    echo fwrite($file,$result);
    fclose($file);
    
    
    //////////Bot Respo
    

        $content = ['chat_id' => $chat_id, 'text' => "<b>┏━━━━━━━━━━━━━━\n┣ 🍁𝑲𝒆𝒚 𝑮𝒆𝒏𝒆𝒓𝒂𝒕𝒆𝒅 🍁\n┗━━━━━━━━━━━━━━\n══════════════════════\n[ϟ] 𝑼𝒔𝒆 <code>.redeem</code> 𝒕𝒐 𝒓𝒆𝒅𝒆𝒆𝒎\n[ϟ] 𝑲𝒆𝒚: <code>$key</code>\n[ϟ] 𝑷𝒍𝒂𝒏 𝑬𝒙𝒑𝒊𝒓𝒚: $expiry\n[ϟ] 𝑷𝒍𝒂𝒏 𝑻𝒚𝒑𝒆: $plantype\n══════════════════════</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
    
    }