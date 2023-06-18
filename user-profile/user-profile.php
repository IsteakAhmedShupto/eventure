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
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../root.css" />
    <link rel="stylesheet" href="./nav-section.css">
    <link rel="stylesheet" href="./user-profile.css">
    <link rel="stylesheet" href="../footer.css">
    <title>User profile</title>
</head>

<body>
    <?php if (isset($_SESSION["user_id"])): ?>
        <main>
            <?php include "./nav-section.php"; ?>
            <header class="profile-header">
                <p>Welcome to dashboard
                    <?= htmlspecialchars($user["name"]) ?>!
                </p>
                <p class="link-container"><a href="../logout/logout.php">Logout</a></p>
            </header>
            <article class="booked-events-container">
                <p>Your booked events</p>
                <section class="booked-events">
                    <?php
                    $mysqli = include "../database-connection/database-connection.php";

                    $sql = "SELECT id,firstName,lastName,event,date FROM events WHERE email='$user[email]'";

                    $result = $mysqli->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<ul>";
                        while ($row = $result->fetch_assoc()) {
                            echo "<li>" . $row["event"] . " booked for date " . $row["date"] . " ";
                            echo "<a href='row-delete.php?id=" . $row['id'] . "'>Cancel this event</a></li>";
                        }
                        echo "</ul>";
                    } else {
                        echo "<p>You currently don't have any booked events!</p>";
                    }
                    ?>
                </section>
            </article>
            <?php include "../footer.php"; ?>
        </main>
    <?php else: ?>
        <section class="page-block">
            <p>You need to <a href="../login/login.php">Login</a>
                to
                access this page.</p>
            <p><a href="../index.php">Return to home page.</a></p>
        </section>

    <?php endif; ?>
</body>

</html>