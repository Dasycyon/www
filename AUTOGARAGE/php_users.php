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

<br><h1 align="center"> Таблица "Клиенты"</h1><br>
<table class="table" border=1 width=96% align="center">
 <tr> 
<th>Код клиента</th> 
<th>Фамилия</th> 
<th>Имя</th>
<th>Отчество</th>
<th>Адрес</th>
<th>Телефон</th>
<th>Логин</th>
<th>Пароль</th>
<th>Email</th>
</tr>
<?php

$result=mysqli_query($conn, "SELECT *
                     from users")
or die(mysqli_error());

$myrow =mysqli_fetch_array($result);
do{
echo "<tr>";
echo 
"<td>".$myrow["UserID"].
"</td>\n <td>".$myrow["Surname"].
"</td>\n <td>".$myrow["Name"].
"</td>\n <td>".$myrow["Lastname"].  
"</td>\n <td>".$myrow["addres"].
"</td>\n <td>".$myrow["phone"].
"</td>\n <td>".$myrow["Username"].
"</td>\n <td>".$myrow["Password"].
"</td>\n <td>".$myrow["Email"].
"</td>\n";

echo "</tr>\n";

}
while ($myrow =mysqli_fetch_array($result));
?>
<br></table>
<br><center><button href="javascript://" onclick="print();" class="but2">Печать</button></center><br>
  <div class="clearfix"></div>

		<div class="footer1">	
	 	      <div class="col-md-8 ftr2-bottom">		
			<p>Все права защищены &copy<?php echo date("Y") ?>.  Копирование материалов допускается только с указанием активной ссылки на сайт <a href="index.php">AUTO GARAGE</a></p>
	 </div>
</div>

</body>
</html>