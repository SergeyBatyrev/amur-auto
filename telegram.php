<?php
/* https://api.telegram.org/bot6383862530:AAE_R-SfOAWLcI1txBDkQ0Tg3sH5YBLHfAE/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */
$name = $_POST['Name'];
$phone = $_POST['Phone'];
$email = $_POST['Date'];
$token = "6383862530:AAE_R-SfOAWLcI1txBDkQ0Tg3sH5YBLHfAE";
$chat_id = "-4046812368";
$txt = '';
$arr = array(
    'Имя пользователя: ' => $name,
    'Телефон: ' => $phone,
    'Дата' => $email
);

foreach ($arr as $key => $value) {
    $txt .= "<b>" . $key . "</b> " . $value . "%0A";
}
;

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

if ($sendToTelegram) { ?>
    <script> 
    window.location.replace("https://cn42062.tw1.ru/");
    </script>
       

    
    <?php
} else {

}
?>