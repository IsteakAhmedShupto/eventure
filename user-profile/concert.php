<?php
session_start();

if (isset($_SESSION["user_id"])) {
    $mysqli = include "../database-connection/database-connection.php";

    $sql = "SELECT * FROM user
    WHERE id = {$_SESSION["user_id"]}
    ";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../root.css" />
    <link rel="stylesheet" href="./nav-section.css">
    <link rel="stylesheet" href="./common.css">
    <link rel="stylesheet" href="./concert.css">
    <link rel="stylesheet" href="../footer.css">
    <title>Concert event</title>
</head>

<body>
    <?php include "./nav-section.php"; ?>

    <div class="bg-form-wrapper">

        <div class="bg-image">
            <p>Concert Event</p>
        </div>

        <form class="concert-form" action="./process-event-reg.php" method="POST" novalidate>

            <h3>Good music, good friends, good vibes.</h3>

            <div class="name-containers">
                <input type="text" name="firstName" placeholder="Enter first Name" />
                <input type="text" name="lastName" placeholder="Enter last name" />
            </div>

            <div>
                <input type="text" value="Concert event" name="event" readonly="readonly">
            </div>



            <input type="email" name="email" value="<?= htmlspecialchars($user["email"]) ?>" readonly="readonly">

            <div class="event-date-container">
                <input type="date" name="date" />
            </div>

            <input type="submit" value="Book this date">
        </form>
    </div>

    <?php include "../footer.php"; ?>

</body>

</html>