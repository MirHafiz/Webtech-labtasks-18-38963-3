<html>
<head>

</head>
<body>

<h2 style="text-align:center;"> Change Password</h2></br>




<?php



$cpErr =  $npErr = $rpErr = $npErr2="";
$cp = $np = $rp ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["cp"])) {
    $cpErr = "Current Password is required";
  }

   else {
    $cp = test_input($_POST["cp"]);
  }


    
  if (empty($_POST["np"])) {
    $npErr = "New password is required";
  }
  elseif(($_POST["np"])==($_POST["cp"]))
  {
    $npErr2 = "Same password,Try Again";
  }
   else {
    $np = test_input($_POST["np"]);
  }


if (empty($_POST["rp"])) {
    $rpErr = "Same password is required";
  } else {
    $rp = test_input($_POST["rp"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

  <form style="text-align:center;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  


  Current Password: <input type="text" name="cp">
  <span class="error">* <?php echo $cpErr;?></span>
  <br><br>

  New Password: <input type="text" name="np">
  <span class="error">* <?php echo $npErr;?></span>
  <span class="error"> <?php echo $npErr2;?></span>
  <br><br>
  
  Retype new Password: <input type="text" name="rp">
  <span class="error">* <?php echo $rpErr;?></span>
  <br><br>
  
  
  
  <input type="submit" name="submit" value="Submit">  <a href="forgot.php"></a>



</form>

<a href="login.php"><button>Login</button></a>



</body>
</html>
