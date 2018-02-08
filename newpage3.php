<?php
include('newpage3session.php');
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
						
							$sql = "SELECT * FROM student1 WHERE rollno IN(SELECT rollno FROM example1 WHERE  skill='$gen' ORDER BY 'rollno')";
							$result = $conn->query($sql);
							
							
							
		
							
							
							
							
							if ($result->num_rows > 0) {
									// output data of each row

									echo "<b><center> The STUDENT LIST Who have Knowledge of  </b>".$gen."<br><hr>";
										while($row = $result->fetch_assoc()) {
											//echo "<br>";
											echo "<b>".$row["rollno"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
											echo "<b>".$row["firstname"]." ".$row["midname"]." ".$row["lastname"]."</b>";

											
											  
											
												
										}
							}
							else{
								 echo "<b><center> None of the student have Knowledge of  </b><br><hr>".$gen;
						}
							
								
							
							
						$conn->close();	
?> 

</body>
</html>