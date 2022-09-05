<?php

if (strpos($text, "/brod")===0 or strpos($text, "!brod")===0 or strpos($text, ".brod")===0){
    if ($chat_id != '5606376539'){
                  exit();
          }
      file_put_contents("ali.txt","none");

  $lista = urlencode(substr($text, 6));
  $content = ['chat_id' => $chat_id, 'text' => "broadcast", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
  $m1  = SendMessage($content);
   $all_member = fopen( "user.txt", "r");
    while( !feof( $all_member)) {
      $user = fgets( $all_member);
      $url = "https://api.telegram.org/bot5685718759:AAFzTmKJtKZ2RoMm9ltUlS6Ht1uO6pMlzZE/sendMessage?chat_id=".$user."&text=".$lista."&parse_mode=HTML";
         
      file_get_contents($url);
    }
    exit();
  }