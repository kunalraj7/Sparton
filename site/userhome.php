<?php
  session_start();
  include_once ("dbconnect.php");
  $a = $_SESSION['user'];
  $vs = "select * from registrationform where email = '".$a."'";
    $num = mysqli_query($con,$vs);

?>

<!DOCTYPE html>
<html>
<head>

	<title>User Profile</title>
    <link rel="stylesheet" type="text/css" href="userhome.css">
</head>
<body>
    <h2>Hello <?php echo $a; ?></h2><span style="text-align: right;"><a href="userlogin.php"><button>LOGOUT</button></a></span>
    <h1 style="text-align: center;">User Details</h1>
    <table border="1" cellspacing="25" align="center" style="text-align: center;">
        <?php
        $de = mysqli_fetch_assoc($num);
    ?>
        <tr>
            <td><span>First Name</span></td>
            <td><span>Last Name</span></td>
        </tr>

        <tr>
            <td><?php echo $de['first_name'];?></td>
            <td><?php echo $de['last_name'];?></td>
        </tr>

        <tr>
            <td><span>Language</span></td>
            <td><span>Nationality</span></td>
        </tr>

        <tr>
            <td><?php echo $de['lan'];?></td>
            <td><?php echo $de['nat'];?></td>
        </tr>
        
        <tr>    
            <td><span>Date of Birth</span></td>
            <td><span>Gender</span></td>
        </tr>

        <tr>
            <td><?php echo $de['date_of_birth'];?></td>
            <td><?php echo $de['g'];?></td>
        </tr>

        <tr>    
            <td><span>City</span></td>
            <td><span>Address</span></td>
        </tr>

        <tr>
            <td><?php echo $de['cit'];?></td>
            <td><?php echo $de['add'];?></td>
        </tr>

        <tr>    
            <td><span>Email</span></td>
            <td><span>Phone Number</span></td>
        </tr>
    
        <tr>
            <td><?php echo $de['email'];?></td>
            <td><?php echo $de['phone'];?></td>
        </tr>
        
    </table>

    
</body>
</html>