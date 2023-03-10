
<?php
$date = date('Y-m-d'); // Get today's date in 'YYYY-MM-DD' format
$showtime = $_POST['showtime'];
$moviename = $_POST['MovieName'];
$selectedSeats = explode(',', $_POST['selectedSeatsInput']);

// Create connection
include("db.php");

// Check connections
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

// Loop through the array of selected seats and insert each seat into the database
foreach ($selectedSeats as $seatNumber) {
  // Insert the data into the database
  $sql = "INSERT INTO seat (Date, Showtime, Seat_number, MovieName) VALUES ('$date', '$showtime', '$seatNumber', '$moviename')";
  if (mysqli_query($con, $sql)) {
    echo "Seat booking for seat number $seatNumber successful";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
}

mysqli_close($con);

?>
