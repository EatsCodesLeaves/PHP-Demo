<?php
    require_once(dirname(__DIR__, 1) . "\config\database.php");

    $db = new Database();
    $conn = $db->connect();

    $db->changePassword($_POST['username'], $_POST['password'], $_POST['new-password']);    // if user submitted username/password/new-password form, try to change the user's password to the new password
?>