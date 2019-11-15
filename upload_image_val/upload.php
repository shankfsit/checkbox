<?php
if(isset($_POST['submit'])){
	$anytext = $_POST['anytext'];
	$img = $_FILES["upload_file"]["name"];
	$image_info = getimagesize($_FILES["upload_file"]["tmp_name"]);
	echo $image_width = $image_info[0];
	echo $image_height = $image_info[1];

	//list($width, $height, $type, $attr) = getimagesize($img); 
	if ($image_width > 100 && $image_height > 100) {
    echo "Sorry, your file is too large.";
	}
	else{
		echo "File Uploaded Successfully.";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="#" enctype="multipart/form-data">
		<input type="text" name="anytext"><br><br>
		<input type="file" name="upload_file"><br><br>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>