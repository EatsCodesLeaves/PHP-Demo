<?php require_once("./background/demoPHP.php") ?>

<!DOCTYPE html>
<html>
<head>
	<title> Login Form</title>
	<link rel="stylesheet" a href="css\style.css">
</head>
<body>
	<div class="container">
    <img src="https://cdn.pixabay.com/photo/2017/06/22/10/04/lock-2430207_960_720.png" alt="Security!" width="500" height="600">
    <form method="POST" action="#">
        <div class="form-input">
            <input type="text" name="username" placeholder="Please enter your username"/>	
        </div>
        <div class="form-input">
            <input type="password" name="password" placeholder="Please enter your password"/>
        </div>
        <input class="btn-login" type="submit" name="submit" value="LOGIN"/>
    </form>
    <a href="createAccount.php">Create a new account</a>
	</div>
</body>
</html>