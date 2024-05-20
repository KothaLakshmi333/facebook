<?php
session_start();
require 'connection.php';
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    if (empty($email)) { echo '<script>
        alert("email is required")
        </script>'; 
    }
    if (empty($password)) { echo '<script>
        alert("password is required")
        </script>'; 
    }

    $sql="select * from users where email = '$email' and password = '$password'";
    $result = mysqli_query($db,$sql);
    if(mysqli_num_rows($result) == 1){
        
        $row =mysqli_fetch_assoc($result);
        $_SESSION["userid"] = trim($row["id"]);
        $_SESSION["firstname"] = trim($row["firstname"]);
        require './facebook/clone.php';
    }
    else{
        echo '<script>
        window.location.href = "index.php";
        alert("Login failed. Invalid username or password !!!")
        </script>';
    }
}

?>