<?php
include('./include/header.php');
include('./connection.php');
if(isset($_POST['sub'])){
echo  $plannerfname=mysqli_real_escape_string($conn,$_POST['plannerfname']);
echo  $plannerlname=mysqli_real_escape_string($conn,$_POST['plannerlname']);
echo  $planneremail=mysqli_real_escape_string($conn,$_POST['planneremail']);
echo  $plannerdob=mysqli_real_escape_string($conn,$_POST['plannerdob']);
echo  $plannergender=mysqli_real_escape_string($conn,$_POST['plannergender']);
echo  $plannerphone=mysqli_real_escape_string($conn,$_POST['plannerphone']);
echo  $plannercity=mysqli_real_escape_string($conn,$_POST['plannercity']);
echo  $plannerexperience=mysqli_real_escape_string($conn,$_POST['plannerexperience']);
echo  $plannerachievements=mysqli_real_escape_string($conn,$_POST['plannerachievements']);
echo  $plannerskills=mysqli_real_escape_string($conn,$_POST['plannerskills']);
echo  $plannerpartners=mysqli_real_escape_string($conn,$_POST['plannerpartners']);
echo  $plannerpassword=mysqli_real_escape_string($conn,$_POST['plannerpassword']);
echo  $plannerconfirmpassword=mysqli_real_escape_string($conn,$_POST['plannerconfirmpassword']);
echo  $planneraddress=mysqli_real_escape_string($conn,$_POST['planneraddress']);
echo  $plannerpic=$_FILES['plannerpic']['name'];
$status="pending";
$role="planner";

  if(empty($plannerfname) || empty($plannerlname) || empty($planneremail) || empty($plannerdob) || empty($plannergender) || empty($plannerphone) || empty($plannercity) || empty($plannerexperience) || empty($plannerachievements)|| empty($plannerskills) || empty($plannerpartners) || empty($plannerpassword) || empty($plannerconfirmpassword) || empty($planneraddress) || empty($plannerpic)){
    $msg="please fill all fields";
    }else{
       $exe=strtolower(pathinfo($plannerpic,PATHINFO_EXTENSION));
    $arr=array("jpg","jpeg","png");
    if(in_array($exe,$arr)){
        $picname=rand(1000,100000);
        $pic=$picname.'.'.$exe;
        move_uploaded_file($_FILES['plannerpic']['tmp_name'],'../../admin/img/'.$pic);
        $sql="INSERT INTO `planner`(`plannerfname`,`plannerlname`,`planneremail`,`plannerdob`,`plannergender`,`plannerphone`,`plannercity`,`plannerexperience`,`plannerachievements`,`plannerskills`,`plannerpartners`,`plannerpassword`,`plannerconfirmpassword`,`planneraddress`,`plannerpic`,`status`,`role` ) VALUES ('$plannerfname','$plannerlname','$planneremail','$plannerdob','$plannergender','$plannerphone','$plannercity','$plannerexperience','$plannerachievements','$plannerskills','$plannerpartners','$plannerpassword','$plannerconfirmpassword','$planneraddress','$pic','$status','$role' )";
        $run=mysqli_query($conn,$sql);
        if($run){
            $msg="Data inserted";
        }else{
            $msg="Data not inserted";
        }
    }else{
        $msg="pic not found";
    }
   }
}
?>
      <div id="page-banner-area" class="page-banner-area" style="background-image:url(images/hero_area/banner_bg.jpg)">
         <!-- Subpage title start -->
         <div class="page-banner-title">
            <div class="text-center">
               <h2>Planner</h2>
               <ol class="breadcrumb">
                  <li>
                     <a href="#">Exhibit /</a>
                  </li>
                  <li>
                     Planner
                  </li>
               </ol>
            </div>
         </div><!-- Subpage title end -->
      </div><!-- Page Banner end -->
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
                      <h4>ADD PLANNER</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>First Name*</label>
                        <input type="text" class="form-control" required="" name="plannerfname" placeholder="Enter First Name">
                      </div>
                      <div class="form-group">
                        <label>Last Name*</label>
                        <input type="text" class="form-control" required="" name="plannerlname" placeholder="Enter Last Name">
                      </div>
                       <div class="form-group">
                        <label>Email Address*</label>
                        <input type="email" class="form-control" required="" name="planneremail" placeholder="Enter Email Address">
                      </div>
                      <div class="form-group">
                        <label>DOB*</label>
                        <input type="date" class="form-control" required="" name="plannerdob" >
                      </div>
                      <div class="form-group">
                      <label >Gender*</label>
                        
                        <input type="radio" name="plannergender"  value="male"> Male
                       <input type="radio" name="plannergender" value="female"> Female
                      <input type="radio" name="plannergender" value="others"> Others
                        
                      </div>
                      <div class="form-group">
                        <label>Phone*</label>
                        <input type="number" class="form-control" required="" name="plannerphone" placeholder="+ ----">
                      </div>
                      <div class="form-group">
                        <label>City*</label>
                        <input type="text" class="form-control" required="" name="plannercity" placeholder="Enter City Name">
                      </div>
                      <div class="form-group">
                        <label>Experience</label>
                        <input type="number" class="form-control" required="" name="plannerexperience" placeholder="Enter Experience">
                      </div>
                      <div class="form-group">
                        <label>Achievements*</label>
                        <input type="text" class="form-control" required="" name="plannerachievements" placeholder="Enter Achievements">
                      </div>
                      <div class="form-group">
                        <label>Skills*</label>
                        <input type="text" class="form-control" required="" name="plannerskills" placeholder="Enter Skills">
                      </div>
                      <div class="form-group">
                        <label>Partners*</label>
                        <input type="text" class="form-control" required="" name="plannerpartners" placeholder="Enter Partner Name">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" required="" name="plannerpassword" placeholder="Enter Password">
                      </div>
                      <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="text" class="form-control" required="" name="plannerconfirmpassword" placeholder="Enter Password Again">
                      </div>
                      <div class="form-group ">
                        <label>Addresss*</label>
                        <textarea class="form-control" required="" name="planneraddress">Enter Address Here....</textarea>
                      </div>
                      <div class="form-group">
                        <label>Image</label><br>
                        <input type="file" class="form-control" name="plannerpic" placeholder="" />
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
        
      </div>
    <?php 
      include('./include/footer.php');
      ?>