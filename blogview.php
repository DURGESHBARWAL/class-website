<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Insert Blog</title>
	
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
			$address=$addresserr="";
			$name=$nameerr="";
			$logerr="";
		
		if($_SERVER["REQUEST_METHOD"]=="POST"){
						if(empty($_POST["loginid"])){
								$loginiderr="Enter the title of your blog";
							//$logerr="Enter the Roll Number";
						}
						else{
								 $loginid=$_POST["loginid"];
							}
						if(empty($_POST["address"])){
								$addresserr="Enter the Body of your blog";
							//$logerr="Enter the Roll Number";
						}
						else{
								 $address=$_POST["address"];
							}
						if(empty($_POST["name"])){
								$nameerr="Enter the Contributor Name";
							//$logerr="Enter the Roll Number";
						}
						else{
								 $name=$_POST["name"];
							}
						
					if($loginiderr=="" && $addresserr=="" && $nameerr=="")
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
						
						
						$sql = "INSERT INTO bloginsertion(date,title,body,contribution) 
						VALUES (SYSDATE(),'$loginid','$address','$name')";
						
						if ($conn->query($sql) === TRUE) {
							$logerr="New Blog Inserted successfully";
						} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
						}
							$conn->close();			
					}		
		}
		?>





	<div class="container">
		<div class="row">
		  <form name="logincontent"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="col-md-12" align="center" id="login">
				<label>Title of Your Blog</label>
				<input type="text" name="loginid" size="20" maxlength="200" value="<?php echo $loginid;?>"></input><span class="error"><?php echo $loginiderr;?></span><br><br>
				
				
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" align="center" id="blog">
				<label>Content of the Blog/Body</label>
				<textarea name="address" row="5"cols="20"value="<?php echo $address;?>"></textarea><span class="error"><?php echo $addresserr;?></span>
				
			</div>
			
		</div>
		<div class="row">
			<div class="col-md-12" align="center" id="blog">
				<label>Contributed By:</label>
				
				<input type="text" name="name" size="10" maxlength="30"value="<?php echo $name;?>"></input><span class="error"><?php echo $nameerr;?></span>
				
				
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
