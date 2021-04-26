<?php
     session_start();

        if(isset($_SESSION['loggedin'])){
                header('location:404.php');
        }

if ($_POST)
{
    include_once 'db_connection.php';
    $conn= connection();
    $First_Name   =  mysqli_real_escape_string($conn, $_POST['fname']); 
    $Sur_Name     =  mysqli_real_escape_string($conn, $_POST['sname']);
    $Email        =  mysqli_real_escape_string($conn, $_POST['email']);
    $PO_Code      =  mysqli_real_escape_string($conn, $_POST['po_code']);
    $PO_Address   =  mysqli_real_escape_string($conn, $_POST['po_address']);
    $City         =  mysqli_real_escape_string($conn, $_POST['city']);
    $Password     =  mysqli_real_escape_string($conn, $_POST['password']);
    $Re_password  =  mysqli_real_escape_string($conn, $_POST['re_password']);
    $Terms        =  mysqli_real_escape_string($conn, $_POST['tms']);
    
    if( $First_Name == '' ||   $Sur_Name == ''||  $Email == '' || $Password == '' || $Re_password == ''|| $PO_Code == ''|| $PO_Address == ''|| $City == '' ){
            $_SESSION['msg'] = "<div class='alert alert-danger'>No Field must not be Empty</div>";
            header('location:reg-form.php');
    }
    else if($Terms != 'accepted'){
        $_SESSION['msg'] = "<div class='alert alert-danger'>Please Accept Terms and conditions</div>";
        header('location:reg-form.php');
    }
    else if(strlen($First_Name) < 2 || strlen($Sur_Name) < 3){
        $_SESSION['msg'] = "<div class='alert alert-danger'>Name is too Short</div>";
        header('location:reg-form.php');
   }
    else if(filter_var($Email, FILTER_VALIDATE_EMAIL) === false ){
            $_SESSION['msg'] = "<div class='alert alert-danger'>Please enter valid email address</div>";
            header('location:reg-form.php');
    }
    else if((strlen($Password)) < 8 || (strlen($Password)) > 16 ){
            $_SESSION['msg'] = "<div class='alert alert-danger'>Password must be in 8 to 16 Numbers</div>";
            header('location:reg-form.php');
    }
    else if ($Password != $Re_password){
            $_SESSION['msg'] = "<div class='alert alert-danger'>Password and Confirm Password do not match</div>";
            header('location:reg-form.php');
            exit;
    }
    else{
           
        
            $sql = "SELECT email FROM user_details WHERE email = '$Email'";
            $result = $conn->query($sql);

    if ($result->num_rows > 0) {
                $_SESSION['msg'] = "<div class='alert alert-danger'>This e-mail already exists Please Try Another One!</div>"; 
                header('location:regi-form.php');
                
    } else {

                $hashedPassword = md5(($Password));

                //FOR INSERT FORM DATA INTO DATABASE TABLE.......
                $sql = "INSERT INTO user_details (first_name,sur_name,email,po_address,po_code,city,pass,user_type,terms_condition) 
                VALUES ('$First_Name','$Sur_Name','$Email','$PO_Address','$PO_Code','$City','$hashedPassword', '1' ,'$Terms')";
                $result = $conn->query($sql);

                if ($result){
                    $_SESSION['msg'] = "<div class='alert alert-success'>Registration Successfull!! Now you Can Log-in</div>"; 
                    header('location:reg-form.php');
                }else{
                    $_SESSION['msg'] = "<div class='alert alert-danger'>Registration Failed.. Please rty again</div>"; 
                    header('location:reg-form.php');
                }
        
            


        }


}
}

?>