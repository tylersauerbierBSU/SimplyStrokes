<?php
session_start();

require_once 'DAO.php';
$dao = new DAO();
$messages = array();
$messages['bad'] = array();

// Retrieve form data
$course_name = trim($_POST['course_name']);
$play_date = $_POST['play_date']; // Validate/sanitize date format
$holes_played = trim($_POST['holes_played']);
$total_strokes = trim($_POST['total_strokes']);
$conditions = trim($_POST['conditions']);

// Validation
if (strlen($course_name) == 0) {
    $messages['bad'][] = "Please enter the Course Name";
}
if (strlen($play_date) == 0) {
    $messages['bad'][] = "Please enter the Play Date";
}
if (strlen($holes_played) == 0) {
    $messages['bad'][] = "Please enter the number of Holes Played";
}
if (strlen($total_strokes) == 0) {
    $messages['bad'][] = "Please enter the Total Strokes";
}

if (count($messages['bad']) > 0) {
    // Set error messages and redirect back to myGame.php
    $_SESSION['messages'] = $messages;
    $_SESSION['post'] = $_POST;
    header('Location: myGame.php');
    exit();
}

// Add the score to the database
$dao->addScore($course_name, $play_date, $holes_played, $total_strokes, $conditions);

// Redirect back to myGame.php after adding the score
header('Location: myGame.php');
exit();
