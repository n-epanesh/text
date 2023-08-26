<?php

// https://api.telegram.org/bot5994251403:AAEky1sf_-Jbl6u-ApMVxyQl-TGPa6Nym5M/sendMessage?chat_id=-1001925081180&text=

//В переменную $token нужно вставить токен, который нам прислал @botFather
$token = "5994251403:AAEky1sf_-Jbl6u-ApMVxyQl-TGPa6Nym5M";

//Сюда вставляем chat_id
$chat_id = "-1001925081180";

//Определяем переменные для передачи данных из нашей формы
if ($_POST['act'] == 'Получить консультацию') {
    $name = ($_POST['name']);
    $phone = ($_POST['phone']);

//Собираем в массив то, что будет передаваться боту
    $arr = array(
        'Имя:' => $name,
        'Контакт:' => $phone
    );

//Настраиваем внешний вид сообщения в телеграме
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

//Передаем данные боту
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

//Выводим сообщение об успешной отправке
    if ($sendToTelegram) {
     
        alert('Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.');
    }

//А здесь сообщение об ошибке при отправке
    else {
        alert('Что-то пошло не так. Попробуйте отправить форму ещё раз.');
    }
}