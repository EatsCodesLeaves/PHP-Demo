<?php require_once("./background/insert.php") ?>

<!DOCTYPE html>
<html>
<head>
	<title> Account creation</title>
	<link rel="stylesheet" a href="css\style.css">
</head>
<body>
	<div class="container">
    <img src="https://image.flaticon.com/icons/png/512/13/13732.png" alt="Accounts!" width="500" height="600">
    <form method="POST" action="#">
        <div class="form-input">
            <input type="text" name="username" placeholder="Please enter your username"/>	
        </div>
        <div class="form-input">
            <input type="password" name="password" placeholder="Please enter your password"/>
        </div>
        <input class="btn-insert" type="submit" name="submit" value="Create new account"/>
    </form>
    <a href="demo.php">Return to login screen</a>
	</div>
</body>
</html>