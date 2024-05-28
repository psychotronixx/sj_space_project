<?php

class User extends Database {
    
    private $db;

    public function __construct() {
        $this->db = $this->connect();
    }

    public function login($email, $password) {
        try {
            $data = array('user_email' => $email, 'user_password' => $password);
            
            $sql = "SELECT * FROM user WHERE email = :user_email AND password = :user_password";
            $query_run = $this->db->prepare($sql);
            $query_run->execute($data);

            if ($query_run->rowCount() == 1) {
                $_SESSION['logged_in'] = true;
                return true;
            } else {
                return false;
            }
        } catch(PDOException $e) {
            echo "Login Error: " . $e->getMessage();
        }
    }

    public function register($email, $password) {
        try {
            // Check if user already exists
            $check_sql = "SELECT * FROM user WHERE email = :user_email";
            $check_query = $this->db->prepare($check_sql);
            $check_query->execute(['user_email' => $email]);

            if ($check_query->rowCount() > 0) {
                return "User already exists";
            }

            // Insert new user
            $data = array('user_email' => $email, 'user_password' => $password);
            $sql = "INSERT INTO user (email, password) VALUES (:user_email, :user_password)";
            $query_run = $this->db->prepare($sql);
            $query_run->execute($data);

            if ($query_run->rowCount() == 1) {
                return "Registration successful";
            } else {
                return "Registration failed";
            }
        } catch(PDOException $e) {
            return "Registration Error: " . $e->getMessage();
        }
    }
}
?>
