<?php
$username=$_POST['username'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$password=$_POST['password'];
$age=$_POST['age'];
$qualification=$_POST['qualification'];
$specialist=$_POST['specialist'];
$address=$_POST['address'];
$email=$_POST['email'];
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
	$sql="INSERT INTO `doclogin`(`username`, `password`, `firstname`, `lastname`, `age`, `qualification`,`specialist`, `address`, `email`) VALUES ('$username','$password','$firstname','$lastname','$age','$qualification','$specialist','$address','$email')";
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert('successfully regestered');</script>";
        echo"<script>window.location.href='login.html';</script>";
	}
	else{
		echo "error".$sql."<br>".$conn->error;
        echo "<script>alert(' regestered is canelled');</script>";
        echo"<script>window.location.href='reg.html';</script>";
	}
	mysqli_close($conn);
}
	

}
}

?>