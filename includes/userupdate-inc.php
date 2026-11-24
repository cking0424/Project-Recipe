<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once "dbh-inc.php";

        $query = "UPDATE users SET username = :username, pwd = :pwd, email = :email WHERE id = 5;";

        //Preparing user info
        $statement = $pdo->prepare($query);

        $statement->bindParam(":username", $username);
        $statement->bindParam(":pwd", $pwd);
        $statement->bindParam(":email", $email);

        $statement->execute();

        //Closing the connection
        $pdo = null;
        $statement = null;

        header("Location: ../Signup.php");
        die();
    } catch (PDOException $e) {
        die("Query FAILED: " . $e->getMessage());
    }
} 
else {
    header("Location: ../Signup.php");
}