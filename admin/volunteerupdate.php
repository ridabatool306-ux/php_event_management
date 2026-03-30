<?php
include('./include/header.php');
include('./include/sidebar.php');
include('./connection.php');
$id=$_GET['upid'];
$tsql="SELECT * FROM `volunteer` WHERE `volunteer_id`='$id'";
$trun=mysqli_query($conn,$tsql);
$tfet=mysqli_fetch_assoc($trun);
if(isset($_POST['sub'])){
    $volunteerfname=mysqli_real_escape_string($conn,$_POST['volunteerfname']);
    $volunteerlname=mysqli_real_escape_string($conn,$_POST['volunteerlname']);
    $volunteeremail=mysqli_real_escape_string($conn,$_POST['volunteeremail']);
    $volunteerdob=mysqli_real_escape_string($conn,$_POST['volunteerdob']);
    $volunteergender=mysqli_real_escape_string($conn,$_POST['volunteergender']);
    $volunteerphone=mysqli_real_escape_string($conn,$_POST['volunteerphone']);
    $volunteercity=mysqli_real_escape_string($conn,$_POST['volunteercity']);
    $volunteeroccassion=mysqli_real_escape_string($conn,$_POST['volunteeroccassion']);
    $volunteerexperience=mysqli_real_escape_string($conn,$_POST['volunteerexperience']);
    $volunteerachievements=mysqli_real_escape_string($conn,$_POST['volunteerachievements']);
    $volunteerskills=mysqli_real_escape_string($conn,$_POST['volunteerskills']);
    $volunteerpassword=mysqli_real_escape_string($conn,$_POST['volunteerpassword']);
    $volunteerconfirmpassword=mysqli_real_escape_string($conn,$_POST['volunteerconfirmpassword']);
    $volunteeraddress=mysqli_real_escape_string($conn,$_POST['volunteeraddress']);
    $volunteerpic=$_FILES['volunteerpic']['name'];
    $exe=strtolower(pathinfo($volunteerpic,PATHINFO_EXTENSION));

    if(!empty($volunteerpic)){
        $exe=strtolower(pathinfo($volunteerpic,PATHINFO_EXTENSION));
        $arr=array("jpg","jpeg","png");
    if(in_array($exe,$arr)){
        $filename=date("h-i-s").rand(1,10000).".".$exe;
        if(file_exists("./img/".$tfet['volunteerpic'])){
            unlink("./img/".$tfet['volunteerpic']);
         }
        $sql="UPDATE `volunteer` SET `volunteerfname`='$volunteerfname',`volunteerlname`='$volunteerlname',`volunteeremail`='$volunteeremail',`volunteerdob`='$volunteerdob',`volunteergender`='$volunteergender',`volunteerphone`='$volunteerphone',`volunteercity`='$volunteercity',`volunteeroccassion`='$volunteeroccassion',`volunteerexperience`='$volunteerexperience',`volunteerachievements`='$volunteerachievements',`volunteerskills`='$volunteerskills',`volunteerpassword`='$volunteerpassword',`volunteerconfirmpassword`='$volunteerconfirmpassword',`volunteeraddress`='$volunteeraddress',`volunteerpic`='$filename' WHERE `volunteer_id`='$id'";
        $run=mysqli_query($conn,$sql);
        if($run){
            move_uploaded_file($_FILES['volunteerpic']['tmp_name'],"./img/".$filename);
            $msg="Data updated";
            header("Refresh:2,url=./volunteerview.php");
        }else{
            $msg="Data not updated";
        }
    }else{
        $msg="pic not right";
    }
   }
   else{
    $filename=$tfet['volunteerpic'];
       $sql="UPDATE `volunteer` SET  `volunteerfname`='$volunteerfname',`volunteerlname`='$volunteerlname',`volunteeremail`='$volunteeremail',`volunteerdob`='$volunteerdob',`volunteergender`='$volunteergender',`volunteerphone`='$volunteerphone',`volunteercity`='$volunteercity',`volunteeroccassion`='$volunteeroccassion',`volunteerexperience`='$volunteerexperience',`volunteerachievements`='$volunteerachievements',`volunteerskills`='$volunteerskills',`volunteerpassword`='$volunteerpassword',`volunteerconfirmpassword`='$volunteerconfirmpassword',`volunteeraddress`='$volunteeraddress',`volunteerpic`='$filename' WHERE `volunteer_id`='$id'";

    $run=mysqli_query($conn,$sql);
    if($run){
        $msg="Data updated not select image";
        header("Refresh:2,url=./volunteerview.php");
    }else{
        $msg="Data not updated";
    }
   }
}

