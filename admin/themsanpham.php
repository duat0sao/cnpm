<?php
// Include config file
require_once "config.php";
 



if (isset($_POST['upload'])) {
$errors= array();
$file_name = $_FILES['image']['name'];
$file_size = $_FILES['image']['size'];
$file_tmp = $_FILES['image']['tmp_name'];
$file_type = $_FILES['image']['type'];
$file_parts =explode('.',$_FILES['image']['name']);
$file_ext=strtolower(end($file_parts));
$expensions= array("jpeg","jpg","png");
if(in_array($file_ext,$expensions)=== false){
$errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";




}
if($file_size > 2097152) {
$errors[]='Kích thước file không được lớn hơn 2MB';
}
$image = $_FILES['image']['name'];
$target = "photo/".basename($image);

$name = $_POST['ten'];
$mota = $_POST['mota'];
$gia = $_POST['gia'];
$loai = $_POST['loai'];

$sql = "INSERT INTO sanpham (anhsanpham, tensanpham, motasanpham, giasanpham, loaisanpham) VALUES ('$image', '$name', '$mota', '$gia', '$loai')";
mysqli_query($conn, $sql);
if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
echo '<script language="javascript">alert("Đã upload thành công!");</script>';
}else{
echo '<script language="javascript">alert("Đã upload thất bại!");</script>';
}
}







?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>by Trần Nhật Duật</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Thêm sản phẩm</h2>
                    </div>
                    
                    <p>Thêm gì đó vào</p>
                    <form method="POST" action="themsanpham.php" enctype="multipart/form-data"> 
                        <div class="form-group">
                                <label for="">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="" placeholder="Nhập tên danh muc" name="ten">
                        </div>
                        <div class="form-group">
                                <label for="">Mô tả sản phẩm</label>
                                <input type="text" class="form-control" id="" placeholder="Nhập tên danh muc" name="mota">
                        </div>
                        <div class="form-group">
                                <label for="">Giá sản phẩm</label>
                                <input type="text" class="form-control" id="" placeholder="Nhập tên danh muc" name="gia">
                        </div>
                        <div class="form-group">
                                <label for="">Phân loại</label>
                                <input type="text" class="form-control" id="" placeholder="Nhập tên danh muc" name="loai">
                        </div>
                        <div class="form-group">
                                <label for="">Ảnh</label>
                                <input type="hidden" name="size" value="1000000"> 
                                <input type="file" name="image"> 
                        </div>
                        <button type="submit" name="upload">POST</button>


                    </form> 

<br>

                    <div class="page-header">
                        <a href="sanpham.php">Hủy</a>
                    
                    </div>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>