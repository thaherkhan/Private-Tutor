<!DOCTYPE html>

<html>

	<?php
		include("Home.php");
		include("connection.php");
	?>
	
	<?php
	
		if(! mysqli_select_db($conn,'abid'))
			echo 'Database not selected';
		
		if(isset($_REQUEST['submit']))
			{
				$email=trim($_REQUEST['email']);
				$password=trim($_REQUEST['password']);
				$confirm_password=trim($_REQUEST['confirm_password']);
				
				$Title=trim($_REQUEST['Title']);
				$Fname=trim($_REQUEST['Fname']);
				$Lname=trim($_REQUEST['Lname']);
				$Gender=trim($_REQUEST['Gender']);
				
				$Address=trim($_REQUEST['Address']);
				$City=trim($_REQUEST['City']);
				$dateBirth=trim($_REQUEST['dateBirth']);
				$Mobile=trim($_REQUEST['Mobile']);
				
				$LevelEducation=trim($_REQUEST['LevelEducation']);
				$Degree=trim($_REQUEST['Degree']);
				$Dept=trim($_REQUEST['Dept']);
				$Institute=trim($_REQUEST['Institute']);
				$Exe_area=trim($_REQUEST['Exe_area']);
				
				$Ava_time=trim($_REQUEST['Ava_time']);
				$Exe_class=trim($_REQUEST['Exe_class']);
				$Pref_subject=trim($_REQUEST['Pref_subjecr']);
				$Exe_salary=trim($_REQUEST['Exe_salary']);
				
				
				$sql="insert into tutor (Email,Password,Confirm_Password,Title,First_Name,Last_Name,
						Gender,Address,City,Date_Birth,Mobile,Level_Education,Degree,Dept_Class,Institute,
						Exe_Area,Ava_Time,Exe_Class,Pref_Subject,Exe_Salary)

				values ('$email','$password','$confirm_password','$Title','$Fname','$Lname','$Gender','$Address',
						'$City','$dateBirth','$Mobile','$LevelEducation','$Degree','$Dept','$Institute','$Exe_area',
						'$Ava_time','$Exe_class','$Pref_subject','$Exe_salary') ";
				
				mysqli_query($conn,$sql);
			}
	?>
	
	<body style="background: white">
	
		<div class="sign_up">
		
			<h1 style="text-align: center;"> Regester as a Tutor </h1>
			
			<form action="Singup.php" method="post" enctype="multipart/form-data" style="background-color: #fff; width: 60%; height: auto; min-width:300px; text-align: center; margin: 0 auto;">
			
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
							
							<select name="Title" style="width: 30%; text-align: left;">

								<option>Tutor</option>
							
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
							<input type="email" name="email" style="width: 50%;">
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
							<input type="password" name="password" style="width: 50%;">
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
							<input type="Password" name="confirm_password" style="width: 50%;">
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
							<td><input type="text" name="Fname" style="width: 50%;"></td>
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
							<td><input type="text" name="Lname" style="width: 50%;"></td>
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
							<td><input type="text" name="Address" style="width: 50%;"></td>
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
							<td><input type="date" name="dateBirth" style="width: 50%;"></td>
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
							<td><input type="text" value="+880" name="Mobile" style="width: 50%;"></td>
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
					</tr><tr>
						<td> 
						</td>
					</tr>
					<tr>
						<td> 
						</td>
					</tr>
					
					<tr style="text-align:center;">
							
						<td colspan="2">
						
							<input type="submit" name="submit" style="width: 20%; min-width:100px;" value="Continue"> 
							
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