<!DOCTYPE html>

<html>
	
	<?php
			include("connection.php");
	?>
	
	<head>
	
		<link href="design.css" rel="stylesheet">
		<title> Singup3 </title>
	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
	</head>
	
	<div class="head">
		
		<div class="header">
		
			<h1 style="color: red">Welcome to <br/> Private Tutor Finder System</h1>
		
		</div>
		
		<div class="loginfo">
			
			<th>
				<h3 ><a href="Login.php">Login</a>
				or
				<a href="Singup.php">Register</a></h3>
			</th>
		
		</div>
	
	</div>
	
	<div class="menu">
		<ul>
			<li><a href="index.php">HOME</a></li>
			<li><a href="search.php">SEARCH</a></li>
			
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">FOR STUDENT</a>
				<div class="dropdown-content">
					<a href="search.php"> Find Tutor </a>
					<a href="about.php"> How Our Service Works </a>
					<a href="Singup.php"> Register </a>
				</div>
			</li>
			
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">FOR  TUTOR</a>
				<div class="dropdown-content">
					<a href="search.php"> Find Student </a>
					<a href="about.php"> How Our Service Works </a>
					<a href="Singup.php"> Register </a>
				</div>
			</li>
			
			<li><a href="contact_us.php">CONTACT US</a></li>
			<li><a href="about.php">ABOUT</a></li>
		</ul>
	</div>
	
	<body style="background: white;">

		<div class="sign_up">
		
			<h1 style="text-align: center;"> Regester as a Tutor</h1>
			
			<form action="Singup3std.php" style="background-color: #fff; width: 60%; height: auto; min-width:300px; text-align: center; margin: 0 auto;">
			
				<table style="width:100%;">
					
					<caption style="color:blue;"> Tutoring and Education Info </caption>
					
					<tr>
						<td> 
						</td>
					</tr>
					<tr>
						<td> 
						</td>
					</tr>
					
					<tr>
						<td>
							<b> Level of Education :<b>
						</td>
						
						<td>
							
							<select name="LevelEducation" style="width: 30%; text-align: left;">
								<option>Select</option>
								<option>Secondary</option>
								<option>Heigher Secondary</option>
								<option>Diploma</option>
								<option>Bachelor/Honors</option>
								<option>Master</option>
							</select>
						
						</td>
					
					</tr>
					
					<tr>
						<td> 
						</td>
					</tr>
					<tr>
						<td> 
						</td>
					</tr>
					
					<tr>
						<th> Degree :</th> 
						
						<td>
							<input type="text" name="Degree" style="width: 50%;">
						</td>
					
					</tr>
					
					<tr>
						<td> 
						</td>
					</tr>
					<tr>
						<td> 
						</td>
					</tr>
					
					<tr>
						<th> Dept/Class :</th> 
						
						<td>
							<input type="text" name="Dept" style="width: 50%;">
						</td>
					
					</tr>
					
					<tr>
						<td> 
						</td>
					</tr>
					<tr>
						<td> 
						</td>
					</tr>
					
					<tr>
						<th> Institute :</th> 
						
						<td>
							<input type="text" name="Institute" style="width: 50%;">
						</td>
					
					</tr>
					
					<tr>
						<td> 
						</td>
					</tr>
					<tr>
						<td> 
						</td>
					</tr>
					
					<tr>
						<th> Expected Tuition Area :</th> 
						
						<td>
							<input type="text" name="Exe_area" style="width: 50%;">
						</td>
					
					</tr>
					
					<tr>
						<td> 
						</td>
					</tr>
					<tr>
						<td> 
						</td>
					</tr>
					
					<tr>
						<th> Available Time :</th> 
						
						<td>
							<input type="text" name="Ava_time" style="width: 50%;">
						</td>
					
					</tr>
					
					<tr>
						<td> 
						</td>
					</tr>
					<tr>
						<td> 
						</td>
					</tr>
					
					<tr>
						<th> Expected Class :</th> 
						
						<td>
							<input type="text" name="Exe_class" style="width: 50%;">
						</td>
					
					</tr>
					
					<tr>
						<td> 
						</td>
					</tr>
					<tr>
						<td> 
						</td>
					</tr>
					
					<tr>
						<th> Preferred Subject :</th> 
						
						<td>
							<input type="text" name="Pref_subjecr" style="width: 50%;">
						</td>
					
					</tr>
					
					<tr>
						<td> 
						</td>
					</tr>
					<tr>
						<td> 
						</td>
					</tr>
					
					<tr>
						<th> Expected Salary :</th> 
						
						<td>
							<input type="text" name="Exe_salary" style="width: 50%;">
						</td>
					
					</tr>
					
					<tr>
						<td> 
						</td>
					</tr>
					<tr>
						<td> 
						</td>
					</tr>
					<tr>
						<td> 
						</td>
					</tr>
					<tr>
						<td> 
						</td>
					</tr>
					<tr>
						<td> 
						</td>
					</tr>
					<tr>
						<td> 
						</td>
					</tr>
					
					<tr style="text-align:center;">
						
						<td colspan="2">
							<input type="submit" name="submit2" style="width: 20%; min-width:100px;" value="Continue"> 
						</td>
					
					</tr>
				
				</table>
				
			</form>
			
		</div>	
		
		<div class="foter">
	
			<p> Developed By <font color="red"> &copy Abid Khan </font> </p>
			
		</div>
		
	</body>


</html>