<?php

require "helpers/helper-functions.php";

session_start();

// Redirect back if any field is empty
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sex = $_POST['sex'];

    if (empty($fullname) || empty($email) || empty($password) || empty($sex)) {
        header('Location: step-1.php');
        exit();
    }

    $_SESSION['fullname'] = $fullname;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['sex'] = $sex;
    header('Location: step-2.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>IPT10 Laboratory Activity #2</title>
    <link rel="icon" href="https://phpsandbox.io/assets/img/brand/phpsandbox.png">
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-4.15.0.min.css" />   
</head>
<body>

<section class="p-section--hero">
  <div class="row--50-50-on-large">
    <div class="col">
      <div class="p-section--shallow">
        <h1>Registration (Step 1/3)</h1>
      </div>
      <div class="p-section--shallow">
        <form action="" method="POST">
          <fieldset>
            <label>Complete Name</label>
            <input type="text" name="fullname" placeholder="John Doe" required>

            <label>Email address</label>
            <input type="email" name="email" placeholder="example@canonical.com" autocomplete="email" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="******" autocomplete="current-password" required>

            <label>Sex</label>
            <br />
            <input type="radio" name="sex" value="male" checked="checked" required> Male
            <br />
            <input type="radio" name="sex" value="female" required> Female
            <br />

            <button type="submit">Next</button>
          </fieldset>

        </form>


        
      </div>
    </div>

    <div class="col">
      <div class="p-image-container--3-2 is-cover">
        <img class="p-image-container__image" src="https://www.auf.edu.ph/home/images/ittc.jpg" alt="">
      </div>
    </div>

  </div>
</section>

</body>
</html>
