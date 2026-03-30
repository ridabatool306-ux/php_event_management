<?php
include('./include/header.php');
include('./include/sidebar.php');
include('./connection.php');
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
   $status="confirm";
   $role="designer";

  if(empty($designerfname) || empty($designerlname) || empty($designeremail) || empty($designerdob) || empty($designergender) || empty($designerphone) || empty($designercity) || empty($designerexperience) || empty($designerorderdesign)|| empty($designerdescription) || empty($designercompany) || empty($designercolor) || empty($designertools) || empty($designerwrittencontent) || empty($designernumdesign) || empty($designerpassword) || empty($designerconfirmpassword) || empty($designeraddress) || empty($designerpic)){
    $msg="please fill all fields";
    }else{
       $exe=strtolower(pathinfo($designerpic,PATHINFO_EXTENSION));
    $arr=array("jpg","jpeg","png");
    if(in_array($exe,$arr)){
        $picname=rand(1000,100000);
        $pic=$picname.'.'.$exe;
        move_uploaded_file($_FILES['designerpic']['tmp_name'],'./img/'.$pic);
        $sql="INSERT INTO `designer`(`designerfname`,`designerlname`,`designeremail`,`designerdob`,`designergender`,`designerphone`,`designercity`,`designerexperience`,`designerorderdesign`,`designerdescription`,`designercompany`,`designercolor`,`designertools`,`designerwrittencontent`,`designernumdesign`,`designerpassword`,`designerconfirmpassword`,`designeraddress`,`designerpic`,`status`) VALUES('$designerfname','$designerlname','$designeremail','$designerdob','$designergender','$designerphone','$designercity','$designerexperience','$designerorderdesign','$designerdescription','$designercompany','$designercolor','$designertools','$designerwrittencontent','$designernumdesign','$designerpassword','$designerconfirmpassword','$designeraddress','$pic','$status')";
        $run=mysqli_query($conn,$sql);
        if($run){
          $dsql="INSERT INTO `login_table`(`firstname`,`lastname`,`email`,`password`,`confirmpassword`,`role`) VALUES ('$designerfname','$designerlname','$designeremail','$designerpassword','$designerconfirmpassword','$role' )";
          $drun=mysqli_query($conn,$dsql);
          if($drun){
            $msg="Data inserted";
          }else{
            $msg="not";
          }
        }else{
            $msg="Data not inserted";
        }
    }else{
        $msg="pic not found";
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
                  <h3><?php echo @$msg?></h3>
                    <div class="card-header">
                      <h4>ADD DESIGNER</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>First Name*</label>
                        <input type="text" class="form-control" required="" 
                        name="designerfname" placeholder="Enter First Name">
                      </div>
                      <div class="form-group">
                        <label>Last Name*</label>
                        <input type="text" class="form-control" required="" 
                        name="designerlname" placeholder="Enter Last Name">
                      </div>
                       <div class="form-group">
                        <label>Email Address*</label>
                        <input type="email" class="form-control" required="" 
                        name="designeremail" placeholder="Enter Email Address">
                      </div>
                      <div class="form-group">
                        <label>DOB*</label>
                        <input type="date" class="form-control" required="" 
                        name="designerdob" >
                      </div>
                      <div class="form-group">
                      <label >Gender*</label>
                        
                        <input type="radio" name="designergender"  value="male"> Male
                       <input type="radio" name="designergender" value="female"> Female
                      <input type="radio" name="designergender" value="others"> Others
                        
                      </div>
                      <div class="form-group">
                        <label>Phone*</label>
                        <input type="number" class="form-control" required="" 
                        name="designerphone" placeholder="+ ----">
                      </div>
                      <div class="form-group">
                        <label>City*</label>
                        <input type="text" class="form-control" required="" 
                        name="designercity" placeholder="Enter City Name">
                      </div>
                      <div class="form-group">
                        <label>Experience</label>
                        <input type="number" class="form-control" required="" 
                        name="designerexperience" placeholder="Enter Experience">
                      </div>
                      <div class="form-group">
                        <label>Ordered Design off*</label>
                        <input type="text" class="form-control" required="" 
                        name="designerorderdesign" placeholder="Enter Category of your design">
                      </div>
                      <div class="form-group ">
                        <label>Description <small>(optional)</small>*</label>
                        <textarea class="form-control" name="designerdescription">Enter Description Here....</textarea>
                      </div>
                      <div class="form-group">
                        <label>Company*</label>
                        <input type="text" class="form-control" required="" name="designercompany" placeholder="Enter Company Name">
                      </div>
                      <div class="form-group">
                        <label>Prefer Color*</label>
                        <input type="color" class="form-control" required="" name="designercolor" >
                      </div>
                      <div class="form-group">
                        <label>Tools Worked On</label>
                        <input type="text" class="form-control" required="" name="designertools" placeholder="Add Tools">
                      </div>
                      <div class="form-group">
                        <label>Written Content To Be Added*</label>
                        <input type="text" class="form-control" required="" name="designerwrittencontent" placeholder="Enter Written Content">
                      </div>
                      <div class="form-group">
                        <label>Number Of Designs</label>
                        <input type="number" class="form-control" required="" name="designernumdesign" placeholder="0">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" required="" name="designerpassword" placeholder="Enter Password">
                      </div>
                      <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="text" class="form-control" required="" name="designerconfirmpassword" placeholder="Enter Password Again">
                      </div>
                      <div class="form-group ">
                        <label>Addresss*</label>
                        <textarea class="form-control" required="" name="designeraddress">Enter Address Here....</textarea>
                      </div>
                      <div class="form-group">
                        <label>Image</label><br>
                        <input type="file" class="form-control" name="designerpic" placeholder="" />
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