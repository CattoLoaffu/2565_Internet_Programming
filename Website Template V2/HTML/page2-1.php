<?php include("checkSession.php"); ?>
<!DOCTYPE html>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../CSS/style.css">
<html>
    <title>Cinevault+</title>
<body>
    <div id="showing" class="card">         
        <div class="card-body">             
            <center><span class="navbar-text" style="color: yellow;"><h3>กำลังฉาย</h3></span></center>
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
    <div class="BP2">
        <br><br><br>
        <img src="../Assets/BP2.jpg" width="200" >
        <span class="navbar-text" style="color: white;">
        <p>9 พฤศจิกายน 2022</p>
        <h3><span class="blu">แบล็ค แพนเธอร์</span></h3>
        <h3><span class="blu">วาคานด้าจงเจริญ</span></h3>
        <p>แอ๊คชั่น 160 นาที</p>
        <center><button onclick="location.href ='Page5-1-1.php';">ดูเพิ่มเติม</button> </center>
    </div>
    <div class="Avatar2">
        <br><br><br>
        <img src="../Assets/Avatar2.jpg" width="200" >
        <span class="navbar-text" style="color: white;">
        <p>14 ธันวาคม 2022</p>
        <h3><span class="blu">อวาตาร วิถีแห่งสายน้ำ</span></h3>
        <p>แอ๊คชั่น 190 นาที</p>
        <center><button onclick="location.href ='Page5-2-1.php';">ดูเพิ่มเติม</button> </center>
    </div>
    <div class="LyleLyle">
        <br><br><br>
        <img src="../Assets/LyleLyle.jpeg" width="200" >
        <span class="navbar-text" style="color: white;">
        <p>22 ธันวาคม 2022</p>
        <h3><span class="blu">ไลล์ จระเข้ตัวพ่อ</span></h3>
        <h3><span class="blu">..หัวใจล้อหล่อ</span></h3>
        <p> ตลก/มิวสิคัล 105 นาที</p>
        <center><button onclick="location.href ='Page5-3-1.php';">ดูเพิ่มเติม</button> </center>
    </div>
    <div class="ChristmasCarol">
        <br><br><br>
        <img src="../Assets/ChristmasCarol.jpg" width="200" >
        <span class="navbar-text" style="color: white;">
            <p>29 ธันวาคม 2022</p>
            <h3><span class="blu">คริสต์มาสแค้น</span></h3>       
            <p> ระทึกขวัญ 131 นาที</p>
        <center><button onclick="location.href ='Page5-4-1.php';">ดูเพิ่มเติม</button> </center>   
    </div>
</body>
</html>