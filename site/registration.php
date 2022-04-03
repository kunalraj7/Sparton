<?php
session_start();
include "dbconnect.php";
$msg = "";
if($_SERVER['REQUEST_METHOD']=='POST')
{
 $a = $_REQUEST['FirstName'];
 $b = $_REQUEST['LastName'];
 $c = $_REQUEST['Lan'];
 $d = $_REQUEST['Nat'];
 $e = $_REQUEST['Dateofbirth'];
 $f = $_REQUEST['ge'];
 $g = $_REQUEST['Cit'];
 $h = $_REQUEST['Add'];
 $i = $_REQUEST['EMail'];
 $j = $_REQUEST['Telephone'];
 $k = $_REQUEST['Password'];

$res ="SELECT * FROM registrationform WHERE email = '$i'";
$num = mysqli_query($con, $res);    
    
    $val = mysqli_num_rows($num);

    if ($val > 0){
        echo "<script>alert('Email already Registerd !')</script>";
    }
    else{
         $tot = "insert into registrationform values ( NULL,'".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."', NULL)";
          $res = mysqli_query($con, $tot) or die('Error Quering Database.');
          if($res){
            echo "<script>alert('Registered Sucessfully')</script>";
          }
          else{
            echo "<script>alert('Something went wrong')</script>";
          }

        }
    }        
?>
<!DOCTYPE html>
<html> 
<head> <title>REGISTER HERE</title>
    
<script language=javascript type="text/javascript">

function reset_button()
{
    var First = document.getElementById("first_name");
    var Last = document.getElementById("last_name");
    var Langu = document.getElementById("lan");
    var Natn=document.getElementById("nat");
    var Dob=document.getElementById("date_of_birth");
    var Gen=document.getElementById("g");
    var Ci=document.getElementById("cit");
    var Addr = document.getElementById("add");
    var Em = document.getElementById("email");
    var Ph = document.getElementById("phone");
    var Pas = document.getElementById("password");
    var CPas = document.getElementById("confirm_password");
    
    
    First.style.color="red";
    Last.style.color="red";
    Langu.style.color="red";
    Natn.style.color="red";
    Dob.style.color="red";
    Gen.style.color="red";
    Ci.style.color="red";
    Addr.style.color="red";
    Em.style.color="red";
    Ph.style.color="red";
    Pas.style.color="red";
    CPas.style.color="red";

}

</script>

<script> 
function FormData()                                    
{ 
    var first_name = document.forms["RegistrationForm"]["FirstName"];  
    var last_name = document.forms["RegistrationForm"]["LastName"];
    var lan=document.forms["RegistrationForm"]["Lan"]             
    var nat = document.forms["RegistrationForm"]["Nat"];    
    var date_of_birth = document.forms["RegistrationForm"]["Dateofbirth"];   
    var g = document.forms["RegistrationForm"]["ge"]; 
    var cit = document.forms["RegistrationForm"]["Cit"]; 
    var add = document.forms["RegistrationForm"]["Add"];
    var email = document.forms["RegistrationForm"]["EMail"];
    var phone = document.forms["RegistrationForm"]["Telephone"];
    var password = document.forms["RegistrationForm"]["Password"];  
    var confirm_password = document.forms["RegistrationForm"]["ConfirmPassword"];

    if (first_name.value == "")                                  
    { 
        window.alert("Please type your First Name."); 
        first_name.focus(); 
        return false; 
    } 
   
 if (last_name.value == "")                                  
    { 
        window.alert("Please type your Last Name."); 
        last_name.focus(); 
        return false; 
    } 
  if (lan.selectedIndex < 1) 
    {
       alert("Please select your Language.")
       lan.focus();
       return false;
    }
    if (nat.selectedIndex < 1)                               
    { 
        alert("Please select your Nationality."); 
        nat.focus(); 
        return false; 
    } 
       
    if (date_of_birth.value == "")                                   
    { 
        window.alert("Please type your Date Of Birth."); 
        date_of_birth.focus(); 
        return false; 
    } 

    if (g.selectedIndex < 1)                               
    { 
        alert("Please select your Gender."); 
        g.focus(); 
        return false; 
    }
   if (cit.selectedIndex < 1)                               
    { 
        alert("Please select your City."); 
        cit.focus(); 
        return false; 
    } 
     if (add.value == "")                               
    { 
        window.alert("Please type your Address."); 
        add.focus(); 
        return false;
    }
    
     if (email.value == "")                               
    { 
        window.alert("Please type your Email Address."); 
        email.focus(); 
        return false;
    }       
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please type your valid E-Mail Address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please type your valid E-Mail Address."); 
        email.focus(); 
        return false; 
    } 
   
    if (phone.value == "")                           
    { 
        window.alert("Please type your Phone Number."); 
        phone.focus(); 
        return false; 
    } 
   
    if (password.value == "")                        
    { 
        window.alert("Please type your Password."); 
        password.focus(); 
        return false; 
    }

     if (confirm_password.value == "")                        
    { 
        window.alert("Please Retype your Password."); 
       confirm_password.focus(); 
        return false; 
    }  

     if (confirm_password.value != password.value)                        
    { 
        window.alert("Please Confirm your Password."); 
       confirm_password.focus(); 
        return false; 
    } 
    return true;
    
}
</script> 
<link rel="stylesheet" type="text/css" href="registration.css">
</head> 
   
