<?php
    require_once(dirname(__DIR__, 1) . "\config\database.php");

    $db = new Database();
    $conn = $db->connect();

    if (isset($_POST['submit'])) {      // if user clicked 'delete' button, then delete the currently logged in user
        $db->deleteUser($_COOKIE['username']);
    }

?>