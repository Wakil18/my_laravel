<?php
  include_once 'template/head.php';
  if(isset($_SESSION['loggedin'])){
    header('location:404.php');
  }

  include_once 'template/header.php';       //        <!-- Top Header_Area -->
  include_once 'template/nav-bar.php';     //	   <!-- Header_Area -->
  //include_once 'template/slide-bar.php';  //    <!-- Slider area -->
  
?><br>


<div class="container">
    <div class="col-md-6">
          <div class="panel panel-default">
          <div class="panel-heading" style="text-align:center;"><br><h3><B>Create an Account</b></h3><br></div>
          
          <div class="panel-heading">  
                <?php  
                    //session_start();
                    if(isset($_SESSION['msg'])){
                      echo $_SESSION['msg'];
                      unset($_SESSION['msg']);
                    } 
                 ?>
          </div>
                <div class="panel-body">
                  <form action="reg.php" method="POST">
                      <div class="form-group">
                          <label for="firstName">First name</label> 
                          <input type="text" id="firstName" class="form-control" name = "fname"  placeholder="First name"  autofocus="autofocus">
                     </div>
                     <div class="form-group">
                          
                     <label for="SurName">Sur name</label>
                          <input type="text" id="SurName" class="form-control" name = "sname"   placeholder="Sur name" >
                     </div>
                     <div class="form-group">
                     <label for="inputEmail">Email address</label>
                          <input type="email" id="inputEmail" class="form-control" name = "email"   placeholder="Email address" >
                          
                     </div>
                     <div class="form-group">
                     <label for="po_address">PO address</label>
                          <input type="text" id="po_address" class="form-control" name = "po_address"   placeholder="PO address" >
                          
                     </div>
                     <div class="form-group">
                     <label for="po_code">PO Code</label>
                          <input type="text" id="po_code" class="form-control" name = "po_code"   placeholder="PO COde" >
                          
                     </div>
                     <div class="form-group">
                     <label for="city">City Name</label>
                          <input type="text" id="city" class="form-control" name = "city"   placeholder="city name" >
                          
                     </div>
                     <div class="form-group">
                     <label for="inputPassword">Password</label>
                          <input type="password" id="inputPassword" class="form-control" name = "password"   placeholder="Password" >
                          
                     </div>
                     <div class="form-group">
                     <label for="confirmPassword">Confirm password</label>
                          <input type="password" id="confirmPassword" class="form-control" name = "re_password" placeholder="Confirm password" >
                          
                     </div>
                
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="tms" value="accepted">
                         <a href="#"> Terms & Condition</a>
                        </label>
                      </div>
                    </div><br><br>
                       <button type="login" class="btn btn-primary form-control" id="sendMessageButton">Sing-up</button>       
                  </form><br>
                  <div class="text-center">
                      <a class="d-block small mt-3" href="login-form.php">Login Page || </a>
                      <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                </div>
                </div>
       </div>
  </div><br><br><br><br><br><br><br><br><br><br>

    <!-- Footer -->
    <?php include_once 'template/footer.php';?>