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
					<li class="active"><a href="admregistr.php">Регистрация</a></li>
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
    if(!empty($_POST['Surname']) && !empty($_POST['Name']) && !empty($_POST['Lastname']) && !empty($_POST['addres']) && !empty($_POST['phone'])&& !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['password']) && !empty($_POST['email']) )
    {  
    // позволим пользователю зарегистрироваться
	$surname = mysql_real_escape_string($_POST['Surname']); 
	$name = mysql_real_escape_string($_POST['Name']); 
	$lastname = mysql_real_escape_string($_POST['Lastname']); 
	$addres = mysql_real_escape_string($_POST['addres']); 
	$phone = mysql_real_escape_string($_POST['phone']); 
	$username = mysql_real_escape_string($_POST['username']);  
    $password = md5(mysql_real_escape_string($_POST['password'])); 
	$email = mysql_real_escape_string($_POST['email']);
     
     $checkusername = mysql_query("SELECT * FROM users WHERE Username = '".$username."'");  
 
     if(mysql_num_rows($checkusername) == 1)  
     {  
        echo "<h1>Ошибка</h1>";  
        echo "<p>Извините, такое имя пользователя уже используется. Вернитесь назад и попробуйте снова.</p>";  
     }  
     else  
     {  
        $registerquery = mysql_query("INSERT INTO users (Surname, Name, Lastname, addres, phone, Username, Password, Email) VALUES('".$surname."', '".$name."', '".$lastname."', '".$addres."', '".$phone."', '".$username."', '".$password."', '".$email."')");  
     		
		if($registerquery)  
        {  
            echo "<center><img src='images/reg.jpg' alt='img01'/></center>";  
        }  
        else  
        {  
        echo "<a href=\"admregistr.php\"><center><img src='images/cor.jpg' alt='img01'/></center></a>";        
        }         
     }  
}  
else  
{  
    ?>  
 
  <br> <h1 align="center"><b>Регистрация</b></h1>  <br>
 
   <p align="center">Пожалуйста заполните информацию ниже:</p>  <br>
 
    <form method="post" action="admregistr.php" name="registerform" id="registerform" align="center">  
    <fieldset>  
		<label for="Surname">&nbsp;Фамилия:*&nbsp;&nbsp;</label><input type="text" name="Surname" id="Surname" placeholder="Фамилия"><br> 
	    <label for="Name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Имя:*&nbsp;&nbsp;</label><input type="text" name="Name" id="Name" placeholder="Имя"> <br>
		<label for="Lastname">&nbsp;&nbsp;Отчество:*&nbsp;&nbsp;</label><input type="text" name="Lastname" id="Lastname" placeholder="Отчество"> <br>
		<label for="addres">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Адрес:*&nbsp;&nbsp;</label><input type="text" name="addres" id="addres" placeholder="Адрес"> <br>
		<label for="phone">&nbsp;&nbsp;&nbsp;Телефон:*&nbsp;&nbsp;</label><input type="text" name="phone" id="phone" placeholder="Контактный номер"> <br>
		<label for="email">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:*&nbsp;&nbsp;</label><input type="text" name="email" id="email" placeholder="Email"> <br>
        <label for="username">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Логин:*&nbsp;&nbsp;</label><input type="text" onkeyup="return proverka(this)" name="username" id="username" placeholder="Логин"><br>  
        <label for="password">&nbsp;&nbsp;&nbsp;&nbsp;Пароль:*&nbsp;&nbsp;</label><input type="password" onkeyup="return proverka(this)" name="password" id="password" placeholder="Пароль"><br>  <br>  
        <input type="submit" name="register" id="register" value="Зарегистрироваться">  
         <br> <br>  <p> * - поля,обязательные для заполнения</p>
 <script type="text/javascript"> 
function proverka(input) { 
    var value = input.value; 
    var rep = /[-\+\*\ \!\@\#\$\=\%\^\&\(\<\)\>\?\.\,\~\№\;":']/; 
    if (rep.test(value)) { 
        value = value.replace(rep, ''); 
        input.value = value; 
    } 
} 
</script> 
</fieldset>  
    </form>
   <?php  
}  ?>
</div>
  <div class="clearfix"></div>
		 </div>
<div class="footer2">	
	 	      <div class="col-md-8 ftr2-bottom">		
			<p>Все права защищены &copy<?php echo date("Y") ?>.  Копирование материалов допускается только с указанием активной ссылки на сайт <a href="index.php">AUTO GARAGE</a></p>
	 </div>
</div>


</body>
</html>