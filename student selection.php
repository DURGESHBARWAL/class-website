<!doctype html>
<html>
<head>
    <style>
       
	   .error{color: #FF0000;}
    
    </style>    
    
<meta charset="utf-8">
<title>select students</title>
<link rel="stylesheet" href="custom-css.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body bgcolor="wheat">
		<?php
				//defining variables
				$radio1=$radio1err="";
				$gender="";
				$gendererr="";
				//$ch="";$cherr="";
				$start=$starterr="";
				$end=$enderr="";
				$aa=$aaerr="";
				$ab=$aberr="";
				
					
			if($_SERVER["REQUEST_METHOD"]=="POST"){
						if(empty($_POST["radio1"]))
								$radio1err="Select Option";
						else{
							
								$radio1=$_POST["radio1"];
							}
							
							if($radio1err==""){
									if($radio1=="first"){
	
										header("location: newpage.php"); // Redirecting To Other Page		
						
									}	
									
									else if($radio1=='second')
									{
										if(empty($_POST["start"]) && empty($_POST["end"])){ $starterr="Enter the ranges of CGPA";}
										else if(($_POST["start"]>='0') && ($_POST["start"]<'10') && ($_POST["end"]>'0') && ($_POST["end"]<='10') && ($_POST["end"]>$_POST["start"])){
												session_start();
												$_SESSION["myvalue1"]=$_POST["start"];
												$_SESSION["myvalue2"]=$_POST["end"];// You can set the value however you like.
												header("location: newpage1.php");
										}
										else{ $starterr="Enter correct range of CGPA";}
										
										
									}else if($radio1=='fourth'){
										if(empty($_POST["gender"])){$gendererr="Select The Gender";}
										 else{
											 session_start();
												$_SESSION["gender"]=$_POST["gender"];
											header("location: newpage2.php");
										 }
									}
									else if($radio1=='fifth'){
										if(empty($_POST["aa"]) || $_POST["aa"]=="No Selection"){
											$aaerr="Select the Programming Languages";
										}
										else{
											 session_start();
												$_SESSION["language"]=$_POST["aa"];
											header("location: newpage3.php");
										}
									}
									else{
										if(empty($_POST["ab"]) || $_POST["ab"]=="No Selection"){
											$aberr="Select the Interested Fields";
										}
										else{
											 session_start();
												$_SESSION["field"]=$_POST["ab"];
											header("location: newpage4.php");
										}
									}
									
							}
							}
						
		
			
		
		
		?>



		
	<div class="container">
	<hr>
	 <form name="selection"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="row">
		
			<span class="error"><?php echo $radio1err;?><br></span>
			<input type="radio" name="radio1"  <?php if (isset($radio1) && $gender=="first") echo "checked";?> value="first">
			<label><h4>All Students</h4></label></input>			
		</div>
	<hr>	
		<div class="row">
			
			<label><h4><b>Select on the basis on</b></h4></label>	
		</div>
		
		<div class="row">
			<div class="col-md-2">
					<span class="error"><?php echo $starterr;?><br></span>
					<span class="error"><?php echo $gendererr;?><br></span>
						<span class="error"><?php echo $aaerr;?><br></span>
					<span class="error"><?php echo $aberr;?><br></span>
				<input type="radio" name="radio1" <?php if (isset($radio1) && $gender=="second") echo "checked";?> value="second">
				<label>CGPA</label>
			</div>
			<div class="col-md-2">
				<label>From  </label>
				
				<input type="number" step="any" name="start" size="5"value=""></input>
			</div>
			<div class="col-md-2">
				<label>To  </label>
					<input type="number" step="any" name="end" size="5" value=""></input>
				</input>
			</div>						
		</div>
		<hr>
			
		<div class="row">
			<div class="col-md-2">
				<input type="radio" name="radio1" <?php if (isset($radio1) && $gender=="fourth") echo "checked";?> value="fourth">
				<label>Gender</label>			
			</div>
			<div class="col-lg-2" align="center">
			
			 <input type="radio" name="gender"  <?php if (isset($gender) && $gender=="Male") echo "checked";?>value="Male"><label>Male</label></input>

			
			</div>
			<div class="col-lg-2" align="center">
			<input type="radio" name="gender"  <?php if (isset($gender) && $gender=="Female") echo "checked";?>value="Female"><label>Female</label></input>
               
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-4">
				<input type="radio" name="radio1" <?php if (isset($radio1) && $gender=="fifth") echo "checked";?> value="fifth">
				<label>Programing Languages</label>
			</div >	
			<div class="col-md-8">
			
				
			
				<select name="aa">
					<option selected="selected">No Selection</option>
					<option value="C">C</option>
					<option value="C++">C++</option>
					<option value="Java">Java</option>
					<option value="Python">Python</option>
					<option value="JavaScript">JavaScript</option>
					<option value="C#">C#</option>
				</select></input>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-4">
				<input type="radio" name="radio1" <?php if (isset($radio1) && $gender=="sixth") echo "checked";?> value="sixth">
				<label>Interested fields</label>
			</div>
			<div class="col-md-8">
	
			
			
				<select name="ab">
					<option selected="selected">No Selection</option>
					<option value="Database">Database</option>
					<option value="Parallel Programming">Parallel Programming</option>
					<option value="Cloud Computing">Cloud Computing</option>
					<option value="Web Development">Web Development</option>
					<option value="Software Development">Software Development</option>
					<option value="Game Development">Game Development</option>
					<option value="App Development">App Development</option>
					<option value="Algorithm">Algorithm</option>
					<option value="Computer Security">Computer Security</option>
					<option value="Networking">Networking</option>
					<option value="Data Analysis">Data Analysis</option>
					<option value="OS Design & Development">OS Design & Development</option>
					<option value="Dev-ops">Dev-ops</option>
					<option value="Langauges/Compiler Design">Langauges/Compiler Design</option>
				</select>
			</div></input>
		</div>
		<hr>
		<div class="row" align="center">
			<div class="col-md-12">
				<input type="submit" name="submit" value="submit"></input>
			</div>			
		</div>
	</div>
</body>
</html>
