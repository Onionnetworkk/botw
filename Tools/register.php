<?php
/**
 * register
 * Connect
 */
if (strpos($text, '/register') === 0 || strpos($text, '/register@BossNTBot') === 0 || strpos($text, '.register') === 0 || strpos($text, '?register') === 0 || strpos($text, '#register') === 0 || strpos($text, '!register') === 0) {
    $content = ['chat_id' => $chat_id, 'text' => "𝑷𝒍𝒆𝒂𝒔𝒆 𝒘𝒂𝒊𝒕...", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
    $m1  = SendMessage($content);
    $m1i = $m1['result']['message_id'];
    sendChatAction(['chat_id' => $chat_id, 'action' => "typing"]);
        $SQL = "SELECT * FROM `ADMINISTRAR` WHERE id=".$user_id;
    $CONSULTA = mysqli_query(mysqlcon(),$SQL);
    $f = mysqli_num_rows($CONSULTA);
    if($f > 0){
        $content = ['chat_id' => $chat_id, 'text' => "<b>┏━━━━━━━━━━━━━━\n┣ 🍁 𝑨𝒍𝒓𝒆𝒂𝒅𝒚 𝑹𝒆𝒈𝒊𝒔𝒕𝒆𝒓𝒆𝒅🍁\n┗━━━━━━━━━━━━━━\n══════════════════════\n[ϟ] 𝑭𝒊𝒓𝒔𝒕𝒏𝒂𝒎𝒆 : <code>$ufname</code>\n[ϟ] 𝑼𝒔𝒆𝒓 𝑰𝒅 : <code>$user_id</code>\n══════════════════════</b>", 'message_id' => $m1i, 'parse_mode' => 'html'];
        EditMessageText($content);
    }else{
        $SQL = "INSERT INTO `ADMINISTRAR`(`id`, `rango`, `creditos`, `antispam`,`status`, `warns`, `plan`, `planexpiry` , `username`) VALUES ('$user_id','Free User',10,0,'ACTIVE', 0, 'Free User','0','$username')";
        $SQLB = "INSERT INTO `id`(`id`) VALUES ('$user_id')";
        $cs = mysqli_query(mysqlcon(),$SQL);
        $cs = mysqli_query(mysqlcon(),$SQLB);
        $content = ['chat_id' => $chat_id, 'text' => "<b>┏━━━━━━━━━━━━━━\n┣ 🍁 𝑹𝒆𝒈𝒊𝒔𝒕𝒓𝒂𝒕𝒊𝒐𝒏 𝑺𝒖𝒄𝒄𝒆𝒔𝒔𝒇𝒖𝒍 🍁\n┗━━━━━━━━━━━━━━\n══════════════════════\n[ϟ] 𝑭𝒊𝒓𝒔𝒕𝒏𝒂𝒎𝒆 : <code>$ufname</code>\n[ϟ] 𝑼𝒔𝒆𝒓 𝑰𝒅 : <code>$user_id</code>\n>𝑹𝒐𝒍𝒆: Free User\n══════════════════════</b>", 'message_id' => $m1i, 'parse_mode' => 'html'];
        $add_user .= $user_id . "\n";
            // file_put_contents("data/$chat_id/sinalfa.txt");
        file_put_contents('users.txt', $add_user);
        EditMessageText($content);
        exit;
    }

    $m2  = EditMessageText($content);
}

