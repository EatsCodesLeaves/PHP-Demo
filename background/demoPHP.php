<?php 
    require_once(dirname(__DIR__, 1) . "\config\database.php");

    $db = new Database();
    $conn = $db->connect();

    $db->logoutUser();  //remove cookie after signing out -> returning to login screen

    $db->loginUser($_POST['username'], $_POST['password']);

    // if(isset($_POST['username'])){
        
    //     $username=$_POST['username'];
    //     $password=$_POST['password'];
        
    //     $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    //     $passwordQuery="SELECT * FROM `loginform` WHERE User='$username' LIMIT 1";
        
    //     $result = mysqli_query($conn, $passwordQuery, MYSQLI_STORE_RESULT);
        
    //     $result = mysqli_fetch_array($result);

    //     if (password_verify($password, $result["Password"])) {
    //         setcookie("username", "$username", time() + 86400, "/");
    //         header('Location: success.php?login=success');
    //     } else {
    //         header('Location: failure.php?login=fail');
    //     }

    // }
?>