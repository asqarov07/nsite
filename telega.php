<?php
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$token = "935675368:AAEuNBLzXEg1wBG7STqWs3ssCykOXf4_WQo";
$chat_id = "-328455516";
$arr = array(
  'Имя клиента: ' => $name,
  'Телефон: ' => $phone,
  'Адрес: ' => $address,
  'Сообщение: ' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location:index.php');
} else {
  echo "Error";
}
?>