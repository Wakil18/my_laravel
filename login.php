<?php
    session_start();

    if(!isset($_SESSION['loggedin'])){
        header('location:404.php');
    }

if ($_POST)
{
  

    include_once 'db_connection.php';
    $conn= connection();

    
    $Email        =  mysqli_real_escape_string($conn, $_POST['email']);
    $Password     =  mysqli_real_escape_string($conn, $_POST['password']);

    if(!isset($_SESSION['count'])){
        $_SESSION['count'] = 0;
    }

    if($Email == '' || $Password == ''){
                $_SESSION['msg'] = "<div class='alert alert-danger'>No Field must not be Empty</div>";
                header('location:login-form.php');//To Message Rersult....
    }
    else if(filter_var($Email, FILTER_VALIDATE_EMAIL) === false ){
                $_SESSION['msg'] = "<div class='alert alert-danger'>Please enter valid email address</div>";
                header('location:login-form.php');//To Message Rersult....
    }
    else{
            $hashedPassword = md5(($Password));

            $sql = "SELECT * FROM user_details WHERE email = '$Email' AND pass='$hashedPassword'";
            $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                        foreach($result AS $row){
                            $_SESSION['user_role'] = $row['user_type'];
                            $_SESSION['uname']     = $row['sur_name'];
                            $_SESSION['city']     = $row['city'];
                            $_SESSION['u-id']      = $row['id'];
                        }	
                            $_SESSION['loggedin']  = true;
                            unset($_SESSION['count']);
                            //$_SESSION['lg_msg'] = 'Log in Successfully !!!';
                            header('location:index.php');
                }
                else {
                        //This block works when a user information is invalid
                            $_SESSION['count']++;
                            //echo time();exit;
                            if($_SESSION['count'] >= 3){
                                setcookie('logincounter', true, time() + (60*10), "/"); // 86400 = 1 day
                                $_SESSION['count'] = 0;
                            }
                        $_SESSION['msg'] = "<div class='alert alert-danger'>Username and Password do not Match </div>";
                        header('location:login-form.php');//To Message Rersult....
                }

}
}

?>