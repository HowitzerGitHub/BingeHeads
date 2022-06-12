<?php 
session_start();
include "db_conn.php";
$a =array();
    if( isset($_SESSION['user_name']) && isset($_GET['mid'])   ) {
    // if( isset($_GET['mid'])   ) {
        
        $username = $_SESSION['user_name'];
        $id = $_SESSION['id'];

        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $playlistname = validate($_GET['mid']);
        // echo $playlistname;
            $sql = "SELECT `imdbid` FROM playlistcontent WHERE `id`='$id' AND `playlistname`='$playlistname' ";
            // $sql = "SELECT `imdbid` FROM playlistcontent WHERE `id`=2 AND `playlistname`='Movies 2' ";
         // $sql = "INSERT INTO `patients`  (`name`,`email`,`phone`,`bgroup`)  VALUES ('$name','$email','$phone','$bgroup')";
            $result = $conn->query($sql);
                if(mysqli_num_rows($result)>0){
                                
                    while ($row = mysqli_fetch_assoc($result)){
                        array_push($a,$row['imdbid']);
                        // echo mysqli_num_rows($result); // -> 3
                    }

                    echo json_encode($a); // Result -> ["tt0095016","tt0418259"]
                }


            }
            else{
            echo "error";
            }
        



        //     $sql = "SELECT * FROM playlists WHERE id=2";
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