<?php
include('./include/header.php');
include('./include/sidebar.php');
include('./connection.php');
$id=$_GET['upid'];
$tsql="SELECT * FROM `designer` WHERE `designer_id`='$id'";
$trun=mysqli_query($conn,$tsql);
$tfet=mysqli_fetch_assoc($trun);

if(isset($_POST['sub'])){
      $designerfname=mysqli_real_escape_string($conn,$_POST['designerfname']);
      $designerlname=mysqli_real_escape_string($conn,$_POST['designerlname']);
      $designeremail=mysqli_real_escape_string($conn,$_POST['designeremail']);
      $designerdob=mysqli_real_escape_string($conn,$_POST['designerdob']);
      $designergender=mysqli_real_escape_string($conn,$_POST['designergender']);
      $designerphone=mysqli_real_escape_string($conn,$_POST['designerphone']);
      $designercity=mysqli_real_escape_string($conn,$_POST['designercity']);
      $designerexperience=mysqli_real_escape_string($conn,$_POST['designerexperience']);
      $designerorderdesign=mysqli_real_escape_string($conn,$_POST['designerorderdesign']);
      $designerdescription=mysqli_real_escape_string($conn,$_POST['designerdescription']);
      $designercompany=mysqli_real_escape_string($conn,$_POST['designercompany']);
      $designercolor=mysqli_real_escape_string($conn,$_POST['designercolor']);
      $designertools=mysqli_real_escape_string($conn,$_POST['designertools']);
      $designerwrittencontent=mysqli_real_escape_string($conn,$_POST['designerwrittencontent']);
      $designernumdesign=mysqli_real_escape_string($conn,$_POST['designernumdesign']);
      $designerpassword=mysqli_real_escape_string($conn,$_POST['designerpassword']);
      $designerconfirmpassword=mysqli_real_escape_string($conn,$_POST['designerconfirmpassword']);
      $designeraddress=mysqli_real_escape_string($conn,$_POST['designeraddress']);
      $designerpic=$_FILES['designerpic']['name'];
    
      // if(empty($designerfname) || empty($designerlname) || empty($designeremail) || empty($designerdob) || empty($designergender) || empty($designerphone) || empty($designercity) || empty($designerexperience) || empty($designerorderdesign)|| empty($designerdescription) || empty($designercompany) || empty($designercolor) || empty($designertools) || empty($designerwrittencontent) || empty($designernumdesign) || empty($designerpassword) || empty($designerconfirmpassword) || empty($designeraddress) || empty($designerpic)){
      //   $msg="please fill all fields";
      //   }else{
            if(!empty($designerpic)){
                $exe=strtolower(pathinfo($designerpic,PATHINFO_EXTENSION));
                $arr=array("jpg","jpeg","png");
            if(in_array($exe,$arr)){
                $filename=date("h-i-s").rand(1,10000).".".$exe;
                if(file_exists("./img/".$tfet['designerpic'])){
                    unlink("./img/".$tfet['designerpic']);
                 }
                 $sql="UPDATE `designer` SET `designerfname`='$designerfname',`designerlname`='$designerlname',`designeremail`='$designeremail',`designerdob`='$designerdob',`designergender`='$designergender',`designerphone`='$designerphone',`designercity`='$designercity',`designerexperience`='$designerexperience',`designerorderdesign`='$designerorderdesign',`designerdescription`='$designerdescription',`designercompany`='$designercompany',`designercolor`='$designercolor',`designertools`='$designertools',`designerwrittencontent`='$designerwrittencontent',`designernumdesign`='$designernumdesign',`designerpassword`='$designerpassword',`designerconfirmpassword`='$designerconfirmpassword',`designeraddress`='$designeraddress',`designerpic`='$filename' WHERE `designer_id`='$id'";
                 $run=mysqli_query($conn,$sql);
                 if($run){
                     move_uploaded_file($_FILES['designerpic']['tmp_name'],"./img/".$filename);
                     $msg="Data updated";
                     header("Refresh:2,url=./designerview.php");
                 }else{
                     $msg="Data not updated";
                 }
             }else{
                 $msg="pic not right";
             }
            }
            else{
                $filename=$tfet['designerpic'];
                $sql="UPDATE `designer` SET `designerfname`='$designerfname',`designerlname`='$designerlname',`designeremail`='$designeremail',`designerdob`='$designerdob',`designergender`='$designergender',`designerphone`='$designerphone',`designercity`='$designercity',`designerexperience`='$designerexperience',`designerorderdesign`='$designerorderdesign',`designerdescription`='$designerdescription',`designercompany`='$designercompany',`designercolor`='$designercolor',`designertools`='$designertools',`designerwrittencontent`='$designerwrittencontent',`designernumdesign`='$designernumdesign',`designerpassword`='$designerpassword',`designerconfirmpassword`='$designerconfirmpassword',`designeraddress`='$designeraddress',`designerpic`='$filename' WHERE `designer_id`='$id'";
            
                $run=mysqli_query($conn,$sql);
                if($run){
                    $msg="Data updated not select image";
                    header("Refresh:2,url=./designerview.php");
                }else{
                    $msg="Data not updated";
                }
               }
            }
            // }
            ?>
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row justify-content-center">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <form method="post" enctype="multipart/form-data">
                  <h3><?php echo @$msg?></h3>
                    <div class="card-header">
                      <h4>ADD DESIGNER</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>First Name*</label>
                        <input type="text" class="form-control" required="" 
                        value="<?php echo $tfet['designerfname']?>" name="designerfname" placeholder="Enter First Name">
                      </div>
                      <div class="form-group">
                        <label>Last Name*</label>
                        <input type="text" class="form-control" required="" value="<?php echo $tfet['designerlname']?>" name="designerlname" placeholder="Enter Last Name">
                      </div>
                       <div class="form-group">
                        <label>Email Address*</label>
                        <input type="email" class="form-control" required="" value="<?php echo $tfet['designeremail']?>" name="designeremail" placeholder="Enter Email Address">
                      </div>
                      <div class="form-group">
                        <label>DOB*</label>
                        <input type="date" class="form-control" required="" value="<?php echo $tfet['designerdob']?>" name="designerdob" >
                      </div>
                      <div class="form-group">
                      <label >Gender*</label>
                        
                        <input type="radio" name="designergender"  value="male"> Male
                       <input type="radio" name="designergender" value="female"> Female
                      <input type="radio" name="designergender" value="others"> Others
                        
                      </div>
                      <div class="form-group">
                        <label>Phone*</label>
                        <input type="number" class="form-control" required="" value="<?php echo $tfet['designerphone']?>" name="designerphone" placeholder="+ ----">
                      </div>
                      <div class="form-group">
                        <label>City*</label>
                        <input type="text" class="form-control" required="" value="<?php echo $tfet['designercity']?>" name="designercity" placeholder="Enter City Name">
                      </div>
                      <div class="form-group">
                        <label>Experience</label>
                        <input type="number" class="form-control" required="" value="<?php echo $tfet['designerexperience']?>" name="designerexperience" placeholder="Enter Experience">
                      </div>
                      <div class="form-group">
                        <label>Ordered Design off*</label>
                        <input type="text" class="form-control" required="" value="<?php echo $tfet['designerorderdesign']?>" name="designerorderdesign" placeholder="Enter Category of your design">
                      </div>
                      <div class="form-group ">
                        <label>Description <small>(optional)</small>*</label>
                        <textarea class="form-control" value="" name="designerdescription"><?php echo $tfet['designerdescription']?></textarea>
                      </div>
                      <div class="form-group">
                        <label>Company*</label>
                        <input type="text" class="form-control" value="<?php echo $tfet['designercompany']?>" required="" name="designercompany" placeholder="Enter Company Name">
                      </div>
                      <div class="form-group">
                        <label>Prefer Color*</label>
                        <input type="color" class="form-control" value="<?php echo $tfet['designercolor']?>" required="" name="designercolor" >
                      </div>
                      <div class="form-group">
                        <label>Tools Worked On</label>
                        <input type="text" class="form-control" required="" value="<?php echo $tfet['designertools']?>" name="designertools" placeholder="Add Tools">
                      </div>
                      <div class="form-group">
                        <label>Written Content To Be Added*</label>
                        <input type="text" value="<?php echo $tfet['designerwrittencontent']?>" class="form-control" required="" name="designerwrittencontent" placeholder="Enter Written Content">
                      </div>
                      <div class="form-group">
                        <label>Number Of Designs</label>
                        <input type="number" class="form-control" value="<?php echo $tfet['designernumdesign']?>" required="" name="designernumdesign" placeholder="0">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" value="<?php echo $tfet['designerpassword']?>" required="" name="designerpassword" placeholder="Enter Password">
                      </div>
                      <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="text" class="form-control" value="<?php echo $tfet['designerconfirmpassword']?>" required="" name="designerconfirmpassword" placeholder="Enter Password Again">
                      </div>
                      <div class="form-group ">
                        <label>Addresss*</label>
                        <textarea class="form-control" value="<?php echo $tfet['designeraddress']?>" required="" name="designeraddress">Enter Address Here....</textarea>
                      </div>
                      <div class="form-group">
                        <label>Image</label><br>
                        <input type="file" class="form-control" value="<?php echo $tfet['designerpic']?>" name="designerpic" placeholder="" />
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