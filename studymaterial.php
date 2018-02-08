<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>study Material</title>
	<link rel="stylesheet" href="assets/css/studymaterial.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
	<!-- GOOGLE FONT -->
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body>

		<?php
			
			$gen=$generr="";
			 
			 if($_SERVER["REQUEST_METHOD"]=="POST"){
						if(empty($_POST["gen"])){
				  $generr="Select Any one Option";
				}else{
					$gen=test_input($_POST["gen"]);
				}
					
					if($generr=="")
					{
						session_start(); // Starting Session
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

					
													  //new page login with cookies
													  $_SESSION['login_user']=$gen; // Initializing Session
														header("location: material.php"); // Redirecting To Other Page
													  //echo "right";
												 
												
										
						$conn->close();	
					}
					}
				
							
				
			 
		function test_input($data){
				$data=trim($data);
				$data=stripslashes($data);
				$data=htmlspecialchars($data);
				return $data;
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
			<br><br>
			<h2 align="center" >Select the Subject</h2><br><br>
			
		<div class="row">
	  <div class="col-md-12">
		  <form name="studymaterial"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<fieldset align="center">
					<legend>Theory:</legend><br>
					<input type="radio" name="gen"  value="DAA">DAA</input>
					<input type="radio" name="gen"  value="DBMS">DBMS</input>
					<input type="radio" name="gen"  value="COA">COA</input>
					<input type="radio" name="gen"  value="MATHS">MATHS</input>
					<input type="radio" name="gen"  value="ECO">ECO</input>
					<input type="radio" name="gen"  value="PDC">PDC</input>
					<input type="radio" name="gen"  value="Any Other">Any Other</input>

				</fieldset>
				
				
				<br><br>
				  
               </td>
				
				<fieldset align="center">
					<legend>Lab:</legend><br>
						
					<input type="radio" name="gen"  value="DBMS LAB">DBMS LAB</input>
					<input type="radio" name="gen"  value="DAA LAB">DAA LAB</input>
					<input type="radio" name="gen"  value="BC LAB">BC LAB</input>
					<br><br>
					<input  type="submit" name="submit"value="SUBMIT"><br></input><span class="error"><?php echo $generr;?></span>
				</fieldset>
								
			</form>
			
		</div>
</div>
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
