<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
        require_once "dbh-inc.php";

        $query = "DELETE FROM users WHERE username = :username AND pwd = :pwd;";

        //Preparing user info
        $statement = $pdo->prepare($query);

        $statement->bindParam(":username", $username);
        $statement->bindParam(":pwd", $pwd);

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