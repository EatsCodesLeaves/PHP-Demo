<?php
    require_once(dirname(__DIR__, 1) . "\config\database.php");

    $db = new Database();
    $conn = $db->connect();

    $db->createUser($_POST['username'], $_POST['password']);
    // if(isset($_POST['username'])){
        
    //     $username=$_POST['username'];
    //     $password=$_POST['password'];
        
    //     $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        
    //     $insertQuery = "INSERT INTO `loginform` (User, Password) VALUES ('$username', '$passwordHash')";

    //     $result = mysqli_query($conn, $insertQuery, MYSQLI_STORE_RESULT);

    //     if ($result){
    //         header('Location: demo.php');
    //         exit();
    //     }
    //     else {
    //         header('Location: failure.php?create=fail');
    //         exit();
    //     }

    // }
?>