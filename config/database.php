<?php
    class Database {
        private $host="localhost";
        private $rootUser="root";
        private $rootPass="";
        private $db="";
        private $conn;

        public function connect () { // connect to a database given the root user's username and password + host name and database name
            $this->conn = mysqli_connect($this->host, $this->rootUser, $this->rootPass);
            mysqli_select_db($this->conn, $this->db);
            return $this->conn;
        }

        public function loginUser ($username, $password) { // tries to find an entry/row in the database corresponding to '$username' and '$password' and jumps to successful login page if successful, else jumps to failure page
            if(isset($username)){
        
                $sql="SELECT * FROM `loginform` WHERE User='$username' LIMIT 1";
                
                $result = mysqli_query($this->conn, $sql, MYSQLI_STORE_RESULT);
                
                $result = mysqli_fetch_array($result);
        
                if (password_verify($password, $result["Password"])) {
                    setcookie("username", "$username", time() + 86400, "/");
                    header('Location: success.php?login=success');
                } else {
                    header('Location: failure.php?login=fail');
                }
        
            }
        }

        public function logoutUser () {   // removes the global cookie holding on to the currently logged in user's username
            if (isset($_COOKIE['username'])) {
                unset($_COOKIE['username']); 
                setcookie('username', null, -1, '/'); 
            }
        }

        public function createUser ($username, $password) { //  tries to create an entry/row in the database corresponding to a new user in the database using '$username' and '$password' and jumps to successful login page if successful, else jumps to failure page
            if(isset($username)){
                
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                
                $sql = "INSERT INTO `loginform` (User, Password) VALUES ('$username', '$passwordHash')";
        
                $result = mysqli_query($this->conn, $sql, MYSQLI_STORE_RESULT);
        
                if ($result){
                    header('Location: demo.php');
                    exit();
                }
                else {
                    header('Location: failure.php?create=fail');
                    exit();
                }
        
            }
        }

        public function deleteUser ($username) { //  tries to delete the entry/row in the database corresponding to the user with the username '$username' and returns to login page if successful, else jumps to failure page
            if(isset($username)){
                $sql="DELETE FROM `loginform` WHERE User='$username'";
                
                $result = mysqli_query($this->conn, $sql, MYSQLI_STORE_RESULT);
        
                if ($result) {
                    header('Location: demo.php');
                } else {
                    header('Location: failure.php?delete=fail');
                }
        
            }
        }

        public function renameUser ($username, $password, $newUsername) { //   tries to find an entry/row in the database corresponding to  '$username'/'$password', then changes the User to '$newUsername' and jumps to successful login page if successful, else jumps to failure page
            if(isset($username)){
        
                $sql="SELECT * FROM `loginform` WHERE User='$username' LIMIT 1";
                
                $result = mysqli_query($this->conn, $sql, MYSQLI_STORE_RESULT);
                
                $result = mysqli_fetch_array($result);
        
                if (password_verify($password, $result["Password"])) {
                    $sql = "UPDATE loginform SET User='$newUsername' WHERE User='$username' LIMIT 1";
                    $result = mysqli_query($this->conn, $sql, MYSQLI_STORE_RESULT);
                    header('Location: success.php?change=success');
                } else {
                    header('Location: failure.php?change=fail');
                }
        
            }
        }

        public function changePassword ($username, $password, $newPassword) { //   tries to find an entry/row in the database corresponding to  '$username'/'$password', then changes the Password to '$newPassword' and jumps to successful login page if successful, else jumps to failure page
            if(isset($username)){
                $newPasswordHash = password_hash($newPassword, PASSWORD_DEFAULT);
                
                $sql="SELECT * FROM `loginform` WHERE User='$username' LIMIT 1";
                
                $result = mysqli_query($this->conn, $sql, MYSQLI_STORE_RESULT);
                
                $result = mysqli_fetch_array($result);
        
                if (password_verify($password, $result["Password"])) {
                    $sql = "UPDATE loginform SET Password='$newPasswordHash' WHERE User='$username' LIMIT 1";
                    $result = mysqli_query($this->conn, $sql, MYSQLI_STORE_RESULT);
                    header('Location: success.php?change=success');
                } else {
                    header('Location: failure.php?change=fail');
                }   
            }
        }

    }

?>