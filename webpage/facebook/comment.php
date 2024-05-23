<?php 
session_start();
$db = mysqli_connect('localhost', 'root', '', 'project');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

    if(isset($_POST['comment']) && isset($_POST['postId'])){
        $userid=$_SESSION["userid"];
        $postid =$_POST['postId'];
        $querr =mysqli_query($db,"INSERT INTO comments (comment,user_id,post_id) 
        VALUES (' ".addslashes($_POST['comment'])." ',' ".$userid." ',' ".$postid." ')");
           if ($querr) {
    
                 $response = $_POST['comment'];
        }
        echo $response;
    }