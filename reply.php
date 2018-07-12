<html>
<head><title>Doctor's reply</title>
    </head>
    <?php
//    if(isset($_POST['search'])){
        $username=$_POST['user'];
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
    $query="SELECT * FROM `reply`";
    $result=mysqli_query($conn,$query);
    }
    
    ?>
<body style="background-color: cornsilk;">
    <div id="continer">
    <div id="top"><center><h1 style="color:blue">YOUR DOCTOR'S SUGGESTION IS</h1></center></div>
        
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
         if($username==$row['username']){
        ?>
         <table>
        <tr>
            <td style="font-size: 50px">  <?php echo $row['reply'] ?></td>
            <br>
            <br>
            <br>
             </tr>
            </table>
            <?php }
        } ?>
            
            
    
        </div>
       
     
    </body></html>