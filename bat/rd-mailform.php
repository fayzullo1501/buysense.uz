<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  // Ваш код для обработки и сохранения подписки

  // Пример сохранения в файл "подписки.txt"
  $file = fopen("../follow.txt", "a");
  fwrite($file, $email . "\n");
  fclose($file);

  // Ваш код для дополнительных действий

  // Вывод сообщения об успешной подписке
  echo "Спасибо за подписку!";
}
?>
