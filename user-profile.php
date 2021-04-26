<?php
    session_start();

    if(!isset($_SESSION['loggedin']) && $_SESSION['user_role'] != 0){
        header('location:index.php');
    }

    include_once 'db_connection.php';
    $conn= connection();
if ($_POST){

                $id         =  $_SESSION['u-id'];
                $Fname      =  mysqli_real_escape_string($conn, $_POST['fname']);
                $Sname      =  mysqli_real_escape_string($conn, $_POST['sname']);
                $Bname      =  mysqli_real_escape_string($conn, $_POST['bname']);
                $J_title    =  mysqli_real_escape_string($conn, $_POST['jtitle']);
                $Int_area   =  mysqli_real_escape_string($conn, $_POST['ist-area']);
                $Old_pass   =  mysqli_real_escape_string($conn, $_POST['oldp']);
                $New_pass   =  mysqli_real_escape_string($conn, $_POST['newp']);

        if (isset($_POST['unm-update']))//to update First name.............
        {
                if($Fname == ''){
                            $_SESSION['msg'] = "<div class='alert alert-danger'>Please enter First  name</div>";
                            header('location:user-profile-form.php');//To Message Rersult....
                }else{
                        $sql = "UPDATE user_details SET first_name = '$Fname' WHERE id='$id' ";
                        $result = $conn->query($sql);//To implement Validate query..... 

                            if ($result) {
                                $_SESSION['msg'] = "<div class='alert alert-success'>Updated user name successfully</div>";
                                header('location:user-profile-form.php');//To Message Rersult....
                            }else {
                                $_SESSION['msg'] = "<div class='alert alert-danger'>update failed something went wrong</div>";
                                header('location:user-profile-form.php');//To Message Rersult....
                            }
            }
        }else if (isset($_POST['snm-update'])){   //to update Sur name.............

                if($Sname == ''){
                                $_SESSION['msg'] = "<div class='alert alert-danger'>Please enter Sur name</div>";
                                header('location:user-profile-form.php');//To Message Rersult....
                    }else{
                            $sql = "UPDATE user_details SET Sur_name = '$Sname' WHERE id='$id' ";
                            $result = $conn->query($sql);//To implement Validate query..... 

                                if ($result) {
                                    $_SESSION['msg'] = "<div class='alert alert-success'>Updated Sur name successfully</div>";
                                    header('location:user-profile-form.php');//To Message Rersult....
                                }else {
                                    $_SESSION['msg'] = "<div class='alert alert-danger'>update failed something went wrong</div>";
                                    header('location:user-profile-form.php');//To Message Rersult....
                                }
                    }
        }else if (isset($_POST['bnm-save'])){  //to insert Business name...................

            if($Bname == '' || is_numeric($Bname)){
                            $_SESSION['msg'] = "<div class='alert alert-danger'>Please enter Your Business name only alphabetically </div>";
                            header('location:user-profile-form.php');//To Message Rersult....
                }else{
                        $sql = "UPDATE user_details SET business_name = '$Bname' WHERE id='$id' ";
                        $result = $conn->query($sql);//To implement Validate query..... 

                            if ($result) {
                                $_SESSION['msg'] = "<div class='alert alert-success'>Updated Business name successfully</div>";
                                header('location:user-profile-form.php');//To Message Rersult....
                            }else {
                                $_SESSION['msg'] = "<div class='alert alert-danger'>update failed something went wrong</div>";
                                header('location:user-profile-form.php');//To Message Rersult....
                            }
                }
        }else if (isset($_POST['jt-save'])){  //to insert Jobe title ..................

            if($J_title == '' || is_numeric($J_title)){
                            $_SESSION['msg'] = "<div class='alert alert-danger'>Please enter Your Job title only alphabetically</div>";
                            header('location:user-profile-form.php');//To Message Rersult....
                }
                else{
                        $sql = "UPDATE user_details SET job_title = '$J_title' WHERE id='$id' ";
                        $result = $conn->query($sql);//To implement Validate query..... 

                            if ($result) {
                                $_SESSION['msg'] = "<div class='alert alert-success'>Updated Job title successfully</div>";
                                header('location:user-profile-form.php');//To Message Rersult....
                            }else {
                                $_SESSION['msg'] = "<div class='alert alert-danger'>update failed something went wrong</div>";
                                header('location:user-profile-form.php');//To Message Rersult....
                            }
                }
        }else if (isset($_POST['isar-save'])){  //to insert air pollution interest  ..................

            if($Int_area  == '' || is_numeric($Int_area)){
                            $_SESSION['msg'] = "<div class='alert alert-danger'>Please enter Your air pollution interest only alphabetically</div>";
                            header('location:user-profile-form.php');//To Message Rersult....
                }else{
                        $sql = "UPDATE user_details SET interest = '$Int_area' WHERE id='$id' ";
                        $result = $conn->query($sql);//To implement Validate query..... 

                            if ($result) {
                                $_SESSION['msg'] = "<div class='alert alert-success'>Updated air pollution interest successfully</div>";
                                header('location:user-profile-form.php');//To Message Rersult....
                            }
                            else {
                                $_SESSION['msg'] = "<div class='alert alert-danger'>update failed something went wrong</div>";
                                header('location:user-profile-form.php');//To Message Rersult....
                            }

                }
        }else if (isset($_POST['newp-change'])){  // to change old password.....................

            if( $Old_pass   == '' ||  $New_pass   == '' ){
                            $_SESSION['msgp'] = "<div class='alert alert-danger'>Please enter Your Old and New password</div>";
                            header('location:user-profile-form.php');//To Message Rersult....
                }else if ((strlen($New_pass)) < 8 || (strlen($New_pass)) > 16 ) {
                            $_SESSION['msgp'] = "<div class='alert alert-danger'>New Password must be in 8 to 16 charecter</div>";
                            header('location:user-profile-form.php');//To Message Rersult....
                  } else {
                                $Hass_Old_pass = md5($Old_pass);

                                $sql = "SELECT pass FROM user_details WHERE pass = '$Hass_Old_pass' AND id='$id' ";
                                $result = $conn->query($sql);
                        
                                    if ($result->num_rows > 0) {
                                                   $Hass_New_pass = md5($New_pass);
                                            $sql = "UPDATE user_details SET pass = '$Hass_New_pass' WHERE id='$id' ";
                                            $result = $conn->query($sql);//To implement Validate query..... 

                                                    if ($result) {
                                                        $_SESSION['msgp'] = "<div class='alert alert-success'>change password successfully</div>";
                                                        header('location:user-profile-form.php');//To Message Rersult....
                                                    }
                                                    else {
                                                        $_SESSION['msgp'] = "<div class='alert alert-danger'>Failed to change password</div>";
                                                        header('location:user-profile-form.php');//To Message Rersult....
                                                    }                            
                                    }else {

                                                    $_SESSION['msgp'] = "<div class='alert alert-danger'>Old Password does not match ..please enter correct password</div>"; 
                                                    header('location:user-profile-form.php');
                                        
                                        }
                  }
        }
        
}

?>