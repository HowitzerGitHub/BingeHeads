<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['upassword'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['upassword']);
    if (empty($uname)) {

        header("Location: index.php?error=Username Required");
        exit();
    } 
    
    else if(empty($pass)) {
        header("Location: index.php?error=Password Required");
        exit();
    } 
    
    else {

        $sql = "SELECT * FROM users WHERE user_name='$uname' AND user_name='$uname'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['user_name'] === $uname && password_verify($pass,$row['password'])) {
                // password_verify( string $password , string $hash )
                echo "Logged in !";
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: home.php");
                exit();
            } 
            
            else {
                header("Location: index.php?error=Incorrect username or password");
                exit();
            }
        } 
        
        else {
            header("Location: index.php?error=Incorrect username or password");
            exit();
        }
    }
} 

else {
    echo "Location: index.php";
    exit();
}