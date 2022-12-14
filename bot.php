<?php

require_once 'requires.php';


/* This is the code that is executed when the user sends the command `/start` or `.start` or `?start` or `#start` or `/start@` to the bot. */
if ($text == '/start' || $text == ".start" || $text == "?start" || $text == "#start" || $text == "/start@YazawaChkBot") {
    $content = ['chat_id' => $chat_id, 'text' => "πΎππππππ! @$username", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
    $m1  = SendMessage($content);
    $m1i = $m1['result']['message_id'];

    $content = ['chat_id' => $chat_id, 'text' => "πΊπππππππ πππ β¨", 'message_id' => $m1i, 'parse_mode' => 'HTML'];
    $m2  = EditMessageText($content);
    $m2i = $m2['result']['message_id'];

    
    $keyboard = json_encode([
        "inline_keyboard" => [
            [
                ["text" => "Offical Channel", "url" => "https://t.me/KiberAzz"]
            ]
        ]
    ]);
# '
    $content = ['chat_id' => $chat_id, 'text' => "π―ππ @$username π\n>_π»πππ <code>/cmds</code> ππ ππππ ππ ππππππππ!", 'message_id' => $m2i, 'reply_markup' => $keyboard, 'parse_mode' => 'HTML'];
    $m3 = EditMessageText($content);
}

/* This is the code that is executed when the user sends the command `/cmds` or `.cmds` or `?cmds` or `#cmds` or `/cmds@` to the bot. */
if ($text == '/cmds' || $text == ".cmds" || $text == "?cmds" || $text == "#cmds" || $text == "/cmds@bossntbot") {
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
        $content = ['chat_id' => $chat_id, 'text' => "π»πππ πππππ πππ'π ππππππππππ ππ πππ ππ, πππππππ @BossNetworkk", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
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
        $content = ['chat_id' => $chat_id, 'text' => "π³ππππ π³πππ πππ πππππ'π ππππππππππ ππππ ππππ, ππ /register ππ ππππππππ", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            $m1  = SendMessage($content);
            exit();
    }else{
        
    }
    if($plan == "Free User" and $ctype == "private"){
        $content = ['chat_id' => $chat_id, 'text' => "πππ πππ πππ ππππππππππ ππ πππ ππ ππ πππππππ ππππππππ πππππππ ππππ @BossNetworkk", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            $m1  = SendMessage($content);
            exit();
    }else{
        
    }
    $SQL = "SELECT * FROM `ADMINISTRAR` WHERE id=".$user_id;
    $CONSULTA = mysqli_query(mysqlcon(),$SQL);
    $f = mysqli_num_rows($CONSULTA);

    if($f > 0)
    {} else{
        $content = ['chat_id' => $chat_id, 'text' => "π³ππππ π³πππ πππ πππππ'π ππππππππππ ππππ ππππ, ππ /register ππ ππππππππ", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        exit;
    }
    $keyboard = json_encode([
        "inline_keyboard" => [
            [
                ["text" => "Gates", "callback_data" => "gates"],
                ["text" => "Tools", "callback_data" => "tools"],
                ["text" => "Info", "callback_data" => "info"]
            ],
            [
                ["text" => "Finalize", "callback_data" => "exit"]
            ],
            [
                ["text" => "Free Access", "url" => "http://t.me/KiberAzz"]
            ]
        ]
    ]);

    $content = ['chat_id' => $chat_id, 'text' => ">_π΄π πͺπππππππ", 'reply_markup' => $keyboard, 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
    $m1 = SendMessage($content);
}




/* This is the code that is executed when the user clicks on the "Return" button. */
if ($data == "home" || $data == "return") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "Access denied opens another session to use it β", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
        $keyboard = json_encode([
            "inline_keyboard" => [
                [
                    ["text" => "Gates", "callback_data" => "gates"],
                    ["text" => "Tools", "callback_data" => "tools"],
                    ["text" => "Info", "callback_data" => "info"]
                ],
                [
                    ["text" => "Finalize", "callback_data" => "exit"]
                ],
                [
                    ["text" => "Channel", "url" => "http://t.me/KiberAzz"]
                ]
            ]
        ]);

        $content = ['chat_id' => $callbackchatid, 'text' => ">_π΄π πͺπππππππ", 'message_id' => $callbackmessageid, 'reply_markup' => $keyboard, 'parse_mode' => 'HTML'];
        EditMessageText($content);
    }
}


/* This is the code that is executed when the user clicks on the "Gates" button. */
if ($data == "gates") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "Access denied opens another session to use it β", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
        $keyboard = json_encode([
            "inline_keyboard" => [
                [
                    ["text" => "Gates Charge", "callback_data" => "charge"],
                    ["text" => "Gates Auth", "callback_data" => "auth"],
                ],
                [
                    ["text" => "Gates Ccn", "callback_data" => "ccn"],
                    ["text" => "3D Check", "callback_data" => "3d"],
                    ["text" => "Return", "callback_data" => "return"]
                ]
            ]
        ]);

        $content = ['chat_id' => $callbackchatid, 'text' => ">_π΄π π¨ππππππππ π?πππππππ", 'message_id' => $callbackmessageid, 'reply_markup' => $keyboard, 'parse_mode' => 'HTML'];
        EditMessageText($content);
    }
}

/* This is the code that is executed when the user clicks on the "Gates Charge" button. */
if ($data == "charge") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "Access denied opens another session to use it β", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
        $keyboard = json_encode([
            "inline_keyboard" => [
                [
                    ["text" => "Gates Auth", "callback_data" => "auth"],
                    ["text" => "3D Check", "callback_data" => "3d"],
                    ["text" => "Return", "callback_data" => "return"],
                ]
            ]
        ]);

        $content = ['chat_id' => $callbackchatid, 'text' => $charge, 'message_id' => $callbackmessageid, 'reply_markup' => $keyboard, 'parse_mode' => 'HTML'];
        EditMessageText($content);
    }
}

