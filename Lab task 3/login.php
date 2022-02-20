<html>
<head>

</head>
<body>

<h2 style="text-align:center;"> Login</h2></br>




<?php
$nameErr =  $passErr = $passErr2= "";
$name = $password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {


  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
   

  if(empty($_POST["password"])){
 
    $passErr = "password is required";
  }
 
 elseif((strlen($_POST["password"]))<8){

    $passErr2="Must enter 8 digit";
  }

  else {
    $password = test_input($_POST["password"]);
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


  User Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  
  Password: <input type="text" name="password">
  <span class="error">* <?php echo $passErr;?></span>
  <span class="error"> <?php echo $passErr2;?></span>
  <br><br>


  
  <input type="submit" name="submit" value="Submit">  <a href="forgot.php">forgot password</a>



</form>

<a href="signup.php"><button>Create new account</button></a>



</body>
</html>
