<?php

define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'cnpm1');
 



$conn=mysqli_connect('localhost', 'root', '', 'cnpm1');
if(!$conn){
    die("connect fail ".mysqli_connect_error());
}




?>