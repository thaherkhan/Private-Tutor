<!DOCTYPE HTML>

<html>
	
	<?php
		include("Home.php");
		include("connection.php");
	?>
	
	
	
	<body>
	
		<div id="slide1">
		  
			<img src="pic1.jpg">
		
		</div>
		
		<div id="slide2">
		  
			<img src="pic2.jpg">
		
		</div>
		
		<div id="slide3">
		  
			<img src="pic3.jpg">
		
		</div>
		
		<div id="slide4">
		  
			<img src="pic4.jpg">
		
		</div>
		
		<div id="slide5">
		  
			<img src="pic5.jpg">
		
		</div>
		
		<div id="slide6">
		  
			<img src="pic6.jpg">
		
		</div>
		
		
		<script>
		
			var i=0;
			function x()
			{
				if(i==0)
				{
					document.getElementById('slide1').style.display='block';
					document.getElementById('slide2').style.display='none';
					document.getElementById('slide3').style.display='none';
					document.getElementById('slide4').style.display='none';
					document.getElementById('slide5').style.display='none';
					document.getElementById('slide6').style.display='none';
					i=1;
				}
				else if(i==1)
				{
					document.getElementById('slide1').style.display='none';
					document.getElementById('slide2').style.display='block';
					document.getElementById('slide3').style.display='none';
					document.getElementById('slide4').style.display='none';
					document.getElementById('slide5').style.display='none';
					document.getElementById('slide6').style.display='none';
					i=2;
				}
				else if(i==2)
				{
					document.getElementById('slide1').style.display='none';
					document.getElementById('slide2').style.display='none';
					document.getElementById('slide3').style.display='block';
					document.getElementById('slide4').style.display='none';
					document.getElementById('slide5').style.display='none';
					document.getElementById('slide6').style.display='none';
					i=3;
				}
				else if(i==3)
				{
					document.getElementById('slide1').style.display='none';
					document.getElementById('slide2').style.display='none';
					document.getElementById('slide3').style.display='none';
					document.getElementById('slide4').style.display='block';
					document.getElementById('slide5').style.display='none';
					document.getElementById('slide6').style.display='none';
					i=4;
				}
				else if(i==4)
				{
					document.getElementById('slide1').style.display='none';
					document.getElementById('slide2').style.display='none';
					document.getElementById('slide3').style.display='none';
					document.getElementById('slide4').style.display='none';
					document.getElementById('slide5').style.display='block';
					document.getElementById('slide6').style.display='none';
					i=5;
				}
				else if(i==5)
				{
					document.getElementById('slide1').style.display='none';
					document.getElementById('slide2').style.display='none';
					document.getElementById('slide3').style.display='none';
					document.getElementById('slide4').style.display='none';
					document.getElementById('slide5').style.display='block';
					document.getElementById('slide6').style.display='none';
					i=6;
				}
				else if(i==6)
				{
					document.getElementById('slide1').style.display='none';
					document.getElementById('slide2').style.display='none';
					document.getElementById('slide3').style.display='none';
					document.getElementById('slide4').style.display='none';
					document.getElementById('slide5').style.display='none';
					document.getElementById('slide6').style.display='block';
					i=0;
				}
				setTimeout(function(){x();},2000);
				
			}
			x();

		</script>
		
		<h1 style="text-align: center;"> Teacher Information </h1>
		
		<?php
			
			$sql = "select * from tutor";
		
			$res = mysqli_query($conn,$sql);
			
			echo '<table border="10">';
				echo '<tr>';
					echo '<td>'.'Serial No'.'</td>';
					echo '<td>'.'Name'.'</td>';
					echo '<td>'.'Email'.'</td>';
					echo '<td>'.'Gender'.'</td>';
					echo '<td>'.'Address'.'</td>';
					echo '<td>'.'City'.'</td>';
					echo '<td>'.'Date of Birth'.'</td>';
					echo '<td>'.'Mobile'.'</td>';
					echo '<td>'.'Level of Education'.'</td>';
					echo '<td>'.'Degree'.'</td>';
					echo '<td>'.'Dept/Class'.'</td>';
					echo '<td>'.'Institute'.'</td>';
					echo '<td>'.'Expected Tuition Area'.'</td>';
					echo '<td>'.'Available Time'.'</td>';
					echo '<td>'.'Expected Class'.'</td>';
					echo '<td>'.'Preferred Subject'.'</td>';
					echo '<td>'.'Expected Salary'.'</td>';
				echo '</tr>';
			
			
				while( $arr=mysqli_fetch_array($res) )
				{
					echo '<tr>';
						echo '<td>'.$arr['SL_No'].'</td>';
						echo '<td>'.$arr['Title'].' '.$arr['First_Name'].' '.$arr['Last_Name'].'</td>';
						echo '<td>'.$arr['Email'].'</td>';
						echo '<td>'.$arr['Gender'].'</td>';
						echo '<td>'.$arr['Address'].'</td>';
						echo '<td>'.$arr['City'].'</td>';
						echo '<td>'.$arr['Date_Birth'].'</td>';
						echo '<td>'.$arr['Mobile'].'</td>';
						echo '<td>'.$arr['Level_Education'].'</td>';
						echo '<td>'.$arr['Degree'].'</td>';
						echo '<td>'.$arr['Dept_Class'].'</td>';
						echo '<td>'.$arr['Institute'].'</td>';
						echo '<td>'.$arr['Exe_Area'].'</td>';
						echo '<td>'.$arr['Ava_Time'].'</td>';
						echo '<td>'.$arr['Exe_Class'].'</td>';
						echo '<td>'.$arr['Pref_Subject'].'</td>';
						echo '<td>'.$arr['Exe_Salary'].'</td>';
					echo '</tr>';
				}
				
			echo '</table>';
		
		?>
		
		<h1 style="text-align: center;"> Student Information </h1>
		
		<?php
			
			$sql = "select * from student";			
			
		
			$res = mysqli_query($conn,$sql);
			
			echo '<table border="10">';
				echo '<tr>';
					echo '<td>'.'Serial No'.'</td>';
					echo '<td>'.'Name'.'</td>';
					echo '<td>'.'Email'.'</td>';
					echo '<td>'.'Gender'.'</td>';
					echo '<td>'.'Address'.'</td>';
					echo '<td>'.'City'.'</td>';
					echo '<td>'.'Date of Birth'.'</td>';
					echo '<td>'.'Mobile'.'</td>';
					echo '<td>'.'Level'.'</td>';
					echo '<td>'.'Dept/Class'.'</td>';
					echo '<td>'.'Institute'.'</td>';
					echo '<td>'.'Tuition Area'.'</td>';
					echo '<td>'.'Time'.'</td>';
					echo '<td>'.'Subject'.'</td>';
					echo '<td>'.'Salary'.'</td>';
				echo '</tr>';
			
			
				while( $arr=mysqli_fetch_array($res) )
				{
					echo '<tr>';
						echo '<td>'.$arr['SL_No'].'</td>';
						echo '<td>'.$arr['Title'].' '.$arr['First_Name'].' '.$arr['Last_Name'].'</td>';
						echo '<td>'.$arr['Email'].'</td>';
						echo '<td>'.$arr['Gender'].'</td>';
						echo '<td>'.$arr['Address'].'</td>';
						echo '<td>'.$arr['City'].'</td>';
						echo '<td>'.$arr['Date_Birth'].'</td>';
						echo '<td>'.$arr['Mobile'].'</td>';
						echo '<td>'.$arr['Level'].'</td>';
						echo '<td>'.$arr['Dept_Class'].'</td>';
						echo '<td>'.$arr['Institute'].'</td>';
						echo '<td>'.$arr['Tuition_Area'].'</td>';
						echo '<td>'.$arr['Time'].'</td>';
						echo '<td>'.$arr['Subject'].'</td>';
						echo '<td>'.$arr['Salary'].'</td>';
					echo '</tr>';
				}
				
			echo '</table>';
		
		?>
		
		
		<div class="foter">
	
			<p> Developed By <font color="red"> &copy Abid Khan </font> </p>
			
		</div>
		
	</body>
	
</html>