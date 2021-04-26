<?php

function connection(){
        $host='localhost';
        $user='root';
        $pass='';
        $db_name='DW_00171342';

        $con = new mysqli($host,$user,$pass,$db_name);
        return $con;
}

?>