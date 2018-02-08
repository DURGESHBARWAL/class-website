
<?php
include('datauploadsession.php');
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

	
<?php

//$roll=$rollerr="";
$subject=$subjecterr="";
$topic=$topicerr="";
$f="";$result="";

				
			if($_SERVER["REQUEST_METHOD"]=="POST"){
						if(empty($_POST["subject"]) || ($_POST["subject"]=="None"))
								$subjecterr="Select Subject";
						else{
							
								$subject=$_POST["subject"];
							}
						if(empty($_POST["topic"])){
							$topicerr="Enter the Name of Upload File";
						}
						else{
							$topic=$_POST["topic"];
						}
					if($subjecterr=="" && $topicerr=="")
						if($_FILES["f"]["size"]>0)
						   {
								
							$fname=($_FILES["f"]["name"]);
							$filesize=$_FILES["f"]["size"];
							$filetype=$_FILES["f"]["type"];
							$dt="s/".$fname;
						move_uploaded_file($_FILES['f']['tmp_name'], "s/".$fname);
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
							
							
							$qsql= "INSERT INTO files (rollno, subject, name, type,size,content )
								VALUES ('$login_name', '$subject','$topic','$filetype','$filesize','$dt')";
								if ($conn->query($qsql) === TRUE) {
									$result="New record created successfully";
								} else {
									echo "Error: " . $sql . "<br>" . $conn->error;
								}
							$conn->close();	
							
						   
				}
							
		}
?>
    
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
     
     <br><br>
     <h2 align="center">Welcome to the World Of Data Sharing</h2>
     <br><br>
     <center>
 <form  method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     <fieldset>
          <br><br>
        
         
               <br><span class="error"><?php echo $subjecterr;?></span>
                 <table width="60%" align="center" cellpadding="1" cellspacing="1"> 
            <tr> <td style="width:10;" align="left">Subject :
            
        
             
			 
                   <select name="subject">
                   <option selected="selected">None</option>
                  <option value="DAA">DAA</option>
                  <option value="DBMS">DBMS</option>
                  <option value="ECO">ECO</option>
                  <option value="COA">COA</option>
                  <option value="MATHS">MATHS</option>
                  <option value="PDC">PDC</option>
                  <option value="DBMS LAB">DBMS LAB</option>
                  <option value="BC LAB">BC LAB</option>
                  <option value="DAA LAB">DAA LAB</option>
                  <option value="Any Other">Any Other</option>
                </select>
				    
               </td>
               </tr>
               </table>
               <br>
                 <table width="60%" align="center" cellpadding="1" cellspacing="1"> 
               <tr> 
               <td colspan="2" style="width:10;">Topic/Description :
              <input type="text"name="topic"size="20" maxlength="25"/><span class="error"><?php echo $topicerr;?></span></td>
            
            
            </tr></table><br><br>
			<input name="MAX_FILE_SIZE" value="2000000" type="hidden">
           <table width="60%" align="center" cellpadding="1" cellspacing="1"> 
            <tr>
            <td style="width:10;" align="left">Select File to Upload:</td>
              <td style="width:20%;"><input type="file" name="f"></td>
            </tr></table><br>

            <table width="60%" align="center" cellpadding="1" cellspacing="1">
            <tr> 
                <td colspan="2"style="width:10;" align="center"><br>
                  <input type="submit" name="submit"value="SUBMIT"></input>
                  <input type="reset" name="reset" value="RESET"></input>
                  </td>
              </tr>
          </table> 
		  <span class="error"><?php echo $result;?></span>
     </fieldset>
   </form>  
   </center>
</body>


</html>
