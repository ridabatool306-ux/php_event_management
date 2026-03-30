<?php
include('./connection.php');
$id=$_GET['upid'];
$tsql="SELECT * FROM `event` e INNER JOIN `category` c ON e.categoryname=c.category_id WHERE `event_id`='$id'";
$trun=mysqli_query($conn,$tsql);
$tfet=mysqli_fetch_assoc($trun);
if(isset($_POST['sub'])){
      $categoryname=mysqli_real_escape_string($conn,$_POST['categoryname']);
      $eventtitle=mysqli_real_escape_string($conn,$_POST['eventtitle']);
      $eventdate=mysqli_real_escape_string($conn,$_POST['eventdate']);
      $eventdescription=mysqli_real_escape_string($conn,$_POST['eventdescription']);
      $eventpic=$_FILES['eventpic']['name'];
      
      if(!empty($eventpic)){
        foreach($eventpic as $pic2){
            $exe=strtolower(pathinfo($pic2,PATHINFO_EXTENSION));
            $arr=array('png','jpg','jpeg');
            if(in_array($exe,$arr)){
                $pic3=rand(1,99999);
                $pic4=$pic3.'.'.$exe;
                $new_pic[]=$pic4;
                $msg="right";
            }else{
                $msg="not right";
                break;
            }
        }
    }
    if($msg=="right"){
        $pic5=unserialize($tfet['image']);
        foreach($pic5 as $key=>$pic6){
            unlink('./img/'.$pic6);
        }
    }
    if($msg=="right"){
        $pic7=serialize($new_pic);
        $sql = "UPDATE `event` SET `categoryname`='$categoryname',`eventtitle`='$eventtitle',`eventdate`='$eventdate',`eventdescription`='$eventdescription',`eventpic`='$eventpic' WHERE `event_id`='$id'";
        $run = mysqli_query($conn, $sql);
        if ($run) {
            foreach($new_pic as $key=>$pic8){
                move_uploaded_file($_FILES['image']['tmp_name'][$key],'./img/'.$pic8);
            }
            $msg = "Data Updated With New Picture";

            header('Refresh:2,url=./eventview.php');
        } else {
            $msg = "Data Not Updated With New Picture";
            header('Refresh:2,url=./eventview.php');

        }
    }else{
        $old_pic=$tfet['image'];
        $sql = "UPDATE `event` SET `categoryname`='$categoryname',`eventtitle`='$eventtitle',`eventdate`='$eventdate',`eventdescription`='$eventdescription',`eventpic`='$eventpic' WHERE `event_id`='$id'";
        $run = mysqli_query($conn, $sql);
        if ($run) {
            $msg = "Data Updated With old Picture";
            header('Refresh:2,url=./newsview.php');
        } else {
            $msg = "Data Not Updated With Old Picture";
            header('Refresh:2,url=./newsview.php');

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
                      <h4>ADD EVENTS</h4>
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
                        <label>Event Title*</label>
                        <input type="text" class="form-control" required="" value="<?php echo $tfet['eventtitle']?>" name="eventtitle" placeholder="Enter Event Title">
                      </div>  
                      <div class="form-group">
                        <label>Start Date*</label>
                        <input type="date" class="form-control" value="<?php echo $tfet['eventdate']?>" required="" name="eventdate" >
                      </div>
                      <div class="form-group ">
                        <label>Description*</label>
                        <textarea class="form-control" required="" value="" name="eventdescription"><?php echo $tfet['eventdescription']?></textarea>
                      </div>
                      <div class="form-group">
                        <label>Featured Image</label><br>
                        <input type="file" class="form-control" value="<?php echo $tfet['eventpic']?>" name="eventpic" placeholder="" />
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