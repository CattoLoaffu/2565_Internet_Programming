<?php include("checkSession.php"); ?>
<!DOCTYPE html>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../CSS/style.css">
<html>
    <title>Cinevault+</title>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="../Assets/Icon.png" style="width: 60px;">
            </a>
            <span class="navbar-text" style="color: white;">Cinevault+</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="collapse navbar-collapse" id="mynavbar">
                
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                  <a class="nav-link active" href="javascript:void(0)" " onclick="location.href ='Page1-1.php';">หน้าแรก </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)" onclick="location.href ='Page2-1.php';"style="color: orange;">ภาพยนตร์</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)">
                                    <img src="../Assets/Ticket.png" style="width: 30px;" onclick="location.href ='Page22.php';">
                                </a>
                            </li>
                        </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-secondary" type="button">Search</button>
                </form>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="logout.php">
                <img src="../Assets/logout.png" style="width: 40px;">
            </a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
            </div>
        </div>
    </nav>

<html>
    <head>
        <title>Sign in</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
       <link href="https://fonts.googleapis.com/css?family=Nunito:600,700,900" rel="stylesheet">
       
    <body id="body">
        <div id="login-card" class="card">
        <div class="card-body">
          <h2 class="text-center">Create new Account</h2>
          <br>
          <form method="post" action="checkRegister.php">
            <div class="form-group">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAME<br>
              <center><input type="text" class="form-control" id="email" name="name"></center>
            </div>
            <div class="form-group">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เลขบัตรประชาชน<br>
              <center><input type="text" class="form-control" id="email"  name="idnum"></center>
            </div>
            <div class="form-group">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EMAIL ADDRESS<br>
                <center><input type="email" class="form-control" id="email" name="email"></center>
            </div>  
            <div class="form-group">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PASSWORD<br>
                <center><input type="password" class="form-control" id="email" name="pass"></center>
            </div>
            <div class="form-group">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CONFIRM PASSWORD<br>
                <center><input type="password" class="form-control" id="email" name="conpass"></center>
            </div>
            <div class="form-group">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วัน/เดือน/ปีเกิด<br>
                <center><input type="date" class="form-control" id="email" name="bd"></center>
            </div>
            <center><input type="submit" value="sign in" ></center>
        <br>
</body>
</html>