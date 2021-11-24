<?php
    if (isset($_GET['login'])) {   // Generate failure message based on which action failed
        echo "<H1 style='text-align:center;'>Login failed. You have entered incorrect password or username<br><a href=\"demo.php\">Return to login screen</a></H1>";
    } else if (isset($_GET['create']))  {
        echo "<H1 style='text-align:center;'>Account creation failed. Username already exists<br><a href=\"demo.php\">Return to login screen</a></H1>";
    } else if (isset($_GET['change'])) {
        echo "<H1 style='text-align:center;'>Account information modification failed. Invalid password or username<br><a href=\"demo.php\">Return to login screen</a></H1>";
    } else if (isset($_GET['delete'])) {
        echo "<H1 style='text-align:center;'>Account deletion failed.<br><a href=\"demo.php\">Return to login screen</a></H1>";
    }
?>