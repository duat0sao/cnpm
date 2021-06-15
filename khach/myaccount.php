
<?php
    require 'config.php';
                
?>












<!doctype html>
<html lang="en">

<head>
    <title>by Trần Nhật Duật </title>
    
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="fontawesome/js/all.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.css">
<!--    <link rel="stylesheet" href="css/styles.css"> -->
</head>

<body class="body">
    <header>
        <nav class="navbar navbar-expand-sm header-top">
            <a class="navbar-brand logo" href="">
            <?php
               
                $idkhach=$_GET['idkhach'];
                $query1=mysqli_query($conn,"select * from khach where idkhach='$idkhach'");
                $row1=mysqli_fetch_array($query1);
                echo $row1['tenkhach'];
            ?>
                    
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
            </div>
            <div class="narr">
                <ul class="nav justify-content-end">
                    
                        <li class="nav-item">
                            <a type="button" class="nav-link active " href="#" data-toggle="modal" data-target="#login">
                                <span>Wellcome</span>
                            </a>
                        </li>
                        
                        
                            
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle magana" data-toggle="dropdown" href="#">Change Profile </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item i" href="index.php?idkhach=<?php echo $idkhach; ?>">Thêm sản phẩm</a>
                                        
                                        
                                        <a class="dropdown-item i" href="homthu.php"></a>
                                    </div>
                                </li>
                            
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php?idkhach=<?php echo $idkhach; ?>">Logout</a>
                            </li>
                    
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light header-bottom">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Trang chủ<span class="sr-only">(current)</span></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?idkhach=<?php echo $idkhach; ?>">Thêm sản phẩm</a>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" href="inbox.php">Tin nhắn</a>
                    </li>
                  
                    
                   
                    
                </ul>
                <form action="search.php" method="get">
                Search: <input type="text" name="search" />
                <input type="submit" name="ok" value="search" />
            </form>
            </div>
        </nav>
    </header>


    <center>
    <div class="container">












    <div class="wrapper">
    <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
                    <div class="page-header" >
                       <strong> <h2 class="text-primary fw-bold">GIỎ ĐỒ</h2> </strong>
                    </div>
                    


                    <div class="page-header clearfix">
                        
                       
                    </div>
                <div >
                    <table class="table">
                        <tr>

                            <td>Chi tiết giỏ đồ</td>
                            

                        </tr>
<?php
$thanhtien = 0;
$ten1[] = "";
$query=mysqli_query($conn,"select * from giodo where idkhach='$idkhach'");
while($row=mysqli_fetch_array($query)){
?>
                        <tr>

                            <?php $idsanpham=$row['idsanpham']; //echo $idsanpham; ?>
                            <?php

                                    $query2=mysqli_query($conn,"select * from sanpham where idsanpham='$idsanpham'");
                                    while($row2=mysqli_fetch_array($query2)){
                                ?>
                                    <td><?php echo $row2['tensanpham'];?></td>
                                    <td> <img src="../admin/photo/<?php echo $row2['anhsanpham']; ?>" alt="" width="50"></td>
                                    <td><?php echo $row2['giasanpham']; $thanhtien += $row2['giasanpham']; ?> Vnđ </td>
                                    <td><?php echo $row2['loaisanpham']; ?></td>


                                <?php
                                    }
                                ?>
                            
                            

                            <td class="navbar-search pull-right">
                                
                                <a href="xoaspkgd.php?idgiodo=<?php echo $row['idgiodo']; ?>&idkhach=<?php echo $idkhach; ?> "  >Delete</a>


                            </td>

                        </tr>
<?php
}
?>
                    </table>
                    

                   

                    </div>
<br>
                <center><button><a href="thanhtoan.php?idkhach=<?php echo $idkhach; ?>&thanhtien=<?php echo $thanhtien; ?>">THANH TOÁN</a></button></center>


            </div>
         </div>        
    </div>
</div>




</center>

        









        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>