<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../root.css">
    <link rel="stylesheet" href="./process-signup.css">
    <title>Process Signup</title>
</head>

<body>

    <section class="process-signup-container">
        <?php
        if (empty($_POST["name"])) {
            echo "<p>Name is required</p>";
            exit;
        }

        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            echo "<p>Valid email is required</p>";
            exit;
        }

        if (strlen($_POST["password"]) < 8) {
            echo "<p>Password must be at least 8 characters</p>";
            exit;

        }
        if (
            !preg_match(
                "/[a-z]/i",
                $_POST["password"]
            )
        ) {
            echo "<p>Password must contain at least one letter</p>";
            exit;
        }
        if (
            !preg_match(
                "/[0-9]/",
                $_POST["password"]
            )
        ) {
            echo "<p>Password must contain at least one number</p>";
            exit;
        }
        if (
            $_POST["password"]
            !== $_POST["password_confirmation"]
        ) {
            echo "<p>Passwords must match</p>";
            exit;
        }
        ?>
    </section>

</body>

</html>

<?php

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = include "../database-connection/database-connection.php";

$sql = "INSERT INTO user (name,email,password_hash)
        VALUES (?,?,?)";

$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss", $_POST["name"], $_POST["email"], $password_hash);

if ($stmt->execute()) {
    header("Location: ../login/login.php");
    exit;
} else {
    die($mysqli->error . " " . $mysqli->errno);
}