<?php
include('./include/header.php');
include('./connection.php');
?>

      <div id="page-banner-area" class="page-banner-area" style="background-image:url(images/hero_area/banner_bg.jpg)">
         <!-- Subpage title start -->
         <div class="page-banner-title">
            <div class="text-center">
               <h2>View Designer</h2>
               <ol class="breadcrumb">
                  <li>
                     <a href="#">Exhibit /</a>
                  </li>
                  <li>
                     View Designer
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
                    <?php
                     $sql="SELECT * FROM `designer`";
               $run=mysqli_query($conn,$sql);
               while($fet=mysqli_fetch_assoc($run)){
              ?>
                        <div class="schedule-listing">
                           <div class="schedule-slot-time">
                              <span><?php echo $fet['designerfname']?> </span>
                              Workshop
                           </div>
                           <div class="schedule-slot-info">
                              <a href="#">
                                                                    <img class="schedule-slot-speakers" src="../admin/img/<?php echo $fet['designerpic']?>" alt="">
                                                                </a>
                              <div class="schedule-slot-info-content">
                                 <h3 class="schedule-slot-title">Marketing Matters!
                                    <strong><?php echo $fet['designeremail']?></strong>
                                 </h3>
                                 <p><?php echo $fet['designerdescription']?> </p>
                              </div>
                              <div class="schedule-listing-btn">
                              <a href="./designerdetail.php?mid=<?php echo $fet['designer_id']?>" class="btn">More Details</a>
                        </div>
                              <!--Info content end -->
                           </div><!-- Slot info end -->
                        </div>
                        <?php
                        }
                        ?>
                        <!--schedule-listing end -->
                       

                  </div>
               </div>
            </div>
         </div><!-- container end-->
         
      </section>
         <?php
     include('./include/footer.php');
     ?>  
