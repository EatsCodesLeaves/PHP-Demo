<?php
    require_once(dirname(__DIR__, 1) . "\config\database.php");

    $db = new Database();
    $conn = $db->connect();

    $db->renameUser($_POST['username'], $_POST['password'], $_POST['new-username']); // if user submitted username/password/new-username form, try to change the user's username to the new username

?>