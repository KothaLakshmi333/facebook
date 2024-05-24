function submitForm() {
   var post = $('input[name=posting]').val();
   if (post != '') {
      var formData = {
         post: post
      };


      $.ajax({
         url: "facebook/action.php",
         type: 'POST',
         data: formData,
         success: function (response) {

            $('.field').val('');
            console.log(response)
            var html = `
             <div class="postCard">
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
   var postCard = element.closest('.postCard');
   if (!postCard) {
      console.error('Post card not found.');
      return;
   }


   var postid = postCard.querySelector(".post-data").getAttribute('data-post');

   $.ajax({
      url: "facebook/like.php",
      type: 'GET',
      data: {
         postid: postid
      },
      success: function (response) {


         var res = JSON.parse(response);

         var html1 = $(element).closest('.postCard').find('.likecard').html(res.message);
         var post1Element = $(element).closest('.postCard');


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
function commentForm(element){
  var postCard = element.closest('.postCard');
  var commentSymbol=postCard.querySelector('.fa-comment');
  commentSymbol.style.color="blue";
  var commentSection = postCard.querySelector('.commentSection');
  commentSection.style.display="block";
  
  var postCardHeight = postCard.scrollHeight;
  var commentSectionHeight = commentSection.scrollHeight;
  var totalHeight = postCardHeight + commentSectionHeight;


   postCard.style.height = totalHeight + "px";

}
function closecommentForm(element){
  var postCard = element.closest('.postCard');
  postCard.style.height = "210px";
  var commentSymbol=postCard.querySelector('.fa-comment');
  commentSymbol.style.color="black";
  var commentSection = postCard.querySelector('.commentSection');
  commentSection.style.display="none";

}

function submitCommentForm(element) {
  var postCard = element.closest('.postCard');
  var commentInput = postCard.querySelector('input[name=commenting]');
  var comment = commentInput.value;
  var postId = postCard.querySelector('.post-data').getAttribute('data-post');
  console.log(postId);
  if (comment != '') {
     var formData = {
        comment: comment,
        postId: postId
     };
     $.ajax({
        url: "facebook/comment.php",
        type: 'POST',
        data: formData,
        success: function (response) {
           
           $('.field').val('');
           console.log(response);
           var commentsDiv = postCard.querySelector('.allComments');
           var newCommentDiv = document.createElement('div'); 
           newCommentDiv.classList.add('comments'); 
           var newCommentP = document.createElement('p');
           newCommentP.textContent =comment;
           newCommentDiv.appendChild(newCommentP); 
           commentsDiv.appendChild(newCommentDiv); 
           var commentSection = postCard.querySelector('.commentSection');
           var commentSectionHeight = commentSection.scrollHeight;
           var newHeight = 210 + commentSectionHeight; 
           postCard.style.height = newHeight + "px";
        }
     });
  } else {
     alert("please fill something");
  }
}
const notification= function() {
  document.querySelector(".fa-bell").style.color= "blue";
  document.querySelector(".suggestions").style.display="block";
}
const closenotification= function() {
  document.querySelector(".fa-bell").style.color= "black";
  document.querySelector(".suggestions").style.display="none";
}