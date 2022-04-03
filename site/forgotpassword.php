<?php
  session_start();
  include "dbconnect.php";
  $msg = "";
  if($_SERVER['REQUEST_METHOD']=='POST')
    {
    $email = $_REQUEST['email'];
    $tot = "SELECT * from registrationform where email ='$email'";

    $select = mysqli_query($con, $tot) or die('Error Quering Database.');
    $count = mysqli_num_rows($select);
    $row = mysqli_fetch_array($select);
    if($count > 0){

    }

    }
?>

<!DOCTYPE html>
<html>
<head>
  <title>RESET PASSWORD</title>
  <script> 
function FormData()                                    
{ 
    var u_ser = document.forms["resetform"]["email"];
}  
</script>
<link rel="stylesheet" type="text/css" href="userlogin.css">
</head>
<body>
  <div class="login-box">
    <h2>Forgot Password</h2>
    <form action= "password_reset_code.php" method="POST" name="resetform" onsubmit="return FormData()">
      
      <div class="textbox">
        <input type="email" name="email" required="" id="u_ser">
        <label>Email</label>
      </div>
      <span>
        <input type="submit" name="" value="SEND CODE" class="btn">
      </span>
    </form>  
  </div>
</body>
</html>