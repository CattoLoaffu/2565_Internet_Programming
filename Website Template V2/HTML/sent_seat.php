<?php
$date = date('Y-m-d'); // Get today's date in 'YYYY-MM-DD' format
$showtime = $_POST['showtime'];
$moviename = $_POST['MovieName'];
$selectedSeats = $_POST['selectedSeats'];

// Create connection
include("db.php");

// Check connections
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
foreach($selectedSeats as $seat){
  $sql = "INSERT INTO seat (Date, Showtime, Seat_number, MovieName) VALUES ('$date', '$showtime', '$seat', '$moviename')";
  if (mysqli_query($con, $sql)) {
    echo "Seat booking successful";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }

}

mysqli_close($con);

?>