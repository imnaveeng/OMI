<?php
$reply=$_POST['reply'];
$username=$_POST['username'];
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
    $sql="insert into `reply`(`reply`,`username`)values('$reply','$username')";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
        echo "<script>alert('succesfully submitted');</script>";
        echo"<script>window.location.href='doc.php';</script>";
    }
}
?>