<?php
include('./include/header.php');
include('./connection.php');
?>
    <div id="page-banner-area" class="page-banner-area" style="background-image:url(images/hero_area/banner_bg.jpg)">
         <!-- Subpage title start -->
         <div class="page-banner-title">
            <div class="text-center">
               <h2>Events</h2>
               <ol class="breadcrumb">
                  <li>
                     <a href="#">Exibit /</a>
                  </li>
                  <li>
                     Event Details
                  </li>
               </ol>
            </div>
         </div><!-- Subpage title end -->
      </div>

<section id="main-container" class="main-container">
         <div class="container">
            <div class="row">
         <?php
         $sql="SELECT * FROM `event`";
         $run=mysqli_query($conn,$sql);
         while($fet=mysqli_fetch_assoc($run)){
            $pic=unserialize($fet['eventpic']);
         
         ?>
         
               <div class="col-md-6 col-sm-12 mx-auto">
                  <div class="post">
                     <div class="post-media post-image">
                        <a href="../"> <img src="../admin/img/<?php echo $pic[0]?>" alt="" height=190px; width=490px;></a>
                     </div>

                     <div class="post-body">
                        <div class="post-meta">
                           <span class="post-author">
												<a href="#"><?php echo $fet['eventtitle']?></a>
											</span>

                           <div class="post-meta-date">
                              <span class="day"><?php echo $fet['eventdate']?></span>
                              
                           </div>
                        </div>
                        <!-- <div class="entry-header">
                           <h2 class="entry-title">
                              <a href=""></a>
                           </h2>
                        </div>header end -->

                        <div class="entry-content">
                           <p><?php echo $fet['eventdescription']?></p>
                        </div>

                        <div class="post-footer">
                        <a href="./event-details.php?eid=<?php echo $fet['event_id']?>" class="btn">More Details</a>
                        </div>

                     </div><!-- post-body end -->
                  </div><!-- 1st post end -->
                 

                  

               </div><!-- Content Col end -->
       <?php
         }
       ?>
            </div><!-- Main row end -->

         </div><!-- Container end -->
		</section><!-- Main container end -->

<?php
include('./include/footer.php');
?>