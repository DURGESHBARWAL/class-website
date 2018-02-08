
<?php
include('materialsession.php');
?>




<!doctype html>
<html>

<head>
  <title>upload</title>
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

<body bgcolor="wheat">

    
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
                    <li><a href="index.html">HOME</a>
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
     
     <br><br>
	 
	 <?php
		echo"<h1 align='center'>".$user_check."</h1>";
		
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
						
							$sql = "SELECT * FROM files WHERE subject='$user_check'";
							$id="";
							$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									// output data of each row

											echo "<b><center> The List is as Follow </b><br><hr>";
												while($row = $result->fetch_assoc()) {
													//echo "<br>";
													echo "<b>".$row["name"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
														
													$id=$row["id"];
													echo "<a href='download.php?id=$id'>"."Download"."</a><br>";
													
											  
											
												
										}
							}
							else{
								 echo "<b><center> Container is Empty (Study From Your Books)</b> ";
						}
							
							
	 
	 
	 ?>

   
</body>


</html>