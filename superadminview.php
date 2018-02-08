<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Log In</title>
	
	<link rel="stylesheet" href="assets/css/admin.css">
	<link rel="stylesheet" href="slider.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
	<style>
 
	   .error{color: #FF0000;}
    
    </style>   
</head>

<body>
		<?php
					session_start(); // Starting Session

			//variable declaration
			$loginid="";
			$loginiderr="";
			$logerr="";
		
		if($_SERVER["REQUEST_METHOD"]=="POST"){
						if(empty($_POST["loginid"])){
								$loginiderr="Required";
							$logerr="Enter the Roll Number";
						}
						else{
								 $loginid=$_POST["loginid"];
							}
						
					if($loginiderr=="")
					{	 
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "cs10";
							
							
							
						// Create connection
						$conn = new mysqli($servername, $username, $password, $dbname);
						// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						} 

						$sql = "SELECT * FROM login WHERE loginid='$loginid'";
						
						$results = $conn->query($sql);
						 if($results->num_rows > 0){
													  
													  $_SESSION['login_user']=$loginid; // Initializing Session
														header("location: superadminview1.php"); // Redirecting To Other Page
													  
												  }
												  else
												  {
													  $logerr="Roll Number is invalid";
												  }
												
										
									$conn->close();										
									
												
										
							
					}		
		}
		?>





	<div class="container">
		<div class="row">
		  <form name="logincontent"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="col-md-12" align="center" id="login">
				<label>Roll Number</label>
				<input type="text" name="loginid" size="7" value=""></input>
				
			</div>
		</div>
		<div class="row" align="center" id="submit">
			<input type="submit" name="submit" value="Log In"><br>
			<span class="error"><?php echo $logerr;?></span>
		</div>
		</form>
	</div>
</body>
</html>
