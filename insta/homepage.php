
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpport" content="width=device-width, initial-scale=1.0">
    <title>FRIENDBOOK</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
    <script>
          $(document).ready(function () {
  $("#user2").click(function () {
    $('#myModal').modal('show'); 
  });
});
    </script>
    
</head>
<body>

    <nav class="navbar">
        <div class="nav-wrapper">
            <img src="img/logo5.png" class="brand-img" alt="">
            <input type="text" class="search-box" placeholder="search">
            <div class="nav-items">
                <img src="img/home.jpg" class="icon" alt="">
                <img src="img/messenger.png" class="icon" alt="">
                <img src="img/add.png" class="icon" alt="">
                <img src="img/explore.png" class="icon" alt="">
                <img src="img/like.png" class="icon" alt="">
                <div class="icon user-profile"></div>
            </div>
        </div>
    </nav>

    <section class="main">
        <div class="wrapper">
            <div class="left-col">
                <div class="status-wrapper">
                    <?php
                    for($i=0;$i<8;$i++){
                        echo '<div class="status-card">
                        <div class="profile-pic"><img src="img/profile'.$i.'.jpg" alt="" id="user2"></div>
                        <p class="username">user_name_'.$i.'</p>
                    </div>';
                    }
                    ?>
                    
                </div>
                <div class="post">
                    <div class="info">
                        <div class="user">
                            <div class="profile-pic"><img src="img/profile.jpg"></div>
                            <p class="username">manpreet.1305</p>
                        </div>
                        <img src="img/option.png" class="options" alt="">
                    </div>
                    <img src="img/post1.jpg" class="post-image" alt="">
                    <div class="post-content">
						<div class="reaction-wrapper">
							<img src="img/like.png" class="icon" alt="">
							<img src="img/comment.png" class="icon" alt="">
							<img src="img/send.png" class="icon" alt="">
							<img src="img/save.png" class="save icon" alt="">
						</div>
                        <p class="likes">12,221 likes</p>
                        <p class="description"><span>username </span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad libero temporibus, sapiente voluptatem facilis incidunt molestias dolorum perspiciatis cum soluta amet quam quos labore beatae hic voluptate iusto voluptatibus similique?</p>
                        <p class="post-time">2 minutes ago</p>
                    </div>
                    <div class="comment-wrapper">
                        <img src="img/smile.png" class="icon" alt="">
                        <input type="text" class="comment-box" placeholder="Add a comment">
						<button class="comment-btn">post</button>
                    </div>
                </div>
                <div class="post">
                    <div class="info">
                        <div class="user">
                            <div class="profile-pic"><img src="img/profile.jpg"></div>
                            <p class="username">manpreet.1305</p>
                        </div>
                        <img src="img/option.png" class="options" alt="">
                    </div>
                    <img src="img/post2.jpg" class="post-image" alt="">
                    <div class="post-content">
						<div class="reaction-wrapper">
							<img src="img/like.png" class="icon" alt="">
							<img src="img/comment.png" class="icon" alt="">
							<img src="img/send.png" class="icon" alt="">
							<img src="img/save.png" class="save icon" alt="">
						</div>
                        <p class="likes">12,221 likes</p>
                        <p class="description"><span>username </span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad libero temporibus, sapiente voluptatem facilis incidunt molestias dolorum perspiciatis cum soluta amet quam quos labore beatae hic voluptate iusto voluptatibus similique?</p>
                        <p class="post-time">2 minutes ago</p>
                    </div>
                    <div class="comment-wrapper">
                        <img src="img/smile.png" class="icon" alt="">
                        <input type="text" class="comment-box" placeholder="Add a comment">
						<button class="comment-btn">post</button>
                    </div>
                </div>
                <div class="post">
                    <div class="info">
                        <div class="user">
                            <div class="profile-pic"><img src="img/cover3.png"></div>
                            <p class="username">randawa88</p>
                        </div>
                        <img src="img/option.png" class="options" alt="">
                    </div>
                    <img src="img/post3.jpg" class="post-image" alt="">
                    <div class="post-content">
						<div class="reaction-wrapper">
							<img src="img/like.png" class="icon" alt="">
							<img src="img/comment.png" class="icon" alt="">
							<img src="img/send.png" class="icon" alt="">
							<img src="img/save.png" class="save icon" alt="">
						</div>
                        <p class="likes">12,221 likes</p>
                        <p class="description"><span>username </span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad libero temporibus, sapiente voluptatem facilis incidunt molestias dolorum perspiciatis cum soluta amet quam quos labore beatae hic voluptate iusto voluptatibus similique?</p>
                        <p class="post-time">2 minutes ago</p>
                    </div>
                    <div class="comment-wrapper">
                        <img src="img/smile.png" class="icon" alt="">
                        <input type="text" class="comment-box" placeholder="Add a comment">
						<button class="comment-btn">post</button>
                    </div>
                </div>
                <div class="post">
                    <div class="info">
                        <div class="user">
                            <div class="profile-pic"><img src="img/cover4.jpg"></div>
                            <p class="username">sukhsran75</p>
                        </div>
                        <img src="img/option.png" class="options" alt="">
                    </div>
                    <img src="img/post4.jpg" class="post-image" alt="">
                    <div class="post-content">
						<div class="reaction-wrapper">
							<img src="img/like.png" class="icon" alt="">
							<img src="img/comment.png" class="icon" alt="">
							<img src="img/send.png" class="icon" alt="">
							<img src="img/save.png" class="save icon" alt="">
						</div>
                        <p class="likes">12,221 likes</p>
                        <p class="description"><span>username </span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad libero temporibus, sapiente voluptatem facilis incidunt molestias dolorum perspiciatis cum soluta amet quam quos labore beatae hic voluptate iusto voluptatibus similique?</p>
                        <p class="post-time">2 minutes ago</p>
                    </div>
                    <div class="comment-wrapper">
                        <img src="img/smile.png" class="icon" alt="">
                        <input type="text" class="comment-box" placeholder="Add a comment">
						<button class="comment-btn">post</button>
                    </div>
                </div>
                <div class="post">
                    <div class="info">
                        <div class="user">
                            <div class="profile-pic"><img src="img/cover5.jpg"></div>
                            <p class="username">randhawa.13</p>
                        </div>
                        <img src="img/option.png" class="options" alt="">
                    </div>
                    <img src="img/post5.jpg" class="post-image" alt="">
                    <div class="post-content">
						<div class="reaction-wrapper">
							<img src="img/like.png" class="icon" alt="">
							<img src="img/comment.png" class="icon" alt="">
							<img src="img/send.png" class="icon" alt="">
							<img src="img/save.png" class="save icon" alt="">
						</div>
                        <p class="likes">12,221 likes</p>
                        <p class="description"><span>username </span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad libero temporibus, sapiente voluptatem facilis incidunt molestias dolorum perspiciatis cum soluta amet quam quos labore beatae hic voluptate iusto voluptatibus similique?</p>
                        <p class="post-time">2 minutes ago</p>
                    </div>
                    <div class="comment-wrapper">
                        <img src="img/smile.png" class="icon" alt="">
                        <input type="text" class="comment-box" placeholder="Add a comment">
						<button class="comment-btn">post</button>
                    </div>
                </div>
                <div class="post">
                    <div class="info">
                        <div class="user">
                            <div class="profile-pic"><img src="img/cover6.jpg"></div>
                            <p class="username">sukhsran75</p>
                        </div>
                        <img src="img/option.png" class="options" alt="">
                    </div>
                    <img src="img/post6.jpg" class="post-image" alt="">
                    <div class="post-content">
						<div class="reaction-wrapper">
							<img src="img/like.png" class="icon" alt="">
							<img src="img/comment.png" class="icon" alt="">
							<img src="img/send.png" class="icon" alt="">
							<img src="img/save.png" class="save icon" alt="">
						</div>
                        <p class="likes">12,221 likes</p>
                        <p class="description"><span>username </span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad libero temporibus, sapiente voluptatem facilis incidunt molestias dolorum perspiciatis cum soluta amet quam quos labore beatae hic voluptate iusto voluptatibus similique?</p>
                        <p class="post-time">2 minutes ago</p>
                    </div>
                    <div class="comment-wrapper">
                        <img src="img/smile.png" class="icon" alt="">
                        <input type="text" class="comment-box" placeholder="Add a comment">
						<button class="comment-btn">post</button>
                    </div>
                </div>
                <div class="post">
                    <div class="info">
                        <div class="user">
                            <div class="profile-pic"><img src="img/cover7.jpg"></div>
                            <p class="username">randawa88</p>
                        </div>
                        <img src="img/option.png" class="options" alt="">
                    </div>
                    <img src="img/post7.jpg" class="post-image" alt="">
                    <div class="post-content">
						<div class="reaction-wrapper">
							<img src="img/like.png" class="icon" alt="">
							<img src="img/comment.png" class="icon" alt="">
							<img src="img/send.png" class="icon" alt="">
							<img src="img/save.png" class="save icon" alt="">
						</div>
                        <p class="likes">12,221 likes</p>
                        <p class="description"><span>username </span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad libero temporibus, sapiente voluptatem facilis incidunt molestias dolorum perspiciatis cum soluta amet quam quos labore beatae hic voluptate iusto voluptatibus similique?</p>
                        <p class="post-time">2 minutes ago</p>
                    </div>
                    <div class="comment-wrapper">
                        <img src="img/smile.png" class="icon" alt="">
                        <input type="text" class="comment-box" placeholder="Add a comment">
						<button class="comment-btn">post</button>
                    </div>
                </div>
                <div class="post">
                    <div class="info">
                        <div class="user">
                            <div class="profile-pic"><img src="img/cover8.png"></div>
                            <p class="username">randawa89</p>
                        </div>
                        <img src="img/option.png" class="options" alt="">
                    </div>
                    <img src="img/post8.jpg" class="post-image" alt="">
                    <div class="post-content">
						<div class="reaction-wrapper">
							<img src="img/like.png" class="icon" alt="">
							<img src="img/comment.png" class="icon" alt="">
							<img src="img/send.png" class="icon" alt="">
							<img src="img/save.png" class="save icon" alt="">
						</div>
                        <p class="likes">12,221 likes</p>
                        <p class="description"><span>username </span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad libero temporibus, sapiente voluptatem facilis incidunt molestias dolorum perspiciatis cum soluta amet quam quos labore beatae hic voluptate iusto voluptatibus similique?</p>
                        <p class="post-time">2 minutes ago</p>
                    </div>
                    <div class="comment-wrapper">
                        <img src="img/smile.png" class="icon" alt="">
                        <input type="text" class="comment-box" placeholder="Add a comment">
						<button class="comment-btn">post</button>
                    </div>
                </div>
				
            </div>
			
            <div class="right-col">
                <div class="profile-card">
                    <div class="profile-pic">
                        <img src="img/profile.jpg" alt="">
                    </div>
                    <div>
                        <p class="username">manpreet.1305</p>
                        <p class="sub-text">mani</p>
                    </div>
                    <button class="action-btn">switch</button>
                </div>
                <p class="suggestion-text">Suggestions for you</p>
                <div class="profile-card">
                    <div class="profile-pic">
                        <img src="img/post5.jpg" alt="">
                    </div>
                    <div>
                        <p class="username">randawa89</p>
                        <p class="sub-text">followed by user</p>
                    </div>
                    <button class="action-btn">follow</button>
                </div>
                <div class="profile-card">
                    <div class="profile-pic">
                        <img src="img/post6.jpg" alt="">
                    </div>
                    <div>
                        <p class="username">sukhsran75</p>
                        <p class="sub-text">followed by user</p>
                    </div>
                    <button class="action-btn">follow</button>
                </div>
                <div class="profile-card">
                    <div class="profile-pic">
                        <img src="img/post7.jpg" alt="">
                    </div>
                    <div>
                        <p class="username">manpreet.405</p>
                        <p class="sub-text">followed by user</p>
                    </div>
                    <button class="action-btn">follow</button>
                </div>
                <div class="profile-card">
                    <div class="profile-pic">
                        <img src="img/post8.jpg" alt="">
                    </div>
                    <div>
                        <p class="username">randhawa.13</p>
                        <p class="sub-text">followed by user</p>
                    </div>
                    <button class="action-btn">follow</button>
                </div>
                <div class="profile-card">
                    <div class="profile-pic">
                        <img src="img/post3.jpg" alt="">
                    </div>
                    <div>
                        <p class="username">randawa88</p>
                        <p class="sub-text">followed by user</p>
                    </div>
                    <button class="action-btn">follow</button>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    Don't Wait, Login now!</h4>
            </div>
            <div class="modal-body">
                <iframe width="420" height="315"
src="https://www.youtube.com/embed/tgbNymZ7vqY?playlist=tgbNymZ7vqY&loop=2">
</iframe>
                </div>
                </div>
                                
    </section>

</body>
</html>