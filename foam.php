<?php
require("connect.php");

if(isset($_POST['submit'])){
  $fname = $_REQUEST["fname"];
  $lname = $_REQUEST["lname"];
  $username = $_REQUEST["username"];
  $email = $_REQUEST["email"]; 
  $npassword = $_REQUEST["npassword"];
  $rpassword = $_REQUEST["rpassword"];

  $password ="";


  if($npassword == $rpassword){
    $password =$npassword;
  }
  else {
    echo "password don't match";
  }

  $query1 = "SELECT username,email FROM users ";

  $rs1 = mysqli_query($con, $query1);

  if (mysqli_num_rows($rs1) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($rs1)) {
      echo "id: " . $row["id"]. " - Name: " . $row["fname"]. " ".$row["email"]."<br>";
    }
  } 







$query = "INSERT INTO users(fname,lname ,username,email,password)  
			    VALUES('$fname','$lname','$username','$email','$password')";
      $rs = mysqli_query($con, $query);

     
      if($rs){
				echo "<p style='color:green;'>$fname.$lname  is well registered<br/></p>";
			}else{
				echo "<p style='color:red;'>Hari ikibazo cyavutse ".mysqli_error($con)."</p>";
		    }
      }
?>
<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
  </head>
  <body>
    <div id="foam" style="background-color: rgb(212, 182, 201);">
        <h1 style="padding: 5px; text-align:center ;"><B>Bromen co.LTD</B></h1>
      <h1 style="padding: 5px; text-align:center ;"> FILL THIS FOAM TO CONTINUE</h1>
<form  method="post">
    FName: <input type="text" placeholder="first name" style="padding: 10px;" name="fname"><br>
    LName : <input type="text" placeholder="second name" style="padding: 10px;" name="lname"><br>
    username <input type="text" name="username"><br>
    email: <input type="text" name="email"><br>
    create password <input type="text" name="npassword"><br>
    reEnter password<input type="text" name="rpassword"><br>
    <input type="submit" name="submit"  value="Submit" style="color:rgb(127, 146, 233) ; margin-left: 250px; padding: 10px; background-color: blueviolet;">
  </form>
    </div>
  </body>
</html>