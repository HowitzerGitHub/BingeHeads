<?php 
session_start();
include "db_conn.php";
    if(isset ($_GET['playlistname']) && isset ($_GET['imdbid'])) {
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $playlistname = validate($_GET['playlistname']);
        $imdbid = validate($_GET['imdbid']);
        // $username = $_SESSION['user_name'];
        $id = $_SESSION['id'];
        // $email= $_SESSION['email'];

        if(empty($playlistname)){echo "error";exit();}
        else{
            $sql = "INSERT INTO `playlistcontent` ( `imdbid`, `id`, `playlistname`) VALUES ( '$imdbid' , '$id' , '$playlistname' )";
         // $sql = "INSERT INTO `patients`  (`name`,`email`,`phone`,`bgroup`)  VALUES ('$name','$email','$phone','$bgroup')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "Successfull";
            }
            else{
            echo "Not-Done";
            }
        }
    }

?>