<html>
	<head>
            <title>Регистрация на сайте</title>
            <meta charset="utf-8" />
		<style>
			input, button{
				width: 250px;
				margin: 5px;
				text-align: center;
			}
		</style>	
    </head>
	
	<body>

        </form>
		<a href="index1.html">Домашняя страница</a>
		<h1> Регистрация новго пользователя </h1><br /><br />
        <h8> Введите Ваш E-mail:</h8>
		    <form method="POST">
     		<input type="text" name="txtEmail" placeholder="Ваша эл.почта"/> <br />
        <h8> Введите Ваш Логин</h8> <br />
			<input type="text" name="txtlogin" placeholder="Ваш логин" /> <br />
        <h8> Введите Ваш Пароль:</h8> <br />
			<input type="password" name="txtPwdHash" placeholder="Ваш пароль" /> <br /><br />
			<button>Зарегистрироваться!</button> <br /><br /><br /><br /><br />
            <P ALIGN="RIGHT">Автор: Терехин Дмитрий  </p>
        </form>
	</body>   

    <?php
	 
	if  (isset ($_REQUEST["txtEmail"] ))  {  
		echo '<meta http-equiv="refresh" content="5; url=login.php" />';
		
	
		$Email = $_REQUEST["txtEmail"];
		$login = $_REQUEST["txtlogin"];
		$pwd = $_REQUEST["txtPwdHash"];
	// echo $login;
		$hash = hash ("sha256", $pwd);
       
	// echo "<h1> Привет, $login</h1>";

		$conn = mysqli_connect("localhost:3306","root","","cyb4");
		// $sql = "INSERT INTO users (login,PwdHash,Email) VALUES ('$login', '$hash','$Email')";
    //  echo $sql; // итог ЭХО - ВСТАВИТЬ В ПОЛЬЗОВАТЕЛЕЙ (login,PwdHash,Email) ЗНАЧЕНИЯ ('TDS','e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855','terexinds@mail.ru')
		$sql = "INSERT INTO users(Login,PwdHash,Email) Values ('$login', '$hash','$Email')";
		mysqli_query($conn,$sql);
		mysqli_close($conn);





		
	    // $sql = "INSERT INTO users (login,PwdHash,Email) VALUES (?, ?, ?)";

		// $stat = mysqli_prepare ($conn, $sql);
		// mysqli_stmt_bind_param($stat, "sss", $login, $hash, $Email);
		// mysqli_stmt_execute($stat);
		// $result = mysqli_stmt_get_result($stat);
		// $numRows = mysqli_num_rows($result);
		
		// SqlCommand command = connection.CreateCommand();
		// command.CommandText = "insert into dbo.Table (val1,val2,txt) values (@val1,@val2,@txt)";
		// command.AddParameterWithValue( "val1", value1 );
		// command.AddParameterWithValue( "val2", value2 );
		// command.AddParameterWithValue( "txt", text );

		// $query = "INSERT INTO users (login,PwdHash,Email) VALUES (:name,:pwd,:email)";
		// $statement = $pdoDatabaseHandle->prepare($query);
		// $statement->bindValue(':name',$login);
		// $statement->bindValue(':pwd',$hash);
		// $statement->bindValue(':email',$Email);
		// $statement-execute();

		// $query = mysqli_query($conn, $sql);
		// mysqli_close($conn);
		
	 
		die("Пользователь зарегестрирован! Вы будете перенаправлены на страницу входа");
	}
	
?>

</html>

