<?php
    include("db.php");
    include("checkSession.php");
    $ticket = mysqli_query($con, "SELECT * FROM `ticket` WHERE USERNAME=".$_SESSION['username']);

    while ($row = mysqli_fetch_array($ticket)){
        echo $row['Date'] . $row['MovieName'] . $row['Seat_number'] . $row['Showtime'] . $row['QRcode'] . $row['username'] . '<br>';

    }
?>
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
    <br><br><br><br><br><br>
    <title>Cinevault+</title>
    </head>

        <div id="ticket-info">
            <img src="../Assets/remove.png" width=30px boder=2 align=right onclick="location.href ='Page22.php';">
            <img src="../Assets/Avatar2.jpg" width=200px boder=2 align=right  style="padding-right: 20px;">
            <h1 style="color: white;"></h1> 
            <p style="color: orange;"></p>   
            <p style="color: white;"></p>
            <p style="color: orange;">: </p>
            <p style="color: white;"></p>
            <p style="color: orange;"></p>
            <p style="color: white;"></p>
            <p style="color: orange;"></p>
            <p style="color: white;"></p>
            <p style="color: orange;"></p>
            <p style="color: white;"></p> 
        </div>
       
        <div id="qr-code"><br>
           <img src="../Assets/QR.png" alt="QR code">
            <p style="color: white;">สแกน Qr code หน้าโรงหนังเพื่อรับตั๋วภาพยนตร์</p>

</html>

