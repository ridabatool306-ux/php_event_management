<?php
include('./include/header.php');
include('./include/sidebar.php');
include('./connection.php');
?>
<!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Designer Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Date of birth</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Experience</th>
                            <th>Ordered Design Off</th>
                            <th>Description</th>
                            <th>Company</th>
                            <th>Color</th>
                            <th>Tools</th>
                            <th>Written Content</th>
                            <th>Number of Designs</th>
                            <th>Password</th>
                            <th>Confirm Password</th>
                            <th>Address</th>
                            <th>Pic</th>
                            <th>Update</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                    $sql="SELECT * FROM `designer`";
                    $run=mysqli_query($conn,$sql);
                    while($fet=mysqli_fetch_assoc($run)){
                        ?>
                          <tr>
                            <td><?php echo $fet['designerfname']?></td>
                            <td><?php echo $fet['designerlname']?></td>
                            <td><?php echo $fet['designeremail']?></td>
                            <td><?php echo $fet['designerdob']?></td>
                            <td><?php echo $fet['designergender']?></td>
                            <td><?php echo $fet['designerphone']?></td>
                            <td><?php echo $fet['designercity']?></td>
                            <td><?php echo $fet['designerexperience']?></td>
                            <td><?php echo $fet['designerorderdesign']?></td>
                            <td><?php echo $fet['designerdescription']?></td>
                            <td><?php echo $fet['designercompany']?></td>
                            <td><?php echo $fet['designercolor']?></td>
                            <td><?php echo $fet['designertools']?></td>
                            <td><?php echo $fet['designerwrittencontent']?></td>
                            <td><?php echo $fet['designernumdesign']?></td>
                            <td><?php echo $fet['designerpassword']?></td>
                            <td><?php echo $fet['designerconfirmpassword']?></td>
                            <td><?php echo $fet['designeraddress']?></td>
                            <td><?php echo $fet['designerpic']?></td>
                            <td><a href='./designerupdate.php?upid=<?php echo $fet['designer_id']?>'><input type="button" value="update" class="btn btn-primary"></a></td>
                        <td><a href='./designerdelete.php?delid=<?php echo $fet['designer_id']?>'><input type="button" value="delete" class="btn btn-danger"></a></td>
                          </tr>
                          <?php
                    }
                    ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
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