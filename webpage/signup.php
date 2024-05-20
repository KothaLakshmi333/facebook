<?php
session_start();

require 'connection.php';

if(isset($_POST['signup'])){
    $firstname=$_POST['firstname'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $date=date('y-m-d', strtotime($_POST['date']));
    $gender=$_POST['gender'];
    

    if (empty($firstname)) { echo '<script>
        alert("firstname is required")
        </script>'; 
    }
    if (empty($surname)) { echo '<script>
            alert("surname is required")
            </script>';
    }
    if (empty($email)) { echo '<script>
                alert("email is required")
                </script>'; 
    }
    if (empty($password)) { echo '<script>
        alert("password is required")
        </script>'; 
    }
    if (empty($date)) { echo '<script>
        alert("date is required")
        </script>'; 
    }
    if (empty($gender)) { echo '<script>
        alert("date is required")
        </script>'; 
    }


    $sql="select * from users where email = '$email'";
    $result = mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);
    if($count==1){
        echo '<script>
        window.location.href = "register.php";
        alert("email already exit!!!")
        </script>';
    }
    if($count==0){
      $query ="INSERT INTO users (firstname,surname,email,password,date,gender) 
      VALUES ('$firstname','$surname','$email','$password','$date','$gender')";
      $query_run = mysqli_query($db,$query);
      
      if($query_run){
        echo '<script>
        window.location.href = "index.php";
        alert("successfully registered!!!")
        </script>';
      }
        
    }
    else{
        echo '<script>
        window.location.href = "register.php";
        alert("Login failed.credentials wrong!!!")
        </script>';
    }
  
}



