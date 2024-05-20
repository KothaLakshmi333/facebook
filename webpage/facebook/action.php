<?php 
session_start();
$db = mysqli_connect('localhost', 'root', '', 'project');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

    if(isset($_POST['post'])){
        $userid=$_SESSION["userid"];
        $querr =mysqli_query($db,"INSERT INTO posts (posting,user_id) 
        VALUES (' ".addslashes($_POST['post'])." ',' ".$userid." ')");
        $queryy = mysqli_query($db, "SELECT data.id AS post_id FROM posts AS data LEFT JOIN users AS person ON data.user_id = person.id WHERE person.id = $userid");


          // Check if the query was successful and rows were returned
           if ($queryy) {
    // Initialize an array to store the post IDs
              $postIDs = array();

    // Fetch associative array from the result set
                  while ($row = mysqli_fetch_assoc($queryy)) {
        // Access the 'id' column of the 'posts' table and store it in the array
                        $postIDs[] = $row['post_id'];
                     }

    // Store the post IDs array in the session
                 $_SESSION['postIDs'] = $postIDs;
                 $response = $_POST['post'];
        }

    }
 