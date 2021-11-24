<?php 
    require_once(dirname(__DIR__, 1) . "\config\database.php");

    $db = new Database();
    $conn = $db->connect();

    $db->logoutUser();  // remove cookie after signing out / by returning to login screen

    $db->loginUser($_POST['username'], $_POST['password']); // if user submitted username/password form, try to log in using this info

?>