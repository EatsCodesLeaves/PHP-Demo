<?php require_once("./background/changePass.php") ?>

<!DOCTYPE html>
<html>
<head>
	<title> Edit account</title>
	<link rel="stylesheet" a href="css\style.css">
</head>
<body>
	<div class="container">
    <img src="https://cdn-icons-png.flaticon.com/512/16/16484.png" alt="Accounts!" width="500" height="600">
    <form method="POST" action="#">
        <div class="form-input">
            <input type="text" name="username" placeholder="Please enter your username"/>	
        </div>
        <div class="form-input">
            <input type="password" name="password" placeholder="Please enter your current password"/>
        </div>
        <div class="form-input">
            <input type="text" name="new-password" placeholder="Please enter your desired password"/>	
        </div>
        <input class="btn-insert" type="submit" name="submit" value="Change password"/>
        <br>
        <a href="demo.php">Return to login screen</a>
    </form>
	</div>
</body>
</html>