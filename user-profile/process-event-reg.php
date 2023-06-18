<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../root.css">
    <link rel="stylesheet" href="./process-event-reg.css">
    <link rel="stylesheet" href="./nav-section.css">
    <link rel="stylesheet" href="../footer.css">
    <title>Process event registration</title>
</head>

<body>

    <?php include "./nav-section.php"; ?>

    <section class="process-reg-container">
        <?php
        if (empty($_POST["firstName"])) {
            echo "<p>First name is required</p>";
            exit;
        }

        if (empty($_POST["lastName"])) {
            echo "<p>Last name is required</p>";
            exit;

        }

        if (empty($_POST["date"])) {
            echo "<p>Date name is required</p>";
            exit;
        }


        $mysqli = include "../database-connection/database-connection.php";

        $sql = "INSERT INTO events (firstName,lastName,event,email,date)
        VALUES (?,?,?,?,?)";

        $stmt = $mysqli->stmt_init();

        if (!$stmt->prepare($sql)) {
            echo "<p>Database error. Please try again after some time. </p>";
        }


        $stmt->bind_param("sssss", $_POST["firstName"], $_POST["lastName"], $_POST["event"], $_POST["email"], $_POST["date"]);

        if ($stmt->execute()) {
            header("Location: ./successful-reg.php");
            exit;
        } else {
            echo "<p>Duplicate entry for date is not allowed.</p>";
        }

        ?>
    </section>

</body>

</html>

<?php


// original code later modified for html

// $mysqli = include "../database-connection/database-connection.php";

// $sql = "INSERT INTO events (firstName,lastName,event,email,date)
// VALUES (?,?,?,?,?)";

// $stmt = $mysqli->stmt_init();

// if (!$stmt->prepare($sql)) {
//     die("SQL error: " . $mysqli->error);
// }


// $stmt->bind_param("sssss", $_POST["firstName"], $_POST["lastName"], $_POST["event"], $_POST["email"], $_POST["date"]);

// if ($stmt->execute()) {
//     header("Location: ./successful-reg.php");
//     exit;
// } else {
//     die($mysqli->error . " " . $mysqli->errno);
// }