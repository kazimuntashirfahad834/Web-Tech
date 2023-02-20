<?php
$name="";
$email="";

	if ($_SERVER["REQUEST_METHOD"] == "POST")
		{if(empty($_POST['name']))
			{echo "Empty";}
	else 
		{$myfile = fopen("Registration Template.txt","w") or die("Unable to open");
		$name=$_POST['name'];
		fwrite($myfile,$name);
		fclose($myfile);}

	if(empty($_POST['email']))
		{echo"Empty";}
	else{$myfile = fopen("Registration Template.txt","w") or die("Unable to open");
		$email=$_POST['email'];
		fwrite($myfile,$email);
		fclose($myfile);
		}
		}
?>

<!DOCTYPE html>
<html>

	<head>
		<title></title>
		<style> 
			fieldset{ 
			background-color: white ;
			}
			legend {
  			background-color: gray;
  			color: black;
  			padding: 5px 10px;
			}
			input {
  			margin: 5px;
			}
		</style>
	</head>

	<body>

		<fieldset>
		<legend>REGISTRATION TEMPLATE</legend>

		<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="get"
			  action = "Registration Template5.1.php" method="post" enctype="multipart/form-data">	 
		
		<label for = "name">Name</label>
		<input type = "text" name = "name" placeholder="Enter your name"> <hr>
		
		<label for = "name">Email</label>
		<input type = "text" name = "email" placeholder="Enter your Email"> <hr>
		
		<label for = "name">Password</label>
		<input type = "text" name = "pass" placeholder="Enter your Password"> <hr>

		<input type="file" name="fileToUpload" id="fileToUpload"> <hr>
		<input type="submit"> <hr>

		</form>

	</fieldset>

	</body>

</html>