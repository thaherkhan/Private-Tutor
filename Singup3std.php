<!DOCTYPE html>

<html>
	
	<?php
		include("Home.php");
		include("connection.php");
	?>
	
	<?php
	
		if(! mysqli_select_db($conn,'abid'))
			echo 'Database not selected';
		
		if(isset($_REQUEST['submit2']))
		{
			$email_st=trim($_REQUEST['email_st']);
			$password_st=trim($_REQUEST['password_st']);
			$confirm_password_st=trim($_REQUEST['confirm_password_st']);
			$Title_st=trim($_REQUEST['Title_st']);
			$Fname_st=trim($_REQUEST['Fname_st']);
			$Lname_st=trim($_REQUEST['Lname_st']);
			$Gender_st=trim($_REQUEST['Gender_st']);
			$City_st=trim($_REQUEST['City_st']);
			$dateBirth_st=trim($_REQUEST['dateBirth_st']);
			$Mobile_st=trim($_REQUEST['Mobile_st']);
			$Level_st=trim($_REQUEST['Level_st']);
			$Dept_st=trim($_REQUEST['Dept_st']);
			$Institute_st=trim($_REQUEST['Institute_st']);
			$Area_st=trim($_REQUEST['Area_st']);
			$time_st=trim($_REQUEST['time_st']);
			$subject_st=trim($_REQUEST['subject_st']);
			$salary_st=trim($_REQUEST['salary_st']);
			 				
			$sql1="insert into student (Email,Password,Confirm_Password,Title,First_Name,Last_Name,Gender,
			City,Date_Birth,Mobile,Level,Dept_Class,Institute,Tuition_Area,Time,Subject,Salary)
			
			values ('$email_st','$password_st','$confirm_password_st','$Title_st','$Fname_st','$Lname_st','$Gender_st',
				'$City_st','$dateBirth_st','$Mobile_st',
				'$Level_st','$Dept_st','$Institute_st','$Area_st','$time_st','$subject_st','$salary_st')";
			
			
			mysqli_query($conn,$sql1);
		}
	?>
	
	
	<body style="background: white;">
	
		<div class="sign_up">
		
			<h1 style="text-align: center;"> Regester as a Student </h1>
			
			<form method="post" enctype="multipart/form-data" style="background-color: #fff; width: 60%; height: auto; min-width:300px; text-align: center; margin: 0 auto;">
			
				<table style="width:100%;">
				
					<caption style="color:blue;"> Account and Personal Info </caption>
					
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
							<b> Type :<b>
						</td>
						
						<td>
							
							<select name="Type_st" style="width: 30%; text-align: left;">
							
								<option>Student</option>
							
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
						<th> Email :</th>
							
						<td>
							<input type="email_st" name="email_st" style="width: 50%;">
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
						<th> Password :</th>
							
						<td>
							<input type="password" name="password_st" style="width: 50%;">
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
						<th> Confirm Password :</th>
							
						<td>
							<input type="Password" name="confirm_password_st" style="width: 50%;">
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
								<b> Title :<b>
							</td>
							<td>
								<select name="Title_st" style="width: 30%; text-align: left;">
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
							<td><input type="text" name="Fname_st" style="width: 50%;"></td>
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
							<td><input type="text" name="Lname_st" style="width: 50%;"></td>
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
								<select name="Gender_st" style="width: 51%; text-align: left;">
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
							<th>
								City :
							</th>
							<td>
								<select name="City_st" style="width: 51%; text-align: left;">
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
							<td><input type="date" name="dateBirth_st" style="width: 50%;"></td>
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
							<td><input type="text" value="+880" name="Mobile_st" style="width: 50%;"></td>
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
							<b> Level :<b>
						</td>
						
						<td>
							
							<select name="Level_st" style="width: 30%; text-align: left;">
								
								<option>Select</option>
								<option>Primary</option>
								<option>Secondary</option>
								<option>Heigher Secondary</option>
								<option>Bachelor/Honors</option>						
							
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
						
						<th> Dept/Class :</th> 
						
						<td>
							<input type="text" name="Dept_st" style="width: 50%;">
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
							<input type="text" name="Institute_st" style="width: 50%;">
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
						
						<th> Tuition Area :</th> 
						
						<td>
							<input type="text" name="Area_st" style="width: 50%;">
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
						
						<th> Time :</th> 
						
						<td>
							<input type="text" name="time_st" style="width: 50%;">
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
						
						<th> Subject :</th> 
						
						<td>
							<input type="text" name="subject_st" style="width: 50%;">
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
						
						<th> Salary :</th> 
						
						<td>
							<input type="text" name="salary_st" style="width: 50%;">
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
				
				</table>
				
			</form>
			
		</div>
		
		<div class="foter">
	
			<p> Developed By <font color="red"> &copy Abid Khan </font> </p>
			
		</div>
		
	</body>


</html>