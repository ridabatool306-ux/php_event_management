<?php
include('./connection.php');
   $stid=$_GET['mid'];
   $tsql = "SELECT * FROM `designer` WHERE `designer_id` = '$stid'";
   $trun = mysqli_query($conn, $tsql);
   $tfet=mysqli_fetch_assoc($trun);
   
include('./include/header.php');
?>

      <div id="page-banner-area" class="page-banner-area" style="background-image:url(images/hero_area/banner_bg.jpg)">
         <!-- Subpage title start -->
         <div class="page-banner-title">
            <div class="text-center">
               <h2>Designer Details</h2>
               <ol class="breadcrumb">
                  <li>
                     <a href="#">Exhibit /</a>
                  </li>
                  <li>
                     Designer Details
                  </li>
               </ol>
            </div>
         </div><!-- Subpage title end -->
      </div><!-- Page Banner end -->

      <section class="ts-schedule">
         <div class="container">

            <div class="row">
               
               <div class="col-lg-6">
              
                  <h2 class="section-title">
                     On First Day
                  </h2>
               </div><!-- col end-->
            </div><!-- row end-->
            <div class="row">
               <div class="col-lg-12">
                  <div class="tab-content schedule-tabs">
                     <div role="tabpanel" class="tab-pane active" id="date3">
                        <div class="schedule-listing">
                           <div class="schedule-slot-time">
                              <span></span>
                              <?php echo $tfet['designerphone']?>
                           </div>
                           <div class="schedule-slot-info">
                              <a href="#">
                                                                    <img class="schedule-slot-speakers" src="../admin/img/<?php echo $tfet['designerpic']?>" alt="">
                                                                </a>
                              <div class="schedule-slot-info-content">
                                 <h3 class="schedule-slot-title"><?php echo $tfet['designerfname']?> 
                                    <strong><?php echo $tfet['designeremail']?></strong>
                                 </h3>
                                 <p><?php echo $tfet['designerdescription']?> </p>
                              </div>
                              <div class="schedule-listing-btn">
                           <a href="./bookingdesigner.php?sid=<?php echo $tfet['designer_id']?>" class="btn">Book Now</a>
                        </div>
                              <!--Info content end -->
                           </div><!-- Slot info end -->
                        </div>
            
                        <!--schedule-listing end -->
                       

                  </div>
               </div>
            </div>
            
         </div><!-- container end-->
         
      </section>
         <?php
     include('./include/footer.php');
     ?>  