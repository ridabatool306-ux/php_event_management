<?php
include('./include/header.php');
include('./connection.php');
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
  $status="pending";
  $role="designer";

  if(empty($volunteerfname) || empty($volunteerlname) || empty($volunteeremail) || empty($volunteerdob) || empty($volunteergender) || empty($volunteerphone) || empty($volunteercity) || empty($volunteeroccassion) || empty($volunteerexperience) || empty($volunteerachievements)|| empty($volunteerskills) || empty($volunteerpassword) || empty($volunteerconfirmpassword) || empty($volunteeraddress) || empty($volunteerpic)){
    $msg="please fill all fields";
    }else{
       $exe=strtolower(pathinfo($volunteerpic,PATHINFO_EXTENSION));
    $arr=array("jpg","jpeg","png");
    if(in_array($exe,$arr)){
        $picname=rand(1000,100000);
        $pic=$picname.'.'.$exe;
        move_uploaded_file($_FILES['volunteerpic']['tmp_name'],'../../\admin/img/'.$pic);
        $sql="INSERT INTO `volunteer`(`volunteerfname`,`volunteerlname`,`volunteeremail`,`volunteerdob`,`volunteergender`,`volunteerphone`,`volunteercity`,`volunteeroccassion`,`volunteerexperience`,`volunteerachievements`,`volunteerskills`,`volunteerpassword`,`volunteerconfirmpassword`,`volunteeraddress`,`volunteerpic`,`status`,`role` ) VALUES ('$volunteerfname','$volunteerlname','$volunteeremail','$volunteerdob','$volunteergender','$volunteerphone','$volunteercity','$volunteeroccassion','$volunteerexperience','$volunteerachievements','$volunteerskills','$volunteerpassword','$volunteerconfirmpassword','$volunteeraddress','$pic','$status','$role' )";
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
               <h2>Volunteer</h2>
               <ol class="breadcrumb">
                  <li>
                     <a href="#">Exhibit /</a>
                  </li>
                  <li>
                     Volunteer
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
                      <h4>ADD VOLUNTEER</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>First Name*</label>
                        <input type="text" class="form-control" required="" name="volunteerfname" placeholder="Enter First Name">
                      </div>
                      <div class="form-group">
                        <label>Last Name*</label>
                        <input type="text" class="form-control" required="" name="volunteerlname" placeholder="Enter Last Name">
                      </div>
                       <div class="form-group">
                        <label>Email Address*</label>
                        <input type="email" class="form-control" required="" name="volunteeremail" placeholder="Enter Email Address">
                      </div>
                      <div class="form-group">
                        <label>DOB*</label>
                        <input type="date" class="form-control" required="" name="volunteerdob" >
                      </div>
                      <div class="form-group">
                      <label >Gender*</label>
                        
                        <input type="radio" name="volunteergender"  value="male"> Male
                       <input type="radio" name="volunteergender" value="female"> Female
                      <input type="radio" name="volunteergender" value="others"> Others
                        
                      </div>
                      <div class="form-group">
                        <label>Phone*</label>
                        <input type="number" class="form-control" required="" name="volunteerphone" placeholder="+ ----">
                      </div>
                      <div class="form-group">
                        <label>City*</label>
                        <input type="text" class="form-control" required="" name="volunteercity" placeholder="Enter City Name">
                      </div>
                      <div class="form-group">
                        <label>Type Of Occassion*</label>
                        <input type="text" class="form-control" required="" name="volunteeroccassion" placeholder="Enter Type Of Occassion">
                      </div>
                      <div class="form-group">
                        <label>Experience</label>
                        <input type="number" class="form-control" required="" name="volunteerexperience" placeholder="Enter Experience">
                      </div>
                      <div class="form-group">
                        <label>Achievements*</label>
                        <input type="text" class="form-control" required="" name="volunteerachievements" placeholder="Enter Achievements">
                      </div>
                      <div class="form-group">
                        <label>Skills*</label>
                        <input type="text" class="form-control" required="" name="volunteerskills" placeholder="Enter Skills">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" required="" name="volunteerpassword" placeholder="Enter Password">
                      </div>
                      <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="text" class="form-control" required="" name="volunteerconfirmpassword" placeholder="Enter Password Again">
                      </div>
                      <div class="form-group ">
                        <label>Addresss*</label>
                        <textarea class="form-control" required="" name="volunteeraddress">Enter Address Here....</textarea>
                      </div>
                      <div class="form-group">
                        <label>Image</label><br>
                        <input type="file" class="form-control" name="volunteerpic" placeholder="" />
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