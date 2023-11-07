<?php
session_start();

require_once 'DAO.php';
$dao = new DAO();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $course_name = trim($_POST['course_name']);
    $date_played = $_POST['date_played']; // Validate/sanitize date format
    $rating = $_POST['rating'];
    $description = trim($_POST['description']);

    // Validation
    $messages['bad'] = array();

    if (strlen($course_name) == 0) {
        $messages['bad'][] = "Please enter the Course Name";
    }
    if (strlen($date_played) == 0) {
        $messages['bad'][] = "Please enter the Date Played";
    }
    if (!is_numeric($rating) || $rating < 1 || $rating > 10) {
        $messages['bad'][] = "Please enter a valid rating between 1 and 10";
    }
    if (strlen($description) == 0) {
        $messages['bad'][] = "Please enter a description";
    }

    if (count($messages['bad']) > 0) {
        // Set error messages and redirect back to Review.php
        $_SESSION['messages'] = $messages;
        $_SESSION['post'] = $_POST;
        header('Location: Review.php');
        exit();
    }

    // Add the review to the database
    $dao->addReview($course_name, $date_played, date('Y-m-d'), $rating, $description);

    // Redirect back to Review.php after adding the review
    header('Location: Review.php');
    exit();
}
?>
