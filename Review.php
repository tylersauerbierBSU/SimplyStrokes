
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
    <!-- <img src="path/to/your-image.jpg" alt="Review Post Image" class="blog-image"> -->
    <div class="blog-post-content">
        <h2>Falcon Crest</h2>
        <h3> Rating 9/10</h3>
        <p class="meta">Published on November 5th, 2023</p>

        <p> I recently had the pleasure of playing at Falcon Crest Golf Course, and let me tell you, 
            it's like stepping into a golfer's paradise! The fairways are so pristine; it's almost like 
            they vacuum them every morning. The greens are like putting on velvet, and my ball rolled 
            so smoothly, I felt like a pro. The course design is brilliant, offering a perfect blend 
            of challenging holes and scenic views. I even spotted a family of falcons soaring above, 
            adding a touch of nature to my golfing experience. The staff were incredibly friendly and helpful, 
            providing tips that magically improved my swing (or maybe it was just a lucky day). The clubhouse is 
            a hidden gem with a cozy atmosphere—I may have spent more time there than on the course itself. The 
            19th hole has the best post-game snacks, and the golf-themed cocktails are a stroke of genius. 
            Overall, Falcon Crest is a hole-in-one experience that every golfer should indulge in. Can't wait 
            to come back and lower my handicap in this golfing haven!
        </p>

    </div>
</div>

<div class="blog-post-container">
    <!-- <img src="path/to/your-image.jpg" alt="Review Post Image" class="blog-image"> -->
    <div class="blog-post-content">
        <h2>Lake Wilderness</h2>
        <h3> Rating 8/10</h3>
        <p class="meta">Published on November 5th, 2023</p>

        <p> The course itself is beautifully maintained, with lush fairways that make you feel like you're playing 
            golf in a botanical garden. The layout is challenging enough to keep you on your toes without being overly 
            intimidating for casual players. I appreciated the variety of holes, each presenting its own unique set of 
            challenges and scenic surprises. The highlight for me was the back nine, which winds its way around Lake Wilderness. 
            The water views are breathtaking and add a serene touch to the game. I even spotted some wildlife, 
            including a heron gracefully fishing along the shoreline.
        </p>

    </div>
</div>

<div class="blog-post-container">
    <!-- <img src="path/to/your-image.jpg" alt="Reivew Post Image" class="blog-image"> -->
    <div class="blog-post-content">
        <h2>Quail Hallow</h2>
        <h3> Rating 7/10</h3>
        <p class="meta">Published on November 5th, 2023</p>

        <p> The greens at Quail Hollow are a golfer's dream come true—smooth, fast, and true. Putting became a joy as my 
            ball effortlessly rolled toward the cup, and I couldn't help but appreciate the meticulous care put into 
            maintaining the course. The attention to detail extends to the staff, who are not only knowledgeable about the 
            game but also genuinely passionate about ensuring every player has a memorable experience. The clubhouse is a 
            haven of comfort, with panoramic views of the course that make you want to linger a bit longer after your round.
        </p>

    </div>
</div>

<?php
    session_start();
    if (isset($_SESSION['messages']['bad'])) {
        foreach ($_SESSION['messages']['bad'] as $error) {
            echo "<p class='error-message'>$error</p>";
        }
        unset($_SESSION['messages']['bad']);
    }
?>

<div class="add-review-form">
        <h2>Add a New Review</h2>
        <form action="review-handler.php" method="post">
            <label for="course_name">Course Name:</label>
            <input type="text" id="course_name" name="course_name" required>

            <label for="date_played">Date Played:</label>
            <input type="date" id="date_played" name="date_played" required>

            <label for="rating">Rating:</label>
            <input type="number" id="rating" name="rating" min="1" max="10" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>

            <input type="submit" value="Post Review">
        </form>
    </div>

</body>

<br>
<br>
<br>

<footer>
    <p>&copy; 2023 Your Homepage. All rights reserved.</p>
</footer>

</html>
