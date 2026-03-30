<?php
include('./include/header.php');
include('./include/sidebar.php');
include('./connection.php');
$id=$_GET['upid'];
$tsql="SELECT * FROM `planner` WHERE `planner_id`='$id'";
$trun=mysqli_query($conn,$tsql);
$tfet=mysqli_fetch_assoc($trun);
if(isset($_POST['sub'])){
    $plannerfname=mysqli_real_escape_string($conn,$_POST['plannerfname']);
    $plannerlname=mysqli_real_escape_string($conn,$_POST['plannerlname']);
    $planneremail=mysqli_real_escape_string($conn,$_POST['planneremail']);
    $plannerdob=mysqli_real_escape_string($conn,$_POST['plannerdob']);
    $plannergender=mysqli_real_escape_string($conn,$_POST['plannergender']);
    $plannerphone=mysqli_real_escape_string($conn,$_POST['plannerphone']);
    $plannercity=mysqli_real_escape_string($conn,$_POST['plannercity']);
    $plannerexperience=mysqli_real_escape_string($conn,$_POST['plannerexperience']);
    $plannerachievements=mysqli_real_escape_string($conn,$_POST['plannerachievements']);
    $plannerskills=mysqli_real_escape_string($conn,$_POST['plannerskills']);
    $plannerpartners=mysqli_real_escape_string($conn,$_POST['plannerpartners']);
    $plannerpassword=mysqli_real_escape_string($conn,$_POST['plannerpassword']);
    $plannerconfirmpassword=mysqli_real_escape_string($conn,$_POST['plannerconfirmpassword']);
    $planneraddress=mysqli_real_escape_string($conn,$_POST['planneraddress']);
    $plannerpic=$_FILES['plannerpic']['name'];
    $exe=strtolower(pathinfo($plannerpic,PATHINFO_EXTENSION));

    if(empty($plannerfname) || empty($plannerlname) || empty($planneremail) || empty($plannerdob) || empty($plannergender) || empty($plannerphone) || empty($plannercity) || empty($plannerexperience) || empty($plannerachievements)|| empty($plannerskills) || empty($plannerpartners) || empty($plannerpassword) || empty($plannerconfirmpassword) || empty($planneraddress) || empty($plannerpic)){
      $msg="please fill all fields";
      }else{
    if(!empty($plannerpic)){
        $exe=strtolower(pathinfo($plannerpic,PATHINFO_EXTENSION));
        $arr=array("jpg","jpeg","png");
    if(in_array($exe,$arr)){
        $filename=date("h-i-s").rand(1,10000).".".$exe;
        if(file_exists("./img/".$tfet['plannerpic'])){
            unlink("./img/".$tfet['plannerpic']);
         }
        $sql="UPDATE `planner` SET `plannerfname`='$plannerfname',`plannerlname`='$plannerlname',`planneremail`='$planneremail',`plannerdob`='$plannerdob',`plannergender`='$plannergender',`plannerphone`='$plannerphone',`plannercity`='$plannercity',`plannerexperience`='$plannerexperience',`plannerachievements`='$plannerachievements',`plannerskills`='$plannerskills',`plannerpartners`='$plannerpartners',`plannerpassword`='$plannerpassword',`plannerconfirmpassword`='$plannerconfirmpassword',`planneraddress`='$planneraddress',`plannerpic`='$filename' WHERE `planner_id`='$id'";
        $run=mysqli_query($conn,$sql);
        if($run){
            move_uploaded_file($_FILES['plannerpic']['tmp_name'],"./img/".$filename);
            $msg="Data updated";
            header("Refresh:2,url=./plannerview.php");
        }else{
            $msg="Data not updated";
        }
    }else{
        $msg="pic not right";
    }
   }
   else{
    $filename=$tfet['plannerpic'];
       $sql="UPDATE `planner` SET  `plannerfname`='$plannerfname',`plannerlname`='$plannerlname',`planneremail`='$planneremail',`plannerdob`='$plannerdob',`plannergender`='$plannergender',`plannerphone`='$plannerphone',`plannercity`='$plannercity',`plannerexperience`='$plannerexperience',`plannerachievements`='$plannerachievements',`plannerskills`='$plannerskills',`plannerpartners`='$plannerpartners',`plannerpassword`='$plannerpassword',`plannerconfirmpassword`='$plannerconfirmpassword',`planneraddress`='$planneraddress',`plannerpic`='$filename' WHERE `planner_id`='$id'";

    $run=mysqli_query($conn,$sql);
    if($run){
        $msg="Data updated not select image";
        header("Refresh:2,url=./plannerview.php");
    }else{
        $msg="Data not updated";
    }
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
                      <h4>ADD PLANNER</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>First Name*</label>
                        <input type="text" class="form-control" required="" name="plannerfname" value="<?php echo $tfet['plannerfname']?>" placeholder="Enter First Name">
                      </div>
                      <div class="form-group">
                        <label>Last Name*</label>
                        <input type="text" class="form-control" required="" name="plannerlname" value="<?php echo $tfet['plannerlname']?>" placeholder="Enter Last Name">
                      </div>
                       <div class="form-group">
                        <label>Email Address*</label>
                        <input type="email" class="form-control" required="" name="planneremail" value="<?php echo $tfet['planneremail']?>"placeholder="Enter Email Address">
                      </div>
                      <div class="form-group">
                        <label>DOB*</label>
                        <input type="date" class="form-control" required="" name="plannerdob" value="<?php echo $tfet['plannerdob']?>">
                      </div>
                      <div class="form-group">
                      <label >Gender*</label>
                        
                        <input type="radio" name="plannergender" value="male"> Male
                       <input type="radio" name="plannergender" value="female"> Female
                      <input type="radio" name="plannergender" value="others"> Others
                        
                      </div>
                      <div class="form-group">
                        <label>Phone*</label>
                        <input type="number" class="form-control" required="" value="<?php echo $tfet['plannerphone']?>" name="plannerphone" placeholder="+ ----">
                      </div>
                      <div class="form-group">
                        <label>City*</label>
                        <input type="text" class="form-control" required="" value="<?php echo $tfet['plannercity']?>" name="plannercity" placeholder="Enter City Name">
                      </div>
                      <div class="form-group">
                        <label>Experience</label>
                        <input type="number" class="form-control" required="" value="<?php echo $tfet['plannerexperience']?>" name="plannerexperience" placeholder="Enter Experience">
                      </div>
                      <div class="form-group">
                        <label>Achievements*</label>
                        <input type="text" class="form-control" value="<?php echo $tfet['plannerachievements']?>"  required=""  name="plannerachievements" placeholder="Enter Achievements">
                      </div>
                      <div class="form-group">
                        <label>Skills*</label>
                        <input type="text" class="form-control" required="" value="<?php echo $tfet['plannerskills']?>"  name="plannerskills" placeholder="Enter Skills">
                      </div>
                      <div class="form-group">
                        <label>Partners*</label>
                        <input type="text" class="form-control" required="" value="<?php echo $tfet['plannerpartners']?>"  name="plannerpartners" placeholder="Enter Partner Name">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" value="<?php echo $tfet['plannerpassword']?>"  required="" name="plannerpassword" placeholder="Enter Password">
                      </div>
                      <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="text" class="form-control" value="<?php echo $tfet['plannerconfirmpassword']?>"  required="" name="plannerconfirmpassword" placeholder="Enter Password Again">
                      </div>
                      <div class="form-group ">
                        <label>Addresss*</label>
                        <textarea class="form-control" required="" value="<?php echo $tfet['planneraddress']?>" name="planneraddress">Enter Address Here....</textarea>
                      </div>
                      <div class="form-group">
                        <label>Image</label><br>
                        <input type="file" class="form-control" value="<?php echo $tfet['plannerpic']?>" name="plannerpic" placeholder="" />
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