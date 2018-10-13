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
					<li><a href="index.php">Главная</a></li>
					<li><a href="about.php">О нас</a></li>
					<li><a href="gallery.php">Гаражи</a></li>
					<li><a href="registr.php">Регистрация</a></li>
					<li class="active"><a href="autoriz.php">Авторизация</a></li>
					<li><a href="admin.php">Администрирование</a></li>
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
<div class="login">
<?php  
}    
elseif(!empty($_POST['username']) && !empty($_POST['password']))  
{  
    // позволим пользователю войти на сайт 
    $username = mysqli_real_escape_string($conn, $_POST['username']);  
    $password = md5(mysqli_real_escape_string($conn, $_POST['password']));  
 
    $checklogin = mysqli_query($conn, "SELECT * FROM users WHERE Username = '".$username."' AND Password = '".$password."'");  
 
    if(mysqli_num_rows($checklogin) == 1)  
    {  
        $row = mysqli_fetch_array($checklogin);  
        $email = $row['Email'];  
 
        $_SESSION['Username'] = $username;  
        $_SESSION['EmailAddress'] = $email;  
        $_SESSION['LoggedIn'] = 1;  
 
        echo "<center><p class='login'>Все данные введены верно</p></center><br><br>";    
        echo "<meta http-equiv='refresh' content='2;index1.php'>";  
    }  
    else  
    {  
        echo "<a href=\"autoriz.php\"><center><p class='login'>Данные введины не коректно! Попробуйте снова</p></center></a>";   
    } 
}  
else  
{?>
<br><h1 align="center">Авторизация</h1>  <br>
<p align="center"> Для входа на сайт вам необходимо заполнить следующую информацию: </p> <br> <br>
<form method="post" align="center" action="autoriz.php" name="loginform" id="loginform"> 
<p><label for="username">Логин:*</label><br><input type="text" name="username" id="username" placeholder="Логин"></p> 
<p><label for="username">Пароль:*</label><br><input type="password" name="password" id="password" placeholder="Пароль"></p> 
<p class="remember_me"> 
<label> 
<input type="checkbox" name="remember_me" id="remember_me"> 
Запомнить меня 
</label> 
</p> 
<p class="submit"><input type="submit" name="commit" value="Войти"></p>   
  <br> <br>  <p> * - поля,обязательные для заполнения</p>  <br> <br>   <br> <br> 
</form> 

<?php
}?>
</div>
</div>
  <div class="clearfix"></div>
		 </div>
<div class="footer1">	
	 	      <div class="col-md-8 ftr2-bottom">		
			<p>Все права защищены &copy<?php echo date("Y") ?>.  Копирование материалов допускается только с указанием активной ссылки на сайт <a href="index.php">AUTO GARAGE</a></p>
	 </div>
</div>


</body>
</html>