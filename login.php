<?php

$username=$_POST['username'];
$password=$_POST['password'];

if(!empty($username)){
	if(!empty($password)){
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
	$sql="SELECT * FROM `login` WHERE username='$username' AND password='$password'";
	$result=mysqli_query($conn,$sql);
    $count=mysqli_fetch_array($result);
	if($username==$count['username']&&$password==$count['password']){
		echo "<script>alert('YOU WERE LOGINED');</script>";
        echo"<script>window.location.href='loginuser_srch.php';</script>";
	}
	else{
		echo "error".$sql."<br>".$conn->error;
        echo "<script>alert(' login is failed please try again');</script>";
echo"<script>window.location.href='login.html';</script>";
	}
	mysqli_close($conn);
}
	

}
}

?>