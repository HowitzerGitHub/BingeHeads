<?php 
session_start();
if(! isset($_SESSION['user_name'])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/movieinfo.css">
    
    <title>Document</title>
</head>
<body>

    <div class="containerInfo" id="containerInfo">
        <!-- <div class="posterSide">
            <img src="https://assets1.ignimgs.com/2017/05/09/transformers-the-last-knight-ver5-xlg-1494356996378.jpg" alt="" srcset="">
        </div>
        <div class="infor">
            <div class="navbar">
                <nav class="navbar navbar-light bg-dark">
                    <a class="navbar-brand" href="#">Charhcit Rajput</a>
                    <img src="image/binge.png" alt="" height="30px">


                  </nav>
            </div>
            <div class="movie-title">
                <span>Transformers : The Last Knight</span>
            </div>
            <div class="movie-detail">
                <div class="set">
                    <label>Release Date</label>
                    <span>Mar3, 2017</span>
                </div>
                <div class="set">
                    <label>Rated</label>
                    <span>PG-18</span>
                </div>
                <div class="set">
                    <label for="">Running Time</label>
                    <span>1hr 47min</span>
                </div>
                <div class="set">
                    <label for="">Genre</label>
                    <span>Action</span>
                </div>
                <div class="set">
                    <label for="">Directior</label>
                    <span>James Gunn</span>
                </div>
                <div class="set">
                    <label for="">Actors</label>
                    <span>Chris Pratt, Zoe Saldana, Dave Bautista</span>
                </div>
                <div class="set">
                    <label for="">Country</label>
                    <span>USA</span>
                </div>
                <div class="set">
                    <label for="">Box-Office</label>
                    <span>$389,813,101</span>
                </div>
                <div class="set">
                    <label for="">Type</label>
                    <span>Movie</span>
                </div>
                <div class="set">
                    <label for="">Language</label>
                    <span>English</span>
                </div>
            </div>
            <div class="movie-description">
                The Guardians struggle to keep together as a team while dealing with their personal family issues, notably Star-Lord's encounter with his father the ambitious celestial being Ego.
            </div>  

            <div class="menu">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Add To Playlist
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-secondary">Open IMDb</button>
            </div>

        </div>
        <div class="logout">
            <button type="button" class="btn btn-secondary" id="logout">Logout  <i class="fa-solid fa-arrow-right-from-bracket"></i></button>
        </div> -->
    </div>
    <script src="movieinfo.js" ></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/fe92adbab5.js" crossorigin="anonymous"></script>
</body>
</html>