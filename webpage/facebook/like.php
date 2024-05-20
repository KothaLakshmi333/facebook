<?php 
session_start();
$db = mysqli_connect('localhost', 'root', '', 'project');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

if (isset($_GET['postid'])) {
    $postid = $_GET['postid'];
    $userid = $_SESSION["userid"];
    $_SESSION["postid"]= $postid;

    $response = array();

    // Check if the user has already liked the post
    $check_query = "SELECT * FROM posts AS data 
    LEFT JOIN post_likes AS likes ON likes.post_id = data.id 
    LEFT JOIN users AS person ON likes.user_id = person.id
    WHERE data.id = '$postid' AND likes.user_id = '$userid'";
    $check_result = mysqli_query($db, $check_query);

    if (mysqli_num_rows($check_result) == 1) {
        $delete_query = "DELETE FROM post_likes WHERE post_id = '$postid' AND user_id = '$userid'";
        $delete_result = mysqli_query($db, $delete_query);
        
        if ($delete_result) {
            $response['action'] = "unlike";
            $response['message'] = "You have unliked this post.";
        }
    } else {
        $querr = "INSERT INTO post_likes (user_id, post_id) VALUES ('$userid', '$postid')";
        $queryy = mysqli_query($db, $querr);

        if ($queryy) {
            $response['action'] = "like";
             $response['message']= "You have liked the post.";
        } else {
            $response['action'] = "error";
            $response['message'] = "Error occurred while processing your request.";
        }
    }

    $count_query = "SELECT COUNT(*) AS like_count FROM post_likes WHERE post_id = '$postid'";
    $count_result = mysqli_query($db, $count_query);

    if ($count_result) {
        $count_row = mysqli_fetch_assoc($count_result);
        $response['like_count'] = $count_row['like_count'];
    } else {
        $response['error'] = "Error occurred while counting likes.";
    }

    

    // Send the response back to the AJAX call
    echo json_encode($response);
} else {
    // If postid is not set, send an error response
    echo "Error: postid is not set.";
}
?>
