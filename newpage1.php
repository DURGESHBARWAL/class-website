<?php
include('newpage1session.php');
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
						
							$sql = "SELECT * FROM student1 WHERE  cgpa BETWEEN  '$starttime'  AND '$endtime' ORDER BY 'rollno'";
							$result = $conn->query($sql);
							
							
							
		
							
							
							
							
							if ($result->num_rows > 0) {
									// output data of each row
									echo "<b><center>The STUDENT LIST whose CGPA between </b><br>".$starttime." and ".$endtime."<br><hr>";
										while($row = $result->fetch_assoc()) {
											//echo "<br>";
											echo "<b>".$row["rollno"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
											echo "<b>".$row["firstname"]." ".$row["midname"]." ".$row["lastname"]."</b>";

											//echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["hostel"] ;
											echo "&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;".$row["degree"]."<br>";
											  
											
												
										}
							}
							else{
								echo "<b>None of the student have CGPA in this range</b>".$starttime." and ".$endtime;
						}
							
								
							
							
						$conn->close();	
?> 

</body>
</html>