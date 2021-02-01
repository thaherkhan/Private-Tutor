<!DOCTYPE html>

<html>
	
	<?php
			include("Home.php");
	?>
	
	<body style="background: #cff;">
		
		<font size="5" align="center">
			
			<br/><br/><br/>
			<br/><h1> <span> FIND A TUTOR OR STUDENT </span> </h1>
		
		</font>
		
		<div style="padding: 12px; margin-bottom: 16px; overflow: hidden;">  
		
			<form>
				
				<p>
					<input type="text" style="padding: 5px; top: 2px; width: 40%; margin-left: 31%;" placeholder="Enrer a Subject" required>
				</p>
				
				<p>
					<select name="Select Level" style="padding: 5px; top: 2px; width: 20%; margin-left: 31%;">
						<option>Select Level</option>
						<option>KG</option>
						<option>Primary</option>
						<option>High School</option>
						<option>College</option>
					</select>
					
					<select name="Type" style="padding: 5px; top: 2px; width: 21%;">
						<option>Select</option>
						<option>Tutor</option>
						<option>Student</option>
					</select>
				</p>
				
				<input type="text" style="padding: 5px; top: 6px; width: 19%; margin-left: 31%;" placeholder="Area">
				
				<p>
					<button class="search" >
						SEARCH
					</button>
				</p>
			
			</form>
	
		</div>
		
		<div class="foter">
			
			<p> Developed By <font color="red"> &copy Abid Khan </font> </p>
		
		</div>
	
	</body>
	
</html>