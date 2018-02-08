
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


						session_start();// Starting Session
					// Storing Session
						$user_check=$_SESSION['login_user'];
					// SQL Query To Fetch Complete Information Of User
						$ses_sql = "SELECT username,loginid FROM login WHERE loginid='$user_check'";
						$race = $conn->query($ses_sql);
						//$login_session="";
						if($race->num_rows > 0){
								while($row = $race->fetch_assoc()){
									$login_session = $row['username'];
									$login_name = $row['loginid'];
								}
						
						}
						
						if(empty($login_session)){
							$conn->close();// Closing Connection
							header('Location: logoutview.php'); // Redirecting To Home Page
						}
						
?>