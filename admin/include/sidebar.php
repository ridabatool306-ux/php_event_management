<?php
include('./connection.php');
 $nrole=$_SESSION['role'];

$rsql="SELECT * FROM `role` WHERE `rolename`='$nrole'";
$rrun=mysqli_query($conn,$rsql);
$rfet=mysqli_fetch_assoc($rrun);
$role=unserialize($rfet['roleper']);
$access=$rfet['roleaccess'];
$iaccess=$rfet['rolename'];

?>
<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" style="length:50px; width:70px;" src="<?php echo "./img/" .$fet['logopic']?>"
             
            <span
                class="logo-name">Otika</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <?php
            if($rfet['roleaccess']=="All" || in_array("category",$role)){
            ?>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>CATEGORY</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="categoryinsert.php">ADD CATEGORY</a></li>
                <li><a class="nav-link" href="categoryview.php">VIEW CATEGORY</a></li>
              </ul>
            </li>
            <?php
            }
            if($rfet['roleaccess']=="All" || in_array("planner",$role)){
            ?>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="briefcase"></i><span>PLANNER</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="plannerinsert.php">ADD PLANNER</a></li>
                <li><a class="nav-link" href="plannerview.php">VIEW PLANNER</a></li>
              </ul>
            </li>
            <?php
            }
            if($rfet['roleaccess']=="All" || in_array("designer",$role)){
            ?>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>DESIGNER</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="designerinsert.php">ADD DESIGNER</a></li>
                <li><a class="nav-link" href="designerview.php">VIEW DESIGNER</a></li>
              </ul>
            </li>
            <?php
            }
            if($rfet['roleaccess']=="All" || in_array("volunteer",$role)){
            ?>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>VOLUNTEER</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="volunteerinsert.php">ADD VOLUNTEER</a></li>
                <li><a class="nav-link" href="volunteerview.php">VIEW VOLUNTEER</a></li>
              </ul>
            </li>
            <?php
            }
            if($rfet['roleaccess']=="All" || in_array("venue",$role)){
            ?>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="briefcase"></i><span>VENUE</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="venueinsert.php">ADD VENUE</a></li>
                <li><a class="nav-link" href="venueview.php">VIEW VENUE</a></li>
              </ul>
            </li>
            <?php
            }
            if($rfet['roleaccess']=="All" || in_array("city",$role)){
            ?>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>CITY</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="cityinsert.php">ADD CITY</a></li>
                <li><a class="nav-link" href="cityview.php">VIEW CITY</a></li>
              </ul>
            </li>
            <?php
            }
            if($rfet['roleaccess']=="All" || in_array("booking",$role)){
            ?>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>BOOKING</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="bookinginsert.php">ADD BOOKING</a></li>
                <li><a class="nav-link" href="bookingview.php">VIEW BOOKING</a></li>
              </ul>
            </li>
            <?php
            }
            if($rfet['roleaccess']=="All" || in_array("event",$role)){
            ?>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>RECENT EVENTS</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="eventinsert.php">ADD EVENT</a></li>
                <li><a class="nav-link" href="eventview.php">VIEW EVENT</a></li>
              </ul>
            </li>
            <?php
            }
            if($rfet['roleaccess']=="All" || in_array("news",$role)){
            ?>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>NEWS</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="newsinsert.php">ADD NEWS</a></li>
                <li><a class="nav-link" href="newsview.php">VIEW NEWS</a></li>
              </ul>
            </li>
            <?php
            }
            if($rfet['roleaccess']=="All" || in_array("buyticket",$role)){
            ?>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Buy Ticket</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="specificbookingview.php">Booking</a></li>
                
              </ul>
            </li>
            <?php
            }
            if($rfet['roleaccess']=="All" || in_array("usermanagement",$role)){
            ?>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>User Management</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="roleinsert.php">User Role</a></li>
                <li><a class="nav-link" href="roleview.php">Role View</a></li>
              </ul>
            </li>
            <?php
            }
            if($rfet['roleaccess']=="All" || in_array("userole",$role)){
            ?>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>User  Role</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="userole.php">Role</a></li>
                <li><a class="nav-link" href="useroleview.php">View</a></li>
              </ul>
            </li>
            <?php
            }
            if($rfet['roleaccess']=="All" || in_array("contact",$role)){
            ?>
            
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Contact</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="contactview.php">View</a></li>
              </ul>
            </li>
            <?php
            }
            ?>
          </ul>
        </aside>
      </div>