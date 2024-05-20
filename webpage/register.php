<?php
  session_start();
  require './connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      

.identity{
    display:flex;
}
.identity input{
    width: 200px;
    height:30px;
    margin-left:5px;
    margin-right:5px;
    outline:none;
    border:2px solid #ccc;
    font-size: 15px;
    border-radius: 5px;
}
.credentials{
    display:flex;
    flex-direction: column;
}
.credentials input{
    width: 430px;
    height:30px;
    padding:0px ;
    outline:none;
    border:1px solid #ccc;
    font-size: 18px;
    border-radius: 5px;

}
.credentials label{
    display:flex;
    flex-direction: row;
}
.credentials label input{

    border:1px solid #ccc;
    border-radius: 6px;

}
.terms{
    font-size:14px;
}
input[type="submit"]{
    color: #fff;
    font-size: 18px;
    width:200px;
    height: 36px;
    padding: 0 32px;
    background-color:#00a400;
    text-align: center;
    justify-content: center;
    margin-left: 25%;
    outline: none;
    border:1px solid #ccc;
    border-radius: 6px;
}
form label{
    width: 450px;
    height:40px;
    padding:0px ;
    outline:none;
    border:1px solid #ccc;
    font-size: 18px;
    border-radius: 5px;
}
form label input{
    width:100px;
    border-radius: 6px;
    border:1px solid #ccc;
    margin-left:20px;
}
    </style>
</head>
<body style="height: 100%;">
    <div class="signup" style="height:500px;width:450px;background-color: aqua;position:relative;    background-color: white;
    box-shadow: 0px 1px 3px #ccc;padding-left:10px;margin-top:10%;margin-left:30%;
    justify-content: center;">
        <div class="top">
            <p><strong style="font-size: 25px;">Sign Up</strong><br>It's quick and easy</p>
        </div>
    
    <hr>
    <form action="signup.php" method="POST">
        <div class="identity">
        <input type="text" placeholder="Firstname" name="firstname"><br>
        <input type="text" placeholder="Surname" name="surname">
        </div>
        <div class="credentials">
        <br>
        <input type="email" placeholder="Email" name="email">
        <br>
        <input type="password" placeholder="Password"  name="password">
        <br>
        <input type="date" placeholder="date of birth" name="date">
        <br>
        </div>
        <label for="gender">gender:<td>male<input type="radio" value="male" name="gender" id="gender"></td>
        <td>female<input type="radio" name="gender" value="female" id="gender"></td></label>
        <br>
        <div class="terms">
        <p>People who use our service may have uploaded your contact information to <br> Facebook. Learn more.</p>
        <p>By clicking Sign Up, you agree to our Terms, Privacy Policy and Cookies <br>Policy. You may receive SMS notifications from us and can opt out at any<br> time.</p>
        </div>
        <input type="submit" value="signup" name="signup"/>
    </form>
                   
</div>
</body>
</html>