<body>
    
<div class="signup">
    <h1 style="color: #ffffff;"> REGISTRATION FORM </h1>

<form name="RegistrationForm" action="" onsubmit="return FormData()" method="POST" class="form">

    <h2 class="text">Personal Details</h2>
        
        <div class="textbox">
        <p ID="first_name">First Name: <input type="text" size=65 name="FirstName" placeholder="Please enter your First Name">
        </p></div><br>
        <div class="textbox">        
        <p ID="last_name">Last Name: <input type="text" size=65 name="LastName" placeholder="Please enter your Last Name">
        </p></div><br>

        
        <p ID="lan">Language    
        <select type="text" value="" name="Lan">
            <option>SELECT</option>  
            <option>English</option> 
            <option>Hindi</option> 
            <option>Chinese</option> 
            <option>Japanese</option> 
            <option>Russian</option> 
            <option>Arab</option>
        </select>
        </p>
        
        
        <p ID="nat">Nationality    
        <select type="text" value="" name="Nat">
            <option>SELECT</option>  
            <option>Indian</option> 
            <option>American</option> 
            <option>Chinese</option> 
            <option>Japanese</option> 
            <option>Russian</option> 
            <option>Arabian</option>
        </select>
        </p>
        
        
        <p ID="date_of_birth">Date of birth: <input type="Date" size=10 name="Dateofbirth">
        </p><br>
        
        
        <p ID="g">Gender    
        <select type="text" value="" name="ge"> 
            <option>SELECT</option>  
            <option>Male</option> 
            <option>Female</option> 
            <option>Others</option>
        </select>
        </p><br><br>

    <h2 class="text">Contact details</h2>

        
        <p ID="cit">City    
        <select type="text" value="" name="Cit">
            <option>SELECT</option>  
            <option>kolkata</option> 
            <option>Mumbai</option> 
            <option>Pune</option>
        </select></p><br><br>
 
      <div class="textbox">
      <p ID="add"> Address: <input type="text" size=65 name="Add" placeholder="Please enter your address here!"></p></div><br>

      <div class="textbox">
      <p ID="email">E-mail Address: <input type="text" size=65 name="EMail" placeholder="Someone@example.com"></p></div><br><br>   

      
      <p ID="phone">Phone: <input type="number" size=65 name="Telephone" min="0" placeholder="Enter your number"></p>

    <h2 class="text">Security details</h2> 

      <div class="textbox">
      <p ID="password">Password: <input type="password" size=65 name="Password" placeholder="Enter your Password"></p></div><br>

      <div class="textbox">
      <p ID="confirm_password">Confirm Password: <input type="password" size=65 name="ConfirmPassword"  placeholder="Confirm your Password"></p></div><br>   
        
      <p>Have an account? <a href="userlogin.php" style="color: white;"><u>Try login.</u></a>
      </p>


        
        <p><input type="submit" class="submit_button" value="REGISTER" name="Submit">
         <input type="reset" class="reset_button" value="RESET" onClick="reset_button()" name="Reset">   
        </p>  

</form>
</div>
</body>
</html> 



