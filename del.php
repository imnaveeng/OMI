<?php
$med=$_POST['medicine'];

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

else
{
    $sql="delete from `med` where `medicine`='$med'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo "Medicine deleted";
    }
    else
    {
        echo "error".$sql."<br>".$conn->error;
    }
}
        mysqli_close($conn);
    }
}
?>