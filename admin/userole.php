<?php
include('./connection.php');
if(isset($_POST['submit'])){
     $firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
     $lastname=mysqli_real_escape_string($conn,$_POST['lastname']);
     $email=mysqli_real_escape_string($conn,$_POST['email']);
     $password=mysqli_real_escape_string($conn,$_POST['password']);
     $confirmpassword=mysqli_real_escape_string($conn,$_POST['confirmpassword']);
     $role=mysqli_real_escape_string($conn,$_POST['role']);
     if(empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirmpassword)){
        $msg="Fill all fields";
    }else{
         $sql="INSERT INTO `login_table`(`firstname`,`lastname`,`email`,`password`,`confirmpassword`,`role`) VALUES ('$firstname','$lastname','$email','$password','$confirmpassword','$role' )";  
        $run=mysqli_query($conn,$sql);
        if($run){
            $msg="Data inserted";
        }else{
            $msg="Data not inserted";
        }
    }
}
include('./include/header.php');
include('./include/sidebar.php');
?>

<body>
  <div class="loader"></div>
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
                        <input type="text" class="form-control" required="" name="firstname" placeholder="Enter First Name">
                      </div>
                      <div class="form-group">
                        <label>Last Name*</label>
                        <input type="text" class="form-control" required="" name="lastname" placeholder="Enter Last Name">
                      </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email"  required >
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password"  class="control-label">Password</label>
                    </div>
                    <input id="password" type="text" class="form-control" name="password"  required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password"  class="control-label">Confirm Password</label>
                    </div>
                    <input id="" type="text" class="form-control" name="confirmpassword"  >
                  </div>
                  <div class="form-group">
                  <label for="">Role Name</label>
                    <?php
                    $csql="SELECT * FROM `role`";
                    $crun=mysqli_query($conn,$csql);
                    $cfet=mysqli_fetch_array($crun);
                        ?>
                   <input type="text" class="form-control" readonly value="<?php echo $cfet['rolename']?>" name="role" placeholder="Enter Role Name">
                      </div>
                     
                  <div class="form-group">
                   <input type="submit" name="submit" value="login" class="btn btn-primary">
                  </div>
                </form>
          </div>
        </div>
      </div>
    </section>
  </div>
 <?php
 include('./include/footer.php');
 ?>