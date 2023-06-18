<?php

$id = $_GET['id'];

$mysqli = include "../database-connection/database-connection.php";

$sql = "DELETE FROM events WHERE id = $id";

if (mysqli_query($mysqli, $sql)) {
    mysqli_close($mysqli);
    header("Location: ./user-profile.php");
    exit;
} else {
    echo "Error deleting record";
}