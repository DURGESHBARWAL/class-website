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
						$ierr="";
						$i="";
				$toolerr="";
				$tool="";
				
				
				
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				if(empty($_POST["firstname"])){
				  $firstnameerr="Required";
				}else{
					$firstname=test_input($_POST["firstname"]);
					if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
                      $firstnameerr = "Only letters and white space allowed"; 
					}
				}
				if(empty($_POST["lastname"])){
				  $lastnameerr="Required";
				}else{
					$lastname=test_input($_POST["lastname"]);
					if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
						$lastnameerr = "Only letters and white space allowed"; 
						}
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
				
					if(empty($_POST["la"]) 
					{
						$laerr="U didn't selected any langauages";
					}
					
					
					
					
				//checkbox handling2
				
					if(empty($_POST["tool"]) 
					{
						$toolerr="U didn't selected any Tools & Frameworks";
					
					} 
					else
					{
						/*$N = count($aDoor);
						echo("You selected $N door(s): ");
						for($i=0; $i < $N; $i++)
						{
						echo($aDoor[$i] . " ");
						}
						*/
					}	
			
			
					//checkbox handling3
						
					if(empty($_POST["i"]) 
					{
						$ierr="U didn't selected any Intersted Fields";
					
					} 
					else
					{
						/*$N = count($aDoor);
						echo("You selected $N door(s): ");
						for($i=0; $i < $N; $i++)
						{
						echo($aDoor[$i] . " ");
						}
						*/
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
				
				if($firstnameerr !="" && $lastnameerr !="" && $addresserr!="" && $cityerr!="" && $emailerr!="" && $stateerr!="" &&
				$pincodeerr!="" && $contact1err!="" && $gendererr!="" && $lagerr!="" && $hostelerr!="" && $fnameerr!="" && $fcontacterr!="" && $mnameerr!="" &&$degreeerr!="" && $cgpaerr!=""

				&& $hobbieserr!="" && $societyerr!="" && $softskillserr!="" && $projecterr!="" && $seminarerr!="" && $awarderr!="")
				    {
						echo 
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

						$sql = "INSERT INTO student1(`firstname`, `midname`, `lastname`, `address`, `city`, `email`, `state`, `pincode`, `contact1`, `contact2`, `gender`, `lag`, `hostel`, `fname`, `fcontact`, `mname`, `diploma`, `degree`, `cgpa`, `hobbies`, `society`, `softskills`, `project`, `seminar`, `award`, `others`, `mcontact`, `Injected date`) VALUES ($firstname,$midname,$lastname,$address,$city,$email,$state,$pincode,$contact1,$contact2,$gender,$lag,$hostel,$fname,$fcontact,$mname,$diploma,$degree,$cgpa,$hobbies,$society,$softskills,$project,$seminar,$award,$other,$mcontact,SYSDATE)";
							

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

    <h1 align="right"> Profile Updation</h1><br><br><hr><br>
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
              <td style="width:10;" align="left">First Name:</td>
              <td style="width:20%;"><input type="text"name="firstname"size="20" maxlength="15" value="<?php echo $firstname;?>"></input><span class="error">* <?php echo $firstnameerr;?></span></td>
              <td style="width:10;" >Middle Name:</td>
              <td style="width:20%;"><input type="text"name="midname"size="20" maxlength="15" value="<?php echo $midname;?>"></input></td>
              <td style="width:10;">Last Name:</td>
              <td style="width:20%;"><input type="text"name="lastname"size="20" maxlength="15"value="<?php echo $lastname;?>"></input><span class="error">* <?php echo $lastnameerr;?></span></td>
           </tr>
           
           <tr>
               <td style="width:10;" align="left">Permanent Address:</td>
                <td style="width:50;"><textarea name="address" row="5"cols="20"value="<?php echo $address;?>"></textarea><span class="error">* <?php echo $addresserr;?></span></td>
             </tr>
             <tr>
                <td style="width:10;" align="left">City:</td>
                <td style="width:10;"><input type="text"name="city"size="20" value="<?php echo $city;?>"></input><span class="error">* <?php echo $cityerr;?></span></td>
                <td style="width:10;">State:</td>
                <td style="width:10;"><input type="text"name="state"size="20" value="<?php echo $state;?>"></input><span class="error">* <?php echo $stateerr;?></span></td>
           </tr>
           
           <tr>
              <td style="width:10;" align="left">Pincode:</td>
              <td style="width:10;"><input type="text"name="pincode"size="10" value="<?php echo $pincode;?>"></input><span class="error">* <?php echo $pincodeerr;?></span></td>
              <td style="width:10;">E-mail:</td>
              <td style="width:20;"><input type="text"name="emailid"size="30" value="<?php echo $email;?>"></input><span class="error">* <?php echo $emailerr;?></span></td>
           </tr>
           
           <tr>
              <td style="width:10;" align="left">Contact No:</td>
              <td style="width:10;"><input type="text"name="contact1"size="10"value="<?php echo $contact1;?>"></input><span class="error">* <?php echo $contact1err;?></span></td>
               <td style="width:10;">Contact No:</td>
              <td style="width:10;"><input type="text"name="contact2"size="10" value="<?php echo $contact2;?>"></input></td>
                <td style="width:10;">Languages Known:</td>
              <td style="width:20;"><input type="text"name="lag"size="20" value="<?php echo $lag;?>"></input><span class="error">* <?php echo $lagerr;?></span></td>
           </tr>
           
           <tr>
              <td style="width:20;" align="left">Gender:</td>
              <td style="width:10%;">
                  <input type="radio" name="gen"  <?php if (isset($gender) && $gender=="Male") echo "checked";?>value="Male">Male</input>
                  <input type="radio" name="gen"  <?php if (isset($gender) && $gender=="Female") echo "checked";?>value="Female">Female</input><span class="error">* <?php echo $gendererr;?></span>
               </td>
           </tr>
           
           <tr>
              <td style="width:10%;" align="left">DOB:</td>
              <td colspan="3"style="width:10%;">
                   <select name="date">
                   <option selected="selected">Date</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
                  <option>11</option>
                  <option>12</option>
                  <option>13</option>
                  <option>14</option>
                  <option>15</option>
                  <option>16</option>
                  <option>17</option>
                  <option>18</option>
                  <option>19</option>
                  <option>20</option>
                  <option>21</option>
                  <option>22</option>
                  <option>23</option>
                  <option>24</option>
                  <option>25</option>
                  <option>26</option>
                  <option>27</option>
                  <option>28</option>
                  <option>29</option>
                  <option>30</option>
                  <option>31</option>
                  
                  
                </select>
           
                     <select name="month">
                     <option selected="selected">Month</option>
                  <option value="1">January</option>
                  <option value="2">Febrary</option>
                  <option value="3">March</option>
                  <option value="4">April</option>
                  <option value="5">May</option>
                  <option value="6">June</option>
                  <option value="7">July</option>
                  <option>August</option>
                  <option>September</option>
                    <option>Octmber</option>
                      <option>November</option>
                        <option>December</option>
                          
                </select>
                               
               
                     <select name="year">
                     <option selected="selected">Year</option>
                  <option value="1">1990</option>
                  <option value="2">1991</option>
                  <option value="3">1992</option>
                  <option value="4">1993</option>
                  <option value="5">1994</option>
                  <option value="6">1995</option>
                  <option value="7">1996</option>
                  <option>1997</option>
                  <option>1998</option>
                  <option>1999</option>
                  <option>2000</option>
                  
                </select>
              </td>
            </tr>
           
            <tr>
               <td style="width:10%;" align="left">Hostel:</td>
              <td style="width:10%;"><input type="text"name="hostel"size="10" value="<?php echo $hostel;?>"></input><span class="error">* <?php echo $hostelerr;?></span></td>
            </tr>
            </table>
         </fieldset> 
         
          <br><br>
          <fieldset>
               <table width="100%" align="center" cellpadding="1" cellspacing="1">
                      <tr>
                           <td style="width:10%;" align="center">Father's Name:</td>
                           <td style="width:20%;"><input type="text"name="fname"size="20" maxlength="25" value="<?php echo $fname;?>"></input><span class="error">* <?php echo $fnameerr;?></span></td>
                           <td style="width:10%;">Contact No:</td>
                           <td style="width:20%;"><input type="text"name="fcontact"size="10" maxlength="15" value="<?php echo $fcontact;?>"></input><span class="error">* <?php echo $fcontacterr;?></span></td>
                    </tr>
                    <tr>
                           <td style="width:10%;" align="center">Mother's Name:</td>
                           <td style="width:20%;"><input type="text"name="mname"size="20" maxlength="25" value="<?php echo $mname;?>"></input><span class="error">* <?php echo $mnameerr;?></span></td>
                           <td style="width:10%;">Contact No:</td>
                           <td style="width:20%;"><input type="text"name="mcontact"size="10" maxlength="15" value="<?php echo $mcontact;?>"></input></td>
                   </tr1>
                </table>
          </fieldset><br><br>
          
      <fieldset>
        <legend><h3>Academic Info</h3></legend><br>
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
                      <td align="center">X</td>
                      <td align="center">
                        <select name="a">
                               <option selected="selected"> Board</option>
                                  <option value="1">ICSE</option>
                                    <option value="2">CBSE</option>
                                <option value="3">IGCSE</option>
                                <option value="4">IB</option>
                              <option value="5">State Board</option>
                      </select>
                    
                     </td>
                     <td align="center">  <select name="b">
                                   <option selected="selected">Year </option>
                                  <option value="1">2013-14</option>
                                    <option value="2">2014-15</option>
                                <option value="3">2015-16</option>
                                <option value="4">2016-17</option>
                              
                                </select>
                      </td>
                      <td align="center"> <input type="text"name="percentage" size="10"></input></td>
                  </tr>
                  <tr>
                      <td align="center">XII</td>
                      <td align="center">
                          <select name="c">
                                  <option selected="selected">Board </option>
                                  <option value="1">ICSE</option>
                                    <option value="2">CBSE</option>
                                <option value="3">IGCSE</option>
                                <option value="4">IB</option>
                              <option value="5">State Board</option>
                            </select>
                        </td>
                       <td align="center">  <select name="d">
                                   <option selected="selected">Year </option>
                                  <option value="1">2013-14</option>
                                    <option value="2">2014-15</option>
                                <option value="3">2015-16</option>
                                <option value="4">2016-17</option>
                              
                                </select>
                      </td>
                      <td align="center"> <input type="text"name="percentage" size="10"></input></td>
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
            
              <td style="width:20%;" align="center">Degree Purchasing:
              
                  <input type="radio" name="degree" <?php if (isset($degree) && $degree=="B.tech") echo "checked";?> value="B.tech">B.tech</input>
                  <input type="radio" name="degree" <?php if (isset($degree) && $degree=="Dual(B.tech & M.tech)") echo "checked";?>value="Dual(B.tech & M.tech)">Dual(B.tech & M.tech)</input><span class="error">* <?php echo $degreeerr;?></span>
				  
              
               </td>
           </tr>      
              
        </table>
        <br>
          <table width="100%" align="center" cellpadding="1" cellspacing="1">      
  
    
       <tr>
            
            
             <table border="1" align="center" width="80%">
             <caption align="bottom"><b>Note: </b>Mandatory to Provide Correct Information</caption>
                  <tr>
                      <th>Year</th>
                      <th>Year Of Passing</th>
                      <th>Odd Sem(SGPA)</th>
                      <th>Even Sem(SGPA)</th>
                  </tr>
                  <tr>
                      <td align="center">1</td>
                      <td align="center">
                        <select name="e">
                                  <option selected="selected">Year </option>
                                  <option value="1">2015-16</option>
                                    <option value="2">2016-17</option>
                                <option value="3">2017-18</option>
                                <option value="4">2018-19</option>
                              
                      </select>
                    
                     <td align="center"> <input type="text"name="percentage" value=" " size="10"></input></td>
                      <td align="center"> <input type="text"name="percentage" value=" " size="10"></input></td>
                  </tr>
                  
                  
                  <tr>
                      <td align="center">2</td>
                      <td align="center">
                         <select name="f">
                                  <option selected="selected">Year </option>
                                  <option value="1">2015-16</option>
                                    <option value="2">2016-17</option>
                                <option value="3">2017-18</option>
                                <option value="4">2018-19</option>
                              
                      </select>
                     <td align="center"> <input type="text"name="percentage" value=" " size="10"></input></td>
                      <td align="center"> <input type="text"name="percentage" value=" " size="10"></input></td>
                  </tr>
                 <tr>
                      <td align="center">3</td>
                      <td align="center">
                         <select name="g">
                                  <option selected="selected">Year </option>
                                  <option value="1">2015-16</option>
                                    <option value="2">2016-17</option>
                                <option value="3">2017-18</option>
                                <option value="4">2018-19</option>
                              
                      </select>
                     <td align="center"> <input type="text"name="percentage" value=" " size="10"></input></td>
                      <td align="center"> <input type="text"name="percentage" value=" " size="10"></input></td>
                  </tr>
                 <tr>
                      <td align="center">4</td>
                      <td align="center">
                        <select name="h">
                                  <option selected="selected">Year </option>
                                  <option value="1">2015-16</option>
                                    <option value="2">2016-17</option>
                                <option value="3">2017-18</option>
                                <option value="4">2018-19</option>
                              
                      </select>
                    
                     <td align="center"> <input type="text"name="percentage" value=" " size="10"></input></td>
                      <td align="center"> <input type="text"name="percentage" value=" " size="10"></input></td>
                  </tr> 
                  
               </table>
            
            </tr>
            
            <tr>
                <td style="width:10%;" align="center">CGPA:
                 <input type="text"name="cgpa"size="5" maxlength="5"></input></td>
            <tr>
            </table>
      </fieldset>
      <br><br>
      <fieldset>
        
          <table width="100%" align="center" cellpadding="1" cellspacing="1">
   
            
          
          <tr>
               <td style="width:10;" align="left">Your Hobbies:</td>
                <td style="width:50;"><textarea name="hobbies" row="3"cols="40" value="<?php echo $hobbies;?>"></textarea><span class="error">* <?php echo $hobbieserr;?></span></td>
               
           </tr>
           <tr>
               <td style="width:10;" align="left"> Societies/Group/Co-circular Activity:</td>
                <td style="width:50;"><textarea name="society" row="3"cols="40"value="<?php echo $society;?>" ></textarea><span class="error">* <?php echo $societyerr;?></span></td>
               
           </tr>
           <tr>
               <td style="width:10;" align="left">Soft Skills:</td>
                <td style="width:50;"><textarea name="softskills" row="3"cols="40" value="<?php echo $softskills;?>"></textarea><span class="error">* <?php echo $softskillserr;?></span></td>
               
           </tr>
          </table>
          </fieldset>
          <br><br>
         <fieldset>
        <legend><h3>Technical Skills</h3></legend><br>
          <table width="100%" align="center" cellpadding="1" cellspacing="1">         
            <tr>
        
                <td style="width:10;" align="left"> Programming Language:<span class="error">* <?php echo $laerr;?></span></td>
        
              <td style="width:50;">
              <input type="checkbox" name="la[]" value="C">C</input>
               <input type="checkbox" name="la[]" value="C++">C++</input>
              <input type="checkbox" name="la[]" value="Java">Java</input>
               <input type="checkbox" name="la[]" value="Python">Python</input>
                <input type="checkbox" name="la[]" value="Php">Php</input>
                <input type="checkbox" name="la[]" value="JavaScript">JavaScript</input>
               <input type="checkbox" name="la[]" value="C#">C#</input><br>
               Any Other<br><textarea name="plag" row="3"cols="40" value="<?php echo $plag;?>"></textarea></td>

               
          </tr>
              </table>
              <br><hr><br>
               <table width="100%" align="center" cellpadding="1" cellspacing="1">
          <tr>
          
             <td style="width:10;" align="left"> Tools & Frameworks:<span class="error">* <?php echo $toolerr;?></span></td>
             
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
               <td style="width:10;" align="left">Interested Fields:<span class="error">* <?php echo $ierr;?></span></td>
             
              <td style="width:50;">
             
              
              <input type="checkbox" name="i[]" value="">Database</input>
               <input type="checkbox" name="i[]" value="">Parallel Programming</input>
              <input type="checkbox" name="i[]" value="">Cloud Computing</input>
               <input type="checkbox" name="i[]" value="">Web Development</input>
                <input type="checkbox" name="i[]" value="">Software Development</input>
                <input type="checkbox" name="i[]" value="">Game Development</input>
               <input type="checkbox" name="i[]" value="">App Development</input><br>
                  <input type="checkbox" name="i[]" value="">Algorithm</input>
               <input type="checkbox" name="i[]" value="">Computer Security </input>
              <input type="checkbox" name="i[]" value="">Networking</input>
               <input type="checkbox" name="i[]" value="">Data Analysis</input>
                <input type="checkbox" name="i[]" value="">OS Design & Development</input>
                <input type="checkbox" name="i[]" value="">Dev-ops</input>
               <input type="checkbox" name="i[]" value="">Langauges/Compiler Design</input><br>
               Any Other<br><textarea name="interest" row="3"cols="40"value="<?php echo $interest;?>"></textarea></td>
               
            
            </tr>
            </table>
            </fieldset>
            <br><br>
            <fieldset>
        
          <table width="100%" cellpadding="1" cellspacing="1">
            
             <tr>
               <td style="width:10;" align="left">Projects/Intership:</td>
                <td style="width:50;"><textarea name="project" row="3"cols="40" value="<?php echo $project;?>"></textarea><span class="error">* <?php echo $projecterr;?></span></td>
               
           </tr>
           <tr>
               <td style="width:10;" align="left">Seminars/Training:</td>
                <td style="width:50;"><textarea name="seminar" row="3"cols="40" value="<?php echo $seminar;?>"></textarea><span class="error">* <?php echo $seminarerr;?></span></td>
               
           </tr>
           <tr>
               <td style="width:10;" align="left">Achievments & Awards:</td>
                <td style="width:50;"><textarea name="award" row="3"cols="40" value="<?php echo $award;?>"></textarea><span class="error">* <?php echo $awarderr;?></span></td>
               
           </tr>
           <tr>
               <td style="width:10;" align="left">Any Other Information:</td>
                <td style="width:50;"><textarea name="other" row="3"cols="40" value="<?php echo $other;?>"></textarea></td>
               
           </tr>
           
           <tr>
                 <td  colspan="2"style="width:10;" align="left"><b>Declaration:</b><p>I hereby solemnly undertake/declare that the information stated above are true and correct to the best of my knowledge and belief.<br>Any information, if found to be incorrect,wrong or misleading,will render to rejection of my application in any activity.</p></td>
             </tr>
             <tr>
                  <td colspan="2" align="center"style="width:40%;"><input type="checkbox" name="agree[]" value="Agree">I Agree</input><span class="error"><?php echo $agreeerr;?></span></td>
                  
           
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