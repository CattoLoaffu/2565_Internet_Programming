<!DOCTYPE html>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../CSS/style.css">
<title>Cinevault+</title>
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
                        <a class="nav-link active" href="javascript:void(0)" onclick="location.href ='Page10-11.html';">หน้าแรก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" onclick="location.href ='Page18.html';">ลงรอบภาพยนต์</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" onclick="location.href ='Page20.html';" style="color: orange;">ค้นหาข้อมูลผู้ใช้งาน </a>
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
        <div class="Search">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<form class="d-flex">
            <form method="get" action="<?=$_SERVER['SCRIPT_NAME'];?>">
                <input class="form-control me-2" name="keyw" type="text" placeholder="Search" id="keyw">
                <input type="submit" value="search">
            </form>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        </div>
        <?php
    session_start();
    include("db.php");
    $strSQL = "SELECT * FROM `user` WHERE userName LIKE '%" . $_GET["keyw"] . "%'";
    $i=0;    
    $objquery =  mysqli_query($con, $strSQL);
    echo "<table border=1>";
    echo "<tr><th>userName</th>";
    echo "<th>Email</th>";
    echo "<th>idcard</th>";
    echo "</tr>";
    if (mysqli_num_rows($objquery) > 0) {
        while ($row = mysqli_fetch_assoc($objquery)) {
            $i++;
                if ($i % 2 == 0) {
                    echo "<tr bgcolor=#89FAF4>";
                } else {
                    echo "<tr bgcolor=#FA9C89>";
                }
            echo "<td>" . $row["userName"] . "</td><td>" . $row["Email"] . "</td>";
            echo "<td>" . $row["idcard"] . "</td>";
        }
    }
    echo "</table>";
    mysqli_close($con);

?>
        <!--<div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div id="login-card" class="card">
                <div class="card-body" width="200" height="100">
                    <h2 class="text-center">นายA(นามสมมุติ)</h2>
                    <center><input type="button" value="=>" id="click" onclick="location.href ='Page21.html';"></center>
                </div>
            </div>

        </body>-->

</html>