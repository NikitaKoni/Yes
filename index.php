<?php
$user ='root';
$pass='';
$db='testdb';
$host='127.0.0.1';

$db=new mysqli($host,$user, $pass, $db) or die ("unable to connect");

if(isset($_POST['submit']))
{
	$name = $_FILES['file']['name'];
	$temp = $_FILES['file']['tmp_name'];
	
	move_uploaded_file($temp,"uploaded/".$name);
	$url = "http://127.0.0.1/PHP/testdb/uploaded/$name";
	mysqli_query("INSERT INTO `videos` VALUE ('','$name','$url')");
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>Upload Your Video!</title>
</head>

<body>
 
<div id="container">
	<div id="header">
        <h1><span class="blue-text">VIDEO</span> <span class="red-text"> Uploading Website</span></h1>
        <h2>Find A Video <span class="white-text">NOW</span></h2>
     </div><!--header end-->
        
    <div id="menu">
        <ul>
            <li class="menuitem"><a href="index.php">Home</a></li>
            <li class="menuitem"><a href="browse.html">Browse Videos</a></li>
            <li class="menuitem"><a href="about.html">About Us</a></li>
			<li class="menuitem"><a href="contact.html">Contact Us</a></li>
        </ul>
    </div><!--menu end-->
	
    <div id="leftmenu">
        <h3>Catagories</h3>
       <ul>
            <li><a href="browse.html">Bollywood Videos</a></li>
            <li><a href="browse.html">Hollywood Videos</a></li>
            <li><a href="browse.html">Generic   Videos</a></li>        
        </ul>
		
   </div><!--leftmenu end-->
    
	<div id="content">
	<form action="index.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file" />
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	
    <input type="submit" name="submit" value="Upload!" />
</form>

<?php

if(isset($_POST['submit']))
{
	echo "<br />".$name." has been uploaded";
}

?>
	
	</div>
</div><!--container end-->
<div style="clear:both"></div>
		 
	 </body>
	 </html>
