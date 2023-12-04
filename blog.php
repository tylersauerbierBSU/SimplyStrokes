<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/favicon-2.png" type="image/png">
    <title>Blog</title>
    <link rel="stylesheet" href="blog.css">
    <link rel="stylesheet2" href="homepage.css">
</head>

<body>
    <div class="top-bar">
        <h1>Simply Strokes</h1>
        <img class="small-image" src="/images/logo silhouette Background Removed.png" alt="silhouette of a golfer">
    </div>

    <br>
    <div class="nav-bar">
    <div class="nav-bar">
        <a <?php if(basename($_SERVER['PHP_SELF']) == 'homepage.php') echo 'class="active"'; ?> href="/homepage.php">Home</a>
        <a <?php if(basename($_SERVER['PHP_SELF']) == 'blog.php') echo 'class="active"'; ?> href="/blog.php">Blog</a>
        <a <?php if(basename($_SERVER['PHP_SELF']) == 'Review.php') echo 'class="active"'; ?> href="/Review.php">Review</a>
        <a <?php if(basename($_SERVER['PHP_SELF']) == 'myGame.php') echo 'class="active"'; ?> href="/myGame.php">My Game</a>
        <a <?php if(basename($_SERVER['PHP_SELF']) == 'Groups.php') echo 'class="active"'; ?> href="/Groups.php">Groups</a>
        <a <?php if(basename($_SERVER['PHP_SELF']) == 'logout.php') echo 'class="active"'; ?> href="/logout.php">Logout</a>
    </div>
    </div>

    <!-- This is a line break to give the page a little bit of space -->
    <br>
    <br>

<div class="blog-post-container">
    <img src="path/to/your-image.jpg" alt="Blog Post Image" class="blog-image">
    <div class="blog-post-content">
        <h2>Blog Post 1</h2>
        <p class="meta">Published on September 29, 202</p>

        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make 
            a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
            Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions 
            of Lorem Ipsum
        </p>

    </div>
</div>

<div class="blog-post-container">
    <img src="path/to/your-image.jpg" alt="Blog Post Image" class="blog-image">
    <div class="blog-post-content">
        <h2>Blog Post 2</h2>
        <p class="meta">Published on September 29, 202</p>

        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make 
            a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
            Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions 
            of Lorem Ipsum
        </p>

    </div>
</div>

<div class="blog-post-container">
    <img src="path/to/your-image.jpg" alt="Blog Post Image" class="blog-image">
    <div class="blog-post-content">
        <h2>Blog Post 3</h2>
        <p class="meta">Published on September 29, 202</p>

        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make 
            a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
            Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions 
            of Lorem Ipsum
        </p>

    </div>
</div>

<div class="blog-post-container">
    <img src="path/to/your-image.jpg" alt="Blog Post Image" class="blog-image">
    <div class="blog-post-content">
        <h2>Blog Post 4</h2>
        <p class="meta">Published on September 29, 202</p>

        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make 
            a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
            Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions 
            of Lorem Ipsum
        </p>

    </div>
</div>

</body>

<footer>
    <p>&copy; 2023 Your Homepage. All rights reserved.</p>
</footer>

</html>
 
