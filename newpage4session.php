
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
						$gen=$_SESSION["field"];
					
					
						
						
						
						
						
?>