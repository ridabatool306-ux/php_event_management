<?php
include('./connection.php');
if(isset($_POST['sub'])){
$rolename=mysqli_real_escape_string($conn,$_POST['rolename']);
$roleaccess=mysqli_real_escape_string($conn,$_POST['roleaccess']);
$roledate=date('Y-m-d');

if($roleaccess=="Custom"){
    $roles=$_POST['role'];   
    $roleper=serialize($roles);
}else{
    $roleper=serialize([]);
}
$sql="SELECT * FROM `role` WHERE `rolename`='$rolename'";
$run=mysqli_query($conn,$sql);
if(mysqli_num_rows($run)>0){
   echo 1;
}else{
   echo $sql="INSERT INTO `role`(`rolename`,`roleaccess`,`roleper`,`roledate`) VALUES ('$rolename','$roleaccess','$roleper','$roledate')";
   
    $run=mysqli_query($conn,$sql);
    if($run){
        $msg="Role inserted";
    }else{
        $msg="Role not inserted";
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
                  <h3><?php echo @$msg?></h3>
                    <div class="card-header">
                      <h4>ADD Role</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Name*</label>
                        <input type="text" class="form-control"  name="rolename" placeholder="Roll Name">
                      </div>
                      
                      <div class="form-group ">
                      <label>Roll Access*</label>
                      <select name="roleaccess" class="form-control" id="roll">
                        <option value="">Role Access</option>
                        <option value="All">All</option>
                        <option value="Custom">Custom</option>
                      </select>
                      </div>
                      <div class="box" style="display:none;">
                      <label for="">Category</label>
                      <input type="checkbox" name="role[]" value="category"><br>
                        <label for="">Venue</label>
                        <input type="checkbox" name="role[]" value="venue"><br>
                        <label for="">Designer</label>
                        <input type="checkbox" name="role[]" value="designer"><br>
                        <label for="">Planner</label>
                        <input type="checkbox" name="role[]" value="planner"><br>
                        <label for="">Volunteer</label>
                        <input type="checkbox" name="role[]" value="volunteer"><br>
                        <label for="">Booking</label>
                        <input type="checkbox" name="role[]" value="booking"><br>
                        <label for="">Events</label>
                        <input type="checkbox" name="role[]" value="events"><br>
                        <label for="">News</label>
                        <input type="checkbox" name="role[]" value="news"><br>
                        <label for="">User Management</label>
                        <input type="checkbox" name="role[]" value="usermanagement"><br>
                        <label for="">User Role</label>
                        <input type="checkbox" name="role[]" value="userole">
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

<script>
$(document).ready(function (){
    $("#roll").on("change",function(e){
        e.preventDefault();
        if($("#roll").val()=="Custom"){
            $(".box").show();
        }else{
            $(".box").hide();
        }
    })
})

</script>