<?php
    require_once(dirname(__DIR__, 1) . "\config\database.php");

    $db = new Database();
    $conn = $db->connect();

    $db->renameUser($_POST['username'], $_POST['password'], $_POST['new-username']);

    // if(isset($_POST['username'])){
        
    //     $username=$_POST['username'];
    //     $password=$_POST['password'];
    //     $newUsername=$_POST['new-username'];
        
    //     $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    //     $sql="SELECT * FROM `loginform` WHERE User='$username' LIMIT 1";
        
    //     $result = mysqli_query($conn, $sql, MYSQLI_STORE_RESULT);
        
    //     $result = mysqli_fetch_array($result);

    //     if (password_verify($password, $result["Password"])) {
    //         $sql = "UPDATE loginform SET User='$newUsername' WHERE User='$username' LIMIT 1";
    //         $result = mysqli_query($conn, $sql, MYSQLI_STORE_RESULT);
    //         header('Location: success.php?change=success');
    //     } else {
    //         header('Location: failure.php?change=fail');
    //     }

    // }
?>