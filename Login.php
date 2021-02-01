<!DOCTYPE html>

<html>

	<?php
			include("Home.php");
	?>
	
	<body style="background: #ccc">
		
		<div size="4" align="center">
			
			<br/><br/><br/><br>
			
			<h1> Login Here</h1>
			
			<form action="index.php" style="background-color: #fff; padding: 20px; margin-left: 25%; margin-right: 25%; margin-bottom: 10%;">
				
				<p> <input type="email" style="padding: 5px; top: 2px; width: 50%;" placeholder="Email"> </p>
				<p> <input type="password" style="padding: 5px; top: 2px; width: 50%;" placeholder="Password"> </p>
				<p> <input type="submit" style="padding: 5px; top: 2px; bgcolor: green; min-width: 20px;" value="Login"> </p>
				
				<a href="Forgot.php">
				
					<strong>Forgot Password </strong>
					
				</a>
				
				<a href="register.php">
				
					<strong>Create an account</strong>

				</a>
			
			</form>
			
		</div>
		
		<div class="foter">
	
			<p> Developed By <font color="red"> &copy Abid Khan </font> </p>
			
		</div>
		
	</body>

</html>