/* Переменные. Переменные переменные(символические ссылки)
Задание: Вывести "World" используя символические ссылки
*/
<?php 
  $Hello = "World";
  $a = "Hello";
  echo $$a; 
?>
