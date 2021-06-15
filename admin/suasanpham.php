<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<?php
// Kết nối Database
include 'config.php';
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `sanpham` where idsanpham='$id'");
$row=mysqli_fetch_assoc($query);
?>

<div class="wrapper">
    <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
                    <div class="page-header">
                        <h2>Sửa sản phẩm</h2>
                    </div>
                    <p>Thêm gì đó vào</p>
                   <form method="POST" class="form">
                        <div>
                            <label class="form-group">Tên sản phẩm <input type="text" value="<?php echo $row['tensanpham']; ?>" name="name" class="form-control"></label><br/>
                        </div>
                        <div>
                            <label class="form-group">Mô tả <input type="text" value="<?php echo $row['motasanpham']; ?>" name="mota" class="form-control"></label><br/>
                        </div>
                        <div>
                            <label class="form-group">Giá <input type="text" value="<?php echo $row['giasanpham']; ?>" name="gia" class="form-control"></label><br/>
                        </div>
                        <div>
                            <label class="form-group">Phân loại <input type="text" value="<?php echo $row['loaisanpham']; ?>" name="loai" class="form-control"></label><br/>
                        </div>
                        <div class="form-group">
                                <label for="">Ảnh</label>
                                <input type="hidden" name="size" value="1000000"> 
                                <input type="file" name="image"> 
                                
                        </div>
                        <div class="form-group">
                                <img src="photo/<?php echo $row['anhsanpham'] ?>" width="80" height="80">
                                
                        </div>
                        




                        <input type="submit" value="Update" name="update_user">
                        <a href="sanpham.php" class="btn btn-default">Cancel</a>
                    </form>
            </div>
         </div>        
    </div>
</div>





<?php

if (isset($_POST['update_user'])){
$id=$_GET['id'];
$name=$_POST['name'];
$mota=$_POST['mota'];
$gia=$_POST['gia'];
$loai=$_POST['loai'];


 
// Create connection
$connn = new mysqli("localhost", "root", "", "cnpm1");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $connn->connect_error);
}
 
$sql = "UPDATE `sanpham` SET tensanpham='$name', motasanpham='$mota', giasanpham='$gia', loaisanpham='loai' WHERE idsanpham='$id'";
 
if ($connn->query($sql) === TRUE) {
  // echo "Record updated successfully";
  header("location: sanpham.php");
  exit();
} else {
echo "Error updating record: " . $connn->error;
}
 
$connn->close();
}
?>


</body>
</html>