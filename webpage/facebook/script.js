function submitForm() {
    var post = $('input[name=posting]').val();
    if (post != '') {
       var formData = {
          post: post
       };
 
 
       $.ajax({
          url: "http://localhost/files/login/facebook/action.php",
          type: 'POST',
          data: formData,
          success: function (response) {
 
             $('.field').val('');
             console.log(response)
             var html = `
              <div class="post1">
               <div class="dp">
                   <img src="./facebook/images/girl.jpg" alt="">
               </div>
               <div class="post-info">
                   <p><strong>Anuska Sharma</strong> <br>12 hrs ago </p>
                   
               </div >
               <div class="last">
                 <i class="fas fa-ellipsis-h"></i>
               </div>
                <div class="post-data">
                 <p class="statement">${post}<p>
                </div>
                 <div class="post-bottom">
               <div id="btn" value="like">
                   <i class="far fa-thumbs-up" onclick=likedpost(this)></i>
                   <span class="like_count">Likes</span>
               </div>
               <div class="comment">
                   <i class="far fa-comment" onclick=comment()></i>
                   <span>Comment</span>
               </div>
               <div class="share">
                   <i class="fa fa-share" onclick=share()></i>
                   <span>Share</span>
               </div>
           </div>
           <div class="likecard">
           </div>
         </div>`
             jQuery('.cards').prepend(html);
 
 
          }
 
       });
    } else {
       alert("please fill something")
    }
 
 }
 
 
 function likedPost(element) {
    var postCard = element.closest('.post1');
    if (!postCard) {
       console.error('Post card not found.');
       return;
    }
 
 
    var postid = postCard.querySelector(".post-data").getAttribute('data-post');
 
    $.ajax({
       url: "http://localhost/files/login/facebook/like.php",
       type: 'GET',
       data: {
          postid: postid
       },
       success: function (response) {
 
 
          var res = JSON.parse(response);
 
          var html1 = $(element).closest('.post1').find('.likecard').html(res.message);
          var post1Element = $(element).closest('.post1');
 
 
          jQuery(postCard).prepend(html1);
          post1Element.find('#btn .like_count').html(res.like_count + ' Likes');
 
 
          if (res.message === "You have unliked this post.") {
             jQuery(postCard).find(".fa-thumbs-up").addClass('white-text').removeClass('blue-text');
          } else {
             jQuery(postCard).find(".fa-thumbs-up").addClass('blue-text').removeClass('white-text');
          }
 
 
       }
 
    });
 
 }