<?php
$con=mysqli_connect("cis.gvsu.edu","bloomj","bloomj9361","bloomj");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if (isset($_POST['id'])){
$id = mysqli_real_escape_string($con, $_POST['id']);

$sql="DELETE FROM clips WHERE id = $id";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record deleted";
}
mysqli_close($con);
header("location: index.php");
?>
