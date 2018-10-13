<?php include "base.php";?>
<html>
<head>
<title>AUTO GARAGE</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<script src="js/bootstrap.js"></script>

<link href="css/style.css" rel='stylesheet' type='text/css' />

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.js"></script>

</head>
<body>

<div class="banner banner2">
	 <div class="container">
	     <div class="header">
			 <div class="logo">
				 <h1><a href="index.php"><img src="images/car.png" alt=""/>AUTO <span>GARAGE</span></a></h1>
			 </div>
			 <div class="top_details">
				 <p><span></span> 8(880)123 2500</p>
				 </div>
			 <div class="clearfix"></div>
		 </div>
		 <nav class="navbar navbar-default">
			 	 <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li><a href="admindex.php">Главная</a></li>
					<li><a href="admabout.php">О нас</a></li>
					<li><a href="admgallery.php">Гаражи</a></li>
					<li class="active"><a href="admzapis.php">Запись</a></li>
					<li><a href="admregistr.php">Регистрация</a></li>
					<li><a href="admautoriz.php">Авторизация</a></li>
					<li><a href="indexadmin.php">Таблицы БД</a></li>
					<li><a href="logout.php">Выйти из профиля</a></li>
				  </ul>
			 </div>
	      </nav>					
	 </div>
</div>

<div class="container">
  <?php
	if(!empty($_POST['name']) && !empty($_POST['garaj']) && !empty($_POST['datetime']) && !empty($_POST['time']))  
    {  
    $name = $_POST['name'];  
    $garaj = $_POST['garaj'];  
    $datetime = $_POST['datetime'];  
	$time = $_POST['time'];  
 
     $checkzapis = mysql_query("SELECT garaj,datetime FROM zapis WHERE datetime = '".$datetime."'");  
 
     if(mysql_num_rows($checkzapis) == 1)  
     {  
        echo "<center><br><h1>Ошибка</h1>";  
        echo "<p>Извините, этот гараж на это время уже занят. Вернитесь<a href=\"admzapis.php\"> назад</a> и попробуйте снова.</p><br>
		<img src='images/zan.jpg' alt='img01'/></center>";  
     }  
     else 
     {  
        $query = mysql_query("INSERT INTO zapis (name, garaj, datetime, time) VALUES('".$name."', '".$garaj."', '".$datetime."', '".$time."')");  
        if($query)  
        {  
            echo "<center><img src='images/polz.jpg' alt='img01'/></center>";  
          }  
        else  
        {  
        echo "<a href=\"admzapis.php\"><center><img src='images/cor.jpg' alt='img01'/></center></a>";        
        }         
     }  
}  
else  
{  
    ?>  
 
   <h1 align="center">Запись</h1>  <br>
 
   <p align="center">Пожалуйста заполните информацию ниже:</p>  <br>
 
    <form method="post" action="admzapis.php" name="registerform" id="login" align="center">  
    <fieldset>  
        <label for="name">Ваш логин:*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="name" id="name" placeholder="Логин"><br>  
        <label for="garaj">Гараж:*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="garaj" id="garaj">
		<script type="text/javascript"> 
    var input = document.getElementById('garaj'), 
        parent = input.parentNode, 
        select = document.createElement('SELECT'); 
     
    select.id = input.id; 
    select.name = input.name; 
    select.options.add(new Option('Выберите гараж'));     
    select.options.add(new Option('Гараж Бокс')); 
    select.options.add(new Option('Парковка Малевича')); 
    select.options.add(new Option('ПаркингСан')); 
    select.options.add(new Option('Паркинг Хаос')); 
	select.options.add(new Option('Гринпаркинг')); 
	select.options.add(new Option('РадугаПаркинг')); 
	select.options.add(new Option('МегаПаркинг')); 
	select.options.add(new Option('СельхозПаркинг')); 
	select.options.add(new Option('ГалилеоПаркинг')); 
	select.options.add(new Option('ГаражКласс'));  
    parent.insertBefore(select, input); 
    parent.removeChild(input); 
</script> <br> 
        <label for="datetime">Дата и время:*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="datetime-local" name="datetime" id="datetime"><br>
		<label for="time">Количество часов:*</label><input type="text" name="time" id="time" placeholder="Количестова часов"><br><br>
        <input type="submit" name="zapis" id="zapis" value="Записаться">  
</fieldset>  
  <br> <br>  <p> * - поля,обязательные для заполнения</p>  <br> <br>   <br> <br> 
    </form>
   <?php  
}  ?>
</div>

<div class="footer2">	
	 	      <div class="col-md-8 ftr2-bottom">		
			<p>Все права защищены &copy2<?php echo date("Y") ?>.  Копирование материалов допускается только с указанием активной ссылки на сайт <a href="index.php">AUTO GARAGE</a></p>
	 </div>
</div>


</body>
</html>