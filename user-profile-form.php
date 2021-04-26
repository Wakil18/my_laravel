<?php
  include_once 'template/head.php';
  if(!isset($_SESSION['loggedin']) || $_SESSION['user_role'] != 1){
    header('location:404.php');
  }
  include_once 'template/header.php';       //        <!-- Top Header_Area -->
  include_once 'template/nav-bar.php';     //	   <!-- Header_Area -->
  //include_once 'template/slide-bar.php';  //    <!-- Slider area -->
?>
<!-- Banner area -->
<section class="banner_area" data-stellar-background-ratio="0.5">
        <h2><?= $_SESSION['uname'] ?></h2>
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="#" class="active">User Profile</a></li>
        </ol>
    </section><br><br><br>
    <!-- End Banner area -->

    <!-- retriving data using php -->
    <?php 
        if(!isset($_SESSION['u-details'])){

            include_once 'db_connection.php';
            $conn = connection();

            $user_ID = $_SESSION['u-id'] ;

            $sql = "SELECT * FROM user_details Where id='$user_ID' ";
            $result = $conn->query($sql);
        }else{
            $result = $_SESSION['u-details'];
            unset($_SESSION['u-details']);
        }	
            foreach($result AS $value){
               
    ?>


  <!-- Start User-profile Area  ?id=<//?= $_SESSION['u-id'];?>-->
  <div class="container">
  <div class="col-lg-5">
        <h2 style="text-align:center;">User Profile Details</h2><br>
        <h4 style="text-align:center;"><b>You Can Update Your Profile Details From Here</b></h4><br><br>

        <?php  if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                } ?><br><br>
        <form class="form-horizontal" action="user-profile.php" method="POST">
                <div class="form-group">
                    <label class="col-sm-4 control-label">First Name:</label>
                    <div class="col-sm-6">
                        <input name = "fname" class="form-control" id="focusedInput" type="text" value="<?= $value['first_name'] ?>">     
                            
                    </div>
                    <label class="col-sm-2 "><Button name="unm-update" class="btn btn-info">Update</button></label>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Sur Name:</label>
                    <div class="col-sm-6">
                        <input name = "sname" class="form-control" id="focusedInput" type="text" value="<?= $value['sur_name'] ?>">  
                      
                    </div>
                    <label class="col-sm-2 "><Button name="snm-update" class="btn btn-info">Update</button></label>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Business Name:</label>
                    <div class="col-sm-6">
                        <input name = "bname" class="form-control" id="focusedInput" type="text" value="<?= $value['business_name'] ?>"> 
                    </div>
                    <label class="col-sm-2 "><Button name="bnm-save" class="btn btn-success">Save</button></label>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Job Title:</label>
                    <div class="col-sm-6">
                        <input name = "jtitle" class="form-control" id="focusedInput" type="text" value="<?= $value['job_title'] ?>">  
                       
                    </div>
                    <label class="col-sm-2 "><Button name="jt-save" class="btn btn-success">Save</button></label>
                </div>
                <div class="form-group">
                    <label  class="col-sm-4 control-label">Your Interest Area:</label>
                    <div class="col-sm-6">
                        <input name = "ist-area" class="form-control" id="focusedInput" type="text" value="<?= $value['interest'] ?>">  
                       
                    </div>
                    <label class="col-sm-2 "><Button name="isar-save" class="btn btn-success">Save</button></label>
                </div>
                <hr>
                       <span>

                       <h4 style="text-align:center;"><b>You Can Update Your Password From Here</b></h4>

                       <?php  if(isset($_SESSION['msgp'])){
                                echo $_SESSION['msgp'];
                                unset($_SESSION['msgp']);
                            } ?><br><br>

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Old Password</label>
                                <div class="col-sm-6">
                                    <input name = "oldp"  class="form-control" id="focusedInput" type="password" >  
                                
                                </div>
                            </div>
                            <div class="form-group">
                                    <label  class="col-sm-4 control-label">New Password</label>
                                <div class="col-sm-6">
                                    <input name = "newp"class="form-control" id="focusedInput" type="password">  
                                  
                                </div>
                            </div>
                            <label class="col-sm-8" style="float:right;"><Button name="newp-change" class="btn btn-warning">Change Password</button></label>
                        <span>
                <?php }
                        ?>
        </form>
    </div>
</div><br><br><br>
    <!-- End User-profile Area -->


<!-- Footer Area -->
<?php
    include_once 'template/footer.php';  //   <!-- Footer Area -->
?>
