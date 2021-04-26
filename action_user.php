<?php
    Session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['user_role'] != 0){
        header('location:404.php');
    }
if(isset ($_GET['action'])){
       

        $delete = $_GET['action'];
        $user_id = $_GET['id'];

        $admin_id = $_SESSION['u-id'];

            if ($delete == 'delete'){

                if($user_id ==  $admin_id){
                    $_SESSION['msg'] =  "<strong class='text-danger'> You can not delete admin/your data  </strong>";
                    header('location:admin-form.php');
                }else{

                    include_once 'db_connection.php';
                    $conn=connection();

                    $sql = "DELETE FROM  users_details WHERE id='$user_id' ";
                    if($conn->query($sql)){

                        $_SESSION['msg'] =  "<strong class='text-success'> Remove Table Data Successfully </strong>";
                        header('location:admin-form.php');
                    }else{

                        $_SESSION['msg'] =  "<strong class='text-danger'> Invailed Data  </strong>";
                        header('location:admin-form.php');
                    }
                }
    

            }else{
                header('location:404.php');
            }
    }

?>