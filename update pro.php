<?php
  if($_POST['firstname']=="")
    {
      echo "<center><span style="color:red;">
        Enter the your first name</span></center>";
        echo "<hr>";
        include("update profile.php")
    }
   else if($_POST['lastname']=="")
    {
      echo "<center><span style="color:red;">
        Enter the your last name</span></center>";
        echo "<hr>";
        include("update profile.php")
    }
    else if($_POST['address']=="")
    {
      echo "<center><span style="color:red;">
        Enter the your address</span></center>";
        echo "<hr>";
        include("update profile.php")
    }
    else if($_POST['city']=="")
    {
      echo "<center><span style="color:red;">
        Enter the your city</span></center>";
        echo "<hr>";
        include("update profile.php")
    }
    else if($_POST['state']=="")
    {
      echo "<center><span style="color:red;">
        Enter the your state</span></center>";
        echo "<hr>";
        include("update profile.php")
    }
    else if($_POST['pincode']=="")
    {
      echo "<center><span style="color:red;">
        Enter the your pincode</span></center>";
        echo "<hr>";
        include("update profile.php")
    }
    else if($_POST['emailid']=="")
    {
      echo "<center><span style="color:red;">
        Enter the your email id</span></center>";
        echo "<hr>";
        include("update profile.php")
    }
    else if($_POST['contact1']=="")
    {
      echo "<center><span style="color:red;">
        Enter the your Contact Number</span></center>";
        echo "<hr>";
        include("update profile.php")
    }
    else if($_POST['language']=="")
    {
      echo "<center><span style="color:red;">
        Enter the your languages you Know</span></center>";
        echo "<hr>";
        include("update profile.php")
    }
    else if(!iiset($_POST['gender']))
    {
      echo "<center><span style="color:red;">
        Select the Gender</span></center>";
        echo "<hr>";
        include("update profile.php")
    }
    
    
    
    
    
    else if($_POST['hostel']=="")
    {
      echo "<center><span style="color:red;">
        Enter the hostel/residence</span></center>";
        echo "<hr>";
        include("update profile.php")
    }
    else if($_POST['fname']=="")
    {
      echo "<center><span style="color:red;">
        Enter the your Father name</span></center>";
        echo "<hr>";
        include("update profile.php")
    }
    else if($_POST['fcontact']=="")
    {
      echo "<center><span style="color:red;">
        Enter the your Father contact number</span></center>";
        echo "<hr>";
        include("update profile.php")
    }
    else if($_POST['mname']=="")
    {
      echo "<center><span style="color:red;">
        Enter the your mother number</span></center>";
        echo "<hr>";
        include("update profile.php")
    }
    
    
    
    
    
    else if(!iiset($_POST['degree']))
    {
      echo "<center><span style="color:red;">
        Select the degree</span></center>";
        echo "<hr>";
        include("update profile.php")
    }
     else if($_POST['cgpa']=="")
    {
      echo "<center><span style="color:red;">
        Enter the your CGPA</span></center>";
        echo "<hr>";
        include("update profile.php")
    }
    
    
    
    
    else if($_POST['hobbies']=="")
    {
      echo "<center><span style="color:red;">
        Enter the your address</span></center>";
        echo "<hr>";
        include("update profile.php")
    }
    else if($_POST['society']=="")
    {
      echo "<center><span style="color:red;">
        Enter the your address</span></center>";
        echo "<hr>";
        include("update profile.php")
    }
    else if($_POST['softskills']=="")
    {
      echo "<center><span style="color:red;">
        Enter the your address</span></center>";
        echo "<hr>";
        include("update profile.php")
    }
    
    
    
    
    else if(!iiset($_POST['agree']))
    {
      echo "<center><span style="color:red;">
        Accept terms and condotions</span></center>";
        echo "<hr>";
        include("update profile.php")
    }
 ?>
