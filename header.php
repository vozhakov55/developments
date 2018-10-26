<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Кодировка веб-страницы -->
    <meta charset="utf-8">
    <title>Правильное питание-похудание</title>
    <!-- Настройка viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Подключаем Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Подключаем font-awesome -->
    <link rel="stylesheet" href="fontawesome470/css/font-awesome.min.css">
    <!-- Подключаем мой CSS -->
    <link rel="stylesheet" type="text/css" href="css/myStyle.css">

</head>

<body>

<div id="wrapper">     <!-- обертка закрывается в header.php   -->
 
<!-- *********************************** навигация ********************* -->
<div class="container" id="div-nav">
<nav class="navbar navbar-expand-sm navbar-light bg-light">
 
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <?php if(!empty($_GET['page'])) $page = $_GET['page'];
      else $page = 'main';
      ?>

   <?php if(!empty($_GET['page']) && $page!='main' && $page!='about' && $page!= 'viewComments') $page = 'main';
    ?>

      <?php if($page  == 'main') echo '<li class="nav-item active" id="selected">';
             else echo '<li class="nav-item">';              
       ?>
        <a class="nav-link" href="index.php?page=main">Главная страница<span class="sr-only">(current)</span></a>
      </li>

      <?php if($page  == 'about') echo '<li class="nav-item active" id="selected">';
             else echo '<li class="nav-item">';              
       ?>
        <a class="nav-link" href="index.php?page=about">Обо мне</a>
      </li>

     <?php if($page  == 'viewComments') echo '<li class="nav-item active" id="selected">';
             else echo '<li class="nav-item">';              
       ?> 
       <a class="nav-link" href="index.php?page=viewComments">Смотреть комментарии</a>
      </li>
  </ul>
 </div>
</nav>
</div> <!-- конец  <div class="container" id="div-nav"> -->

<!-- ******************************* конец навигации ******************* -->

 <div class="container" id="header">
     <center id="senter1">ОБУЧЕНИЕ ДЛЯ ЛЮДЕЙ С ИЗБЫТКОМ ВЕСА</center>
    <h1 align="center">ПОХУДАНИЕ И ЗДОРОВЫЙ ОБРАЗ ЖИЗНИ</h1>
    <center id="senter3">ОБУЧЕНИЕ СОСТАВЛЕНО С ИСПОЛЬЗОВАНИЕМ ОПЫТА ПРАВИЛЬНОГО ПИТАНИЯ</center>
    <center id="senter4"><span>КНИГА ИЗ 10 ТЕМ</span></center>

    <?php if(isset($_POST['send'])) { ?>
    <?php echo '<br>' ?>
   <center class="mywarning"><span>Не заполнены поля в комментарии</span></center>
    <?php } ?>
</div>
 <div class="container" id="main"> <!-- закрывается в футере --> 
  