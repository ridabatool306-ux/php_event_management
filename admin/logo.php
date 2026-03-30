<?php
include('./connection.php');
$sql="SELECT * FROM `logo`";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
if(isset($_POST['sub'])){
    $profilepic=$_FILES['profilepic']['name'];
    $logopic=$_FILES['logopic']['name'];

    if(!empty($profilepic)){
        $exe=strtolower(pathinfo($profilepic,PATHINFO_EXTENSION));
        $arr=array("jpg","jpeg","png");
        if(in_array($exe,$arr)){
            $profile1=rand(1000,100000).".".$exe;
            if(file_exists("./img/".$fet['profilepic'])){
              unlink("./img/".$fet['profilepic']);
          }
            $psql="UPDATE `logo` SET `profilepic`='$profile1'";
            $prun=mysqli_query($conn,$psql);
            if($prun){
              $msg="Updated";
              move_uploaded_file($_FILES['profilepic']['tmp_name'],"./img/".$profile1);
            }
          
        }
    }
    if(!empty($logopic)){
        $exe=strtolower(pathinfo($logopic,PATHINFO_EXTENSION));
        $arr=array("jpg","jpeg","png");
        if(in_array($exe,$arr)){
            $logo1=rand(1000,100000).".".$exe;
            if(file_exists("./img/".$fet['logopic'])){
              unlink("./img/".$fet['logopic']);
          }
            $lsql="UPDATE `logo` SET `logopic`='$logo1'";
            $lrun=mysqli_query($conn,$lsql);
             if($lrun){
              $msg="Updated";
              move_uploaded_file($_FILES['logopic']['tmp_name'],"./img/".$logo1);
            }else{
              $msg="not updated";
            }             
        }
    }
}
include('./include/header.php');
include('./include/sidebar.php');
?>

<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row justify-content-center">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <form method="post" enctype="multipart/form-data">
                    <div class="card-header">
                      <h4>ADD LOGO</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Profile*</label>
                        <input type="file" class="form-control" required="" name="profilepic">
                      </div>
                      <div class="card-body">
                      <div class="form-group">
                        <label>Logo*</label>
                        <input type="file" class="form-control" required="" name="logopic">
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