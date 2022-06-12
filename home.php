<?php 
session_start();
if(! isset($_SESSION['user_name'])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> BingeHeads|The Movie Dictionary </title>
    

    <!-- Boxiocns CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
 
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close" id="sidebarid">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">BingeHeads</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Category</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Playlists</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu" id="sub_menu_id">
          <!-- <li><a class="link_name" href="#">Playlists</a></li> -->
                  
                      <!-- <li><a href="#">Playlist1</a></li>
                      <li><a href="#">Playlis2</a></li>
                      <li><a href="#">Playlist3</a></li>          -->
        </ul>
      </li>
      <li>
      <!-- <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Add Playlist</span>
          </a>
        </div>
      </li> -->
      <!-- <li>

        <ul class="sub-menu">
          <li><a class="link_name" href="#">Posts</a></li>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Login Form</a></li>
          <li><a href="#">Card Design</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Analytics</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Analytics</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Chart</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Chart</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-plug' ></i>
            <span class="link_name">Plugins</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Plugins</a></li>
          <li><a href="#">UI Face</a></li>
          <li><a href="#">Pigments</a></li>
          <li><a href="#">Box Icons</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-compass' ></i>
          <span class="link_name">Explore</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Explore</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-history'></i>
          <span class="link_name">History</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">History</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li> -->
      <li>
    <div class="profile-details">
      <div class="profile-content">
        <img src="image/profile.jpg" alt="profileImg">
      </div>
      <div class="name-job">
        <div class="profile_name"><?php echo($_SESSION['user_name']) ?> </div>
      </div>
      <i class='bx bx-log-out' id="logoutButton"></i>
    </div>
  </li>
</ul>
  </div>

  <section class="home-section">
    <header>
      <img src="image/bingeheads_logo.png" alt="" id="logo">
      <div class="heading"><h3>The Movie Dictionary</h3></div>
      <form action="">
          <input type="text" placeholder="search" id="search" class="search">
      </form>
  </header>
  <main id="main">
      <div class="movie">
          <img src="https://images.unsplash.com/photo-1654778324619-1358338da477?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1465&q=80" alt="Image">
          <div class="movie-info">
              <h3>Movie Title</h3> 
              <!-- <span class="red">1.0</span> -->
          </div>
          <div class="overview">
              <h3>Overview</h3>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus minus, doloribus ut eveniet unde quidem omnis culpa, natus quae hic harum dolor amet laudantium deleniti illo consequuntur iste numquam magni!
          </div>
      </div>

      <div class="movie">
          <img src="https://images.unsplash.com/photo-1654778324619-1358338da477?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1465&q=80" alt="Image">
          <div class="movie-info">
              <h3>Movie Title</h3> 
              <!-- <span class="red">1.0</span> -->
          </div>
          <div class="overview">
              <h3>Overview</h3>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus minus, doloribus ut eveniet unde quidem omnis culpa, natus quae hic harum dolor amet laudantium deleniti illo consequuntur iste numquam magni!
          </div>
      </div>

      <div class="movie">
          <img src="https://images.unsplash.com/photo-1654778324619-1358338da477?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1465&q=80" alt="Image">
          <div class="movie-info">
              <h3>Movie Title</h3> 
              <!-- <span class="red">1.0</span> -->
          </div>
          <div class="overview">
              <h3>Overview</h3>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus minus, doloribus ut eveniet unde quidem omnis culpa, natus quae hic harum dolor amet laudantium deleniti illo consequuntur iste numquam magni!
          </div>
      </div>

  </main>


  <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="Add Playlist">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Playlist(mark the checkbox for public playlist)</h5>
      </div>


      <div class="modal-body">

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <div class="input-group-text">
              <input type="checkbox" id="chkbxk" value="0" aria-label="Checkbox for following text input">
            </div>
          </div>
          <input type="text" id="plname" class="form-control" aria-label="Text input with checkbox">
          </div>
      </div>

      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="playlistsubmit">Save changes</button>
      </div>
    </div>
  </div>
</div>




  <footer>
      <div class="footer">
          <button class="button button-17" id="loadMoreButton">Load More</button>


          <button type="button" class="btn btn-primary button-17" data-toggle="modal" data-target="#exampleModalCenter">
          Add Playlist
          </button>

      </div>
  </footer>
  </section>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>
