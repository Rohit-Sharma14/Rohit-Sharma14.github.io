<?php

// $servername="localhost";
// $username= "root";
// $password = "";
// $dbname= "portfolio";


// $con = mysqli_connect($servername, $username,$password, $dbname) or  die("connection failed".mysqli_connect_error());

$error = array();
$uname = $_POST['uname'];
$uemail= $_POST["uemail"];
$umsg=$_POST['umsg'];
$to='14rohit09sharma99@mail.com';
$subject='From Portfolio';
$header = 'From: Portfolio';

if(empty($uname) OR empty($uemail) OR empty($umsg))
{
    array_push($error, "No");
    echo "No";
}

$exp = preg_match("/^([a-z0-9+-]+)(.[a-z0-9+_-]+)*@([a-z0-9-]+.)+[a-z]{2,6}$/ix", $uemail);

if(count($error) == 0)
{
    if(!$exp)
    { 
        array_push($error, "Invalid email!"); 
        echo "No";
    }
}

if(count($error) == 0)
{
        // $q="INSERT INTO portfolio(uname,uemail,umsg) values('$uname','$uemail','$umsg')";
        // $query=mysqli_query($con,$q);
        echo "1";
        $message="Name :".$uname."\n"."Mail :".$uemail."\n"."Message :"."\n\n".$umsg;
        mail($to,$subject,$message,$header);
}

?>

