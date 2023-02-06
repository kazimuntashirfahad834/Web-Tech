<!DOCTYPE html>
<html>

	<head>

		<title> </title>

		<style> 
			fieldset{ 
			background-color: white ;
			}
			legend {
  			background-color: white;
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
		<legend>REGISTRATION</legend>
		<form>
			 

		<label for = "name">Name</label>
		<input type = "text" name = "name"> <br>

		<label for = "name">Email</label>
		<input type = "text" name = "email"> <br>
	
		<label for = "name">User Name</label>
		<input type = "text" name = "uname"> <br>

		<label for = "name">Password</label>
		<input type = "text" name = "pass"> <br>

		<label for = "name">Conferm Password</label>
		<input type = "text" name = "cpass"> <br>

		<fieldset>
			<legend>Gender</legend>

			<input type = "radio" name = "male"> 
			<label for = "male">Male</label> 
	
			<input type = "radio" name = "Female"> 
			<label for = "female">Female</label> 
	
			<input type = "radio" name = "other"> 
			<label for = "other">Other</label> 
		</fieldset>

		<fieldset>
			<legend>Date of Birth</legend>

			<input type = "text" name = "day">
			<label for = "day">/</label>

			<input type = "text" name = "month">
			<label for = "month">/</label>

			<input type = "text" name = "year">
			<label for = "year">(dd/mm/yyyyy)</label>

		</fieldset>

		<button>Submit</button>	
		<button>Reset</button>
			
		</form>
	</fieldset>
	</body>

</html>
