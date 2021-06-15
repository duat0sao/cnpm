<?php


$idkhach=$_GET['idkhach'];
$idsanpham=$_GET['idsanpham'];



 
// Create connection
$connn = new mysqli("localhost", "root", "", "cnpm1");
// Check connection
if ($connn->connect_error) {
die("Connection failed: " . $connn->connect_error);
}
 
$sql = "INSERT INTO giodo (idkhach, idsanpham) VALUES ('$idkhach', '$idsanpham')";
 
if ($connn->query($sql) === TRUE) {
  // echo "Record updated successfully";
  echo "<a href='index.php?idkhach=". $idkhach ."'  >Thêm vào giỏ đồ thành công</a>";
  exit();
} else {
echo "Error updating record: " . $connn->error;
}
 
$connn->close();

?>