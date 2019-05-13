<?php

session_start();

$username=$_POST["username1"];
$password=$_POST["password1"];


$connection= mysqli_connect("localhost", "root", "", "login") or die("No connection");
//$select_db= mysqli_select_db($connection, "logins")  or die("No connection");



$sql="select * from users where username ='$username' ";

$result= mysqli_query($connection, $sql);

$insert="insert into users(username, password) values('$username', '$password')";
mysqli_query($connection, $insert);
echo"Registration Successful!"; 

//$num= mysqli_num_rows($result);

/*/if ($num==1) {
       echo"Username already Taken";
} else {*/
   
        

    
?>