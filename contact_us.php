<!DOCTYPE html>

<html>
	
	<?php
		include("Home.php");
		include("connection.php");
	?>
	
	<?php
	
		if(! mysqli_select_db($conn,'abid'))
			echo 'Database not selected';
		
		if(isset($_REQUEST['submit3']))
			{
				$email_fd=trim($_REQUEST['email_fd']);
				$subject_fd=trim($_REQUEST['subject_fd']);
				$massege_fd=trim($_REQUEST['massege_fd']);
				 
				/* $sql2="select * from tutor where Email='email'";
				$res=mysqli_query($conn,$sql2);
				$fl=mysqli_num_rows($res);
				echo $fl;
				if($fl==0) */
				
				$sql2="insert into feedback (Email,Subject,Message) values ('$email_fd','$subject_fd','$massege_fd')";
				
				mysqli_query($conn,$sql2);
				
				/* echo mysqli_query($conn,$sql2);
				
				if(! mysqli_query($conn,$sql2))
					echo 'Not Inserted';
				else
					echo 'Inserted';
				
				header("refresh:100; url=contact_us.php");
				
				
				echo '<font color="green">Inserted Successfully</font>'; */
				
			}
	?>
	
	
	<body>
	
		
			<div style="background-color: white; float: left; width: 50%; min-height: 601.9px;">
			
				<p> <h2> Feedback  </h3> <p>
				<p>
					Your feedback matters.
					Write to us if you have any questions, queries<br> 
					or suggestions regarding any page/content published Private<br> 
					Tutor Finder System.
				</p>
				
				<form action="contact_us.php" method="post" enctype="multipart/form-data" style="background-color: white;  padding: 20px; margin-bottom: 5%; margin-left: 5%; margin-right: 5%;">
					
					<fieldset style="background-color: white;">
						
						<legend> Feedback </legend>
						
						<br/><b> Email :</b>
							<input type="email" name="email_fd" style="padding: 5px; top: 2px; width: 49%; margin-top: 5%; margin-left: 2%;">
						
						<br/><b> Subject :</b>
							<input type="text" name="subject_fd" style="padding: 5px; top: 2px; width: 49%; margin-top: 5%; margin-right: 5%;">
						
						
						<p> Massege </p>
						
						<textarea name="massege_fd" rows="7" cols="40">
						
						</textarea>
						
						<p> <input type="submit" name="submit3" style="padding: 5px; top: 2px; width: 20%; bgcolor: green; " value="Submit"> </p>
					
					</fieldset>
				
				</form>
			
			</div>
			
			<div style="background-color: white; float: right; width: 50%; min-height: 601.9px;">
				
				<h2 align="center"> <u> Contact Details </u></h2>
				
				<p style="margin-top: 10%;">
					
					<h3  align="center">
						
						<p> North East University Bangladesh </p>
						<p> Telihaor,Shekghat </p>
						<p> Sylhet-3100,Bangladesh. </p>
						<p> Email :<a href="https://mail.google.com/mail/ca/u/0/#inbox?compose=new" target="blank"> thaherkhan70@gmail.command</a></p>
						<p> Mobile: +8801727437444 </p>
					
					</h3>
				
				</p>
			
			</div>
			
			
			<div class="foter">
				
				<p> Developed By <font color="red"> &copy Abid Khan </font> </p>
			
			</div>
		
		</body>
	
</html>

