<?php 

    $host="localhost";
    $rootUser="root";
    $rootPass="";
    $db="";

    $mysqlConnect = mysqli_connect($host, $rootUser, $rootPass);
    mysqli_select_db($mysqlConnect, $db);

    if(isset($_POST['username'])){
        
        $username=$_POST['username'];
        $password=$_POST['password'];
        
        $sql="SELECT * FROM loginform WHERE User='$username' AND Password='$password' LIMIT 1";
        
        $result=mysqli_query($mysqlConnect, $sql, MYSQLI_STORE_RESULT);
        
        echo $result == false;
        if($result && mysqli_num_rows($result)==1){
            echo " You have successfully logged in";
            exit();
        }
        else{
            echo " You have entered incorrect password or username";
            exit();
        }
            
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="css\style.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<body>
	<div class="container">
    <form method="POST" action="#">
        <div class="form-input">
            <input type="text" name="username" placeholder="Enter the Username"/>	
        </div>
        <div class="form-input">
            <input type="password" name="password" placeholder="password"/>
        </div>
        <input type="submit" type="submit" value="LOGIN" class="btn-login"/>
    </form>
	</div>
</body>
</html>