<?php
//include('superadminviewsession.php');
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

							$sql = "SELECT * FROM student1 WHERE 1 ORDER BY 'rollno'";
							$result = $conn->query($sql);
			
							$sql1 = "SELECT loginid,username FROM login WHERE login.loginid NOT IN(SELECT rollno FROM student1 WHERE 1)";
							$result1 = $conn->query($sql1);
							
		
							
							
							
							
							if ($result->num_rows > 0) {
									// output data of each row
									echo "<b><center>The Student Who Completed Their Profile</center></b><br><hr><br>";
										while($row = $result->fetch_assoc()) {
											//echo "<br>";
											echo "<b>".$row["rollno"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
											echo "<b>".$row["firstname"]." ".$row["midname"]." ".$row["lastname"]."</b>";

											echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["hostel"] ;
											echo "&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;".$row["degree"]."<br>";
											  
											
												
										}
							}
							else{
								echo "<b>None of the student fill the Data.</b><br><hr>";
						}
							
								
							if ($result1->num_rows > 0) {
									// output data of each row
									echo "<b><center><hr>The Student Who  Not Completed Their Profile</center></b><br><hr><br>";
										while($row1 = $result1->fetch_assoc()) {
											//echo "<br>";
											echo "<b>".$row1["loginid"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
											echo "<b>".$row1["username"]."</b><br>";		
										}
							}
							else{
								echo "<b><br><hr>All the Student Completed their Profile</b><br><hr>";
						}
							
						$conn->close();



								
?> 

</body>
</html>