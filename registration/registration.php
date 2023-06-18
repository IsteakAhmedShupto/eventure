<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../root.css" />
  <link rel="stylesheet" href="../header.css">
  <link rel="stylesheet" href="./registration.css" />
  <link rel="stylesheet" href="../footer.css">
  <title>Eventure - Registration page</title>
</head>

<body>

  <div class="reg-container">
    <div class="reg-image"></div>
    <div class="reg-main">
      <div class="reg-logo">
        <a href="../index.php">Eventure</a>
      </div>
      <div class="reg-header">
        <h3>Hello there!</h3>
        <p>Welcome to eventure!</p>
      </div>
      <form class="reg-form-container" action="../process-signup/process-signup.php" method="POST" novalidate>
        <input type="text" placeholder="Enter name" name="name" />
        <input type="email" placeholder="Enter email" name="email" />
        <input type="password" placeholder="Enter password" class="reg-password" name="password" />
        <input type="password" placeholder="Confirm password" class="reg-password" name="password_confirmation" />
        <input type="submit" value="Registration" />
      </form>
      <div class="login-link">
        Already have an account?
        <a href="../login/login.html">Click here</a> to Login.
      </div>
    </div>
  </div>

  <?php include "../footer.php"; ?>
  <!--Javascript file attachment-->
  <script src="./login.js"></script>
</body>

</html>