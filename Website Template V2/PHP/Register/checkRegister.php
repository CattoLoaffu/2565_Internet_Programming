<?php
    session_start();
    include("../source/db.php");
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $conpassword = $_POST["conpass"];
    $idnum = $_POST["idnum"];
    $dateb = $_POST["bd"];

    $strSQL = "INSERT INTO `user`(`Email`, `password` , `userName` , `idcard` , `datebirth`) VALUES ('$email','$password','$name' ,'$idnum','$dateb')";
    $objQuery = mysqli_query($con,$strSQL);
    if($objQuery)
    {
        echo "<script> alert('Register successful');</script>";
        echo "<script> window.location='hello.php';</script>";
    }
    else
    {
        echo "<script> alert('Register failed)</script>";
        echo "<script> window.location='page4.php';</script>";
    }
    mysqli_close($con);
?>