<?php
    require 'config.php';

    $idkhach=$_GET['idkhach'];
    $thanhtien=$_GET['thanhtien'];
    $sql = "INSERT INTO hoadon (idkhach, thanhtien, ngaythanhtoan) VALUES ('$idkhach', '$thanhtien', (now()) )";
    if(mysqli_query($conn,$sql)){
        echo "<a href='index.php?idkhach=". $idkhach ."'  >Cảm ơn quý khách đã mua hàng.</a>";



    }else{

        echo "Thất bại";
    }







?>