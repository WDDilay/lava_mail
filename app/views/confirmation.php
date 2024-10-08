<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm</title>
    <link rel="stylesheet" href="public\Assets\node_modules\bootstrap\dist\css\bootstrap.min.css">
    <script src="public/Assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/public/style/style.css">
</head>

<body>
    
<div class="container">
    <?php flash_alert();?>
     <!-- Login Form -->
    <div class="login form">
      <header>Confirmation</header>
      <form action="<?= site_url('/activate')?>" method="POST">
      <?php flash_alert(); ?>
        <input type="text" name="code" placeholder="Enter code" required>
        <input type="submit" class="button" value="Confirm">
        <a href="/resend" class="button">Resend Confirmation</a><br>
        <a href="/" class="button">Go to Login</a>
      </form>
    </div>
</div>

</body>

</html>