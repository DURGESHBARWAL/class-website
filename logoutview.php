<?php
	session_start();
	if(session_destroy()) // Destroying All Sessions
	{
		header("Location: viewprofile.php"); // Redirecting To Home Page
	}
?>