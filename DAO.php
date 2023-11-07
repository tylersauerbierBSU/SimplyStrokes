<?php

class DAO {
    private $host = "co28d739i4m2sb7j.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    private $db = "t02zrwec8uligtiz";
    private $user = "ur7u2fizxl1yddgf";
    private $passwd = "kg3weuxpajryv0ge";

    public function getConnection () {
        return
            new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
                $this->passwd); 
    }

    public function isUsernameTaken($username) {
        $conn = $this->getConnection();

        $query = "SELECT user_id FROM users WHERE username = ?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO:: FETCH_ASSOC);

        return (bool)$user;
    }

    public function registerUser($first, $last, $username, $password) {
        $conn = $this->getConnection();

        // Hash the password before storing it in the database
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (first_name, last_name, username, password) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($query);

        // Use the hashed password
        $success = $stmt->execute([$first, $last, $username, $hashedPassword]);

        return $success;
    }

    public function authenticate($first, $last, $username, $password) {
        $conn = $this->getConnection();

        // Query database to see if user exists
        $query = "SELECT user_id FROM users WHERE first_name = ? AND last_name = ? AND username = ?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$first, $last, $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verify the password
        if ($user) {
            // User exists with the provided first name, last name, and username.
            $user_id = $user['user_id']; // Retrieve the user's ID
            $_SESSION['user_id'] = $user_id; // Store the user's ID in the session
            // Now, verify the password.
            $query = "SELECT password FROM users WHERE username = ?";
            $stmt = $conn->prepare($query);
            $stmt->execute([$username]);
            $storedHashedPassword = $stmt->fetchColumn();

            if ($storedHashedPassword !== false && password_verify($password, $storedHashedPassword)) {
                // Password is correct
                return true;
            }
        }

        // User is not authenticated
        return false;
    }

    public function getUserInfo($user_id) {
        $conn = $this->getConnection();
        $query = "SELECT first_name FROM users WHERE user_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$user_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addScore($course_name, $play_date, $holes_played, $total_strokes, $conditions) {
        $conn = this->getConnection();
        $saveQuery = "INSERT INTO my_game 
                    (course_name, play_date, holes_played, total_strokes, conditions) 
                    VALUES (:course_name, :play_date, :holes_played, :total_strokes, :conditions)";
        $stmt = $conn->prepare($saveQuery);
        $stmt->bindParam(":course_name", $course_name);
        $stmt->bindParam(":play_date", $play_date);
        $stmt->bindParam(":holes_played", $holes_played);
        $stmt->bindParam(":total_strokes", $total_strokes);
        $stmt->bindParam(":conditions", $conditions);

        $stmt->execute();
    }
    
}