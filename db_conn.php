<?php
$sname = "localhost";   //Server Name
$uname = "root";        //username
$password = "";         //password(database)
$dbname = "moviesbinge";           //database name

$conn = mysqli_connect($sname,$uname,$password,$dbname);

if(!$conn){
    echo "Connection Failed";
}

?>
