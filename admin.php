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
    $query="SELECT * FROM `admin`";
    $result=mysqli_query($conn,$query);
    $sql="SELECT * FROM `adminuser`";
    $res=mysqli_query($conn,$sql);
    $sql1="SELECT * FROM `login`";
    $res1=mysqli_query($conn,$sql1);
    }
    
    ?>
<body style="background-color: cornsilk;">
    <div id="continer">
    <div id="top"><center><h1>HELLO ADMIN</h1></center><a href="login.html" style="float: right; font-size: 30px">logout</a></div>
        <div id="middle" >
            <p>Today's requests from Doctor: </p>
                     
                <?php
        while ($row = mysqli_fetch_assoc($result)) {
            
            
                   ?>
             
               <table border=2px>
                   
               <tr> <th align="center">Patients to be removed</th>
            <th align="center">Feedback</th>
         <th align="center">Suggestions</th>
               
               <tr>
                <td align="center" style="font-size:50px">
                <?php echo $row['comp']; ?>
                </td>
                <td align="center" style="font-size:50px">
                <?php echo $row['feed']; ?>
                </td>
                <td align="center" style="font-size:50px">
                <?php echo $row['sug']; ?>
                </td>
              
                </tr>
                   
               
         </table>
            <?php } ?>
            
            
    
           
        </div>
        <div id="middle1" >
            <p>Today's requests from Users: </p>
                     
                <?php
        while ($row1 = mysqli_fetch_assoc($res)) {
            $row2=mysqli_fetch_assoc($res1);
            
            
            
                   ?>
             
               <table border=2px>
                   
               
            <th align="center">Feedback and Suggestions</th>
         <th align="center">User mail</th>
               
               <tr>
              
                <td align="center" style="font-size:50px">
                <?php echo $row1['usersug']; ?>
                </td>
                <td align="center" style="font-size:50px">
                <?php echo $row1['username']; ?><br>
                <?php echo $row1['email']; ?><a href="gmail.html">Go</a>
                </td>
              
                </tr>
                   
               
         </table>
            <?php } ?>
            
            
    
           
        </div>
    </div>
     
    </body></html>