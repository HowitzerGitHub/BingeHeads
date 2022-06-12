<?php 
session_start();
include "db_conn.php";
$a = array();
    if(isset ($_SESSION['user_name']) ) {
        $username = $_SESSION['user_name'];
        // echo $username;
        $id = $_SESSION['id'];
        // echo  $_SESSION['id'];
            $sql = "SELECT `playlistname` FROM playlists WHERE `id`='$id' ";
         // $sql = "INSERT INTO `patients`  (`name`,`email`,`phone`,`bgroup`)  VALUES ('$name','$email','$phone','$bgroup')";
            $result = $conn->query($sql);
                if(mysqli_num_rows($result)>0){
                                
                    while ($row = mysqli_fetch_assoc($result)){
                        array_push($a,$row['playlistname']);
                        // echo mysqli_num_rows($result); // -> 3
                    }

                    echo json_encode($a);
                }
            }
            else{
            echo "error";
            }
        


        //     $sql = "SELECT `playlistname` FROM playlists WHERE id=2";
        //  // $sql = "INSERT INTO `patients`  (`name`,`email`,`phone`,`bgroup`)  VALUES ('$name','$email','$phone','$bgroup')";
        //     $result = $conn->query($sql);
        //     if(mysqli_num_rows($result)>0){
                
        //         while ($row = mysqli_fetch_assoc($result)){
        //             array_push($a,$row['playlistname']);
        //             // echo mysqli_num_rows($result); // -> 3
        //         }
        //     }
        //     else{
        //     echo "Not Done";
        //     }

        //     echo json_encode($a); // output = ["Movies 1","Movies 2","Movies2"]
        
    

?>