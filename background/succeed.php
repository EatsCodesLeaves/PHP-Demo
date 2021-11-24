<?php

    if ($_GET['login'] =='success') {   // Generate success message based on which action succeeded
        echo "<H1 style='text-align:center;'>You have successfully logged in!<br><a href=\"changeName.php\">Click here to change account name</a><br><a href=\"changePassword.php\">Click here to change account password</a><br><a href=\"demo.php\">Sign out</a><br><a href=\"removeAccount.php\">Delete account</a></H1>";
    } else if (isset($_GET['create']))  {
        echo "<H1 style='text-align:center;'>You have successfully created a new account!<br><a href=\"demo.php\">Sign out</a></H1>";
    } else if (isset($_GET['change'])) {
        echo "<H1 style='text-align:center;'>You have successfully changed your account information!<br><a href=\"demo.php\">Sign out</a></H1>";
    }
?>