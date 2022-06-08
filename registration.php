<?php

session_start();

$con = mysql_connect('localhost','root','');

mysqli_select_db($con,'userresistration');

$name=$_POST['name'];
$password=$_POST['password'];

$s="SELECT * from usertable where name = '$name'";
$result = mysqli_query($con,$s);

$num = mysql_num_rows($result);

if($num == 1){
    echo"email id already exist !!";

}else{
    $reg="INSERT INTO 'usertable'('name' ,'password') VALUES ('$name' , '$password')";
    mysqli_query($con,$reg);
    echo"registration successful";
    header('location:indexloginafter.php');
}

?>