



<!doctype html>
<html>

<head>
  <title>Notice Upload</title>
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

$topic=$topicerr="";
$f="";$result="";

				
			if($_SERVER["REQUEST_METHOD"]=="POST"){
						
						if(empty($_POST["topic"])){
							$topicerr="Enter the Notice Title";
						}
						else{
							$topic=$_POST["topic"];
						}
					if($topicerr=="")
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
							
							
							$qsql= "INSERT INTO notice (date , name, type,size,content )
								VALUES (SYSDATE(),'$topic','$filetype','$filesize','$dt')";
								if ($conn->query($qsql) === TRUE) {
									$result="New record created successfully";
								} else {
									echo "Error: " . $sql . "<br>" . $conn->error;
								}
							$conn->close();	
							
						   
				}
							
		}
?>
     
     <br><br>
     <h2 align="center">Welcome to the Notice & Annoucement Window</h2>
     <br><br>
     <center>
 <form  method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     <fieldset>
          <br><br>
        
         
               <br>
                 <table width="60%" align="center" cellpadding="1" cellspacing="1"> 
               <tr> 
               <td colspan="2" style="width:10;">Notice Title :
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
