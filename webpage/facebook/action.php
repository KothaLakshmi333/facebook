<?php 
session_start();
// Connect to database
$db = mysqli_connect('localhost', 'root', '', 'project'); 

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error); 
}
// Check if form is submitted
    
    if(isset($_POST['post'])){
        $userid=$_SESSION["userid"];
        $querr =mysqli_query($db,"INSERT INTO posts (posting,user_id) 
        VALUES (' ".addslashes($_POST['post'])." ',' ".$userid." ')");
        $queryy = mysqli_query($db, "SELECT data.id AS post_id FROM posts AS data LEFT JOIN users AS person ON data.user_id = person.id WHERE person.id = $userid");

           if ($queryy) {
              $postIDs = array();

                  // Fetch post IDs
                  while ($row = mysqli_fetch_assoc($queryy)) {
                        $postIDs[] = $row['post_id'];
                     }

                 // Store the post IDs array in the session
                 $_SESSION['postIDs'] = $postIDs;
                 $response = $_POST['post'];
        }

    }
 