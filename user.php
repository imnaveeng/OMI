<?php
$username=$_POST['username'];
$email=$_POST['email'];
$fs=$_POST['fs'];
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
    $sql="INSERT INTO `adminuser`(`usersug`,`username`,`email`)VALUES('$fs','$username','$email')";
    if(mysqli_query($conn,$sql))
    {
		echo "<script>alert('successfully submitted');</script>";
	}
	else{
		echo "error".$sql."<br>".$conn->error;
        echo "<script>alert(' cancelled ');</script>";
    echo"<script>window.location.href='user.html';</script>";
	}
	mysqli_close($conn);
}
?>