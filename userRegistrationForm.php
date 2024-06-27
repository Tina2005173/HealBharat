
<html>
<head>
	<style>
		td,th,tr{border: 1px solid black;}
		body{
			  font-size: 20px;
			  align-items: center;
			  position:center;
			  margin-top: 10px;
			  background-size:100% 120%;
			  background-color: #1565C0;
      }
      input[type=text],input[type=password] {
      	width:100%;
      	box-sizing:border-box;
      	height: 12%;
      	margin-right: 150px;
      	font-size: 15px;	
      }
       
      input[type=submit] {
       width:100%;
       box-sizing:border-box;
       height: 12%;
	   background-color: #1565C0;
	   color: white;

      }
      div{
      	margin:5px 50px 20px 590px;
      	margin-top: 100px;
      	padding-top: 50px;
      	padding-right: 30px;
      	padding-left: 30px;
      	padding-bottom: 30px;
      	width:20%;
      	height:50%;
      	position: center;
      	background-color: #ADE8F4;
      	border: 1.5px solid #C7BEBE;
		border-bottom-width: 2.5px;
	    border-radius: 6px;
      }
	</style>
	</head>
<body>

	<form method="POST">
			
			<div class = "container">
				<center><u><b style="color:#0047A1;">Registration Form</b><br><br></u></center>
			<label for = "username"><b> Enter Username</b></label><br>
			<input type ="text" name ="username" placeholder="Enter username "/><br><br>

			<label for = "email"><b> Enter Email</b></label><br>
			<input type ="text" name ="email" placeholder="Enter email "/><br><br>

			<label for = "password"> <b>Enter assword</b></label><br>
			<input type ="password" name ="password" placeholder="Enter password "/><br><br>

			<input type ="submit" name ="s1" value="SUBMIT"/>
		</div>
		
	</form>
	</body>
	
</html>


<?php
if(isset($_POST['s1']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	if(!empty($username) && (!empty($email)) && (!empty($password)))
	{
	
		if(filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$conn = mysqli_connect("localhost","root","","healBharat");
			if(!$conn)
			{
				echo"unsuccessful";
			}
			$q1="INSERT INTO users (`username`, `email`, `password`) VALUES ('$username','$email','$password')";
			mysqli_query($conn,$q1);

			echo"<script>alert('Data saved successfully')</script>";
		}
		else 
		{
			echo"
				<script>
					alert('Invalid Email ');
				</script>
			";
		}
	}
	else
	{
		echo "
			<script>
				alert('Fill all the Details');
			</script>
		";
	}
}
	
?>
