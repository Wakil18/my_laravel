<?php

  include_once 'template/head.php';
  if(!isset($_SESSION['loggedin']) || $_SESSION['user_role'] != 0){
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
            <li><a href="index.html">Home</a></li>
            <li><a href="#" class="active">User Profile</a></li>
        </ol>
    </section><br><br>
    <!-- End Banner area -->

  
  <!-- Start User-profile Area  -->
  <div class="container">
    <div class="col-lg-12">
            <h2 style="text-align:center;">Users Profile Detail</h2><br>
            <h4><b>All the users Information below here</b></h4>
            <?php  
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        } 
    ?>

  <!-- retriving data using php -->
  <?php 
            include_once 'db_connection.php';
            $conn = connection();

            $sql = "SELECT * FROM user_details ";
            $result = $conn->query($sql);
       if($result->num_rows > 0){  
        $i=0;         
    ?>

<div Class="panel-body">
        <div style="overflow-x:auto;">
            <table class="table table-dark table-hover">
        
                <th>Serial No</th>
                <th>User Id</th>
                <th>First Name</th>
                <th>Sur Name</th>
                <th>Business Name</th> 
                <th>Job Title</th>
                <th>Interest Area</th>
                <th>E-mail Address</th>
               <th colspan="2" style="text-align:center;">Operation</th>
               

         <?php
                    foreach ($result as $data) {
                      $i++; 
          ?>    
                <tr>
                     <td><?= $i?></td>
                     <td><?= $data['id']?></td>
                     <td><?= $data['first_name']?></td>
                     <td><?= $data['sur_name']?></td>
                     <td><?= $data['business_name']?></td>
                     <td><?= $data['job_title']?></td>
                     <td><?= $data['interest']?></td>
                     <td><?= $data['email']?></td>
                     <td><a class="btn btn-danger" href="action_user.php?action=delete&id=<?= $data['id']?>"  onclick='return checkdelete()'>Delete</a></td>
                </tr>
         <?php
             }}else { ?>
            <tr><td colspan="6"><h2>No User Data Found in Database....<h2></td></tr>
                    
         <?php 
             } ?>
               
            </table>
            </div>
    </div>


        </div>
</div><br><hr><br><br>
    <!-- End User-profile Area -->

    <!-- Start course details Area  -->
  


</div><br><br><br>


<!-- Footer Area -->
<?php
    include_once 'template/footer.php';  //   <!-- Footer Area -->
?>
<script>
  function checkdelete()
  {
    return confirm("Are You Sure Do You Want To Delete This User Data?");

  }
  </script>