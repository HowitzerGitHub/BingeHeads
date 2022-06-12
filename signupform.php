<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <!-- BootStrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">

    <link rel="stylesheet" href="css/login.css">

    <title>SignUp</title>
</head>
<body>
    <div><img src="image/binGeHeads.png" alt="" srcset="" class="logo"></div>
    <header>
        <div class="view video-container">
            <video src="video/background.mp4" autoplay muted loop></video>
            <div class="container">
                <div class="row pt-5">
                    <div class="mx-auto col-xl-5 mb-4 mt-5 pt-5">
                        <div class="card">
                            <form action="signup.php" method="POST">
                                <div class="card-body">
                                    <div class="text-center" id="title">
                                        <h3 class="text-white">
                                            <strong>Sign Up</strong>
                                        </h3>
                                        <!-- <hr> -->
                                    </div>

                                    <!-- errorcodegoeshere -->
                                    <div class="text-center">
                                        <h3 class="text-white">
                                        <?php   if(isset($_GET['error'])) { ?> 
                                            <p class="error"> <?php echo $_GET['error']; ?> ! </p> 
                                        <?php } ?>
                                        </h3>
                                        <hr>
                                    </div>
                                    <!-- errorcodegoeshere -->

                                    <div class="form-group">
                                        <i class="fas fa-at text-white"></i>
                                        <label for="email" class="text-white">Email</label>
                                        <input autocomplete="off" type="email" class="form-control" id="email"     name="uemail" required>
                                    </div>

                                    <div class="form-group">
                                        <i class="fas fa-user text-white"></i>
                                        <label autocomplete="off" for="name" class="text-white">Your Name/Alias</label>
                                        <input type="text" class="form-control" id="name"       name="uname" required>
                                    </div>

                                    <div class="form-group">
                                        <i class="fas fa-lock text-white"></i>
                                        <label for="password" class="text-white">Password</label>
                                        <input type="password" class="form-control passprimary" id="pass" name="upassword" onChange="onChange()" required>
                                    </div>

                                    <div class="form-group">
                                        <i class="fas fa-lock text-white"></i>
                                        <label for="password" class="text-white">Confirm Password</label>
                                        <input type="password" class="form-control" id="pass"  name="cupassword" onChange="onChange()" required>
                                    </div>

                                    <input type="checkbox" onclick="myFunction()"><span class="text-white">Show Password</span>

                                    <div class="text-center mt-5">
                                        <button name="submit" type="submit" class="myButton">SignUp</button>

                                        <!-- <a href="signup.html" class="pt-5 text-white d-block" style="font-size:14px">Don't have an account? SignUp</a> -->
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

<!-- Script -->
<script src="signUp.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>