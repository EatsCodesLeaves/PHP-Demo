<?php
    require_once(dirname(__DIR__, 1) . "\config\database.php");

    $db = new Database();
    $conn = $db->connect();

    if (isset($_POST['submit'])) {
        $db->deleteUser($_COOKIE['username']);
    }

    // if(isset($_COOKIE['username'])){

    //     echo "deleting...";
        
    //     $username=$_COOKIE['username'];

    //     $sql="DELETE FROM `loginform` WHERE User='$username'";
        
    //     $result = mysqli_query($conn, $sql, MYSQLI_STORE_RESULT);

    //     if ($result) {
    //         header('Location: demo.php');
    //     } else {
    //         header('Location: failure.php?delete=fail');
    //     }

    // }
?>