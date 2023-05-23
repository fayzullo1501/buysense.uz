<?php
$file = "followers.txt";

// Проверяем, существует ли файл
if (file_exists($file)) {
  // Читаем содержимое файла
  $subscriptions = file($file, FILE_IGNORE_NEW_LINES);
  
  // Проверяем, есть ли подписчики
  if (!empty($subscriptions)) {
    echo "<ul>";
    // Выводим каждого подписчика в списке
    foreach ($subscriptions as $email) {
      echo "<li>" . htmlspecialchars($email) . "</li>";
    }
    echo "</ul>";
  } else {
    echo "Нет подписчиков.";
  }
} else {
  echo "Файл подписок не найден.";
}
?>
