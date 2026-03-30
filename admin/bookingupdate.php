<?php
include('./connection.php');
$id=$_GET['upid'];
$tsql="SELECT * FROM `booking` b INNER JOIN `category` c ON b.category_name=c.category_id INNER JOIN `venue` v ON b.venue_name=v.venue_id WHERE `booking_id`='$id'";
$trun=mysqli_query($conn,$tsql);
$tfet=mysqli_fetch_assoc($trun);
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

        $sql="UPDATE `booking` SET `category_name`='$categoryname',`clientname`='$clientname',`bookingemail`='$bookingemail',`bookingcontact`='$bookingcontact',`occassiontitle`='$occassiontitle',`occassiondate`='$occassiondate',`occassiontime`='$occassiontime',`numberofseats`='$numberofseats',`venue_name`='$venuename',`bookingdescription`='$bookingdescription',`occassiontype`='$occassiontype' WHERE `booking_id`='$id'";
        $run=mysqli_query($conn,$sql);
        if($run){
            $msg="Data updated";
            header("Refresh:2,url=./bookingview.php");
        }else{
            $msg="Data not updated";
            header("Refresh:2,url=./bookingview.php");
        }
    }
include('./include/header.php');
include('./include/sidebar.php');
?>
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
                    <select name="categoryname" id="">
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
                        <input type="text" class="form-control" required="" value="<?php echo $tfet['clientname']?>" name="clientname" placeholder="Enter Client Name">
                      </div>  
                       <div class="form-group">
                        <label>Email Address*</label>
                        <input type="email" class="form-control" value="<?php echo $tfet['bookingemail']?>" required="" name="bookingemail" placeholder="Enter Email Address">
                      </div>
                      <div class="form-group">
                        <label>Contact*</label>
                        <input type="number" class="form-control" value="<?php echo $tfet['bookingcontact']?>" required="" name="bookingcontact" placeholder="+ ----">
                      </div>
                      <div class="form-group">
                        <label>Occassion Title*</label>
                        <input type="text" class="form-control" value="<?php echo $tfet['occassiontitle']?>" required="" name="occassiontitle" placeholder="Enter Occassion title">
                      </div>
                      <div class="form-group">
                        <label>Occassion Start Date*</label>
                        <input type="date" class="form-control" value="<?php echo $tfet['occassiondate']?>" required="" name="occassiondate" >
                      </div>
                      <div class="form-group">
                        <label>Occassion Start Time*</label>
                        <input type="time" class="form-control" value="<?php echo $tfet['occassiontime']?>" required="" name="occassiontime" >
                      </div>
                      <div class="form-group">
                        <label>Number Of Seats*</label>
                        <input type="text" class="form-control" value="<?php echo $tfet['numberofseats']?>" required="" name="numberofseats" placeholder="Enter Number Of Seats">
                      </div>
                      <div class="mb-3">
                    <label for="">Select Venue</label><br>
                    <select name="venuename" id="">
                    <option value="">Select Venue</option>
                    <?php
                    $csql="SELECT * FROM venue";
                    $crun=mysqli_query($conn,$csql);
                    while($cfet=mysqli_fetch_array($crun)){
                        ?>
                        <option value="<?php echo $cfet['venue_id'];?>"><?php echo $cfet['venuename'];?></option>
                        <?php
                    }
                    ?>
                    </select>
                    </div>
                      <div class="form-group ">
                        <label>Description*</label>
                        <textarea class="form-control" required="" value="" name="bookingdescription"><?php echo $tfet['bookingdescription']?></textarea>
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
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php 
      include('./include/footer.php');
      ?>