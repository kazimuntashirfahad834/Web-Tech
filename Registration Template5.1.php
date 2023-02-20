<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

	if (move_uploaded_file($_FILES, ["fileToUpload"]["tmp_name"], $target_file))
	{
		echo "The file".basename($_FILES["fileToUpload"]["name"])."has been uploded.";
	}
	else {echo "Sorry error file";}
?>