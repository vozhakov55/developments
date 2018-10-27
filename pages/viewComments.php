<h4>Комментарии</h4>
<hr>
<?php
require_once 'connection.php';
$conn = dbconnect('read');
if ($conn->connect_error) {die("Ошибка подключения: " . $conn->connect_error);}
$sql = 'SELECT * FROM comments';
$result = $conn->query($sql) or die(mysqli_error());

$dbContent = [];
$i = 0;
while ( $row = $result->fetch_assoc() ) {
	$dbContent[$i] = $row;
	$i++;
}
// в $i получаем количество рядов
// получаем такой массив из подмассивов с индексами от 0 до $i-1
/* $dbContent1 =
[
		0 => [
		    'vok_id' => 1,
            'vok_name' => 'Автор 1',
            'vok_comment' => 'Комментарий автора 1',
            'vok_email' => 'avtor1@email.ru',
            'vok_date' => '2018-10-24 12:17:39'
             ],
         1 => [
		    'vok_id' => 2,
            'vok_name' => 'Автор 2',
            'vok_comment' => 'Комментарий автора 2',
            'vok_email' => 'avtor2@email.ru',
            'vok_date' => '2018-10-24 12:18:39'
             ]
             //и т.д.
 ]; */
 // $i - получаем количество строк в базе
 //  $i-1 - индекс последнего подмассива-последняя строка в базе
?> 

<?php for($j=$i-1; $j>=0; $j--) { ?>     <!-- ******************** -->
 <div class="container">

	<div class="row">

    	<div class="col-3 view1">
		<?php echo htmlentities($dbContent[$j]['vok_name']); ?>
     	</div>

    	<div class="col-3 view1">
		<?php $strDate1 = substr ( $dbContent[$j]['vok_date'] , 0 , 10 ) ; 
         $arrDate1 = explode('-', $strDate1);
         $arrDate = array_reverse($arrDate1);
         $strDate = implode ('-',  $arrDate);
         echo $strDate;
         ?>
         </div>

         <div class="col-6">
	     </div>

	</div>

    <div class="row">
        <div class="col view2">
	    <?php echo nl2br(htmlentities($dbContent[$j]['vok_comment'])); ?>
         </div>
     </div>

</div>
<hr>

<?php } ?>                                  <!-- ********* конец for *********** -->


  




  