?>
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row justify-content-center">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <form method="post" enctype="multipart/form-data">
                    <div class="card-header">
                      <h4>ADD volunteer</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>First Name*</label>
                        <input type="text" class="form-control" required="" name="volunteerfname" value="<?php echo $tfet['volunteerfname']?>" placeholder="Enter First Name">
                      </div>
                      <div class="form-group">
                        <label>Last Name*</label>
                        <input type="text" class="form-control" required="" name="volunteerlname" value="<?php echo $tfet['volunteerlname']?>" placeholder="Enter Last Name">
                      </div>
                       <div class="form-group">
                        <label>Email Address*</label>
                        <input type="email" class="form-control" required="" name="volunteeremail" value="<?php echo $tfet['volunteeremail']?>"placeholder="Enter Email Address">
                      </div>
                      <div class="form-group">
                        <label>DOB*</label>
                        <input type="date" class="form-control" required="" name="volunteerdob" value="<?php echo $tfet['volunteerdob']?>">
                      </div>
                      <div class="form-group">
                      <label >Gender*</label>
                        
                        <input type="radio" name="volunteergender" value="male"> Male
                       <input type="radio" name="volunteergender" value="female"> Female
                      <input type="radio" name="volunteergender" value="others"> Others
                        
                      </div>
                      <div class="form-group">
                        <label>Phone*</label>
                        <input type="number" class="form-control" required="" value="<?php echo $tfet['volunteerphone']?>" name="volunteerphone" placeholder="+ ----">
                      </div>
                      <div class="form-group">
                        <label>City*</label>
                        <input type="text" class="form-control" required="" value="<?php echo $tfet['volunteercity']?>" name="volunteercity" placeholder="Enter City Name">
                      </div>
                      <div class="form-group">
                        <label>Type Of Occassion*</label>
                        <input type="text" class="form-control" value="<?php echo $tfet['volunteeroccassion']?>" required="" name="volunteeroccassion" placeholder="Enter Type Of Occassion">
                      </div>
                      <div class="form-group">
                        <label>Experience</label>
                        <input type="number" class="form-control" required="" value="<?php echo $tfet['volunteerexperience']?>" name="volunteerexperience" placeholder="Enter Experience">
                      </div>
                      <div class="form-group">
                        <label>Achievements*</label>
                        <input type="text" class="form-control" value="<?php echo $tfet['volunteerachievements']?>"  required=""  name="volunteerachievements" placeholder="Enter Achievements">
                      </div>
                      <div class="form-group">
                        <label>Skills*</label>
                        <input type="text" class="form-control" required="" value="<?php echo $tfet['volunteerskills']?>"  name="volunteerskills" placeholder="Enter Skills">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" value="<?php echo $tfet['volunteerpassword']?>"  required="" name="volunteerpassword" placeholder="Enter Password">
                      </div>
                      <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="text" class="form-control" value="<?php echo $tfet['volunteerconfirmpassword']?>"  required="" name="volunteerconfirmpassword" placeholder="Enter Password Again">
                      </div>
                      <div class="form-group ">
                        <label>Addresss*</label>
                        <textarea class="form-control" required="" value="" name="volunteeraddress"><?php echo $tfet['volunteeraddress']?></textarea>
                      </div>
                      <div class="form-group">
                        <label>Image</label><br>
                        <input type="file" class="form-control" value="<?php echo $tfet['volunteerpic']?>" name="volunteerpic" placeholder="" />
                    </div>
                    <div class="card-footer text-right">
                    <input type="submit" name="sub" value="update" >
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