<?php
session_start();
include "db_conn.php";

if (isset($_POST['uemail']) && isset($_POST['upassword'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $email = validate($_POST['uemail']);
    $pass = validate($_POST['upassword']);

    if (empty($uname)) {

        header("Location: index.php?error=Username Required");
        exit();
    } 
    
    else if(empty($pass)) {
        header("Location: index.php?error=Password Required");
        exit();
    } 

    else if(empty($email)) {
        header("Location: index.php?error=Email Required");
        exit();
    } 
    
    else {

        $sql = "SELECT * FROM `users` WHERE email='$email' AND user_name='$uname'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            header("Location: index.php?error=User Already Exists. Please Login");
            exit();
        } 
        
        else {
            $pass = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`email`,`user_name`,`password`) VALUES ('$email','$uname','$pass') ";
            mysqli_query($conn, $sql);

            $sql = "SELECT * FROM users WHERE email='$email' AND user_name='$uname'";
            $result = NULL;
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

                echo "Logged in !";
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];
                header("Location: home.php");
                exit();
        }
    }
} 

else {
    echo "Location: index.php";
    exit();
}