<html>
  <head>
  <title>Demo php</title>
   <meta charset="utf-8"/>
  </head>
  
  <body>
   <h1>Hello PHP</h1>
     <?php
       $x = 2;
	   $y = 2;
	   $z = $x + $y;
	   echo "<h2> Result: $z</h2>";
     
	  date_default_timezone_set("Europe/Moscow");
	  $now = date("H:i:s"); 
	  echo "<h1> Page opened at $now</h1>";
	 ?>
	 
	 
	 <p>Введите здесь число, и мы его удвоим:
	 <a href="index1.html">Домашняя страница </a>
	 <form action="doubler.php">
	   <input type "text" name="data" />
	   <button>Отправить данные на удвоение</button>
	 </form>
	 
	 
   </body>
</html>
