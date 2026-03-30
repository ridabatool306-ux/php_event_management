<?php
include('./connection.php');
$sid=$_GET['upid'];
$tsql="SELECT * FROM `login_table` WHERE `id`='$sid'";
$trun=mysqli_query($conn,$tsql);
$tfet=mysqli_fetch_assoc($trun);
if(isset($_POST['sub'])){
    $firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
    $lastname=mysqli_real_escape_string($conn,$_POST['lastname']);
     $email=mysqli_real_escape_string($conn,$_POST['email']);
     $password=mysqli_real_escape_string($conn,$_POST['password']);
     $confirmpassword=mysqli_real_escape_string($conn,$_POST['confirmpassword']);
     $role=mysqli_real_escape_string($conn,$_POST['role']);

        $sql="UPDATE `login_table` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`password`='$password',`confirmpassword`='$confirmpassword',`role`='$role', WHERE `id`='$sid'";
        $run=mysqli_query($conn,$sql);
        if($run){
            $msg="Data updated";
            header("Refresh:0,url=./useroleview.php");
        }else{
            $msg="Data not updated";
            header("Refresh:0,url=./useroleview.php");
        }
    }
include('./include/header.php');
include('./include/sidebar.php');
?>
<!-- Main Content -->
<div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>User Role</h4>
              </div>
              <div class="card-body">
                <form method="POST" class="needs-validation" novalidate="">
                <div class="form-group">
                        <label>First Name*</label>
                        <input type="text" class="form-control" value="<?php echo $tfet['firstname']?>" required="" name="firstname" placeholder="Enter First Name">
                      </div>
                      <div class="form-group">
                        <label>Last Name*</label>
                        <input type="text" class="form-control" required="" value="<?php echo $tfet['lastname']?>"  name="lastname" placeholder="Enter Last Name">
                      </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" value="<?php echo $tfet['email']?>"  name="email"  required >
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password"  class="control-label">Password</label>
                    </div>
                    <input id="password" type="text" value="<?php echo $tfet['password']?>"  class="form-control" name="password"  required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password"  class="control-label">Confirm Password</label>
                    </div>
                    <input id="" type="text"  value="<?php echo $tfet['confirmpassword']?>"  class="form-control" name="confirmpassword"  >
                  </div>
                  <div class="form-group">
                  <label for="">Role Name</label>
                    <?php
                    $csql="SELECT * FROM `role`";
                    $crun=mysqli_query($conn,$csql);
                    $cfet=mysqli_fetch_array($crun);
                        ?>
                   <input type="text" class="form-control" required="" value="<?php echo $cfet['rolename']?>" name="role" placeholder="Enter Role Name">
                      </div>
                     
                  <div class="form-group">
                   <input type="submit" name="submit" value="login" class="btn btn-primary">
                  </div>
                </form>
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