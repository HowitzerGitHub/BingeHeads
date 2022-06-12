<?php 
session_start();
include "db_conn.php";
    if(isset($_SESSION['user_name'])){
        if(isset ($_GET['playlistname']) && isset ($_GET['public'])) {
            function validate($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            $playlistname = validate($_GET['playlistname']);
            $public = ($_GET['public']);
            $id = $_SESSION['id'];
            echo "php Echo" . $public;
            if(empty($playlistname)){echo "error";exit();}
            else{
                $sql = "INSERT INTO `playlists` ( `id`, `playlistname`, `public` ) VALUES ( '$id' , '$playlistname' , '$public' )";
            // $sql = "INSERT INTO `patients`  (`name`,`email`,`phone`,`bgroup`)  VALUES ('$name','$email','$phone','$bgroup')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    echo "Successfull";
                    exit();
                }
                else{
                echo "Not Done";
                exit();
                }
            }
        }

        else {
            echo "error";
            exit();
        }
    }

    else{
        echo "Session Ended";
        exit();
    }

?>