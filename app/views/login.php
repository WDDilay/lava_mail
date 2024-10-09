<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="public/Assets/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/style/style.css">
    <script src="public/Assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<body>
    
    <div class="container">
    <?php flash_alert();?>
    <input type="checkbox" id="check">
    
    <!-- Login Form -->
    <div class="login form">
      <header>Login</header>
      <form action="<?= site_url('/verify')?>" method="POST" method="POST">
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="password" name="password" placeholder="Enter your password" required>
        <input type="submit" class="button"d value="Login">
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
         <label for="check">Signup</label>
        </span>
      </div>
    </div>
    
    <!-- Registration Form -->
    <div class="registration form">
      <header>Signup</header>
      <form action="/signup" method="POST">
        <input type="text" name="first_name" placeholder="Enter your First Name" required>
        <input type="text" name="last_name" placeholder="Enter your Last Name" required>
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="password" name="password" placeholder="Create a password" required>
        <input type="password" name="con_password" placeholder="Confirm password" required>
        <input type="submit" class="button" value="Signup">
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
      </div>
    </div>
  </div>
</body>

</html>
