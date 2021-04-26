<?php
$host = 'localhost';
$user = 'root';
$pass = '';

//Connect Databases.....................................................................................
$con = new mysqli($host,$user,$pass);

//Creating Database.........................................................................................
$sql = 'CREATE DATABASE DW_00171342';
if($con->query($sql)){
    echo 'DW_00171342 Database Created Successfully----<br>';
}else{
    echo 'Connection Failed----<br>';
}

//Include externel php file .....
include_once 'db_connection.php';
$conn = connection();

// Creating user_details Table............................................................
	$sql = 'CREATE TABLE user_details(
		id INT(20) PRIMARY KEY AUTO_INCREMENT,
		first_name VARCHAR(18),
        sur_name VARCHAR(12),
        business_name VARCHAR(50),
        job_title VARCHAR(30),
        interest VARCHAR(25),
		email VARCHAR(50),
		po_address VARCHAR(50),
		po_code VARCHAR(50),
		city VARCHAR(50),
		pass VARCHAR(50),
        user_type tinyint(2),
        terms_condition VARCHAR(8) 	
    )';
    
	if($conn->query($sql)){
		echo 'Users Table Created Successfully------<br>';
    }else{
        echo 'Connection Failed--------<br>';
    }


// Creating FAQ table  ..............................................................................
$sql = 'CREATE TABLE faq(
    id INT(20) PRIMARY KEY AUTO_INCREMENT,
    question VARCHAR(300),
    email VARCHAR(50)	
)';
if($conn->query($sql)){
    echo 'FAQ Table Created Successfully-----------<br>';
}else{
    echo 'FAQ Table Created Failed.. Please rty again-----------<br>';
}


//for Inserted a default-admin to log-in initial stage ...........................................................
     $ad_pass = md5('admin123'); //Admin log-in password...

     $sql = "INSERT INTO user_details (first_name,sur_name,business_name,job_title,interest,email,po_address, po_code, city,pass,user_type,terms_condition) 
                 VALUES ('admin','admin','AirPollutionLTD','CEO','Pollution','admin@gmail.com', 'mirpur','1216','dhaka','$ad_pass', '0' ,'accepted')";
     $result = $conn->query($sql);
 
         if ($result){
             echo "Admin Inserted Successfull!! Now you Can Log-in as a Admin--------<br>";
         }else{
             echo "Admin Inserted Failed.. Please try again------------<br>";
         }
 
//for insert a FAQ details for initial stage .......................................................................
     $sql = "INSERT INTO faq (question,email) 
                 VALUES ('web desining and deploment','abc@gmail.com')";
     $result = $conn->query($sql);
 
         if ($result){
             echo "Frequently Asked Question Posted Successfully!!<br>";
         }else{
             echo "Posting Question Failed.. Please try again------------<br>";
         }
?>