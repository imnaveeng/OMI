<?php
$username=$_POST['username'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
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
	$sql="INSERT INTO `login1`(`username`, `password`, `firstname`, `lastname`) VALUES ('$username','$password','$firstname','$lastname')";
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert('successfully regestered');</script>";
        echo"<script>window.location.href='login2.html';</script>";
	}
	else
    {
		echo "error".$sql."<br>".$conn->error;
        echo "<script>alert(' regesteration is canelled');</script>";
    echo"<script>window.location.href='adreg.html';</script>";
	}
	mysqli_close($conn);
}
	

}
}

?>