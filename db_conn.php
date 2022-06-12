<?php
$sname = "sql110.epizy.com";
$uname = "epiz_31940855";
$password = "lWy7pVnsYijKZ";
$dbname = "epiz_31940855_bingedb";

$conn = mysqli_connect($sname,$uname,$password,$dbname);

if(!$conn){
    echo "Connection Failed";
}

?>