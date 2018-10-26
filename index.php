<?php

header("Content-type: text/html; charset=utf-8");
error_reporting(-1); // показываем предупреждения
define('maxRows', 50);
require_once 'form.php';
require_once 'connection.php';

/* $conn = dbconnect('write');
if ($conn->connect_error) {die("Ошибка подключения: " . $conn->connect_error);} 
for($i=1; $i<26; $i++){
$name1 = 'Автор ' . $i;
$comment1 = 'Комментарий автора ' . $i;
$email1 = 'avtor' . $i. '@email.ru';
$sql = "INSERT INTO comments (vok_name, vok_comment, vok_email) VALUE ('$name1', '$comment1', '$email1')";
$conn->query($sql);
}
$conn->close(); */

if(!empty($name) && !empty($comment)) {
$conn = dbconnect('write');
// Если есть ошибка соединения, выводим её и убиваем подключение
if ($conn->connect_error) {die("Ошибка подключения: " . $conn->connect_error);}
$sql = 'SELECT * FROM comments';
$result = $conn->query($sql) or die(mysqli_error());
$numRows = $result->num_rows;
$result->free_result(); 
  if($numRows >= maxRows){
  $sql = "DELETE FROM comments ORDER BY vok_date LIMIT 1";
  $conn->query($sql);
  }
$sql = "INSERT INTO comments (vok_name, vok_comment, vok_email) VALUE ('$name', '$comment', '$email')";
$conn->query($sql);
// Закрыть подключение
$conn->close();   
}

 // ДО ЭТОГО НИЧЕГО НЕ ВЫВОДИМ ! 
if(!empty($name) && !empty($comment)){
  header("Location: {$_SERVER['PHP_SELF']}"); //перезагружаем страницу-решаем проблему F5
  exit; // выходим, а страница перезагружается
} 

?>

<?php include 'header.php'; ?>
<?php include 'pages/'.$page.'.php'; ?> 
<?php include 'footer.php' ?>
