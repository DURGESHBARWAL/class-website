<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Log In</title>
	
	<link rel="stylesheet" href="assets/css/admin.css">
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
			$loginid=$subm="";
			$loginiderr=$submerr="";
			$logerr="";
		
		if($_SERVER["REQUEST_METHOD"]=="POST"){
						if(empty($_POST["loginid"])){
								$loginiderr="Required";
							$logerr="Username or Password is invalid";
						}
						else{
								 $loginid=$_POST["loginid"];
							}
						if(empty($_POST["subm"])){
								$submerr="Required";$logerr="Username or Password is invalid";
						}
						else{
								 $subm=$_POST["subm"];
							}
					if($loginiderr=="" && $submerr=="")
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

						$sql = "SELECT * FROM superadmin WHERE rollno='$loginid' and id='$subm'";
						
						
						
						$results = $conn->query($sql);
												 if($results->num_rows>0)
												  {
													  //new page login with cookies
													  $_SESSION['login_user']=$loginid; // Initializing Session
														header("location: superadminlogin.php"); // Redirecting To Other Page
													  echo "right";
												  }
												  else
												  {
													  $logerr="Username or Password is invalid";
												  }
												
										
									$conn->close();	
					}		
		}
		?>



	<!-- Navigation -->
     <header>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="htttp://www.binarytheme.com"><img src="assets/img/CS10.png"  alt="Logo">CS10</a>
            </div>
            <!-- Collect the nav links for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://localhost/bs-green-fire/index.php">HOME</a>
                    </li>
                    <li><a href="http://localhost/bs-green-fire/studymaterial.php">STUDY MATERIALS</a>
                    </li>

                    <li><a href="http://localhost/bs-green-fire/datauploadlogin.php">UPLOAD CONTENT</a>
                    </li>

                    <li><a href="faculty.html">FACULTY</a>
                    </li>

                    <li><a href="student list.html">STUDENTS</a>
                    </li>

                    <li><a href="table.html">TIME TABLE</a>
                    </li>

                    <li><a href="http://localhost/bs-green-fire/blog.php">BLOGS</a>
                    </li>
                    
                    <li><a href="http://localhost/bs-green-fire/superadmin.php">ADMIN</a>
                    </li>

                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
          </header>
    <!--End Navigation -->

	<div class="container">
		<div class="row">
		  <form name="logincontent"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="col-md-12" align="center" id="login">
				<label>Log In</label>
				<input type="text" name="loginid" size="7" value=""></input>
				
			</div>
		
		
			<div class="col-md-12" align="center" id="pass">
				<label>password</label>
				<input type="password" name="subm" size="10" value=""></input>
				
			</div>
		</div>
		<div class="row" align="center" id="submit">
			<input type="submit" name="submit" value="Log In"><br>
			<span class="error"><?php echo $logerr;?></span>
		</div>
		</form>
	</div>
	<div class="footer">
   		<label>This site is not for profit.</label>
   		<p>
   			You can send your queries to Mr Rajat Behra <br>
   			email: rajatkumar.beherafcs@kiit.ac.in<br>
   			contact: 9886072882<br>
   		</p>
   </div>
</body>
</html>
