<?php
include('session.php');
?>

<!DOCTTYPE HTML>
<html>

<head>
    <title>STUDENT PROFILE </title>
    <style>
       *{
        margin-top: 2px;
        margin-bottom: 2px;
        padding-left: 20px;
        padding-right: 20px;
       }
	   .error{color: #FF0000;}
    
    </style>    
    
    
</head>

<body bgcolor="wheat">
		<?php
				//define variable and set to empty values
				$firstname = $midname = $lastname = $address=$city=$email=$state="";
				$pincode=$contact1=$contact2=$gender=$lag=$hostel="";
				
				$fname=$fcontact=$mname=$mcontact=$diploma=$degree=$cgpa="";
				$hobbies=$society=$softskills=$project=$seminar=$award=$other="";
				
				//error handling variables
				$firstnameerr = $lastnameerr = $addresserr=$cityerr=$emailerr=$stateerr="";
				$pincodeerr=$contact1err=$gendererr=$lagerr=$hostelerr="";

				$fnameerr=$fcontacterr=$mnameerr=$degreeerr=$cgpaerr="";
				$hobbieserr=$societyerr=$softskillserr=$projecterr=$seminarerr=$awarderr="";	

				//checkbox variable
					$flag="";$plag="";
				$laerr="";
				$la="";$interest="";
						$intererr="";
						$inter="";
				$toolerr="";
				$tool="";
				
				//declaration variable
				
				$agree=$agreeerr="";
				
				//dob variables
				$bdate=$bmonth=$byear="";
					$bdateerr=$bmontherr=$byearerr="";
					
					//academic info
					
					$a=$b=$c=$d="";
					$aerr=$berr=$cerr=$derr=$per10err=$per12err="";
					$per10=$per12="";
					
					//semseter info handling
					
						$e=$f=$g=$h="";
						$eerr=$ferr=$gerr=$herr=$sem11err=$sem12err=$sem21err=$sem22err=$sem31err=$sem32err=$sem41err=$sem42err="";
						
						$sem11=$sem12=$sem21=$sem22=$sem31=$sem32=$sem41=$sem42="";
				
				
			if($_SERVER["REQUEST_METHOD"]=="POST"){
						if(empty($_POST["firstname"]))
								$firstnameerr="Required";
						else{
								$firstname=test_input($_POST["firstname"]);
								if (!preg_match("/^[a-zA-Z ]*$/",$firstname))
									$firstnameerr = "Only letters and white space allowed"; 
					
							}
						if(empty($_POST["lastname"]))
								$lastnameerr="Required";
						else{
								$lastname=test_input($_POST["lastname"]);
								if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) 
								$lastnameerr = "Only letters and white space allowed"; 
							}
				if(empty($_POST["address"])){
				  $addresserr="Required";
				}else{
					$address=test_input($_POST["address"]);
				}
				
				if(empty($_POST["city"])){
				  $cityerr="Required";
				}else{
					$city=test_input($_POST["city"]);
				}
				
				if(empty($_POST["emailid"])){
				  $emailerr="Required";
				}else{
					$email=test_input($_POST["emailid"]);
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
						$emailerr = "Invalid email format";
					}
				}
				
				if(empty($_POST["state"])){
				  $stateerr="Required";
				}else{
					$state=test_input($_POST["state"]);
				}
				
				if(empty($_POST["contact1"])){
				  $contact1err="Required";
				}else{
					$contact1=test_input($_POST["contact1"]);
				}
				
				if(empty($_POST["gen"])){
				  $gendererr="Required";
				}else{
					$gender=test_input($_POST["gen"]);
				}
				if(empty($_POST["pincode"])){
				  $pincodeerr="Required";
				}else{
					$pincode=test_input($_POST["pincode"]);
				}
				
				if(empty($_POST["lag"])){
				  $lagerr="Required";
				}else{
					$lag=test_input($_POST["lag"]);
				}
				
				if(empty($_POST["hostel"])){
				  $hostelerr="Required";
				}else{
					$hostel=test_input($_POST["hostel"]);
				}
				
				if(empty($_POST["fname"])){
				  $fnameerrerr="Required";
				}else{
					$fname=test_input($_POST["fname"]);
				}
				if(empty($_POST["fcontact"])){
				  $fcontacterr="Required";
				}else{
					$fcontact=test_input($_POST["fcontact"]);
				}
				if(empty($_POST["mname"])){
				  $mnameerrerr="Required";
				}else{
					$mname=test_input($_POST["mname"]);
				}
				if(empty($_POST["degree"])){
				  $degreeerr="Required";
				}else{
					$degree=test_input($_POST["degree"]);
				}
				if(empty($_POST["cgpa"])){
				  $cgpaerr="Required";
				}else{
					$cgpa=test_input($_POST["cgpa"]);
				}
				if(empty($_POST["hobbies"])){
				  $hobbieserr="Required";
				}else{
					$hobbies=test_input($_POST["hobbies"]);
				}
				if(empty($_POST["society"])){
				  $societyerr="Required";
				}else{
					$society=test_input($_POST["society"]);
				}
				if(empty($_POST["softskills"])){
				  $softskillserr="Required";
				}else{
					$softskills=test_input($_POST["softskills"]);
				}
				if(empty($_POST["project"])){
				  $projecterr="Required";
				}else{
					$project=test_input($_POST["project"]);
				}
				if(empty($_POST["seminar"])){
				  $seminarerr="Required";
				}else{
					$seminar=test_input($_POST["seminar"]);
				}
				if(empty($_POST["award"])){
				  $awarderr="Required";
				}else{
					$award=test_input($_POST["award"]);
				}		
				//checkbox handling1

					if(empty($_POST["la"]))
					{
						$laerr="U didn't selected any langauages";
					}
					else{
						$la=$_POST["la"];
					}
					
					
					
				//checkbox handling2
				
					if(empty($_POST["tool"])) 
					{
						$toolerr="U didn't selected any Tools & Frameworks";
					
					} 
					else
					{
						$tool=$_POST["tool"];
					}
					//checkbox handling3
					
					if(empty($_POST["inter"]))
					{
						$intererr="U didn't selected any Intersted Fields";
					
					} 
					else
					{
						$inter=$_POST["inter"];
					}
					
					
					
					//DOB handling1
					
					
					if(empty($_POST["bdate"])||$_POST["bdate"]=="Date"){
							$bdateerr="Required";
						}else{
							$bdate=$_POST["bdate"];
						}
					
					if(empty($_POST["bmonth"])||$_POST["bmonth"]=="Month"){
							$bmontherr="Required";
						}else{
							$bmonth=$_POST["bmonth"];
						}
					
					if(empty($_POST["byear"])||$_POST["byear"]=="Year"){
							$byearerr="Required";
						}else{
							$byear=$_POST["byear"];
						}
					if($bdateerr!="" || $bmontherr!="" || $byearerr!="")
					    {
							$bdateerr="Required";
						}
					
					//academic info handling
					
					
					
					
					if(empty($_POST["a"])||$_POST["a"]=="Board"){
							$aerr="Required";
						}else{
						$a=($_POST["a"]);
						}
						
					if(empty($_POST["b"])||$_POST["b"]=="Year"){
							$berr="Required";
						}else{
						$b=($_POST["b"]);
						}
						
					if(empty($_POST["c"])||$_POST["c"]=="Board"){
							$cerr="Required";
						}else{
						$c=($_POST["c"]);
						}
						
					if(empty($_POST["d"])||$_POST["d"]=="Year"){
							$derr="Required";
						}else{
						$d=($_POST["d"]);
						}
					
					if(empty($_POST["per10"])){
							$per10err="Required";
						}else{
						$per10=($_POST["per10"]);
						}
						
					if(empty($_POST["per12"])){
							$per12err="Required";
						}else{
						$per12=($_POST["per12"]);
						}
						
						
						
						
						
						//semseter info handling
						
						
					
					if(empty($_POST["e"])||$_POST["e"]=="Year"){
							$eerr="Required";
						}else{
						$e=($_POST["e"]);
						}
					
					if(empty($_POST["f"])||$_POST["f"]=="Year"){
							$ferr="Required";
						}else{
						$f=($_POST["f"]);
						}
					if(empty($_POST["g"])||$_POST["g"]=="Year"){
							$gerr="Required";
						}else{
						$g=($_POST["g"]);
						}
					if(empty($_POST["h"])||$_POST["h"]=="Year"){
							$herr="Required";
						}else{
						$h=($_POST["h"]);
						}
					if(empty($_POST["sem11"])){
							$sem11err="Required";
						}else{
						$sem11=($_POST["sem11"]);
						}
					if(empty($_POST["sem12"])){
							$sem12err="Required";
						}else{
						$sem12=($_POST["sem12"]);
						}
					if(empty($_POST["sem21"])){
							$sem21err="Required";
						}else{
						$sem21=($_POST["sem21"]);
						}
					if(empty($_POST["sem22"])){
							$sem22err="Required";
						}else{
						$sem22=($_POST["sem22"]);
						}
					if(empty($_POST["sem31"])){
							$sem31err="Required";
						}else{
						$sem31=($_POST["sem31"]);
						}
					if(empty($_POST["sem32"])){
							$sem32err="Required";
						}else{
						$sem32=($_POST["sem32"]);
						}
					if(empty($_POST["sem41"])){
							$sem41err="Required";
						}else{
						$sem41=($_POST["sem41"]);
						}
					if(empty($_POST["sem42"])){
							$sem42err="Required";
						}else{
						$sem42=($_POST["sem42"]);
						}
					//declaration
					if(empty($_POST["agree"]))
						{
						$agreeerr="Please select the agree";
						}
					else{
						$agree=$_POST["agree"];
						}
					
				
				//collecting values from variables which are not required
				$midname=test_input($_POST["midname"]);
				$contact2=test_input($_POST["contact2"]);
				$mcontact=test_input($_POST["mcontact"]);
				$diploma=test_input($_POST["diploma"]);
				$other=test_input($_POST["other"]);
				$plag=test_input($_POST["plag"]);
				$flag=test_input($_POST["flag"]);
				$interest=test_input($_POST["interest"]);
				
	
				//checking the error handling variable to empty
				
				if($firstnameerr =="" && $lastnameerr =="" && $addresserr=="" && $cityerr=="" && $emailerr=="" && $stateerr=="" &&
				$pincodeerr=="" && $contact1err=="" && $gendererr=="" && $lagerr=="" && $hostelerr=="" && $fnameerr=="" && $fcontacterr=="" && $mnameerr=="" &&$degreeerr=="" && $cgpaerr==""

				&& $hobbieserr=="" && $societyerr=="" && $softskillserr=="" && $projecterr=="" && $seminarerr=="" && $awarderr=="" && $intererr=="" && $toolerr=="" && $laerr==""
				&& $bdateerr=="" && $bmontherr=="" && $byearerr=="" && $aerr=="" && $berr=="" && $cerr=="" && $derr=="" && $per10err=="" && $per12err=="" && $eerr=="" && $ferr=="" && $gerr=="" && $herr=="" && $sem11err=="" && $sem12err=="" && $sem21err=="" && $sem22err=="" && $sem31err=="" && $sem32err=="" && $sem41err=="" && $sem42err=="" && $agreeerr=="")
				    {
						 
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
						
						$delete = "DELETE FROM student1 WHERE rollno='$login_name'";
							$conn->query($delete);
							
							$delete1 = "DELETE FROM example1 WHERE rollno='$login_name'";
							$conn->query($delete1);
							$delete2 = "DELETE FROM example2 WHERE rollno='$login_name'";
							$conn->query($delete2);
							$delete3 = "DELETE FROM example3 WHERE rollno='$login_name'";
							$conn->query($delete3);

						$sql = "INSERT INTO student1(rollno,firstname, midname, lastname, address, city, email, state, pincode, contact1, contact2, gender, lag, hostel, fname, fcontact, mname, diploma, degree, cgpa, hobbies, society, softskills, project, seminar, award, others,mcontact,plag,flag,interest,bdate,bmonth,byear,a,b,c,d,per10,per12,e,f,g,h,sem11,sem12,sem21,sem22,sem31,sem32,sem41,sem42) 
						VALUES ('$login_name','$firstname','$midname','$lastname','$address','$city','$email','$state',$pincode,$contact1,'$contact2','$gender','$lag','$hostel','$fname',$fcontact,'$mname','$diploma','$degree',$cgpa,'$hobbies','$society','$softskills','$project','$seminar','$award','$other','$mcontact','$plag','$flag','$interest','$bdate','$bmonth','$byear','$a','$b','$c','$d','$per10','$per12','$e','$f','$g','$h','$sem11','$sem12','$sem21','$sem22','$sem31','$sem32','$sem41','$sem42')";
							
	
							
							for ($x=0; $x<sizeof($la); $x++)
								{
									$sql1 = "INSERT INTO example1(rollno, skill) 
									VALUES ('$login_name','" . $la[$x] . "')"; 
									 if($conn->query($sql1)===TRUE){continue;}
								}
							for ($x=0; $x<sizeof($tool); $x++)
								{
									$sql2="INSERT INTO example2(rollno,skill) VALUES ('$login_name','" . $tool[$x] . "')";
										
										if($conn->query($sql2)===TRUE){continue;}
								}
								
							for ($x=0; $x<sizeof($inter); $x++)
								{
									$sql3="INSERT INTO example3(rollno, interest) 
									VALUES ('$login_name','" . $inter[$x] . "')"; 
										if($conn->query($sql3)===TRUE){continue;}									
								}
							
						if ($conn->query($sql) === TRUE) {
							echo "New record created successfully";
						} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
						}
							$conn->close();	
					}
			}
			
			function test_input($data){
				$data=trim($data);
				$data=stripslashes($data);
				$data=htmlspecialchars($data);
				return $data;
			}
			
			?>

    <h1 align="right"> Profile Updation</h1>
		<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
		<b id="logout"><a href="logout.php">Log Out</a></b>
		<br><br><hr><br>
    <div style="width:80%;">
 
        <table width="100%" align="center" cellpadding="1" cellspacing="1">
            <tr>
             All field marked with <span class="error">* </span>are mandatory.
            </tr>
            <tr>
            </tr>
       </table>
  
    
    <hr><br><br>
    <form name="studentprofile"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <fieldset>
        <legend><h3>Personal Info</h3></legend><br>
          <table width="100%" align="center" cellpadding="1" cellspacing="1">
            
            
            <tr>
              <td style="width:10;" align="left">First Name:<span class="error">*</span></td>
              <td style="width:20%;"><input type="text"name="firstname"size="13" maxlength="20" value="<?php echo $firstname;?>"></input><span class="error"><?php echo $firstnameerr;?></span></td>
              <td style="width:10;" >Middle Name:</td>
              <td style="width:20%;"><input type="text"name="midname"size="13" maxlength="20" value="<?php echo $midname;?>"></input></td>
              <td style="width:10;">Last Name:<span class="error">*</span></td>
              <td style="width:20%;"><input type="text"name="lastname"size="13" maxlength="20"value="<?php echo $lastname;?>"></input><span class="error"><?php echo $lastnameerr;?></span></td>
           </tr>
           
           <tr>
               <td style="width:10;" align="left">Permanent Address:<span class="error">*</span></td>
                <td style="width:50;"><textarea name="address" row="5"cols="20"value="<?php echo $address;?>"></textarea><span class="error"><?php echo $addresserr;?></span></td>
             </tr>
             <tr>
                <td style="width:10;" align="left">City:<span class="error">*</span></td>
                <td style="width:10;"><input type="text"name="city"size="13" maxlength="25"value="<?php echo $city;?>"></input><span class="error"><?php echo $cityerr;?></span></td>
                <td style="width:10;">State:<span class="error">*</span></td>
                <td style="width:10;"><input type="text"name="state"size="13"maxlength="30" value="<?php echo $state;?>"></input><span class="error"><?php echo $stateerr;?></span></td>
           </tr>
           
           <tr>
              <td style="width:10;" align="left">Pincode:<span class="error">*</span></td>
              <td style="width:10;"><input type="text"name="pincode"size="13" maxlength="10" value="<?php echo $pincode;?>"></input><span class="error"><?php echo $pincodeerr;?></span></td>
              <td style="width:10;">E-mail:<span class="error">*</span></td>
              <td style="width:20;"><input type="text"name="emailid"size="13" maxlength="35" value="<?php echo $email;?>"></input><span class="error"><?php echo $emailerr;?></span></td>
           </tr>
           
           <tr>
              <td style="width:10;" align="left">Contact No:<span class="error">*</span></td>
              <td style="width:10;"><input type="text"name="contact1"size="13" maxlength="10"value="<?php echo $contact1;?>"></input><span class="error"><?php echo $contact1err;?></span></td>
               <td style="width:10;">Contact No(Optional):</td>
              <td style="width:10;"><input type="text"name="contact2"size="13" maxlength="10" value="<?php echo $contact2;?>"></input></td>
                <td style="width:10;">Languages Known:<span class="error">*</span></td>
              <td style="width:20;"><input type="text"name="lag"size="13" maxlength="20"value="<?php echo $lag;?>"></input><span class="error"><?php echo $lagerr;?></span></td>
           </tr>
           
           <tr>
              <td style="width:20;" align="left">Gender:<span class="error">*</span></td>
              <td  colspan="2" style="width:10%;">
                  <input type="radio" name="gen"  <?php if (isset($gender) && $gender=="Male") echo "checked";?>value="Male">Male</input>
                  <input type="radio" name="gen"  <?php if (isset($gender) && $gender=="Female") echo "checked";?>value="Female">Female</input><span class="error"><?php echo $gendererr;?></span>
               </td>
           </tr>
           
           <tr>
              <td style="width:10%;" align="left">DOB:<span class="error">*</span></td>
              <td colspan="3"style="width:10%;">
                   <select name="bdate">
                   <option selected="selected">Date</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                  
                  
                </select>
           
                     <select name="bmonth">
                     <option selected="selected">Month</option>
                  <option value="January">January</option>
                  <option value="Febrary">Febrary</option>
                  <option value="March">March</option>
                  <option value="April">April</option>
                  <option value="May">May</option>
                  <option value="June">June</option>
                  <option value="July">July</option>
                  <option value="August">August</option>
                  <option value="September">September</option>
                    <option value="October">October</option>
                      <option value="November">November</option>
                        <option value="December">December</option>
                          
                </select>
                               
               
                     <select name="byear">
                     <option selected="selected">Year</option>
                  <option value="1990">1990</option>
                  <option value="1991">1991</option>
                  <option value="1992">1992</option>
                  <option value="1993">1993</option>
                  <option value="1994">1994</option>
                  <option value="1995">1995</option>
                  <option value="1996">1996</option>
                  <option value="1997">1997</option>
                  <option value="1998">1998</option>
                  <option value="1999">1999</option>
                  <option value="2000">2000</option>
                  
                </select><span class="error"><?php echo $bdateerr;?></span>
              </td>
            </tr>
           
            <tr>
               <td style="width:10%;" align="left">Hostel:<span class="error">*</span></td>
              <td colspan="2" style="width:10%;"><input type="text"name="hostel"size="10" value="<?php echo $hostel;?>"></input><span class="error"><?php echo $hostelerr;?></span></td>
            </tr>
            </table>
         </fieldset> 
         
          <br><br>
          <fieldset>
               <table width="100%" align="center" cellpadding="1" cellspacing="1">
                      <tr>
                           <td style="width:10%;" align="center">Father's Name:<span class="error">*</span></td>
                           <td style="width:20%;"><input type="text"name="fname"size="20" maxlength="25" value="<?php echo $fname;?>"></input><br><span class="error"><?php echo $fnameerr;?></span></td>
                           <td style="width:10%;">Contact No:<span class="error">*</span></td>
                           <td style="width:20%;"><input type="text"name="fcontact"size="10" maxlength="15" value="<?php echo $fcontact;?>"></input><span class="error"><?php echo $fcontacterr;?></span></td>
                    </tr>
                    <tr>
                           <td style="width:10%;" align="center">Mother's Name:<span class="error">*</span></td>
                           <td style="width:20%;"><input type="text"name="mname"size="20" maxlength="25" value="<?php echo $mname;?>"></input><br><span class="error"><?php echo $mnameerr;?></span></td>
                           <td style="width:10%;">Contact No:</td>
                           <td style="width:20%;"><input type="text"name="mcontact"size="10" maxlength="15" value="<?php echo $mcontact;?>"></input></td>
                   </tr1>
                </table>
          </fieldset><br><br>
          
      <fieldset>
        <legend><h3>Academic Info</h3></legend><br>
		<span class="error"><?php if( !($aerr=="" && $berr=="" && $cerr=="" && $derr=="" && $per10err=="" && $per12err=="")){echo "Enter Complete Academic Info";}?></span>
  
          <table width="100%" align="center" cellpadding="1" cellspacing="1">
           
           
                      
          <tr>
              <table border="1" align="center" width="80%">
                  <tr>
                      <th>Exam</th>
                      <th>Board</th>
                      <th>Year Of Passing</th>
                      <th>Perentage/Grade</th>
                  </tr>
                  <tr>
                      <td align="center">X<span class="error">*</span></td>
                      <td align="center">
                        <select name="a">
                               <option selected="selected"> Board</option>
                                  <option value="ICSE">ICSE</option>
                                    <option value="CBSE">CBSE</option>
                                <option value="IGCSE">IGCSE</option>
                                <option value="IB">IB</option>
                              <option value="State Board">State Board</option>
                      </select>
                    
                     </td>
                     <td align="center">  <select name="b">
                                   <option selected="selected">Year </option>
                                  <option value="2013-14">2013-14</option>
                                    <option value="2014-15">2014-15</option>
                                <option value="2015-16">2015-16</option>
                                <option value="2017-18">2016-17</option>
                              
                                </select>
                      </td>
                      <td align="center"> <input type="text"name="per10" size="10"value="<?php echo $per10;?>"></input></td>
                  </tr>
                  <tr>
                      <td align="center">XII<span class="error">*</span></td>
                      <td align="center">
                          <select name="c">
                                 <option selected="selected"> Board</option>
                                  <option value="ICSE">ICSE</option>
                                    <option value="CBSE">CBSE</option>
                                <option value="IGCSE">IGCSE</option>
                                <option value="IB">IB</option>
                              <option value="State Board">State Board</option>
                            </select>
                        </td>
                       <td align="center">  <select name="d">
                                    <option selected="selected">Year </option>
                                  <option value="2013-14">2013-14</option>
                                    <option value="2014-15">2014-15</option>
                                <option value="2015-16">2015-16</option>
                                <option value="2017-18">2016-17</option>
                                </select>
                      </td>
                      <td align="center"> <input type="text"name="per12" size="10"value="<?php echo $per12;?>"></input></td>
                  </tr>
                  
              </table>
           </tr> 
           <tr>
                 <td style="width:40;" align="center">Any Other Degree/Diploma(s):
                <textarea name="diploma" row="5"cols="20" value="<?php echo $diploma;?>"></textarea></td>
           </tr>
             </table>
             
         
         
          <br><br>
      
          <table width="100%" align="center" cellpadding="1" cellspacing="1">
            <tr>
            
              <td style="width:20%;" align="center">Degree Purchasing:<span class="error">*</span>
              
                  <input type="radio" name="degree" <?php if (isset($degree) && $degree=="B.tech") echo "checked";?> value="B.tech">B.tech</input>
                  <input type="radio" name="degree" <?php if (isset($degree) && $degree=="Dual(B.tech & M.tech)") echo "checked";?>value="Dual(B.tech & M.tech)">Dual(B.tech & M.tech)</input><span class="error"><?php echo $degreeerr;?></span>
				  
              
               </td>
           </tr>      
              
        </table>
        <br>
          <table width="100%" align="center" cellpadding="1" cellspacing="1">      
  
    
       <tr>
            <span class="error"><?php if( !($eerr==""&&$ferr==""&&$gerr=="" && $herr=="" && $sem11err=="" && $sem12err=="" && $sem21err=="" && $sem22err=="" && $sem31err=="" && $sem32err=="" && $sem41err=="" && $sem42err=="")){echo "Enter Complete Semester  Information.";}?></span>
  
            
             <table border="1" align="center" width="80%">
             <caption align="bottom"><b>Note: </b>If the SGPA is not out,Please put a '-' mark in the cell.</caption>
                  <tr>
                      <th>Year</th>
                      <th>Year Of Passing</th>
                      <th>Odd Sem(SGPA)</th>
                      <th>Even Sem(SGPA)</th>
                  </tr>
                  <tr>
                      <td align="center">1<span class="error">*</span></td>
                      <td align="center">
                        <select name="e">
                                  <option selected="selected">Year </option>
                                  <option value="2015-16">2015-16</option>
                                    <option value="2016-17">2016-17</option>
                                <option value="2017-18">2017-18</option>
                                <option value="2018-19">2018-19</option>
                              
                      </select>
                    
                     <td align="center"> <input type="text"name="sem11" size="10"value="<?php echo $sem11;?>"></input></td>
                      <td align="center"> <input type="text"name="sem12"  size="10"value="<?php echo $sem12;?>"></input></td>
                  </tr>
                  
                  
                  <tr>
                      <td align="center">2<span class="error">*</span></td>
                      <td align="center">
                         <select name="f">
                                   <option selected="selected">Year </option>
                                  <option value="2015-16">2015-16</option>
                                    <option value="2016-17">2016-17</option>
                                <option value="2017-18">2017-18</option>
                                <option value="2018-19">2018-19</option>
                              
                      </select>
                     <td align="center"> <input type="text"name="sem21" size="10"value="<?php echo $sem21;?>"></input></td>
                      <td align="center"> <input type="text"name="sem22" size="10"value="<?php echo $sem22;?>"></input></td>
                  </tr>
                 <tr>
                      <td align="center">3<span class="error">*</span></td>
                      <td align="center">
                         <select name="g">
                                   <option selected="selected">Year </option>
                                  <option value="2015-16">2015-16</option>
                                    <option value="2016-17">2016-17</option>
                                <option value="2017-18">2017-18</option>
                                <option value="2018-19">2018-19</option>
                              
                      </select>
                     <td align="center"> <input type="text"name="sem31" size="10"value="<?php echo $sem31;?>"></input></td>
                      <td align="center"> <input type="text"name="sem32" size="10"value="<?php echo $sem32;?>"></input></td>
                  </tr>
                 <tr>
                      <td align="center">4<span class="error">*</span></td>
                      <td align="center">
                        <select name="h">
                                 <option selected="selected">Year </option>
                                  <option value="2015-16">2015-16</option>
                                    <option value="2016-17">2016-17</option>
                                <option value="2017-18">2017-18</option>
                                <option value="2018-19">2018-19</option>
                              
                      </select>
                    
                     <td align="center"> <input type="text"name="sem41" size="10"value="<?php echo $sem41;?>"></input></td>
                      <td align="center"> <input type="text"name="sem42"  size="10"value="<?php echo $sem42;?>"></input></td>
                  </tr> 
                  
               </table>
            
            </tr>
            
            <tr>
                <td style="width:10%;" align="center">CGPA:<span class="error">*</span>
                 <input type="text"name="cgpa"size="5" maxlength="5" value="<?php echo $cgpa;?>"></input><span class="error"><?php echo $cgpaerr;?></span></td>
            <tr>
            </table>
      </fieldset>
      <br><br>
      <fieldset>
        
          <table width="100%" align="center" cellpadding="1" cellspacing="1">
   
            
          
          <tr>
               <td style="width:10;" align="left">Your Hobbies:<span class="error">*</span></td>
                <td style="width:50;"><textarea name="hobbies" row="3"cols="40" value="<?php echo $hobbies;?>"></textarea><span class="error"><?php echo $hobbieserr;?></span></td>
               
           </tr>
           <tr>
               <td style="width:10;" align="left"> Societies/Group/Co-circular Activity:<span class="error">*</span></td>
                <td style="width:50;"><textarea name="society" row="3"cols="40"value="<?php echo $society;?>" ></textarea><span class="error"><?php echo $societyerr;?></span></td>
               
           </tr>
           <tr>
               <td style="width:10;" align="left">Soft Skills:<span class="error">*</span></td>
                <td style="width:50;"><textarea name="softskills" row="3"cols="40" value="<?php echo $softskills;?>"></textarea><span class="error"><?php echo $softskillserr;?></span></td>
               
           </tr>
          </table>
          </fieldset>
          <br><br>
         <fieldset>
        <legend><h3>Technical Skills</h3></legend><br>
          <table width="100%" align="center" cellpadding="1" cellspacing="1">         
            <tr>
        
                <td style="width:10;" align="left"> Programming Language:<span class="error">* </span></td>
        
              <td style="width:50;">
              <input type="checkbox" name="la[]" value="C">C</input>
               <input type="checkbox" name="la[]" value="C++">C++</input>
              <input type="checkbox" name="la[]" value="Java">Java</input>
               <input type="checkbox" name="la[]" value="Python">Python</input>
                <input type="checkbox" name="la[]" value="Php">Php</input>
                <input type="checkbox" name="la[]" value="JavaScript">JavaScript</input>
               <input type="checkbox" name="la[]" value="C#">C#</input><br>
               Any Other<br><textarea name="plag" row="3"cols="40" value="<?php echo $plag;?>"></textarea></td>
			   
				<span class="error"><?php echo $laerr;?></span><br>
				<span class="error"><?php echo $toolerr;?></span><br>
				<span class="error"><?php echo $intererr;?></span>
               
          </tr>
              </table>
              <br><hr><br>
               <table width="100%" align="center" cellpadding="1" cellspacing="1">
          <tr>
          
             <td style="width:10;" align="left"> Tools & Frameworks:<span class="error">*</span></td>
             
              <td style="width:50;">
              <input type="checkbox" name="tool[]" value="Django">Django</input>
               <input type="checkbox" name="tool[]" value="Flask">Flask</input>
              <input type="checkbox" name="tool[]" value="JQuery">JQuery</input>
               <input type="checkbox" name="tool[]" value="MySQL">MySQL</input>
                <input type="checkbox" name="tool[]" value="Git">Git</input>
                <br>
               Any Other<br><textarea name="flag" row="3"cols="40"value="<?php echo $flag;?>"></textarea></td>
               
           </tr>   
            </table>
            <br><hr><br>
               <table width="100%" align="center" cellpadding="1" cellspacing="1">
           <tr> 
               <td style="width:10;" align="left">Interested Fields:<span class="error">*</span></td>
             
              <td style="width:50;">
             
              
              <input type="checkbox" name="inter[]" value="Database">Database</input>
               <input type="checkbox" name="inter[]" value="Parallel Programming">Parallel Programming</input>
              <input type="checkbox" name="inter[]" value="Cloud Computing">Cloud Computing</input>
               <input type="checkbox" name="inter[]" value="Web Development">Web Development</input>
                <input type="checkbox" name="inter[]" value="Software Development">Software Development</input>
                <input type="checkbox" name="inter[]" value="Game Development">Game Development</input>
               <input type="checkbox" name="inter[]" value="App Development">App Development</input><br>
                  <input type="checkbox" name="inter[]" value="Algorithm">Algorithm</input>
               <input type="checkbox" name="inter[]" value="Computer Security">Computer Security</input>
              <input type="checkbox" name="inter[]" value="Networking">Networking</input>
               <input type="checkbox" name="inter[]" value="Data Analysis">Data Analysis</input>
                <input type="checkbox" name="inter[]" value="OS Design & Development">OS Design & Development</input>
                <input type="checkbox" name="inter[]" value="Dev-ops">Dev-ops</input>
               <input type="checkbox" name="inter[]" value="Langauges/Compiler Design">Langauges/Compiler Design</input><br>
               Any Other<br><textarea name="interest" row="3"cols="40"value="<?php echo $interest;?>"></textarea></td>
               
            
            </tr>
            </table>
            </fieldset>
            <br><br>
            <fieldset>
        
          <table width="100%" cellpadding="1" cellspacing="1">
            
             <tr>
               <td style="width:10;" align="left">Projects/Intership:<span class="error">*</span></td>
                <td style="width:50;"><textarea name="project" row="3"cols="40" value="<?php echo $project;?>"></textarea><span class="error"><?php echo $projecterr;?></span></td>
               
           </tr>
           <tr>
               <td style="width:10;" align="left">Seminars/Training:<span class="error">*</span></td>
                <td style="width:50;"><textarea name="seminar" row="3"cols="40" value="<?php echo $seminar;?>"></textarea><span class="error"><?php echo $seminarerr;?></span></td>
               
           </tr>
           <tr>
               <td style="width:10;" align="left">Achievments & Awards:<span class="error">*</span></td>
                <td style="width:50;"><textarea name="award" row="3"cols="40" value="<?php echo $award;?>"></textarea><span class="error"><?php echo $awarderr;?></span></td>
               
           </tr>
           <tr>
               <td style="width:10;" align="left">Any Other Information:</td>
                <td style="width:50;"><textarea name="other" row="3"cols="40" value="<?php echo $other;?>"></textarea></td>
               
           </tr>
           
           <tr>
                 <td  colspan="2"style="width:10;" align="left"><b>Declaration:</b><p>I hereby solemnly undertake/declare that the information stated above are true and correct to the best of my knowledge and belief.<br>Any information, if found to be incorrect,wrong or misleading,will render to rejection of my application in any activity.</p></td>
             </tr>
             <tr>
                  <td colspan="2" align="center"style="width:40%;"><input type="checkbox" name="agree[]" value="agree">I Agree</input><span class="error"><?php echo $agreeerr;?></span></td>
                  
           
           </tr>
           
            <tr> 
                <td colspan="2"style="width:10;" align="center"><br>
                  <input type="submit" name="submit"value="SUBMIT"></input>
                  <input type="reset" name="reset" value="RESET"></input>
                  </td>
              </tr>
        
          </table>       
         </fieldset>
        </form>      
  </div>
  
</body>

</html>