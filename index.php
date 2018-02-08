<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>CS10</title>
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <!-- custom css-->
    <link rel="stylesheet" type="text/css" href="slider.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body id="body">
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
                    
                    <li><a href="http://localhost/bs-green-fire/superadmin.php"target="new">ADMIN</a>
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
   	<div class="row" id="sliderrow">
   		<div class="col-md-8 col-md-offser-2">
   			<div id="mycarousel" class="carousel slider" data-interval="2000" data-ride="carousel">
   				<div class="carousel-inner">
   					<div class="item active">
   						<img src="assets/img/b21.jpg" class="img-responsive"/>
   						<div class="carousel-caption">
   							<h1>CS10</h1>
   						</div>
   					</div>
   					<div class="item">
   						<img src="assets/img/b21.jpg" class="img-responsive"/>
   						<div class="carousel-caption">
   							<h1>CS10</h1>
   						</div>
   					</div>
   					<div class="item">
   						<img src="assets/img/b21.jpg" class="img-responsive"/>
   						<div class="carousel-caption">
   							<h1>CS10</h1>
   						</div>
   					</div>
   					
   				</div>
   			</div>
   		</div>
   		<div class="col-md-4" id="notice" >
			
 <label><center><b>Notice / Announcement</b></center></label>
	<?php
		//echo"<h1 align='center'>".$user_check."</h1>";
		
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
						
							$sql = "SELECT * FROM notice WHERE 1 ORDER BY 'id' DESC";
							//$id="";
							$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									// output data of each row

											//echo "<b> The List is as Follow </b><br><hr>";
												while($row = $result->fetch_assoc()) {
													//echo "<br>";
													
														
													$id=$row["id"];
													echo "<br><a href='download1.php?id=$id'>".$row["name"]."(".$row["date"].")"."</a>";
													
													
											  
											
												
										}
							}
							else{
								 echo "<b><center> No Notice..</b> ";
						}
							
							
	 
	 
	 ?>
	
   		</div>
   	</div>
   	<hr>
  <div class="row">
  
	  <center><label>Welcome to CS10</label></center>
  </div>
  <div class="row" id="discp">
  	<p>
  		Admitted in the year 2015,formerly B21 and some branch change students merged to form new section cs10 in<b> KIIT SCHOOL OF COMPUTER SCIENCE.</b>
  	</p>
  </div>
	
   </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
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