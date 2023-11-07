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
    <title>myGame</title>
    <link rel="stylesheet" href="myGame.css">
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

<h2>Golf Scorecard</h2>

<table class="styled-table">
    <thead>
        <tr>
            <th>Course Name</th>
            <th>Date</th>
            <th>Holes Played</th>
            <tH>Score</tH>
            <th>Putts</th>
            <th>Miscellaneous</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Dripping Springs Golf Club</td>
            <td>2023-09-30</td>
            <td>18</td>
            <td>32</td>
            <td>98</td>
            <td>Windy dat</td>
        </tr>
        
        <tr>
            <td>Tumble Creek Golf Club</td>
            <td>2023-09-30</td>
            <td>18</td>
            <td>32</td>
            <td>95</td>
            <td>Lots of elevation gain</td>
        </tr>

        <tr>
            <td>Lake Wildy</td>
            <td>2023-09-30</td>
            <td>18</td>
            <td>32</td>
            <td>92</td>
            <td>Rainy conditions</td>
        </tr>

        <tr>
            <td>Falcon Crest</td>
            <td>2023-09-30</td>
            <td>18</td>
            <td>32</td>
            <td>89</td>
            <td>Frost Delay</td>
        </tr>

    </tbody>
</table>

<div class="add-score-form">
        <h2>Add a New Score</h2>
        <form action="myGame-handler.php" method="post">
            <label for="course_name">Course Name:</label>
            <input type="text" id="course_name" name="course_name" required>

            <label for="play_date">Date:</label>
            <input type="date" id="play_date" name="play_date" required>

            <label for="holes_played">Holes Played:</label>
            <input type="number" id="holes_played" name="holes_played" required>

            <label for="score">Score:</label>
            <input type="number" id="score" name="score" required>

            <label for="putts">Putts:</label>
            <input type="number" id="putts" name="putts" required>

            <label for="misc_info">Miscellaneous:</label>
            <textarea id="misc_info" name="misc_info"></textarea>

            <input type="submit" value="Add Score">
        </form>
    </div>

<span class="addACourse"><p> + add a score </p></span>

<br>

<h2>This is how you have been playing, Tyler</h2>

<table class="styled-table">
    <thead>
        <tr>
            <th>Course Most Frequently played</th>
            <th>Average Score</th>
            <th>Handicap</th>
            <tH>Putts Per Round</tH>
            <th>Putts Per Hole</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Falcon Crest (3 times this last season)</td>
            <td>96.3</td>
            <td>16</td>
            <td>36</td>
            <td>2.2</td>
        </tr>

    </tbody>
</table>



</body>
</html>
