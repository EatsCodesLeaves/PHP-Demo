<?php
    class Database {
        private $host="localhost";
        private $rootUser="root";
        private $rootPass="";
        private $db="";
        private $conn;

        public function connect () {
            $this->conn = mysqli_connect($this->host, $this->rootUser, $this->rootPass);
            mysqli_select_db($this->conn, $this->db);
            return $this->conn;
        }

        public function loginUser ($username, $password) {
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

        public function logoutUser () {
            if (isset($_COOKIE['username'])) {  //remove cookie after signing out -> returning to login screen
                unset($_COOKIE['username']); 
                setcookie('username', null, -1, '/'); 
            }
        }

        public function createUser ($username, $password) {
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

        public function deleteUser ($username) {
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

        public function renameUser ($username, $password, $newUsername) {
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

        public function changePassword ($username, $password, $newPassword) {
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