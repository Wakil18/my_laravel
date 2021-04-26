<?php
  include_once 'template/head.php';
  if(isset($_SESSION['loggedin'])){
    header('location:404.php');
  }
  include_once 'template/header.php';       //        <!-- Top Header_Area -->
  include_once 'template/nav-bar.php';     //	   <!-- Header_Area -->
  //include_once 'template/slide-bar.php';  //    <!-- Slider area -->
 

?><br>   <br>   <br>  <br>   <br> 
<?php if(!isset($_COOKIE['logincounter'])){?>
  <div class="container">
    <div class="col-md-6">
          <div class="panel panel-default" style="margin:0px;">
          <div class="panel-heading" style="text-align:center;"><br><h3><B>Please Login</b></h3><br></div>
          
          <div class="panel-heading">  
                <?php  
                    //session_start();
                    if(isset($_SESSION['msg'])){
                      echo $_SESSION['msg'];
                      unset($_SESSION['msg']);
                    } 
                 ?>
          </div>
                <div class="panel-body" style="height:300px;">
                  <form action="login.php" method="POST">
                      <div class="form-group">
                            <input type="text" id="inputEmail" class="form-control" name = "email" placeholder="Email address" >
                      </div>
                        <div class="form-group">
                          <input type="password" id="inputPassword" class="form-control" name = "password" placeholder="Password" >
                        </div>
                
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="remember-me">
                          Remember Password
                        </label>
                      </div>
                    </div><br><br>
                    <button type="login" class="btn btn-primary form-control" id="sendMessageButton">Log-In</button>       
                  </form><br>
                  <div class="text-center">
                    <a class="d-block small mt-3" href="reg-form.php">Register an Account</a><br>
                    <a class="d-block small" href="#">Forgot Password?</a>
                  </div>
                </div>
                </div>
       </div>
  </div><br><br><br><br><br><br><br><br><br><br>
  <?php }else{
				echo "<div class='alert alert-danger'><strong> Invailed </strong> input several times. You are <strong> suspended </strong> for 10 minutes. </div>";
			} ?>
    <!-- Footer -->
    <?php include_once 'template/footer.php';?>