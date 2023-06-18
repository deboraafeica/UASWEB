<?php
	require_once 'database.php';
	
	session_start();
	
	$login_err = "";
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		$sql = "SELECT username, password FROM users WHERE username=?";
		$prepare = mysqli_prepare($conn, $sql);
		mysqli_stmt_bind_param($prepare, "s", $username);
		
		mysqli_stmt_execute($prepare);
		mysqli_stmt_store_result($prepare);
		
		if(mysqli_stmt_num_rows($prepare) == 1){		
			mysqli_stmt_bind_result($prepare, $user, $pass);
			mysqli_stmt_fetch($prepare);
			
			password_verify($password, $pass);
			$_SESSION['username'] =  $user;
			$_SESSION['logged_in'] =  true;
			
			header("Location:index.php");
		} else {
			$login_err = "Username/password is incorrect";
		}

	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <link rel="stylesheet" href="css/auth.css">

  <script src="https://kit.fontawesome.com/9338fcac57.js" crossorigin="anonymous"></script>
</head>
<body>

  <div class="container">
    <h2>Login</h2>

    <form method="POST" id="login">
	  <div class="errmsg" style="left:38%; font-size: 15px;"><?= $login_err ?></div>
	
      <label for="username">Username </label>
      <input type="text" class="form" name="username" placeholder="username" required autofocus>
      
      <label for="password">Password </label>
      <input type="password" class="form" name="password" placeholder="password" required>
	  
	  <button type="submit">Login</button>

      <a href="register.php">Create new account</a>
    </form>
  </div>

  <script src="js/index.js"></script>
</body>
</html>