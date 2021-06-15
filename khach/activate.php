<?php
include('../config.php');
$id=$_GET['idkhach'];
$code=$_GET['code'];


$sql1="select * from khach where idkhach='$id'";
$result=mysqli_query($conn,$sql1);



if(mysqli_num_rows($result)>0){
    $khach=mysqli_fetch_assoc($result);
}  
if($khach['activation_code']==$code){
    $sql="update khach set status =1 where idkhach='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("Location: index.php?idkhach='$id'");
    } 
    else{
        echo "error";
    }

}
?>