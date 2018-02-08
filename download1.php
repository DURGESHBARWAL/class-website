<?php

			$id=$_GET['id'];
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
 
		
		//echo $id;
		$sq = "SELECT * FROM notice WHERE id='$id'";
							$result = $conn->query($sq);
							if($result->num_rows >0){
								//	echo "<b><center> The List is as Follow </b>".$gen."<br><hr>";
									while($ro= $result->fetch_assoc()) {
										$path=$ro['content'];
										header('content-Disposition: attachment; filename='.$path.'');
										header('content-type:appliction/octent-strem');
										header('content-length='.filesize($path));
									
									readfile($path);
										
										
									}
							}else{
								echo "no data";
							}
								$conn->close();	
		?>
		
		<!DOCTYPE html>
		<html>
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
			</head>
		<body>
		</body>
		</html>
	
