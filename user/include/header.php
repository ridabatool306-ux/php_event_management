<?php
session_start();
@$email=$_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Basic Page Needs ================================================== -->
   <meta charset="utf-8">

   <!-- Mobile Specific Metas ================================================== -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

   <!-- Site Title -->
   <title>Exhibz - Conference &amp; Event HTML Template</title>



   <!-- CSS
         ================================================== -->
   <!-- Bootstrap -->
   <link rel="stylesheet" href="css/bootstrap.min.css">

   <!-- FontAwesome -->
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <!-- Animation -->
   <link rel="stylesheet" href="css/animate.css">
   <!-- magnific -->
   <link rel="stylesheet" href="css/magnific-popup.css">
   <!-- carousel -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <!-- isotop -->
   <link rel="stylesheet" href="css/isotop.css">
   <!-- ico fonts -->
   <link rel="stylesheet" href="css/xsIcon.css">
   <!-- Template styles-->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive styles-->
   <link rel="stylesheet" href="css/responsive.css">

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

</head>

<body>
   <div class="body-inner">
      <!-- Header start -->
      <header id="header" class="header header-transparent">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
               <!-- logo-->
               <a class="navbar-brand" href="index-2.html">
                  <img src="images/logos/logo.png" alt="">
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                  aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"><i class="icon icon-menu"></i></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav ml-auto">
                     <li class="dropdown nav-item active">
                        <a href="#" class="" data-toggle="dropdown" >Home</i></a>
                       
                     </li>
                     <li class="dropdown nav-item">
                        <a href="about-us.html" class="" data-toggle="dropdown">About</i></a>
                       
                     </li>
                     <li class="nav-item dropdown">
                        <a href="#" class="" data-toggle="dropdown">Applications<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                           <li><a href="volunteerinsert.php">Volunteer</a></li>
                           <li><a href="designerinsert.php">Designer</a></li>
                           <li><a href="viewdesigner.php">View designer</a></li>
                           <li><a href="plannerinsert.php">Planner</a></li>
                           <li><a href="viewplanner.php">View Planner</a></li>
                        </ul>

                     </li>
                     <li class="nav-item dropdown">
                        <a href="#" class="" data-toggle="dropdown">Schedule</i></a>
                     </li>
                     <li class="nav-item dropdown">
                        <a href="#">Blog<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                           <li><a href="event.php"> Events</a></li>
                           <li><a href="news.php"> News</a></li>
                        </ul>
                     </li>
                     <li class="nav-item dropdown">
                        <a href="bookinginsert.php">Booking</i></a>
                        
                     </li>
                     <li class="nav-item">
                        <a href="contact.php">Contact</a>
                     </li>
                     <?php
                     if(empty($email)){
                        ?>
                        <li class="header-ticket nav-item">
                        <a class="ticket-btn btn" href="login.php"> Log IN
                        </a>
                     </li>
                     <li class="header-ticket nav-item">
                     <a class="ticket-btn btn" href="register.php"> Register
                     </a>
                  </li>
                  <?php
                      }
                     ?>  
                     <?php
                     if(!empty($email)){
                        ?>
                        <li class="header-ticket nav-item">
                     <a class="ticket-btn btn" href="logout.php"> Logout
                     </a>
                  </li>
                  <?php
                      }
                     ?>
                      
                  </ul>
               </div>
            </nav>
         </div><!-- container end-->
      </header>
      <!--/ Header end -->