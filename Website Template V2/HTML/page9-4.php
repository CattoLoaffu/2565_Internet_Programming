<!DOCTYPE html>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../CSS/style.css">
<html>

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
                        <a class="nav-link active" href="javascript:void(0)" onclick="location.href ='Page1.php';">หน้าแรก </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" onclick="location.href ='Page2.php';">ภาพยนตร์</a>
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
                <a href="">
                    <img src="../Assets/userIconOrange.png" style="width: 30px;">
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>
    </nav>
    <br><br><br><br><br><br>
    <title>Cinevault+</title>
    </head>

        <div id="ticket-info">
            <img src="../Assets/remove.png" width=30px boder=2 align=right>
            <img src="../Assets/ChristmasCarol.jpg" width=200px boder=2 align=right  style="padding-right: 20px;">
            <h1 style="color: white;">จองที่นั่งสำเร็จ</h1> 
            <p style="color: orange;">ชื่อภาพยนตร์: </p>   
            <p style="color: white;">คริสต์มาสแค้น</p>
            <p style="color: orange;">ที่นั่งของคุณ: </p>
            <p style="color: white;">D5</p>
            <p style="color: orange;">ราคา: </p>
            <p style="color: white;">160 บาท</p>
            <p style="color: orange;">วันที่: </p>
            <p style="color: white;">29/12/2565</p>
            <p style="color: orange;">เวลา: </p>
            <p style="color: white;">11:30 น</p> 
           
        </div>
       
        <div id="qr-code"><br>
           <img src="../Assets/QR.png" alt="QR code">
            <p style="color: white;">สแกน Qr code หน้าโรงหนังเพื่อรับตั๋วภาพยนตร์</p>

</html>
