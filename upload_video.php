<html>
<body>

<?php

	$name = $_FILES["file"]['name'];
	$temp = $_FILES["file"]['tmp_name'];
	
	move uploaded_file($temp,"uploaded/".$name);
	
	echo"<video width="400" height="400" controls>
	<source src='upload/" .$name." 'type='video/mp4'>
	</video>;
	
?>
</body>
</html>