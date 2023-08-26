<?php

/* https://api.telegram.org/bot6223442782:AAFz2P0sC5uVDMhTTBavZrVgzLmcmYPRRLY/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$txt = "";
$token = "1384146931:AAHvW0vB0IFsp61M9IDsuv0Wxq2Gq4keEho";
$chat_id = "-1001975167698";
$arr = array(
  'Имя пользователя: ' => $name,
  'Email:' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: ../index.html');
} else {
  echo "Error";
}

?>

