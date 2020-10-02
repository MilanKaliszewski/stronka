<?php
//by SzelsoN
//https://discordapp.com/api/webhooks/761281303197909033/z0-K_7i1hqhRUzmjKb0vfEvB0SC1EYkT7pWD3UQZlxQMuRYBzdK1AcU5OeTohqbiHJs8
if(!$_POST['customer_email'] || !$_POST['customer_name'] || !$_POST['customer_surname'] || !$_POST['contact_topic'] || !$_POST['contact_content']) { 
    $_SESSION['somethingwrong'] = "<span style='color: red; font-size: 25px;'>WPISZ WSZYSTKIE DANE!</span>";
    header('location:index.php');
}
else{
$webhookurl = "https://discordapp.com/api/webhooks/761281303197909033/z0-K_7i1hqhRUzmjKb0vfEvB0SC1EYkT7pWD3UQZlxQMuRYBzdK1AcU5OeTohqbiHJs8";
$timestamp = date("c", strtotime("now"));
$email = $_POST['customer_email'];
$name = $_POST['customer_name'];
$sname = $_POST['customer_surname'];
$topic = $_POST['contact_topic'];
$content = $_POST['contact_content'];
$json_data = json_encode([
    "content" => "@everyone",
    "username" => "Sekretarka",
    "tts" => false,
    "embeds" => [
        [
            "title" => "IMIĘ I NAZWISKO: $name $sname",
            "type" => "rich",
            "description" => "**TYTUŁ:** $topic
            **TREŚĆ:**
            $content",
            "url" => "$email",
            "timestamp" => $timestamp,
            "color" => hexdec( "3366ff" ),
        ],
                ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec( $ch );
curl_close( $ch );
header('location: contact.php');}
