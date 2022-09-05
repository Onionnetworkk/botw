<?php
if(strpos($text,'/access')===0 || strpos ($text,'!access')===0 ||  strpos($text,'.access') === 0){
    $msg = "<b>
══════════════════════
[ϟ] Premium Access Prices
══════════════════════
28 Days — 10$
56 Days — 18$
84 Days — 26$
══════════════════════
[ϟ] Custom Days also available contact @BossNetworkk or Admins of bot for more
[ϟ] Payment methods: BTC , USDT  , FLIPKART GC
══════════════════════</b>";
$content = ['chat_id' => $chat_id, 'text' => "$msg", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
    $start_message=  SendMessage($content);
}