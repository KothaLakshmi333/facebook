<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>facebook</title>
      <link rel="shortcut icon" href="./facebook/images/fb.png" type="image/x-icon">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
         integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
         crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="./facebook/clone.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="./facebook/script.js"></script>
   </head>
   <body>
      <div class="nav">
         <div class="nav-left">
            <img src="./facebook/images/fb.png" alt="Logo">
            <input type="text" placeholder="Search facebook..">
         </div>
         <div class="nav-middle">
            <a href="index.php" class="active">
            <i class="fa fa-home"></i>
            </a>
            <a href="#">
            <i class="fa fa-user-friends"></i>
            </a>
            <a href="#">
            <i class="fa fa-play-circle"></i>
            </a>
            <a href="#">
            <i class="fa fa-users"></i>
            </a>
         </div>
         <div class="nav-right">
            <span class="profile"></span>
            <a href="#" class="notification">
            <i class="fa fa-bell" onclick=notification() ondblclick=closenotification()></i>
            </a>
            <a href="#">
            <i class="fas fa-ellipsis-h"></i>
            </a>
         </div>
      </div>
      <div class="suggestions">
         <div class="last">
            <i class="fas fa-ellipsis-h"></i>
         </div>
         <div class="notification">
            <h3>Notifications</h3>
            <div class="paras">
               <div class="para">
                  <p class="p">All</p>
               </div>
               <div class="side">
                  <p class="p">Unread</p>
               </div>
            </div>
         </div>
         <div class="new">
            <h3>New</h3>
            <div class="request">
               <div class="img">
                  <p><i class='fas'>&#xf0f3;</i></p>
                  <img src="./facebook/images/girl.jpg" alt="">
               </div>
               <div class="note">
                  <p>you have a new friend suggestion:<strong>Arjun</strong><br>
                     <span class="small">about an hour ago</span>
                  </p>
               </div>
            </div>
         </div>
         <div class="earlier">
            <h3>Earlier</h3>
            <div class="request">
               <div class="img">
                  <p><i class='fas'>&#xf0f3;</i></p>
                  <img src="./facebook/images/girl.jpg" alt="">
               </div>
               <div class="note">
                  <p>you have a new friend suggestion:<strong>Arjun</strong><br>
                     <span class="small">about an hour ago</span>
                  </p>
               </div>
            </div>
            <div class="request">
               <div class="img">
                  <p><i class='fas'>&#xf0f3;</i></p>
                  <img src="./facebook/images/girl.jpg" alt="">
               </div>
               <div class="note">
                  <p>you have a new friend suggestion:<strong>Arjun</strong><br>
                     <span class="small">about an hour ago</span>
                  </p>
               </div>
            </div>
            <div class="request">
               <div class="img">
                  <p><i class='fas'>&#xf0f3;</i></p>
                  <img src="./facebook/images/girl.jpg" alt="">
               </div>
               <div class="note">
                  <p>you have a new friend suggestion:<strong>Arjun</strong><br>
                     <span class="small">about an hour ago</span>
                  </p>
               </div>
            </div>
            <div class="request">
               <div class="img">
                  <p><i class='fas'>&#xf0f3;</i></p>
                  <img src="./facebook/images/girl.jpg" alt="">
               </div>
               <div class="note">
                  <p>you have a new friend suggestion:<strong>Arjun</strong><br>
                     <span class="small">about an hour ago</span>
                  </p>
               </div>
            </div>
            <div class="request">
               <div class="img">
                  <p><i class='fas'>&#xf0f3;</i></p>
                  <img src="./facebook/images/girl.jpg" alt="">
               </div>
               <div class="note">
                  <p>you have a new friend suggestion:<strong>Arjun</strong><br>
                     <span class="small">about an hour ago</span>
                  </p>
               </div>
            </div>
         </div>
      </div>
      </div>
      <div class="container">
         <div class="left-panel">
            <ul>
               <li>
                  <span class="profile"></span>
                  <p>Aashish Panthi</p>
               </li>
               <li>
                  <i class="fa fa-user-friends"></i>
                  <p>Friends</p>
               </li>
               <li>
                  <i class="fa fa-play-circle"></i>
                  <p>Videos</p>
               </li>
               <li>
                  <i class="fa fa-flag"></i>
                  <p>Pages</p>
               </li>
               <li>
                  <i class="fa fa-users"></i>
                  <p>Groups</p>
               </li>
               <li>
                  <i class="fa fa-bookmark"></i>
                  <p>Bookmark</p>
               </li>
               <li>
                  <i class="fab fa-facebook-messenger"></i>
                  <p>Inbox</p>
               </li>
               <li>
                  <i class="fas fa-calendar-week"></i>
                  <p>Events</p>
               </li>
               <li>
                  <i class="fa fa-bullhorn"></i>
                  <p>Ads</p>
               </li>
               <li>
                  <i class="fas fa-hands-helping"></i>
                  <p>Offers</p>
               </li>
               <li>
                  <i class="fas fa-briefcase"></i>
                  <p>Jobs</p>
               </li>
               <li>
                  <i class="fa fa-star"></i>
                  <p>Favourites</p>
               </li>
            </ul>
            <div class="footer-links">
               <a href="#">Privacy</a>
               <a href="#">Terms</a>
               <a href="#">Advance</a>
               <a href="#">More</a>
            </div>
         </div>
         <div class="middle-panel">
            <div class="story-section">
               <div class="story create">
                  <span class="dp-container">
                  <i class="fa fa-plus"></i>
                  </span>
                  <span class="name1">
                     <p>Create Story</p>
                  </span>
               </div>
               <div class="story1">
                  <div class="dp-container">
                     <img src="./facebook/images/girl.jpg" alt="">
                  </div>
                  <span class="name">Anuska <br> Sharma</span>
               </div>
               <div class="story2">
                  <span class="dp-container">
                  <img src="./facebook/images/dp.jpg" alt="Profile pic">
                  </span>
                  <span class="name">Gaurav <br>Gall</span>
               </div>
               <div class="story3">
                  <span class="dp-container">
                  <img src="./facebook/images/boy.jpg" alt="Profile pic">
                  </span>
                  <span class="name">Priyank <br>Saksena</span>
               </div>
               <div class="story4">
                  <span class="dp-container">
                  <img src="./facebook/images/model.jpg" alt="Profile pic">
                  </span>
                  <span class="name">Pragati <br>Adhikari</span>
               </div>
            </div>
            <div class="post create">
               <div class="dp">
                  <img src="./facebook/images/girl.jpg" alt="">
               </div>
               <form action=" " name="myform" class="clear">
                  <input class="field"type="text" placeholder="What's on your mind, Aashish ?" name="posting"/>
                  <button class="enter" type="button" onclick=submitForm() value="post" name="post" placeholder="post">
                  <i class='fas'>&#xf075;</i>
                  </button>
               </form>
               <div class="post-bottom">
                  <div class="action video">
                     <i class="fa fa-video" onclick=video()></i>
                     <span>Live video</span>
                  </div>
                  <div class="action photo">
                     <i class="fa fa-image" onclick=photos()></i>
                     <span>Photo/Video</span>
                  </div>
                  <div class="action activity">
                     <i class="fa fa-smile" onclick=activity()></i>
                     <span>Feeling/Activity</span>
                  </div>
               </div>
            </div>
            <div class="cards">
               <?php
                  $db = mysqli_connect("localhost", "root", "", "project");
                  
                  if ($db->connect_error) {
                      die("Connection failed: " . $db->connect_error);
                  }
                  
                  $querr = "SELECT * FROM posts";
                  $queryy = mysqli_query($db, $querr);
                  
                  if (mysqli_num_rows($queryy) > 0) {
                      while ($row = mysqli_fetch_assoc($queryy)) {
                          $posting[] = $row["posting"];
                          $id[] = $row["id"];
                      }

                  $commentquerry = "SELECT * FROM comments";
                  $ifcommentquerry = mysqli_query($db, $commentquerry);


                  
                      foreach ($posting as $key => $value) {
                          $userId = $_SESSION["userid"];
                          $postId = $id[$key];
                  
                          // Check if the session user has liked the post
                          $check_query = "SELECT * FROM post_likes WHERE post_id = '$postId' AND user_id = '$userId'";
                          $check_result = mysqli_query($db, $check_query);
                          $userLiked = mysqli_num_rows($check_result) == 1;
                  
                          $thumbsUpColor = $userLiked ? 'blue-text' : 'white-text';
                          $response = $userLiked ? "You have liked this post." : "You have unliked this post.";
                  
                          // Fetch like count for the post
                          $count_query = "SELECT COUNT(*) AS like_count FROM post_likes WHERE post_id = '$postId'";
                          $count_result = mysqli_query($db, $count_query);
                          $count_row = mysqli_fetch_assoc($count_result);
                          $like_count = $count_row['like_count'];
                  
                          // Get the comments of users who commented for the posts
                          $commentQuery = "SELECT comment FROM comments WHERE post_id = '$postId'";
                          $commentResult = mysqli_query($db, $commentQuery);
                          
                  
                  
                          echo '
                          <div class="postCard">
                              <div class="dp">
                                  <img src="./facebook/images/girl.jpg" alt="">
                              </div>
                              <div class="post-info">
                                  <p><strong>Anuska Sharma</strong> <br>12 hrs ago </p>
                              </div>
                              <div class="last">
                                  <i class="fas fa-ellipsis-h"></i>
                              </div>
                              <div class="post-data" data-post="' . $postId . '">
                                  <p>' . $value . '<p>
                              </div>
                              <div class="post-bottom">
                                  <div id="btn" value="like">
                                      <i class="far fa-thumbs-up ' . $thumbsUpColor . '" onclick="likedPost(this)"></i>
                                      <span class="like_count"> ' . $like_count . ' Likes</span>
                                  </div>
                                  <div class="comment">
                                      <i class="far fa-comment" onclick=commentForm(this)  ondblclick=closecommentForm(this)></i>
                                      <span>Comment</span>
                                  </div>
                                  <div class="share">
                                      <i class="fa fa-share" onclick="share()"></i>
                                      <span>Share</span>
                                  </div>
                              </div>
                              <div class="likecard">';
                          
                          // Display the like message only for the session user
                          if ($userLiked) {
                              echo $response;
                          }
                          echo '</div>
                                <div class="commentSection">  
                                     <div class="allComments">';
                                     while ($commentRow = mysqli_fetch_assoc($commentResult)) {
                                       echo '<p>' . htmlspecialchars($commentRow['comment']) . '</p>';
                                   }
                               
                                   echo '

                                      </div>
                                       
                                          <form action=" " name="myform" class="clear">
                                              <input class="field"type="text" placeholder="write a comment.." name="commenting"/>
                                              <button class="enter" type="button" onclick=submitCommentForm(this) value="comment" name="comment" placeholder="post">
                                                  <i class="fas">&#xf075;</i>
                                              </button>
                                          </form>
                                          <p><br></p>

                                 </div>
                          </div>';
                          
                      }
                  }
                  ?>
            </div>
            <div class="post2">
               <div class="post-top">
                  <div class="dp">
                     <img src="./facebook/images/dp.jpg" alt="">
                  </div>
                  <div class="post-info">
                     <p>
                        <srong>Ramesh GC</srong>
                        <br>2 days ago
                     </p>
                  </div>
                  <div class="last">
                     <i class="fas fa-ellipsis-h"></i>
                  </div>
               </div>
               <div class="line">
                  <p>Mountains are so cool</p>
               </div>
               <div class="post-content">
                  <img src="./facebook/images/mountains.jpg" />
               </div>
               <div class="post-bottom">
                  <div class="like1">
                     <i class="far fa-thumbs-up" onclick=like1()></i>
                     <span>Like</span>
                  </div>
                  <div class="comment1" >
                     <i class="far fa-comment" onclick=comment1()></i>
                     <span>Comment</span>
                  </div>
                  <div class="share1">
                     <i class="fa fa-share" onclick=share1()></i>
                     <span>Share</span>
                  </div>
               </div>
            </div>
            <div class="post3">
               <div class="dp">
                  <img src="./facebook/images/boy.jpg" alt="">
               </div>
               <div class="post-info">
                  <p><strong>Priyank Saksena</strong><br>1 week ago</p>
               </div>
               <div class="last">
                  <i class="fas fa-ellipsis-h"></i>
               </div>
               <div class="line">
                  <p>Happy birthday jessy</p>
               </div>
               <div class="post-content">
                  <img src="./facebook/images/girl_with_light.jpg" alt="Mountains">
               </div>
               <div class="post-bottom">
                  <div class="like2">
                     <i class="far fa-thumbs-up"onclick=like2()></i>
                     <span>Like</span>
                  </div>
                  <div  class="comment2">
                     <i class="far fa-comment" onclick=comment2()></i>
                     <span>Comment</span>
                  </div>
                  <div class="share2">
                     <i class="fa fa-share" onclick=share2()></i>
                     <span>Share</span>
                  </div>
               </div>
            </div>
            <div class="post4">
               <div class="dp">
                  <img src="./facebook/images/model.jpg" alt="">
               </div>
               <div class="post-info">
                  <p><strong>Pragati Adhikari</strong><br>5 mins ago</p>
               </div>
               <div class="last">
                  <i class="fas fa-ellipsis-h"></i>
               </div>
               <div class="line">
                  <p>Hey, everybody! My new shoes are here</p>
               </div>
               <div class="post-content">
                  <img src="./facebook/images/shoes.jpg" alt="Shoes">
               </div>
               <div class="post-bottom">
                  <div class="like3">
                     <i class="far fa-thumbs-up" onclick=like3()></i>
                     <span>Like</span>
                  </div>
                  <div class="comment3">
                     <i class="far fa-comment" onclick=comment3()></i>
                     <span>Comment</span>
                  </div>
                  <div class="share3">
                     <i class="fa fa-share" onclick=share3()></i>
                     <span>Share</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="friends-section">
            <div class="right-panel">
               <div class="pages-section">
                  <h4>Your pages</h4>
                  <a class='page' href="#">
                     <div class="dp">
                        <img src="./facebook/images/fb.png" alt="">
                     </div>
                     <p>Cody</p>
                  </a>
                  <a class='page' href="#">
                     <div class="dp">
                        <img src="./facebook/images/dp.jpg" alt="">
                     </div>
                     <p >Cody Tutorials</p>
                  </a>
               </div>
               <h4>Friends</h4>
               <a class='friend' href="#">
                  <div class="dp">
                     <img src="./facebook/images/boy.jpg" alt="">
                  </div>
                  <p>Henry Mosely</p>
               </a>
               <a class='friend' href="#">
                  <div class="dp">
                     <img src="./facebook/images/shoes.jpg" alt="">
                  </div>
                  <p >George</p>
               </a>
               <a class="friend" href="#">
                  <div class="dp">
                     <img src="./facebook/images/boy.jpg" alt="">
                  </div>
                  <p >Aakash Malhotra</p>
               </a>
               <a class="friend" href="#">
                  <div class="dp">
                     <img src="./facebook/images/model.jpg" alt="">
                  </div>
                  <p>Ragini Khanna</p>
               </a>
               <a class="friend" href="#">
                  <div class="dp">
                     <img src="./facebook/images/boy.jpg" alt="">
                  </div>
                  <p>Justin Bieber</p>
               </a>
               <a class="friend" href="#">
                  <div class="dp">
                     <img src="./facebook/images/dp.jpg" alt="">
                  </div>
                  <p>Ramesh GC</p>
               </a>
               <a class="friend" href="#">
                  <div class="dp">
                     <img src="./facebook/images/model.jpg" alt="">
                  </div>
                  <p>Sajita Gurung</p>
               </a>
            </div>
         </div>
      </div>
      </div>
   </body>
</html>