/* This is the code that is executed when the user clicks on the "Gates Auth" button. */
if ($data == "auth") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "Access denied opens another session to use it β", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
        $keyboard = json_encode([
            "inline_keyboard" => [
                [
                    ["text" => "Gates Charge", "callback_data" => "charge"],
                    ["text" => "3D Check", "callback_data" => "3d"],
                    ["text" => "Return", "callback_data" => "return"],
                ]
            ]
        ]);

        $content = ['chat_id' => $callbackchatid, 'text' => $auth, 'message_id' => $callbackmessageid, 'reply_markup' => $keyboard, 'parse_mode' => 'HTML'];
        EditMessageText($content);
    }
}


/* This is the code that is executed when the user clicks on the "3D Check" button. */
if ($data == "3d") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "Access denied opens another session to use it β", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
        $keyboard = json_encode([
            "inline_keyboard" => [
                [
                    ["text" => "Gates Auth", "callback_data" => "auth"],
                    ["text" => "Gates Charge", "callback_data" => "charge"],
                    ["text" => "Return", "callback_data" => "return"],
                ]
            ]
        ]);

        $content = [
            'chat_id' => $callbackchatid,
            'text' => $gates3d,
            'message_id' => $callbackmessageid,
            'reply_markup' => $keyboard,
            'parse_mode' => 'HTML'
        ];
        EditMessageText($content);
    }
}


/* This is the code that is executed when the user clicks on the "Tools" button. */
if ($data == "tools") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "Access denied opens another session to use it β", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
        $keyboard = json_encode([
            "inline_keyboard" => [
                [
                    ["text" => "Return", "callback_data" => "return"]
                ]
            ]
        ]);

        $content = [
            'chat_id' => $callbackchatid,
            'text' => $herramientas,
            'message_id' => $callbackmessageid,
            'reply_markup' => $keyboard,
            'parse_mode' => 'HTML'
        ];
        EditMessageText($content);
    }
}


/* The code that is executed when the user clicks on the "Info" button. */
if ($data == "info") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "Access denied opens another session to use it β", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
        $keyboard = json_encode([
            "inline_keyboard" => [
                [
                    ["text" => "Return", "callback_data" => "return"]
                ]
            ]
        ]);

        $content = [
            'chat_id' => $callbackchatid,
            'text' => $informacion,
            'message_id' => $callbackmessageid,
            'reply_markup' => $keyboard,
            'parse_mode' => 'HTML'
        ];
        EditMessageText($content);
    }
}

/* This is the code that is executed when the user clicks on the "Finalize" button. */
if ($data == "exit") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "Access denied opens another session to use it β", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
        $content = [
            'chat_id' => $callbackchatid,
            'text' => "π?ππππππ! <a href='t.me/$callbackusername'>$callbackfname</a>.",
            'message_id' => $callbackmessageid,
            'reply_markup' => $keyboard,
            'disable_web_page_preview' => true,
            'parse_mode' => 'HTML'
        ];
        EditMessageText($content);
    }
}
$mongo = new database('mongodb+srv://eminyusif:EminYusif@cluster0.zg6mxvs.mongodb.net/?retryWrites=true&w=majority');

$new_user_register = [
    '_id' => $user_id,
    'username' => $username,
    'status' => 'F',
    'warns' => 0,
    'saveccs' => 'off',
    'antispam' => 30,
    'role' => 'Free User',
    'planexpiry' => null,
    'credits' => null,];

$find = ['_id' => $user_id];
$user_db_details  = $mongo->find('main', $find, $new_user_register);
