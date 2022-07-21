<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clicks</title>
</head>
<body>
  <a href="index1.html">Домашняя страница </a>
  <h1>Считаем щелчки</h1>
  <form>
     <button>Clicks</button>
  </form>
     <?php
       //$i = $i + 1;
       
      //  if (isset($_SESSION["clicks"]))
      //  $i = $_SESSION["clicks"] ;
      //  else
      //  $i = 0;
      //  $i++;
       
      //  echo "<h2>Число щелчков: $i </h2>";
      //  $_SESSION["clicks"] = $i;
      // - код для работы сессии с хранением информации на сервере

      if (isset($_COOKIE["clicks"]))
       $i = $_COOKIE["clicks"] ;
       else
       $i = 0;
       $i++;
       echo "<h2>Число щелчков: $i </h2>";
       setcookie ("clicks" , $i);

       
       // - код для работы сессии с хранением информации на клиенте (файлы coocie)
       $_SESSION["clicks"] =  $i;

     ?>
</body>
</html>