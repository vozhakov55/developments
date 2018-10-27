  
<center id="senter5">ОПЫТОМ ДЕЛИТСЯ</center>
 <center id="imgElips"><img src="img/Roza_25elips.png" class="img-fluid" alt="Фото"></center>
<center id="Kurbanova">Курбанова Рауза Сангильбековна</center>

<!-- ######################################################################################## -->

 <div class="row">
        <div class="col">
            <center>
                <p><img src="img/figBig.png" class="img-fluid" width="160" height="320" alt="Фото">
                 <img src="img/figSmall.png" class="img-fluid" width="160" height="320" alt="Фото">
                </p>
                <p>Апрель 2017 года - апрель 2018 года</p>
            </center>
        </div>

        <div class="col">
            <center>
             <p><img src="img/faceBig.png" class="img-fluid" width="240" height="320" alt="Фото">
             <img src="img/faceSmall.png" class="img-fluid" width="240" height="320" alt="Фото"></p>
              <p>Апрель 2017 года - апрель 2018 года</p>
            </center>
        </div>
    </div>

<!-- ##################################################################################################### -->

<h3 align="center">СОДЕРЖАНИЕ КНИГИ</h3>
<div class="container">
  
<div class="row">
    <div class="col">
     <h5>Введение</h5> 
    </div>
        <div class="col-10">
        </div>
 </div>

<div class="row">
    <div class="col">
     <h5 class="zanyatie">Занятие №1</h5> 
    </div>
        <div class="col-10">
        <h5>Белок - важная составляющая в правильном питании.</h5>
        </div>
 </div>

<div class="row">
    <div class="col">
     <h5 class="zanyatie">Занятие №2</h5> 
    </div>
        <div class="col-10">
        <h5>Вода. Почему нам нужна вода. Когда и как пить воду.</h5>
        </div>
 </div>

<div class="row">
    <div class="col">
     <h5 class="zanyatie">Занятие №3</h5> 
    </div>
        <div class="col-10">
        <h5>Правильный завтрак. Как следует завтракать.</h5>
        </div>
 </div>

<div class="row">
    <div class="col">
     <h5 class="zanyatie">Занятие №4</h5> 
    </div>
        <div class="col-10">
        <h5>Почему диеты и голодание не дают нужных результатов.</h5>
        </div>
 </div>

<div class="row">
    <div class="col">
     <h5 class="zanyatie">Занятие №5</h5> 
    </div>
        <div class="col-10">
        <h5>Почему мы толстеем. Углеводы, сахар, гликемический индекс. Простые и сложные углеводы.</h5>
        </div>
 </div>

<div class="row">
    <div class="col">
     <h5 class="zanyatie">Занятие №6</h5> 
    </div>
        <div class="col-10">
        <h5>Обмен веществ и снижение веса. Как улучшить свой обмен веществ. Как оптимизировать свой метаболизм.</h5>
        </div>
 </div>

<div class="row">
    <div class="col">
     <h5 class="zanyatie">Занятие №7</h5> 
    </div>
        <div class="col-10">
        <h5>Энергия, физическая активность и снижение веса. Физические упражнения. Как тренироваться. Расход калорий.</h5>
        </div>
 </div>

<div class="row">
    <div class="col">
     <h5 class="zanyatie">Занятие №8</h5> 
    </div>
        <div class="col-10">
        <h5>Как делать покупки продуктов. Индекс продуктов. Какие продукты покупать, какие продукты избегать. Знать, что покупаем по этикеткам.</h5>
        </div>
 </div>

<div class="row">
    <div class="col">
     <h5 class="zanyatie">Занятие №9</h5> 
    </div>
        <div class="col-10">
        <h5>Как кушать в ресторанах, в кафе, в гостях и на мероприятиях.</h5>
        </div>
 </div>

<div class="row">
    <div class="col">
     <h5 class="zanyatie">Занятие №10</h5> 
    </div>
        <div class="col-10">
        <h5>Контроль веса. Как замедлить старение. Здоровые привычки. Активный образ жизни.</h5>
        </div>
 </div>
</div>

<!-- ##################################################################################################### -->   

<div id="oplata">
  <center style="font-size: 150%; color: red">КУРС СКОРО БУДЕТ ДОСТУПЕН</center> 
</div>

<?php // include 'comment.php'; ?>

<!-- ###################################  Форма  ########################################################### -->

<form name="form1" id="form1" class="container">

<div class="row justify-content-center h4-comment"><h4>&#8195;Добавьте комментарий</h4></div>

<div class="row">
<?php if ($missing) { ?>
<p class="mywarning">Заполните указанные поля.</p>
<?php } ?>
 </div>

<div class="row">
  <div class="col">
        <p class="p-form1">
        <label for="name" id="label1">Введите Ваше имя
          <?php if($missing && in_array('name', $missing)) { ?>
           <span class="mywarning">Необходимо заполнить</span>
           <?php  } ?> 
        </label><br>
         <input type="text" name="name" id="name"
          <?php
          if ($missing) {
          echo 'value="' . htmlentities($name, ENT_COMPAT, 'UTF-8') . '"';  
          }
          ?>>
         </p>
    </div>
  
  <div class="col">
      <p class="p-form1"><label for="email">Введите Ваш email</label><br>
       <input type="email" name="email" id="email" 
         <?php
          if ($missing) {
          echo 'value="' . htmlentities($email, ENT_COMPAT, 'UTF-8') . '"';  
          }
          ?>>
     </p><br>
    </div>
</div>

<div class="row justify-content-center">
  <p><label for="textarea" >Ваш комментарий
   <?php if($missing && in_array('comment', $missing)) { ?>
    <span class="mywarning">Необходимо заполнить</span>
    <?php  } ?> 
  </label><br>
    <textarea name="comment" id="textarea" cols="30" rows="5">
     <?php
     if ($missing) {
      echo  htmlentities($comment, ENT_COMPAT, 'UTF-8');  
     } ?>
    </textarea>
  </p>
</div>

<div class="row  justify-content-center">
    <p><button name="send" type="submit" id="submit" formmethod="post" formaction="./index.php" value="Отправлен комментарий">ОТПРАВИТЬ</button></p>
  
</div>

</form>

<!-- #################################    Конец формы    ############################################ -->

