<?php
include("db.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $timein = $_POST['timein'];
    $timeout = $_POST['timeout'];
    $showtime = $_POST['showtime'];
    $detail = $_POST['detail'];
    $trailer = $_POST['trailer'];
    // เชื่อมต่อกับฐานข้อมูล MySQL
    
    if (!$con) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    // ตรวจสอบว่าไฟล์รูปถูกอัพโหลดหรือไม่
    if ($_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES['image']['tmp_name'];
        $file_name = $_FILES['image']['name'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $allowed_exts = ['jpg', 'jpeg', 'png', 'gif'];
        
        if (in_array($file_ext, $allowed_exts)) {
            // สุ่มชื่อไฟล์ใหม่เพื่อไม่ให้ชื่อไฟล์ซ้ำกัน
            $new_name = uniqid() . '.' . $file_ext;
            // ย้ายไฟล์เข้าโฟลเดอร์ uploads/
            move_uploaded_file($tmp_name, 'uploads/' . $new_name);
 
            // สร้างคำสั่ง SQL สำหรับการเพิ่มข้อมูลลงในตาราง users
            $sql = "INSERT INTO test (name, type, image, timein, timeout, showtime, detail, trailer)
                    VALUES ('$name', '$type', '$new_name','$timein','$timeout','$showtime','$detail','$trailer')";
            $result = mysqli_query($con, $sql); // ส่งคำสั่ง SQL ไปทำงาน
            echo "<div class='alert alert-success' role='alert'>อัพโหลดแล้ว</div>";
  
        }

    }
    // ปิดการเชื่อมต่อฐานข้อมูล MySQL
    mysqli_close($con);
}
?>
<!DOCTYPE html>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../CSS/style.css">

<style>
input {
  font-size: 20px;
  height: 35px;
  width: 100%; /* กำหนดให้ input เต็มกว้าง */
}
.center {
  display: block; /* หรือ display: inline-block; */
  margin-left: auto;
  margin-right: auto;
}
body {

        background-repeat: no-repeat;
        background-size: cover;
        background-color: #f8f9fc;
    }
</style>
<html>
    <title>Cinevault+</title>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="../Assets/Icon.png" style="width: 60px;">
            </a>
            <span class="navbar-text" style="color: white;">Cinevault+</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="collapse navbar-collapse" id="mynavbar">

                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="javascript:void(0)" onclick="location.href ='Page10-11.html';">หน้าแรก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" onclick="location.href ='Page18.html';">ลงรอบภาพยนต์</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" onclick="location.href ='Page20.html';">ค้นหาข้อมูลผู้ใช้งาน</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-secondary" type="button">Search</button>
                </form>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="">
                    <img src="../Assets/userIcon.png" style="width: 30px;">
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="container-fluid">
        <div class="top">
            <div class="movie-details" style="display:flex;">
                
                <div class="genre" style="margin-left:20px;">
                <form action="" method="post" enctype="multipart/form-data">

                <form name="DateFilter" method="POST">
                <p style="color:#ffffff" >วันที่เข้าฉาย:
                <input type="date" name="timein" id="timein" class="form-control" value="<?php echo date('Y-m-d'); ?>" />
                <br/>
                <p style="color:#ffffff" >วันที่ออกฉาย:
                <input type="date" name="timeout" id="timeout" class="form-control" value="<?php echo date('Y-m-d'); ?>" />
                <p style="color:#ffffff" ><label for="name" >ชื่อหนัง:</label>
                 <input type="text" name="name" id="name" class="form-control" required>
                 </p>

                <p style="color:#ffffff" ><label class="mr-sm-2" for="type">หมวดหมู่:</label>
                <select name="type" id="type" class="form-select" required>
            <option value=""selected>---เลือกหมวดหมู่---</option>
            <option value="comedy">ตลก</option>
            <option value="action">แอคชั่น</option>
            <option value="horror">สยองขวัญ</option>
        </select>
                </p>

                <p style="color:#ffffff" ><label for="image">รูปภาพ:</label>
                <input type="file" name="image" id="image" accept="image/*" required>
                </p>

                    <table>
                        <tr>
                            <td><img src="../Assets/ClockOrange.png" style="width: 25px" alt="Clock icon"></td>
                            <td>
                                &nbsp;&nbsp;<p style="color:#ffffff"><label for="showtime">ความยาวของหนัง:</label>                               
                                <input type="number" name="showtime" id="showtime" class="form-control" required> <a style="color:#ffffff">นาที</a>
                        </tr>
                    </table>
                    <br>
                </div>
            </div>
            
            </div>
            
            <p style="color:#ffffff" ><label for="trailer" >ตัวอย่างหนัง:</label>
                 <input type="url" name="trailer" placeholder="https://youtube.com" pattern="https://.*" id="trailer" class="form-control" required>
                 </p>
            <p style="color:#ffffff" ><label for="detail">เรื่องย่อ:</label>
                 <textarea type="text" class="card shadow mb-4" rows="3"  name="detail" id="detail" placeholder=" รายละเอียด" style="width:100%" required></textarea>
                 </p>
            </p>
        
            <button type="submit" class="btn btn-success center">อัปโหลดข้อมูล</button>

            </form>
        </div>

    </div>
    
</body>
</html>
