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
					<li class="active"><a href="indexadmin.php">Таблицы БД</a></li>
					<li><a href="logout.php">Выйти из профиля</a></li>
					</ul>
			 </div>
	      </nav>					
	 </div>
</div>
<?php
    if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))  
{  
    // даём доступ пользователю к главной странице
?>

<div class="container">
<br><h1 align="center"> Таблицы </h1>
<center><table width=500 cellspacing="35">
<tr><td align="left"><a href="php_garaji.php"><button class="but">Таблица "Гаражи" </button></a></td>
<td align="right"><a href="php_addres.php"><button class="but">Таблица "Адреса" </button></a></td></tr>
<tr><td align="left"><a href="php_cena.php"><button class="but">Таблица "Стоимость"</button></a> </td>
<td align="right"><a href="php_mesta.php"><button class="but">Таблица "Места"</button></a> </td></tr>
<tr><td align="left"><a href="php_scheta.php"><button class="but">Таблица "Счета" </button></a></td>
<td align="right"><a href="php_sotrudniki.php"><button class="but">Таблица "Сотрудники"</button></a> </td></tr>
<tr><td align="left"><a href="php_users.php"><button class="but">Таблица "Клиенты" </button></a></td>
<td align="right"><a href="php_zapistab.php"><button class="but">Таблица "Запись" </button></a></td></tr>
<tr><td align="left"><a href="php_zp.php"><button class="but">Таблица "Зарплата"</button> </a> </td>
<td align="right"><a href="php_tip.php"><button class="but">Таблица "Типы гаражей" </button></a></td></tr>
</table></center><br><br>
<?php
}?>
</div>
</div>
<div class="footer2">	
	 	      <div class="col-md-8 ftr2-bottom">		
			<p>Все права защищены &copy<?php echo date("Y") ?>.  Копирование материалов допускается только с указанием активной ссылки на сайт <a href="index.php">AUTO GARAGE</a></p>
	 </div>
</div>


</body>
</html>