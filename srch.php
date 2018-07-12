
<?php
   ini_set('display_errors','1');
    $username=$_POST['username'];   
    $disease=$_POST['disease'];
    $symptoms=$_POST['symptoms'];
    $feel=$_POST['feel'];
    $med=$_POST['med'];
    $medicine=$_POST['medicine'];
 $host="127.0.0.1";
		$dbusername="root";
		$dbpassword="";
		$dbname="student";

$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
	
if(mysqli_connect_error()){
die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
    else
    {
        $sql="INSERT INTO `patient`(`username`,disease`, `symptoms`, `feel`, `med`, `medicine`) VALUES ('$username','$disease','$symptoms','$feel','$med','$medicine');";
        $res=mysqli_query($conn,$sql);
    if($res)
    { 
    echo "<script>alert('Successfully submitted');</script>";
            echo "<script>window.location.href='user.html';</script>";
    }
    }
    mysqli_close($conn);
    ?>