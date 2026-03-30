<?php
include('./include/header.php');
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
   $status="pending";
   $role="designer";

  if(empty($designerfname) || empty($designerlname) || empty($designeremail) || empty($designerdob) || empty($designergender) || empty($designerphone) || empty($designercity) || empty($designerexperience) || empty($designerorderdesign)|| empty($designerdescription) || empty($designercompany) || empty($designercolor) || empty($designertools) || empty($designerwrittencontent) || empty($designernumdesign) || empty($designerpassword) || empty($designerconfirmpassword) || empty($designeraddress) || empty($designerpic)){
    $msg="please fill all fields";
    }else{
       $exe=strtolower(pathinfo($designerpic,PATHINFO_EXTENSION));
    $arr=array("jpg","jpeg","png");
    if(in_array($exe,$arr)){
        $picname=rand(1000,100000);
        $pic=$picname.'.'.$exe;
        move_uploaded_file($_FILES['designerpic']['tmp_name'],'../../admin/img/'.$pic);
        $sql="INSERT INTO `designer`(`designerfname`,`designerlname`,`designeremail`,`designerdob`,`designergender`,`designerphone`,`designercity`,`designerexperience`,`designerorderdesign`,`designerdescription`,`designercompany`,`designercolor`,`designertools`,`designerwrittencontent`,`designernumdesign`,`designerpassword`,`designerconfirmpassword`,`designeraddress`,`designerpic`,`status`,`role`) VALUES('$designerfname','$designerlname','$designeremail','$designerdob','$designergender','$designerphone','$designercity','$designerexperience','$designerorderdesign','$designerdescription','$designercompany','$designercolor','$designertools','$designerwrittencontent','$designernumdesign','$designerpassword','$designerconfirmpassword','$designeraddress','$pic','$status','$role')";
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
               <h2>Designer</h2>
               <ol class="breadcrumb">
                  <li>
                     <a href="#">Exhibit /</a>
                  </li>
                  <li>
                     Designer
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
        
      </div>
    <?php 
      include('./include/footer.php');
      ?>