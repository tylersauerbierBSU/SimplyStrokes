<?php require_once("login-nav.php");
session_start();
require_once 'DAO.php';
$dao = new DAO();

if(!isset($_SESSION['authenticated'])) {
    header('Location: login.php');
    exit;
}

if ($_SESSION['authenticated']) {
    // The user is authenticated, fetch their first name
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $user = $dao->getUserInfo($user_id);
        $userFirstName = $user['first_name'];
    }
}

>?

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/favicon-2.png" type="image/png">
    <title>Review</title>
    <link rel="stylesheet" href="blog.css">
    <line rel="stylesheet2" href="homepage.css">
</head>

<body>
    <div class="top-bar">
        <h1>Simply Strokes</h1>
        <img class="small-image" src="/images/logo silhouette Background Removed.png" alt="silhouette of a golfer">
    </div>

    <br>
    <div class="nav-bar">
        <a href="/homepage.php">Home</a>
        <a href="/blog.php">Blog</a>
        <a href="/Review.php">Reivew</a>
        <a href="/myGame.php">My Game</a>
        <a href="/Groups.php">Groups</a>
        <a href="/logout.php">Logout</a>
    </div>

    <!-- This is a line break to give the page a little bit of space -->
    <br>
    <br>

<div class="blog-post-container">
    <img src="path/to/your-image.jpg" alt="Review Post Image" class="blog-image">
    <div class="blog-post-content">
        <h2>Course Played</h2>
        <h3> Rating 8.3/10</h3>
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
    <img src="path/to/your-image.jpg" alt="Review Post Image" class="blog-image">
    <div class="blog-post-content">
        <h2>Course Played</h2>
        <h3> Rating 8.3/10</h3>
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
    <img src="path/to/your-image.jpg" alt="Reivew Post Image" class="blog-image">
    <div class="blog-post-content">
        <h2>Course Played</h2>
        <h3> Rating 8.3/10</h3>
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
    <img src="path/to/your-image.jpg" alt="Reivew Post Image" class="blog-image">
    <div class="blog-post-content">
        <h2>Course Played</h2>
        <h3> Rating 8.3/10</h3>
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
