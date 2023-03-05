<!DOCTYPE html>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../CSS/style.css">
<style>

    
</style>
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
    <div class="Page21">
        <div class="user-info">
            <div class="user-picture">
              <img src="../Assets/เพิ่มรูป.JPG" alt="User Picture">
            </div>
            <div class="user-details">
            <?php
                session_start();
                include("db.php");
                $rno=$_GET['userName'];
                $sql="SELECT * FROM `user` WHERE userName='".mysqli_real_escape_string($con,$rno)."'";
                $result=$con->query($sql);
                $row=$result->fetch_assoc();    
                            
                $name=$row['userName'];
                $dateb=$row['datebirth'];
                $idnum=$row['idcard'];
                $email=$row['Email'];

                echo $name."<br>";
                echo "<b><u>Date of Birth:</u></b> ".$dateb."<br>";
                echo "<b><u>ID Card Number:</u></b> ".$idnum."<br>";
                echo "<b><u>Email Address:</u></b> ".$email."<br>";
              ?>
            </div>
          </div>
          <div class="purchase-history">
            <h3>Purchase History</h3>
            <table>
              <tr>
                <th>Date</th>
                <th>Movie Name</th>
                <th>Amount</th>
              </tr>
              <tr>
                <td>01/01/2022</td>
                <td>The Matrix</td>
                <td>$10</td>
              </tr>
              <tr>
                <td>01/02/2022</td>
                <td>Inception</td>
                <td>$10</td>
              </tr>
              <tr>
                <td>01/03/2022</td>
                <td>Interstellar</td>
                <td>$10</td>
              </tr>
            </table>
          </div>
          <br><br>
          <center><a href="page20.php" class="btn btn-primary">Go Back</a></center>

    </div>
</body>
</html>

</body>
</html>
