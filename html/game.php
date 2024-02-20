<?php
session_start(); // Start the session

// Check if $_SESSION['num'] is not set or empty
if (!isset($_SESSION['num']) || empty($_SESSION['num'])) {
    // Redirect to login.php
    header("Location: login.php");
    exit; // Stop further execution
}
?>



<!DOCTYPE html>
<html lang="en">
   <head>
    
     
     
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Game</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" type="text/css" href="gamesection.css">

      <!-- owl carousel style -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <style>
         .logo {
            display: inline-block;
            margin-right: 100px; /* Adjust the margin to match your layout */
         }
      
         .logo img {
            width: 90px;
            height: 90px;
            max-height: auto;
            /* Add any additional styling as needed */
         }
      </style>
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
      <nav class="navbar navbar-dark bg-dark">
            <a class="logo"><img src="team.png"></a>
            <div id="navbarsExample01">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ffregister.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log Out</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="game.html">Game</a>
                    </li> -->
                </ul>
            </div>
        </nav>
      </div>
      <!--header section end -->
      <!-- game section start -->
      <div class="game_section layout_padding " style="margin-top: 200px;">
         <div class="container">
            <h1 class="game_taital"><img src="hg.jpg"> <span>All Games Here</span></h1>

            <div class="game_section_2 layout_padding">
               <div class="row">
               <div class="col-lg-3 col-sm-6">
    <div class="image_2" style="background: url('https://media.giphy.com/media/Aq8sbOJuScX8X7Vhnw/giphy.gif')center/cover;">
        <h1 class="number_text">Br1</h1>
        <h1 class="game_text_1">Game At 10 AM</h1>
        <p class="many_text">Battle Royale</p>
        <p class="many_text">An exciting battle between 12 Squads</p>
    </div>
    <div class="playnow_bt active"><a href="room1.php?time=10">Get Room ID</a></div>
</div>
<div class="col-lg-3 col-sm-6">
    <div class="image_2" style="background: url('https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExeGF1eDF1aTByam1lN200b2NsY3k1Mm13bHZ5MW1yNzA0OHhtdnIwaCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/cbZ4dcdB0RiZbgD4dr/giphy.gif') center/cover;">
        <h1 class="number_text">Br2</h1>
        <h1 class="game_text_1">Game At 11 AM</h1>
        <p class="many_text">Battle Royale</p>
        <p class="many_text">An exciting battle between 12 Squads</p>
    </div>
    <div class="playnow_bt active"><a href="room1.php?time=11">Get Room ID</a></div>
</div>
<div class="col-lg-3 col-sm-6">
    <div class="image_2" style="background: url('https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExZTlzdjkyYmEyd2R3NDVteGZ4bHhpdWhseWxqdGl6ODQzYjZmMzRsNiZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/tgVG03iAINEG69Iz2v/giphy.gif') center/cover;">
        <h1 class="number_text">Br3</h1>
        <h1 class="game_text_1">Game At 12 PM</h1>
        <p class="many_text">Battle Royale</p>
        <p class="many_text">An exciting battle between 12 Squads</p>
    </div>
    <div class="playnow_bt active"><a href="room1.php?time=12">Get Room ID</a></div>
</div>
<div class="col-lg-3 col-sm-6">
    <div class="image_2" style="background: url('https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExNzdydDBoc3lkcXdpcWM2YWdweGVuMmp6ZjAxbjI1cmVjdHMxbThrYSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/a8GXVOeiBzPPG0L8cS/giphy.gif')center/cover;">
        <h1 class="number_text">Br4</h1>
        <h1 class="game_text_1">Game At 1 PM</h1>
        <p class="many_text">Battle Royale</p>
        <p class="many_text">An exciting battle between 12 Squads</p>
    </div>
    <div class="playnow_bt active"><a href="room1.php?time=1">Get Room ID</a></div>
</div>

               
                 
                 
                 
               </div>
            </div>
         </div>
      </div>
      <!-- game section end -->
      <!-- play section start -->
      <div class="play_section layout_padding">    
         <div class="container">
            <h1 class="play_taital"><img src="garena.png"> <span> </span></h1>
            
            <div class="game_section_2 layout_padding" >
               <div class="row">
               
                  <div class="col-lg-4 col-sm-6">
                     <div class="box_section">
                        <img src="images/jigsaw-img.png" class="image_6">
                     </div>
                     <a class="register_text"href="leaderboard.html">Leaderboard</a>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                     <div class="box_section">
                        <img src="images/jigsaw-img.png" class="image_6">
                     </div>
                     <a class="register_text"href="select.html">Selected Teams</a>
                  </div>
               </div>   
            </div>
         </div>
      </div>   <!-- game section end -->
      <!-- footer section start -->
    
      <!-- footer section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> 
      <script type="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2//2.0.0-beta.2.4/owl.carousel.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="../../assets/js/vendor/popper.min.js"></script>
      <script src="../../dist/js/bootstrap.min.js"></script>
   </body>
</html>

