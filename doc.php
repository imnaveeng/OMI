<?php session_start(); ?>
<html>
<head><title>Online Medicine Info</title><style>/
    #continer{
        width:100%;
        height: 100%;
        
    }
    p{
        font-weight: bold;
        font-size: 80px;
        color: red;
    }
     h1{
        color:  #861BBF;
        font-size: 80px;
        font-style: italic;
        font-weight: 200;
        padding-top: 30px;
        bottom: auto
        
    }
    #top{
       background: linear-gradient(#F8F594, #D5D533);
        height: 180px   
    }
    /*input[type="submit"]
        {
            height: 40px;
             border-radius: 20px;
             background: #1c8adb;
            border: none;
            font-size: 25px;
        }
input[type="submit"]:hover{
                 cursor:pointer;
                  background-color: #39dc79;
                  color: #000;
    }*/
    /*#middle input{
        float: left;
        
     
        
        font-size: 30;
    
    }
    .see{
        
        width: 300px;
        height: 50px;
        font-size: 40px;
        color: #E36A0C;
    }
    
    #see1{
    
        background: #e6ed21;
        font-size: 20px;
        height: 36px;
        
    }
    #footer{
        height: 70%;
        width: 70%;
        border: 50xp solid;
        
    }*/
    th{
        font-size: 40px;
        color: blueviolet;
    }
    table{
        padding: 30px;
        height: 300px;
        width: 100%;
        
    }
    td{
        font-size: 30px;
        padding: 60px;
    }
    #menu a{
        float: inherit;
        font-size: 30px;
    }
    
        
    </style>
    </head>
    <?php
//    if(isset($_POST['search'])){
    
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
    $query="SELECT * FROM `patient`";
    $result=mysqli_query($conn,$query);
    $sql="SELECT * FROM `login`";
    $res=mysqli_query($conn,$sql);
    
    }
    
    ?>
<body style="background-color: cornsilk;">
    <div id="continer">
    <div id="top"><center><h1>WELCOME DOCTOR</h1></center><a href="logout.php" style="float: right; font-size: 30px">logout</a></div>
        <div id="middle" >
            <p>Today's patients are: </p>
                     
                <?php
        while ($row = mysqli_fetch_assoc($result)) {
            
            $col = mysqli_fetch_assoc($res);
            $username=$row['username'];
          
        
        
        ?>
             
               <table border=2px>
                   
               <tr> <th align="center">Username</th>
            <th align="center">Disease</th>
         <th align="center">Symptoms</th>
                   <th align="center">
                       Patient's Feeling</th>
                   <th align="center">Medicine used</th>
                   </tr>
         
               
               <tr>
                <td align="center" style="font-size:50px">
                <u>Username</u>:   
                <?php echo $row['username'] ?>
                <br><u>Age</u>: 
                <?php echo $col['age']; ?>
                <br><u>Mobile No</u>: 
                <?php echo $col['mobile']; ?>
                    <br><u>Email</u>: 
                <?php echo $col['email']; ?><a href="gmail.html">Go</a>
                </td>
                <td align="center" style="font-size:50px">
                <?php echo $row['disease']; ?>
                </td>
                <td align="center" style="font-size:50px">
                <?php echo $row['symptoms']; ?>
                </td>
                <td align="center" style="font-size:50px">
                <?php echo $row['feel']; ?>
                </td>
                <td align="center" style="font-size:50px">
                <?php echo $row['medicine']; ?>
                </td>
                <td align="center" style="font-size:50px">
                <form method="POST" action="replydb.php">
                    <input type="text" name="username" placeholder="Enter the username">
                    <input type="text" name="reply">
                    <input type="submit" value="send" name="submit">
                   </form>
                   </td>
                </tr>
                   
               
         </table>
            <?php } ?>
            
            
    
        </div>
        <div id="menu">
        <a href="ad.html">Contact Admin</a>    
        </div></div>
     
    </body></html>