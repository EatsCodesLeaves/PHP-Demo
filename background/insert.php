<?php
    require_once(dirname(__DIR__, 1) . "\config\database.php");

    $db = new Database();
    $conn = $db->connect();

    $db->createUser($_POST['username'], $_POST['password']);    // if user submitted username/password form, insert a new user with 'username' and 'password'

?>