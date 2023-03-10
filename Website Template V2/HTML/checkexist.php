<?php 
    include("db.php");
    $ids = array("A1","A2","A3","A4","A5");
    foreach ($ids as $id) {
        $sql = "SELECT * FROM `seat` WHERE Seat_number ='".mysqli_real_escape_string($con,$id)."'";
        $objquery =  mysqli_query($con, $sql);
        if (mysqli_num_rows($objquery) > 0) {
            echo "<script>existed(".$id.");</script>";
        }
    }
    echo "<script> window.location='page7-1-1.php';</script>";
?>