
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpport" content="width=device-width, initial-scale=1.0">
    <title>FRIENDBOOK</title>

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <nav class="navbar">
        <div class="nav-wrapper">
            <img src="img/logo.png" class="brand-img" alt="">
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
                </div>
                <div class="post">
                </div>
            </div>
                
			
            <div class="right-col">
                <div class="profile-card">
                    <div class="profile-pic">
                        <img src="img/profile.jpg" alt="">
                    </div>
                    <div>
                        <p class="username">
                            <?php 
                        include("connect.php");
                       ?>
                        </p>
                        <p class="sub-text">
                        <!-- echo "Name: " . $row['name'] . "<br>";-->
                        </p>
                    </div>
                    <button class="action-btn">switch</button>
                </div>
                <p class="suggestion-text">Suggestions for you</p>
                <div class="profile-card">
                    <div class="profile-pic">
                        <img src="img/post5.jpg" alt="">
                    </div>
                    <div>
                        <p class="username">sukhsran75</p>
                        <p class="sub-text">followed by user</p>
                    </div>
                    <button class="action-btn">follow</button>
                </div>
                <div class="profile-card">
                    <div class="profile-pic">
                        <img src="img/post6.jpg" alt="">
                    </div>
                    <div>
                        <p class="username">beant54</p>
                        <p class="sub-text">followed by user</p>
                    </div>
                    <button class="action-btn">follow</button>
                </div>
                <div class="profile-card">
                    <div class="profile-pic">
                        <img src="img/post7.jpg" alt="">
                    </div>
                    <div>
                        <p class="username">arsh45</p>
                        <p class="sub-text">followed by user</p>
                    </div>
                    <button class="action-btn">follow</button>
                </div>
                <div class="profile-card">
                    <div class="profile-pic">
                        <img src="img/post8.jpg" alt="">
                    </div>
                    <div>
                        <p class="username">jaspreet90</p>
                        <p class="sub-text">followed by user</p>
                    </div>
                    <button class="action-btn">follow</button>
                </div>
                <div class="profile-card">
                    <div class="profile-pic">
                        <img src="img/post3.jpg" alt="">
                    </div>
                    <div>
                        <p class="username">preet..67</p>
                        <p class="sub-text">followed by user</p>
                    </div>
                    <button class="action-btn">follow</button>
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
                        <p class="likes">12M likes</p>
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
        </div>
    </section>

</body>
</html>