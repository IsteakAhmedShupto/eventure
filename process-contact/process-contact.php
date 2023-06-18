<?php
$mysqli = include "../database-connection/database-connection.php";


$sql = "INSERT INTO feedbacks (firstName,lastName,email,feedback)
        VALUES (?,?,?,?)";

$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssss", $_POST["firstName"], $_POST["lastName"], $_POST["email"], $_POST["feedback"]);


if ($stmt->execute()) {
    header("Location: ../feedback-received.php");
    exit;
} else {
    die($mysqli->error . " " . $mysqli->errno);
}