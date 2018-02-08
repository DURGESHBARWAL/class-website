<?php
include('newpage2session.php');
?>


<!DOCTYPE html>
<html>
<body bgcolor="wheat">
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
						
							$sql = "SELECT * FROM student1 WHERE  gender='$gen' ORDER BY 'rollno'";
							$result = $conn->query($sql);
							
							
							
		
							
							
							
							
							if ($result->num_rows > 0) {
									// output data of each row
									if($gen=='Male'){
									echo "<b><center> Boys STUDENT LIST </b><br><hr>";}
									else{echo "<b><center> Girls STUDENT LIST </b><br><hr>";}
										while($row = $result->fetch_assoc()) {
											//echo "<br>";
											echo "<b>".$row["rollno"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
											echo "<b>".$row["firstname"]." ".$row["midname"]." ".$row["lastname"]."</b>";

											//echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["hostel"] ;
											echo "&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;".$row["degree"]."<br>";
											  
											
												
										}
							}
							else{
								 			if($gen=='Male'){
									echo "<b><center> None of the Boys fill their Profile  </b><br>";}
									else{echo "<b><center> None of the Girls fill their Profile </b><br>";}
								//echo "<b>None of the student</b>";
						}
							
								
							
							
						$conn->close();	
?> 

</body>
</html>