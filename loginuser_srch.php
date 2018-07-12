<?php session_start(); ?>
<html>
<head><style>
    </style></head>
<body><center>
    <div id="container">
        
        <div id="top" style="background: yellow"><h1>WELCOME TO ONLINE MEDICINE INFORMATION</h1><a href="logout.php" style="float: right">logout</a></div>
    <form method="post" action="srch.php">
    <p>Enter your username</p>
        <input type="text" name="username">
    <p>What is the disease you are suffering from ?</p>
    <input type="text" name="disease" placeholder="enter disease name">
    
    <p>What are the symptoms ?</p>
    <input type="text" name="symptoms" placeholder="enter symptoms">
    <p>How are you feeling, now ?</p>
    <input type="text" name="feel">
    <p>Have you used any medicine before ?</p>
    <input type="text" name="med" placeholder="enter yes or no">
    <p>if yes, please enter the medicine:</p>
    <input type="text" name="medicine" placeholder="enter medicine name">
        <input type="submit" name="submit" value="submit"></form>
    </div></center></body></html>