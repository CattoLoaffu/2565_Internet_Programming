<?php session_start(); ?>
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
            </a>&nbsp;&nbsp;&nbsp;&nbsp;
    
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="movie">
        <div class="top">
        <div class="movie-details" style="display:flex;">
            <img src="../Assets/LyleLyle.jpeg" style="width: 200px" alt="Movie poster">
            <div style="margin-left:20px;">
                <p style="color:#ffffff" class="movie-release-date">22 ธันวาคม 2022</p>
                <h1 style="color:#ffffff">ไลล์ จระเข้ตัวพ่อ หัวใจล้อหล่อ</h1>
                <p style="color:#ffffff" class="genre"> แอนิเมชั่น / ตลก / ผจญภัย</p>
                <table>
                    <tr>
                        <td><img src="../Assets/ClockOrange.png" style="width: 25px" alt="Clock icon"></td>
                        <td>
                            &nbsp;&nbsp;<p style="color:#ffffff">106 นาที</p>
                        </td>
                    </tr>
                </table>
                <br>
                <button class="view-showtimes-button" onclick="location.href ='Page6-3-1.php';">ดูรอบฉายทั้งหมด</button>
            </div>
        </div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/kwddBOvxTp8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <br>
        <h2 style="color:#ffffff" class="title">ข้อมูลภาพยนตร์ | รอบฉาย</h2>
        <p class="movie-info" style="color:#ffffff">
            เรื่องย่อ
            ไลล์ จระเข้ที่มีความสามารถในการร้องเพลงและไม่ทำร้ายมนุษย์ เขาจึงได้อาศัยอยู่ร่วมกับแม่และลูกในบ้านหลังหนึ่งใจกลางเมือง การผจญภัยที่น่าเหลือเชื่อจึงได้เริ่มต้นขึ้น ดัดแปลงสร้างจากวรรณกรรมเยาวชนชื่อดังที่โลกคุ้นเคย
        </p>>
    </div>
</body>
</html>