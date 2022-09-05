<?php

/* Setting the error log to a file called xd.log. */
ini_set("log_errors", TRUE);
ini_set('error_log', "./errors.log");

/**
 * A workaround for the PHP script timeout. 
 * @return Async.
 */
while (ob_get_level()) ob_end_clean();
header('Connection: close');
ignore_user_abort();
ob_start();

$size = ob_get_length();
header("Content-Length: $size");
header('Connection: close');
ob_end_flush();
flush();

/**
 * It takes a string, replaces all newlines and carriage returns with a space, replaces all multiple
 * spaces with a single space, removes all non-numeric characters, trims the string, and replaces all
 * multiple spaces with a single space.
 * 
 * @param string The string to be cleaned.
 * 
 * @return A string of numbers separated by spaces.
 */
function clean($string)
{
    $text = preg_replace("/\r|\n/", " ", $string);
    $str1 = preg_replace('/\s+/', ' ', $text);
    $str = preg_replace("/[^0-9]/", " ", $str1);
    $string = trim($str, " ");
    $lista = preg_replace('/\s+/', ' ', $string);
    return $lista;
}
/**
 * This for banned bin
 */
function bannedbin($bin){
	$bugbin = file_get_contents('banned.txt');
    $exploded = explode("\n", $bugbin);
    if (in_array($bin, $exploded)) {
    return true;
     }
     }
/**
 * It gets the data between two words.
 * 
 * @param str The string to search in.
 * @param starting_word The word that comes before the data you want to extract.
 * @param ending_word &lt;/div&gt;
 * 
 * @return the data between the two words.
 */
function getData($str, $starting_word, $ending_word)
{
    $subtring_start  = strpos($str, $starting_word);
    $subtring_start += strlen($starting_word);
    $size            = strpos($str, $ending_word, $subtring_start) - $subtring_start;
    return substr($str, $subtring_start, $size);
}


/**
 * It takes a string and an array of delimiters and returns an array of strings.
 * 
 * @param delimiters The delimiters to explode by.
 * @param string The string to be exploded.
 * 
 * @return An array of strings.
 */
function multiexplode($delimiters, $string)
{
    $one = str_replace($delimiters, $delimiters[0], $string);
    $two = explode($delimiters[0], $one);
    return $two;
}

/**
 * It sends a request to the Telegram API and returns the result.
 * 
 * @param url The URL to send the request to.
 * @param array content The content of the message you want to send.
 * @param post true/false - whether to send the request as POST or GET
 * 
 * @return The result of the API call.
 */
function sendAPIRequest($url, array $content, $post = true)
{
    if (isset($content['chat_id'])) {
        $url = $url . '?chat_id=' . $content['chat_id'];
        unset($content['chat_id']);
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_MAXCONNECTS, 1000);
    if ($post) {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
    }
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    if ($result === false) {
        $result = json_encode(['ok' => false, 'curl_error_code' => curl_errno($ch), 'curl_error' => curl_error($ch)]);
    }
    curl_close($ch);

    return $result;
}
/**
 * Function for cmd
 */
function CMD2($m,$m2)
    {
        $a = $m;
        $b = preg_replace('/[^a-z]/', '', $m2);
        
        if($a == $b){return true;}else{return false;

        }
    }
/**
 * new cmd
 */
function CMD($m,$m2)
    {
        $a = $m;
        $b = preg_replace('/[^a-z]/', '', $m2);
        
        if($a == $b){return true;}else{exit;}
    }
/**
 * Capture string
 */
function anicap($string, $start, $end)
    {
      $str = explode($start, $string);
      $str = explode($end, $str[1]);
      $str = trim(strip_tags($str[0]));
      return $str;
    }
/**
 * It sends a request to the Telegram API.
 * 
 * @param api The API endpoint you want to use.
 * @param array content The content of the message.
 * @param post true if you want to send a POST request, false if you want to send a GET request.
 * 
 * @return The return value is an array of the JSON decoded response.
 */
function endpoint($api, array $content, $post = true)
{
    $url = 'https://api.telegram.org/bot' . bot_token . '/' . $api;
    if ($post) {
        $reply = sendAPIRequest($url, $content);
    } else {
        $reply = sendAPIRequest($url, [], false);
    }

    return json_decode($reply, true);
}

/**
 * It takes an array of content, and returns the result of the endpoint function, which takes the name
 * of the endpoint and the content
 * 
 * @param array content The content of the message.
 * 
 * @return the result of the endpoint function.
 */
function SendMessage(array $content)
{
    return endpoint('sendMessage', $content);
}

/**
 * It takes an array of content, and returns the result of the endpoint function, which takes the name
 * of the endpoint and the content array.
 * 
 * @param array content The content of the message to be edited.
 * 
 * @return the endpoint function with the parameters  and 'editMessageText'.
 */
function EditMessageText(array $content)
{
    return endpoint('editMessageText', $content);
}

/**
 * It sends a request to the Telegram API to answer a callback query
 * 
 * @param array content
 * 
 * @return the result of the endpoint function.
 */
function answerCallbackQuery(array $content)
{
    return endpoint('answerCallbackQuery', $content);
}
/**
 * MySql Database Connection
 * User pass db name
 * Register 
 */
function mysqlcon(){
$CONN = mysqli_connect("localhost","root","","tet");
return $CONN;
}

/**
 * registration
 */
function sendChatAction(array $content)
{
    return endpoint('sendChatAction', $content);
}


// /**
//  * AntiSpam Will block spamming
//  */

// function AntiSpam($time=30)
// {

// }