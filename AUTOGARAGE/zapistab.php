<?php include "base.php"; ?>
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
				 <h1><a href="admindex.php"><img src="images/car.png" alt=""/>AUTO <span>GARAGE</span></a></h1>
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
					<li><a href="admzapis.php">Запись</a></li>
					<li><a href="admregistr.php">Регистрация</a></li>
					<li><a href="admautoriz.php">Авторизация</a></li>
					<li><a href="indexadmin.php">Таблицы БД</a></li>
					<li><a href="logout.php">Выйти из профиля</a></li>
				  </ul>
			 </div>
	      </nav>					
	 </div>
</div>

<br><h1 align="center"> Таблица "Записи"</h1><br>
<table border=1 width=100% align="center">
 <tr> 
<th>Код записи</th> 
<th>Название гаража</th>
<th>Логин</th>
<th>Дата и время</th>
<th>Количество часов</th>
</tr>
<?php

$result=mysqli_query($conn, "SELECT zapis.id_zap, zapis.garaj, zapis.name, zapis.datatime, zapis.time
                     from zapis")
or die(mysql_error());

$myrow =mysqli_fetch_array($result);
do{
echo "<tr>";
echo 
"<td>".$myrow["id_zap"].
"</td>\n <td>".$myrow["garaj"].
"</td>\n <td>".$myrow["name"].  
"</td>\n <td>".$myrow["datatime"].
"</td>\n <td>".$myrow["time"].
"</td>\n";

echo "</tr>\n";

}
while ($myrow =mysqli_fetch_array($result));
?>
<br></table>
<br><center><button href="javascript://" onclick="print();" class="but2">Печать</button></center><br>
  <div class="clearfix"></div>

		<div class="footer2">	
	 	      <div class="col-md-8 ftr2-bottom">		
			<p>Все права защищены &copy<?php echo date("Y") ?>.  Копирование материалов допускается только с указанием активной ссылки на сайт <a href="index.php">AUTO GARAGE</a></p>
	 </div>
</div>

</body>
</html>