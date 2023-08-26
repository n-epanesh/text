<?php

/* https://api.telegram.org/bot6223442782:AAFz2P0sC5uVDMhTTBavZrVgzLmcmYPRRLY/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */
// https://api.telegram.org/bot5994251403:AAEky1sf_-Jbl6u-ApMVxyQl-TGPa6Nym5M/sendMessage?chat_id=-1001925081180&text=

$name = $_POST['name'];
$phone = $_POST['phone'];
$txt = "";
$token = "5994251403:AAEky1sf_-Jbl6u-ApMVxyQl-TGPa6Nym5M";
$chat_id = "-1001925081180";
$arr = array(
  'Имя пользователя: ' => $name,
  'Контакты:' => $phone
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

