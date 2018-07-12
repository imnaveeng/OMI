<?php
$comp=$_POST['comp'];
$feed=$_POST['feed'];
$sug=$_POST['sug'];

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="student";
$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
	
if(mysqli_connect_error()){
die('Connect Error('.mysqli_connect_errno().')'
. mysqli_connect_error());
}
else{
    $sql="INSERT INTO `admin`(`comp`,`feed`,`sug`)VALUES('$comp','$feed','$sug')";
    if(mysqli_query($conn,$sql))
    {
		echo "<script>alert('successfully submitted');</script>";
	}
	else{
		echo "error".$sql."<br>".$conn->error;
        echo "<script>alert(' cancelled ');</script>";
    echo"<script>window.location.href='ad.html';</script>";
	}
	mysqli_close($conn);
}
?>