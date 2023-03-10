<!DOCTYPE html>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../CSS/style.css">
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="../CSS/style2.css">
<?php include("checkSession.php"); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cinevault+</title>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      
        <link rel='stylesheet prefetch' href='http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css'>
      <link rel='stylesheet prefetch' href='http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css'>
      
            <link rel="stylesheet" href="../CSS/style2.css">
      
        
      </head>
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
                  <a class="nav-link active" href="javascript:void(0)" " onclick="location.href ='Page1-1.php';" style="color: orange;">หน้าแรก </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)" onclick="location.href ='Page2-1.php';">ภาพยนตร์</a>
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

    <h1></h1>
    <div class="center"></div>
    <div class="slider">
      <ul>
        <li class="active"></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
      <ol>
        <li class="active"><i class="fa fa-circle-o"></i></li>
        <li><i class="fa fa-circle-o"></i></li>
        <li><i class="fa fa-circle-o"></i></li>
        <li><i class="fa fa-circle-o"></i></li>
        <li><i class="fa fa-circle-o"></i></li>
      </ol>
      <span class="controll active"></span>
      <span class="controll"></span>
    </div>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
    
        <script src="../JS/index.js"></script>
    <nav>    
        <div class="content">
            <div class="phuket" style="width:20%;">
              <div class="tnx">
                <h2><li>กำลังฉาย</li></h2>
              </div>

            </nav>
            <div class="card" style="width:30%;" >
              <a href='Page5-2-1.php'>
                <div class="box1">
                  <h2>อวาตาร 2</h2>
                </div>
              </a>
              <a href="Page5-4-1.php">
                <div class="box2">
                  <h2>คริสต์มาสแค้น</h2>
                </div>
              </a>
              <a href="Page5-1-1.php">
                <div class="box3">
                  <h2>แบล็ค แพนเธอร์: วาคานด้าจงเจริญ</h2>
                </div>
              </a>
              <a href="Page5-3-1.php">
                <div class="box4">
                  <h2>ไลล์ จระเข้ตัวพ่อ..หัวใจล้อหล่..</h2>
                </div>
              </a>
                </div>
              </a>
            </div>
          </div>
        
        </div>

  
</html>