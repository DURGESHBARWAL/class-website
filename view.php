<?php
include('viewsession.php');
?>


<!DOCTYPE html>
<html>
<body bgcolor="wheat">
	<b id="logout"><a href="logoutview.php">Log Out</a></b>

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

							$sql = "SELECT * FROM student1 WHERE rollno='$login_name'";
							$result = $conn->query($sql);
							
				
							
							$sql1 = "SELECT * FROM example1 WHERE rollno='$login_name'";
							$result1 = $conn->query($sql1);
							
							$sql2 = "SELECT * FROM example2 WHERE rollno='$login_name'";
							$result2 = $conn->query($sql2);
							
							$sql3 = "SELECT * FROM example3 WHERE rollno='$login_name'";
							$result3 = $conn->query($sql3);
							
							
							
							if ($result->num_rows > 0) {
									// output data of each row
										while($row = $result->fetch_assoc()) {
											echo "<br><br><hr>";
											echo "<center><b>".$row["firstname"]." ".$row["midname"]." ".$row["lastname"]."</b></center><br><hr>";
											echo "<p><center><b>Basic Information</b></center></p>";
											echo "<b>Address : </b>".$row["address"]."<br>";
											echo "<b>City : </b>".$row["city"] ."<br>";
											echo "<b>State : </b>".$row["state"] ."<br>";
											echo "<b>Pincode : </b>".$row["pincode"] ."<br>";
											if($row["contact2"]==0)
											{
												echo "<b>Contact No :</b>".$row["contact1"]."<br>";
											}
											else{
											echo "<b>Contact No :</b>".$row["contact1"]." ; ".$row["contact2"]."<br>";
											}
											echo "<b>Email Id :</b>".$row["email"]."<br>";
											echo "<b>Gender :</b>".$row["gender"] ."<br>";
											echo "<b> Languages Known :</b>".$row["lag"]."<br>";
											echo "<b>DOB :</b>".$row["bdate"]."/".$row["bmonth"]."/".$row["byear"]."<br>";
											echo "<b>Hostel :</b>".$row["hostel"] ."<br><hr>";
											
											echo "<b>Father's Name: </b>".$row["fname"] ."    <b>Contact No: </b>".$row["fcontact"]."<br>";
											if($row["mcontact"]=='0'){
												echo "<b> Mother's Name : </b>".$row["mname"]."<br><hr>";
											}
											else{
												echo "<b>Mother's Name: </b>".$row["mname"] ."    <b>Contact No: </b>".$row["mcontact"]."<br><hr>";
											}
											echo "<b><u><center>ACADEMIC INFORMATION </center></u></b>";
											echo "<table border='1'>";
											echo "<tr>";echo "<td><b> Hign School      </b></td><td>". $row["a"]. "</td><td>  ".$row["b"]."</td><td> ".$row["per10"]."</td></center><br><br>";
											
											echo"</tr>";
											echo"<tr>";
											echo "<td><b> Secondary School </b></td><td>". $row["c"]. "</td>  <td> ".$row["d"]." </td><td>  ".$row["per12"]."</td></center><br><br>";
											echo"</tr>";echo"</table><br>";
											if($row["diploma"]!='0')
											  {
												  echo "<b>Any Other Degree/Diploma :</b>".$row["diploma"]."<br><hr>";
											  }
											  else{
												  echo "<hr>";
											  }
											 
											 	
											  echo "<b> Degree Purchsing : </b>".$row["degree"];
											  
											   echo "<table border='1'>";
											  echo"<tr>"; echo "<b> <td> Year    </td><td> Year of Passing  </td> <td>    Odd Semester(SGPA)  </td>    <td>    Even Semester(SGPA) <t/d></b><br>";echo"</tr>";
											echo"<tr>";  echo "<b> <td> 1    </td></b><td>"  .$row["e"]." </td>   <td>    ".$row["sem11"]."     </td>       <td> ".$row["sem12"]."</td><br>";echo"</tr>";
											echo"<tr>";    echo "<b>  <td>2    </td></b><td>"  .$row["f"]." </td>     <td>  ".$row["sem21"]."   </td>         <td> ".$row["sem22"]." </td><br>";echo"</tr>";
											echo"<tr>";	  echo "<b> <td> 3    </td></b><td>"  .$row["g"]." </td>       <td>".$row["sem31"]."   </td>         <td> ".$row["sem32"]." </td><br>";echo"</tr>";
											echo"<tr>";	    echo "<b>  <td>4 </td>   </b><td>"  .$row["h"]." </td>      <td> ".$row["sem41"]." </td>           <td> ".$row["sem42"]." </td><br><br>";echo"</tr>";
													
												echo"</table>";
											  
											  echo "<b>CGPA  : </b>".$row["cgpa"]."<br><hr><br>";
											  
											  echo "<b><u>Hobbies  :</u></b><br>";
											  echo "   <p>  ".$row["hobbies"]."</p><br>";
											  echo "<b><u>Societies/Group/Co-Cirrcular Activities</u></b><br>";
											  echo "     <p> ".$row["society"]."</p><br>";
											   echo "<b><u>Soft Skills  :</u></b><br>";
											  echo "    <p>  ".$row["softskills"]."</p><br><hr><br>";
											  
											   echo "<b><u><center>TECHNICAL SKILLS</center></u></b><br><br>";
											  echo "<b><u>Programming Languages:</u></b><br><p>";
											  if ($result1->num_rows > 0) {
												//output data of each row
													while($row1 = $result1->fetch_assoc()) {
															echo $row1["skill"]." , ";
											  
													}
												}
												if($row["plag"]!=""){
													echo $row["plag"]."<br>";
												}
												else{
													echo "<br>";
												}
												
												//tools and frameworks
												 
											  echo "</p><b><u>Tools and Frameworks:</u></b><br><p>";
											  if ($result2->num_rows > 0) {
												//output data of each row
													while($row2 = $result2->fetch_assoc()) {
															echo $row2["skill"]." , ";
											  
													}
												}
												if($row["flag"]!=""){
													echo $row["flag"]."<br>";
												}
												else{
													echo "<br>";
												}
												
												//Interested Fields
												 
											  echo "</p><b><u>Interested Fields:</u></b><br><p>";
											  if ($result3->num_rows > 0) {
												//output data of each row
													while($row3 = $result3->fetch_assoc()) {
															echo $row3["interest"]." , ";
											  
													}
												}
												if($row["interest"]!=""){
													echo $row["interest"]."<br>";
												}
												else{
													echo "<br>";
												}
												echo "</p><br><hr>";
											  
											  echo "<b><u>Projects & Intership:</u></b><br><p>";
											  echo $row["project"]."</p><br>";
											   echo "<b><u>Seminars & Trainings:</u></b><br><p>";
											  echo $row["seminar"]."</p><br>";
											   echo "<b><u>Achievements & Awards:</u></b><br><p>";
											  echo $row["award"]."</p><br>";
											  if($row["others"]!=""){
														echo "<b><u>Extra Information About me:</u></b><br>";
														echo $row["others"]."<br><hr><br>";
											  }
											  else{
												  echo "<hr><br>";
											  }
											  echo "<b><u>DECLARATION</u></b><p>I hereby solemnly undertake/declare that the information stated above are true and correct to the best of my knowledge and belief.<br>Any information, if found to be incorrect,wrong or misleading,will render to rejection of my application in any activity.";
											  
												
										}
							}
							else{
								echo "<b>You didn't Complete Your Profile.</b>";
						}
							
						$conn->close();



								
?> 

</body>
</html>