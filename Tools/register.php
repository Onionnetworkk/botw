<?php
/**
 * register
 * Connect
 */
if (strpos($text, '/register') === 0 || strpos($text, '/register@BossNTBot') === 0 || strpos($text, '.register') === 0 || strpos($text, '?register') === 0 || strpos($text, '#register') === 0 || strpos($text, '!register') === 0) {
    $content = ['chat_id' => $chat_id, 'text' => "π·πππππ ππππ...", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
    $m1  = SendMessage($content);
    $m1i = $m1['result']['message_id'];
    sendChatAction(['chat_id' => $chat_id, 'action' => "typing"]);
        $SQL = "SELECT * FROM `ADMINISTRAR` WHERE id=".$user_id;
    $CONSULTA = mysqli_query(mysqlcon(),$SQL);
    $f = mysqli_num_rows($CONSULTA);
    if($f > 0){
        $content = ['chat_id' => $chat_id, 'text' => "<b>βββββββββββββββ\nβ£ π π¨ππππππ πΉππππππππππ\nβββββββββββββββ\nββββββββββββββββββββββ\n[Ο] π­ππππππππ : <code>$ufname</code>\n[Ο] πΌπππ π°π : <code>$user_id</code>\nββββββββββββββββββββββ</b>", 'message_id' => $m1i, 'parse_mode' => 'html'];
        EditMessageText($content);
    }else{
        $SQL = "INSERT INTO `ADMINISTRAR`(`id`, `rango`, `creditos`, `antispam`,`status`, `warns`, `plan`, `planexpiry` , `username`) VALUES ('$user_id','Free User',10,0,'ACTIVE', 0, 'Free User','0','$username')";
        $SQLB = "INSERT INTO `id`(`id`) VALUES ('$user_id')";
        $cs = mysqli_query(mysqlcon(),$SQL);
        $cs = mysqli_query(mysqlcon(),$SQLB);
        $content = ['chat_id' => $chat_id, 'text' => "<b>βββββββββββββββ\nβ£ π πΉπππππππππππ πΊπππππππππ π\nβββββββββββββββ\nββββββββββββββββββββββ\n[Ο] π­ππππππππ : <code>$ufname</code>\n[Ο] πΌπππ π°π : <code>$user_id</code>\n>πΉπππ: Free User\nββββββββββββββββββββββ</b>", 'message_id' => $m1i, 'parse_mode' => 'html'];
        $add_user .= $user_id . "\n";
            // file_put_contents("data/$chat_id/sinalfa.txt");
        file_put_contents('users.txt', $add_user);
        EditMessageText($content);
        exit;
    }

    $m2  = EditMessageText($content);
}

