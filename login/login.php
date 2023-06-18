<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $mysqli = include "../database-connection/database-connection.php";

  $sql = sprintf("SELECT * FROM user
                  WHERE email = '%s'",
    $mysqli->real_escape_string($_POST["email"])
  );

  $result = $mysqli->query($sql);

  $user = $result->fetch_assoc();

  if ($user) {
    if (password_verify($_POST["password"], $user["password_hash"])) {

      session_start();

      session_regenerate_id();

      $_SESSION["user_id"] = $user["id"];

      header("Location: ../user-profile/user-profile.php");
      exit;
    }
  }

  $is_invalid = true;

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../root.css" />
  <link rel="stylesheet" href="../header.css">
  <link rel="stylesheet" href="./login.css" />
  <link rel="stylesheet" href="../footer.css">
  <title>Eventure - Login page</title>
</head>

<body>

  <div class="login-container">
    <div class="login-main">
      <div class="login-logo"> <a href="../index.php">Eventure</a>
      </div>
      <div class="login-header">
        <h3>Hello again!</h3>
        <p>Welcome back we have missed you!</p>
      </div>
      <form class="login-form-container" method="POST">
        <input type="email" placeholder="Enter email" name="email"
          value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" />
        <input type="password" placeholder="Enter password" class="login-password" name="password" />
        <div class="login-checkbox">
          <input type="checkbox" onclick="show_hide_pass()" />Show password
        </div>
        <?php if ($is_invalid): ?>
          <p class="login-validation">Wrong email or password</p>
        <?php endif; ?>
        <input type="submit" value="Login" />
      </form>
      <div class="registration-link">
        Don't have an account?
        <a href="../registration/registration.php">Click here</a> to
        register.
      </div>
    </div>
    <div class="login-image"></div>
  </div>

  <?php include "../footer.php"; ?>

  <!--Javascript file attachment-->
  <script src="./login.js"></script>
</body>

</html>