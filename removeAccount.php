<?php require_once("./background/delete.php") ?>

<!DOCTYPE html>
<html>
<head>
	<title> Delete Form</title>
	<link rel="stylesheet" a href="css\style.css">
</head>
<body>
	<div class="container">
    <img src="https://findicons.com/files/icons/1262/amora/128/delete.png" alt="Delete!" width="500" height="600">
    <form method="POST" action="#">
        <input class="btn-delete" type="submit" name="submit" value="Are you sure you want to delete this account?"/>
    </form>
    <a href="demo.php">Sign out</a>
</div>
</body>
</html>