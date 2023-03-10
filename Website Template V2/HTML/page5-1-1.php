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
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="movie">
        <div class="top">
        <div class="movie-details" style="display:flex;">
            <img src="../Assets/WakandaPoster.png" style="width: 200px" alt="Movie poster">
            <div style="margin-left:20px;">
                <p style="color:#ffffff" class="movie-release-date">09 พฤศจิกายน 2022</p>
                <h1 style="color:#ffffff">แบล็ค แพนเธอร์ วาคานด้าจงเจริญ</h1>
                <p style="color:#ffffff" class="genre">แอ็คชัน / ผจญภัย</p>
                <table>
                    <tr>
                        <td><img src="../Assets/ClockOrange.png" style="width: 25px" alt="Clock icon"></td>
                        <td>
                            &nbsp;&nbsp;<p style="color:#ffffff">106 นาที</p>
                        </td>
                    </tr>
                </table>
                <br>
                <button class="view-showtimes-button" onclick="location.href ='Page6-1-1.php';">ดูรอบฉายทั้งหมด</button>
            </div>
        </div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/AVxX2Or8JmM" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
        </div>
        <br>
        <h2 style="color:#ffffff" class="title">ข้อมูลภาพยนตร์ | รอบฉาย</h2>
        <p class="movie-info" style="color:#ffffff">
            เรื่องย่อ
            หลังจากที่สิ้นสุดเรื่องราวมหากาพย์ที่ดำเนินมากว่า 10 ปีไปแล้ว ในตอนนี้ MCU เฟสที่ 4
            กำลังเดินหน้าไปในทิศทางใหม่ หนึ่งในภาพยนตร์ที่กำลังอยู๋ในช่วงถ่ายทำอยู่ในตอนนี้ก็คือ Black Panther: Wakanda
            Forever การกลับมาของดินแดนที่ซ่อนตัวมายาวนาน ดินแดนที่เต็มไปด้วยเทคโนโลยีสุดล้ำ
            กับการเปลี่ยนแปลงครั้งใหญ่ที่ดินแดนนี้ต้องเผชิญ และล่าสุดตอนนี้พวกเขาได้นักแสดงคนใหม่เข้ามาเสริมทัพแล้ว
        </p>
        <p style="color:#ffffff">ราชินีรามอนด้า (แองเจลา บาสเซตต์) ชูรี(เลทิเทีย ไรท์) เอ็มบาคู(วินสตัน ดุ๊ก)
            โอโคเย(ดาไน กูริรา) และ โดรา มิลาเจ (รวมไปถึง ฟลอเรนซ์ คาซัมบา)
            จะต้องร่วมต่อสู้เพื่อปกป้องประเทศของพวกเขาจากการแทรกแซงทางอำนาจหลังการสวรรคตของกษัตริย์ทีชัลล่าในระหว่างที่ชาววาคานด้าพยายามอย่างหนักเพื่อที่จะก้าวต่อไป
            เหล่าฮีโร่จึงต้องร่วมมือกัน ด้วยความช่วยเหลือของวอร์ด็อกนาเคีย (ลูพีตา ญองอ) และ เอเวอเร็ตต์ รอสส์ (มาร์ติน
            ฟรีแมน) ในการสร้างเส้นทางใหม่ให้กับวานคานด้า</p>
    </div>
</body>
</html>