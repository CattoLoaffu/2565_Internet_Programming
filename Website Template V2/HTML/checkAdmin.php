<?php
    session_start();
    include("db.php");
    $strSQL = "SELECT * FROM `staff` WHERE Email = '".mysqli_real_escape_string($con,$_POST['email'])."' 
    and password = '".mysqli_real_escape_string($con,$_POST['pass'])."'";
    $objQuery = mysqli_query($con,$strSQL);
    $objResult = mysqli_fetch_array($objQuery);
    if($objResult)
    {
        $_SESSION['email'] = $objResult['email'];
        header("Location:page10-11.html");
    }
    else
    {
        echo "<script>alert('Username or Password incorrect')</script>";
        echo "<script> window.location='adminLogin.php';</script>";
    }
    mysqli_close($con);
?>



