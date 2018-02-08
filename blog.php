<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Blogs</title>
	
	<link rel="stylesheet" href="assets/css/admin.css">
	<link rel="stylesheet" href="slider.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- GOOGLE FONT -->
	
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />

</head>

<body>
		


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
			<div class="col-md-1" align="center" id="login">
				Blogs
				
			</div>
			<div class="col-md-10" align="center" id="login">
				
				
			</div>
			<div class="col-md-1" align="center" id="login">
				
				
			</div>
		
		
		</div>
		
	
	<?php
								
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

						$sql = "SELECT * FROM bloginsertion ORDER BY id DESC";						
						$results = $conn->query($sql);
												 if($results->num_rows>0)
												  { $y=0;
													 while($ro = $results->fetch_assoc())
														{
															echo "<div class='row'>";
																echo "<div class='col-md-1' align='center' id='login'>";
				
				
																echo"</div>";
																
																
																
																echo "<div class='col-md-10' align='left' id='login'>";
																echo "<b><h3>".$ro["title"]."</h3></b><br>";
																echo "<b>Contributed By: </b>".$ro["contribution"];
																$x="demo".$y;
																echo  "<br><button type='button' class='btn btn-info' data-toggle='collapse' data-target='#$x'>Expand</button>";
																echo "<div id='$x' class='collapse'>";
																echo "<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$ro["body"]."</p><br>";
																echo "<hr>";
																echo"</div>";
																echo"</div>";
																
																
																
															echo "<div class='col-md-1' align='center' id='login'>";
				
				
																echo"</div>";
		
		
															echo"</div>";
															
															$y=$y+1;
														}
												  }
												  else
												  {
													  $logerr="No Blog Available";
												  }
												
										
									$conn->close();	
							
		
		?>

	
	</div>
	
	
</body>
</html>
