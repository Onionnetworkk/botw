<?php

if(strpos($text,'.redeem') === 0){
	$SQL = "SELECT * FROM `ADMINISTRAR` WHERE id=".$user_id;
    $CONSULTA = mysqli_query(mysqlcon(),$SQL);
    $f = mysqli_num_rows($CONSULTA);

    if($f > 0)
    {} else{
        $content = ['chat_id' => $chat_id, 'text' => "𝑳𝒐𝒐𝒌𝒔 𝑳𝒊𝒌𝒆 𝒀𝒐𝒖 𝒉𝒂𝒗𝒆𝒏'𝒕 𝒓𝒆𝒈𝒊𝒔𝒕𝒆𝒓𝒆𝒅 𝒚𝒐𝒖𝒓 𝒔𝒆𝒍𝒇, 𝒅𝒐 /register 𝒕𝒐 𝒄𝒐𝒏𝒕𝒊𝒏𝒖𝒆", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        exit;
    }
	$find = substr($text, 8);
	$SQL = "SELECT status FROM nick WHERE nick='$find'";
	$result = mysqli_query(mysqlcon(), $SQL);
	$json_array = [];
	while ($row = mysqli_fetch_assoc($result)) {
	$json_array[] = $row;
	}
	$final2 = json_encode($json_array);
	$planstatus = anicap($final2, '"status":"','"');
	mysqli_close(mysqlcon());
	$SQL = "SELECT plan FROM nick WHERE nick='$find'";
$result = mysqli_query(mysqlcon(), $SQL);

$json_array = [];


while ($row = mysqli_fetch_assoc($result)) {
  $json_array[] = $row;
}

$final2 = json_encode($json_array);

$plan =anicap($final2, '"plan":"','"');
mysqli_close(mysqlcon());


$SQL = "SELECT planexpiry FROM nick WHERE nick='$find'";
$result = mysqli_query(mysqlcon(), $SQL);

$json_array = [];


while ($row = mysqli_fetch_assoc($result)) {
  $json_array[] = $row;
}

$final2 = json_encode($json_array);

$planexpiry = anicap($final2, '"planexpiry":"','"');
mysqli_close(mysqlcon());


// Check connection
// Attempt create database query execution
$SQL = "UPDATE `ADMINISTRAR` SET `plan` = '$plan' WHERE `ADMINISTRAR`.`id` = '$user_id'";
$result = mysqli_query(mysqlcon(), $SQL);
// Close connection
mysqli_close(mysqlcon());

 
// Check connection
// Attempt create database query execution
$SQL = "UPDATE `ADMINISTRAR` SET `planexpiry` = '$planexpiry' WHERE `ADMINISTRAR`.`id` = '$user_id';";
$result = mysqli_query(mysqlcon(), $SQL);
// Close connection
mysqli_close(mysqlcon());



// Check connection
// Attempt create database query execution
$SQL = "UPDATE `nick` SET `status` = 'USED' WHERE `nick`.`nick` = '$find';";
$result = mysqli_query(mysqlcon(), $SQL);
// Close connection
mysqli_close(mysqlcon());
# 𝑼𝒔𝒆𝒅 �𝒆𝒚 𝑫�𝒕𝒆𝒄𝒕𝒆𝒅

if ($planstatus == "USED") {

	$content = ['chat_id' => $chat_id, 'text' => "<b>┏━━━━━━━━━━━━━━\n┣ 🍁 𝑼𝒔𝒆𝒅 𝑲𝒆𝒚 𝑫𝒆𝒕𝒆𝒄𝒕𝒆𝒅 🍁\n┗━━━━━━━━━━━━━━\n══════════════════════\n[ϟ] 𝑻𝒉𝒊𝒔 𝒌𝒆𝒚 𝒉𝒂𝒔 𝒃𝒆𝒆𝒏 𝒖𝒔𝒆𝒅\n[ϟ] 𝑾𝒂𝒓𝒏𝒔: $warns\n══════════════════════</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
	SendMessage($content);

$SQL = "SELECT warns FROM ADMINISTRAR WHERE $user_id='$user_id'";
$result = mysqli_query(mysqlcon(), $SQL);

$json_array = [];


while ($row = mysqli_fetch_assoc($result)) {
  $json_array[] = $row;
}

$final2 = json_encode($json_array);

$warns = anicap($final2, '"warns":"','"');
$warns = $warns + 1;
mysqli_close(mysqlcon());

// Check connection
// Attempt create database query execution
$SQL = "UPDATE `ADMINISTRAR` SET `warns` = '$warns' WHERE `ADMINISTRAR`.`id` = '$user_id';";
$result = mysqli_query(mysqlcon(), $SQL);
// Close connection
mysqli_close(mysqlcon());

}

elseif (empty($planexpiry)) {

$SQL = "SELECT warns FROM ADMINISTRAR WHERE id='$user_id'";
$result = mysqli_query(mysqlcon(), $SQL);

$json_array = [];


while ($row = mysqli_fetch_assoc($result)) {
  $json_array[] = $row;
}

$final2 = json_encode($json_array);

$warns = anicap($final2, '"warns":"','"');
$warns = $warns + 1;
mysqli_close(mysqlcon());
// Check connection
// Attempt create database query execution
$SQL = "UPDATE `ADMINISTRAR` SET `warns` = '$warns' WHERE `ADMINISTRAR`.`id` = '$user_id';";
$result = mysqli_query(mysqlcon(), $SQL);
// Close connection
mysqli_close(mysqlcon());

	$content = ['chat_id' => $chat_id, 'text' => "<b>┏━━━━━━━━━━━━━━\n┣ 🍁 𝑰𝒏𝒗𝒂𝒍𝒊𝒅 𝑲𝒆𝒚 𝑫𝒆𝒕𝒆𝒄𝒕𝒆𝒅 🍁\n┗━━━━━━━━━━━━━━\n══════════════════════\n[ϟ] 𝑻𝒉𝒊𝒔 𝑲𝒆𝒚 𝒊𝒔 𝑰𝒏𝒗𝒂𝒍𝒊𝒅\n[ϟ] 𝑾𝒂𝒓𝒏𝒔: $warns\n══════════════════════</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
	SendMessage($content);}

else{


			$now = time();
			$planexpiry = date('l jS \of F Y h:i:s A', $planexpiry);
	$response = urlencode ("<b>»»————-　♔　————-««\n         HEADSHOT BOT\n»»————-　♔　————-««\nRedeemed Successfully!\nPlan: $plan\nPlan expiry: $planexpiry\n🤖Bot By: : @ibnot</b>");
	$content = ['chat_id' => $chat_id, 'text' => "<b>┏━━━━━━━━━━━━━━\n┣ 🍁𝑲𝒆𝒚 𝑹𝒆𝒅𝒆𝒆𝒎𝒆𝒅 🍁\n┗━━━━━━━━━━━━━━\n══════════════════════\n[ϟ] 𝑲𝒆𝒚 𝑹𝒆𝒅𝒆𝒆𝒎𝒆𝒅 𝑺𝒖𝒄𝒄𝒆𝒔𝒔𝒇𝒖𝒍𝒍𝒚\n[ϟ] 𝑷𝒍𝒂𝒏: $plan\n[ϟ] 𝑷𝒍𝒂𝒏 𝑬𝒙𝒑𝒊𝒓𝒚: $planexpiry\n[ϟ] 𝑾𝒂𝒓𝒏𝒔: $warns\n══════════════════════</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
	$m1  = SendMessage($content);
}





}
?>