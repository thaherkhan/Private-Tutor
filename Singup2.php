<!DOCTYPE html>

<html>

	<head>
	
		<link href="design.css" rel="stylesheet">
		<title> Singup2 </title>
	
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
		
			<h1 style="text-align: center;"> Regester as a Tutor or Student </h1>
			
			<form action="Singup3.php" style="background-color: #fff; width: 60%; height: auto; min-width:300px; text-align: center; margin: 0 auto;">
					
					<table style="width:100%;">
					
						<caption style="color:blue;"> Personal Info </caption>
						
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
								<b> Title :<b>
							</td>
							<td>
								<select name="Title" style="width: 30%; text-align: left;">
									<option>Select</option> 
									<option>Mr.</option>
									<option>Mrs.</option>
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
							<th> First Name :</th>
							<td><input type="text" name="fname" style="width: 50%;"></td>
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
							<th> Last Name :</th>
							<td><input type="text" name="fname" style="width: 50%;"></td>
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
							<th>
								Gender :
							</th>
							<td>
								<select name="Gender" style="width: 51%; text-align: left;">
									<option>Select</option> 
									<option>Male</option>
									<option>Female</option>
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
							<th> Address :</th>
							<td><input type="text" name="address" style="width: 50%;"></td>
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
							<th>
								City :
							</th>
							<td>
								<select name="City" style="width: 51%; text-align: left;">
									<option>Select</option>
									<option>Dhaka</option>
									<option>Sylhet</option>
									<option>Barishal</option>
									<option>Chottogram</option>
									<option>Khulna</option>
									<option>Rajshahi</option>
									<option>Rangpur</option>
									<option>Moymonshing</option>
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
							<th> Date of Birth :</th>
							<td><input type="date" name="" style="width: 50%;"></td>
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
							<th> Mobile :</th>
							<td><input type="text" value="+880" name="" style="width: 50%;"></td>
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
								<input type="submit" style="width: 20%; min-width:100px;" value="Continue"> 
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