<?php
require './connection.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Facebook login page</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <div class="container">
         <div class="leftpart">
            <h1>facebook</h1>
            <p>Facebook helps you connect and share with the
               people in your life
            </p>
         </div>
         <div class="Rightpart">
            <div class="loginpage">
               <form action="login.php" method="POST">
                  <input type="email" placeholder="Email" name="email">
                  <input type="password" placeholder="Password"  name="password">
                  <input type="submit" value="login" name="submit"/>
               </form>
               <p>Forgot Password ?</p>
               <hr>
               <div class="createaccount">
                  <a href="register.php">Create new account</a>
               </div>
            </div>
            <span><a href="#">Create a Page</a> for a celebrity, brand or business.</span>
         </div>
      </div>
   </body>
</html>