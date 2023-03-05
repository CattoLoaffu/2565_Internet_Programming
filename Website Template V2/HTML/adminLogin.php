<?php session_start(); ?>
<!DOCTYPE html>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../CSS/style.css">
<html>
<body>
<html>
    <head>
        <title>Cinevault+</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
       <link href="https://fonts.googleapis.com/css?family=Nunito:600,700,900" rel="stylesheet">
    </head>

    <body id="body">
        <div id="login-card-login" class="card">
        <div class="card-body">
          <h2 class="text-center">Administration System</h2>
          <br>
          <form method="post" action="checkAdmin.php">
            <div class="form-group">
              <center><input type="email" class="form-control" id="email-login" placeholder="Email Address" name="email"></center>
            </div>
            <div class="form-group">
              <center><input type="password" class="form-control" id="email-login" placeholder="Password" name="pass"></center>
            </div>
            <center><input type="submit" value="Login" id="click-login" name="login" ></center>
        <br>
        <br>

</body>
</html>