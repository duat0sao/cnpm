<?php
session_start();
include 'config.php';
if(isset($_POST['sign-in']) && $_POST['email'] != '' && $_POST['password'] != ''){
    $t1 = $_POST['email'];
    $t2 = $_POST['password'];
    $sql = "SELECT * FROM khach WHERE email = '$t1' AND matkhaukhach = '$t2'";
    $duyet = mysqli_query($conn,$sql);
    if(mysqli_num_rows($duyet)>0){
        $_SESSION['email']= $t1;
        $o = mysqli_fetch_row($duyet);
        
        $_SESSION['thongbao']='dang nhap thanh cong';
        $rew = mysqli_query($conn, "SELECT * FROM khach where email = '$t1'");
        $row = mysqli_fetch_assoc($rew);
        //echo $row['idkhach'];
        //header('location:'index.php?idkhach=". $row['idkhach'] ."'');
        
        echo "<a href='khach/index.php?idkhach=". $row['idkhach'] ."'  >Bạn đã đăng nhập thành công</a>";

    }
    else {
        $_SESSION['thongbao']='tai khoan va mat khau khong chinh xac';
        header('location:index.php');
    }
}
else {
    $_SESSION['thongbao']='vui long nhap day du thong tin dang nhap';
    header('location:index.php');
    phpAlert(   "Hello world!\\n\\nPHP has got an Alert Box"   );
}
?>
<?php
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>