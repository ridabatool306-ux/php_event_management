<?php
include('./connection.php');
include('./include/header.php');
// $email=$_SESSION['email'];
// if(empty($email)){
//   header('Location:./login.php');
// }

use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


if(isset($_POST['sub'])){
  
   $categoryname=mysqli_real_escape_string($conn,$_POST['categoryname']);
   $clientname=mysqli_real_escape_string($conn,$_POST['clientname']);
   $bookingemail=mysqli_real_escape_string($conn,$_POST['bookingemail']);
   $bookingcontact=mysqli_real_escape_string($conn,$_POST['bookingcontact']);
   $occassiontitle=mysqli_real_escape_string($conn,$_POST['occassiontitle']);
   $occassiondate=mysqli_real_escape_string($conn,$_POST['occassiondate']);
   $occassiontime=mysqli_real_escape_string($conn,$_POST['occassiontime']);
   $numberofseats=mysqli_real_escape_string($conn,$_POST['numberofseats']);
   $venuename=mysqli_real_escape_string($conn,$_POST['venuename']);
   $bookingdescription=mysqli_real_escape_string($conn,$_POST['bookingdescription']);
   $occassiontype=mysqli_real_escape_string($conn,$_POST['occassiontype']);
  $role="pending";
  $msg2= "";
  if(empty($clientname) || empty($bookingemail) || empty($bookingcontact) || empty($occassiontitle) || empty($occassiondate) || empty($occassiontime)|| empty($numberofseats) || empty($bookingdescription) || empty($occassiontype)){
    $msg="please fill all fields";
    }else{
        $bsql="INSERT INTO `booking`(`category_name`,`clientname`,`bookingemail`,`bookingcontact`,`occassiontitle`,`occassiondate`,`occassiontime`,`numberofseats`,`venue_name`,`bookingdescription`,`occassiontype`,`role`) VALUES ('$categoryname','$clientname','$bookingemail','$bookingcontact','$occassiontitle','$occassiondate','$occassiontime','$numberofseats','$venuename','$bookingdescription','$occassiontype','$role')";
        $brun=mysqli_query($conn,$bsql);
        if($brun){
            $msg2="right";
        } 
        if($msg2=="right"){
          $mail=new PHPMailer(true);
      
          $mail->isSMTP();
          $mail->Host='smtp.gmail.com';
          $mail->SMTPAuth=true;
          $mail->Username=$email_user;
          $mail->Password=$email_pass;
          $mail->SMTPSecure='ssl';
          $mail->Port=465;
      
          $mail->setFrom($email_user);
      
          $mail->addAddress($bookingemail);
      
          $mail->isHTML(true);
          
          $mail->Body=$occassiondate."<br>".$occassiontime;
      
          if($mail->send()){
            echo "<script> alert('Send Successfully')</script>";
          }else{
            echo "<script> alert(' Not Send Successfully')</script>";
          }
      
          // document.location.href='bookinginsert.php';
      }
   }
  }
?>

<div id="page-banner-area" class="page-banner-area" style="background-image:url(images/hero_area/banner_bg.jpg)">
         <!-- Subpage title start -->
         <div class="page-banner-title">
            <div class="text-center">
               <h2>Booking</h2>
               <ol class="breadcrumb">
                  <li>
                     <a href="#">Exhibit /</a>
                  </li>
                  <li>
                     Booking
                  </li>
               </ol>
            </div>
         </div><!-- Subpage title end -->
      </div><!-- Page Banner end -->
      <!-- Main Content -->

      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row justify-content-center">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <form method="post" enctype="multipart/form-data">
                  <h3><?php echo @$msg?></h3>
                    <div class="card-header">
                      <h4>ADD BOOKING</h4>
                    </div>
                    <div class="mb-3">
                    <label for="">Select Category*</label><br>
                    <select name="categoryname" id="" class="form-control">
                    <option value="">Select Category Name</option>
                    <?php
                    $csql="SELECT * FROM category";
                    $crun=mysqli_query($conn,$csql);
                    while($cfet=mysqli_fetch_array($crun)){
                        ?>
                        <option value="<?php echo $cfet['category_id'];?>"><?php echo $cfet['categoryname'];?></option>
                        <?php
                    }
                    ?>
                    </select>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Client Name*</label>
                        <input type="text" class="form-control" required="" name="clientname" placeholder="Enter Client Name">
                      </div>  
                       <div class="form-group">
                        <label>Email Address*</label>
                        <input type="email" class="form-control" required="" name="bookingemail" placeholder="Enter Email Address">
                      </div>
                      <div class="form-group">
                        <label>Contact*</label>
                        <input type="number" class="form-control" required="" name="bookingcontact" placeholder="+ ----">
                      </div>
                      <div class="form-group">
                        <label>Occassion Title*</label>
                        <input type="text" class="form-control" required="" name="occassiontitle" placeholder="Enter Occassion title">
                      </div>
                      <div class="form-group">
                        <label>Occassion Start Date*</label>
                        <input type="date" class="form-control" required="" name="occassiondate" >
                      </div>
                      <div class="form-group">
                        <label>Occassion Start Time*</label>
                        <input type="time" class="form-control" required="" name="occassiontime" >
                      </div>
                      <div class="form-group">
                        <label>Number Of Seats*</label>
                        <input type="text" class="form-control" required="" name="numberofseats" placeholder="Enter Number Of Seats">
                      </div>
                      <div class="mb-3">
                    <label for="">Select Venue</label><br>
                    <select name="venuename" id="" class="form-control">
                    <option value="">Select Venue</option>
                    <?php
                    $vsql="SELECT * FROM venue";
                    $vrun=mysqli_query($conn,$vsql);
                    while($vfet=mysqli_fetch_array($vrun)){
                        ?>
                        <option value="<?php echo $vfet['venue_id'];?>"><?php echo $vfet['venuename'];?></option>
                        <?php
                    }
                    ?>
                    </select>
                    </div>
                      <div class="form-group ">
                        <label>Description*</label>
                        <textarea class="form-control" required="" name="bookingdescription">Enter Description Here....</textarea>
                      </div>
                      <div class="form-group">
                      <label >Occassion Type*</label>
                        
                        <input type="radio" name="occassiontype"  value="public"> Public
                       <input type="radio" name="occassiontype" value="private"> Private
                        
                      </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" type="submit" name="sub">Submit</button>
                    </div>
                  </form>
                </div>
               
              </div>
              
            </div>
          </div>
        </section>
      
      </div>
    <?php 
      include('./include/footer.php');
      ?>