<?php
    include_once('config.php');
    if(isset($_REQUEST['idgiodo']) and $_REQUEST['idgiodo']!=""){
    $idgiodo=$_GET['idgiodo'];
    $idkhach=$_GET['idkhach'];
    $sql = "DELETE FROM giodo WHERE idgiodo='$idgiodo'";
    if ($conn->query($sql) === TRUE) {
       
        echo "<a href='myaccount.php?idkhach=". $idkhach ."'  >Xóa thành công</a>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
 
    $conn->close();
    }
?>







