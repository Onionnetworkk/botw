<?php

/* Setting the timezone. */
date_default_timezone_set("Asia/Kolkata");

/* Defining the bot token. */
define('bot_token', '5685718759:AAFzTmKJtKZ2RoMm9ltUlS6Ht1uO6pMlzZE');
define('msgtext', $text);

$bot_username = "BossNTBot";

/* It's setting the date and time. */
$fecha = date('d-m-Y h:i:s A');

/* It's just a variable that contains the name of the owner of the bot. */
$propietario = "BossNetworkk";

/* Getting the data from the POST request sent by Telegram. */
// $update =  json_decode(file_get_contents('php://input'), true);
$update = file_get_contents('php://input');
$update = json_decode($update,true);

//basic
$text       = $update["message"]["text"];
// $text       = $update->message->text;
$photo      = $update["message"]["photo"];
$date       = $update["message"]["date"];
$chat_id    = $update["message"]["chat"]["id"];
$msg_id     = $update["message"]["message_id"];

//Chat
$cfname     = $update['message']['chat']['first_name'];
$cid        = $update["message"]["chat"]["id"];
$clast_name = $update['message']['chat']['last_name'];
$ctype      = $update["message"]["chat"]["type"];
$ctitle     = $update['message']['chat']['title'];

//user info
$ufname     = $update['message']['from']['first_name'];
$uname      = $update['message']['from']['last_name'];
$username   = $update['message']['from']['username'];
$user_id    = $update['message']['from']['id'];

//reply info
$rtext      = $update['message']['reply_to_message']['text'];

//callback
$data              = $update['callback_query']['data'];
$callbackid        = $update['callback_query']['id'];
$callbackfrom      = $update['callback_query']['from']['id'];
$callbackfname     = $update['callback_query']['from']['first_name'];
$callbacklname     = $update['callback_query']['from']['last_name'];
$callbackusername  = $update['callback_query']['from']['username'];
$callbackchatid    = $update['callback_query']['message']['chat']['id'];
$callbackuserid    = $update['callback_query']['message']['reply_to_message']['from']['id'];
$callbackmessageid = $update['callback_query']['message']['message_id'];