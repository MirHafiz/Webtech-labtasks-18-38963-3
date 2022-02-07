<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.error{
			color: red;
		}
	</style>
</head>
<body>
	<?php
	// define variables and set to empty values
	$nameErr = $emailErr = $genderErr = $dateofbirthErr = $degreeErr = $bloodgroupErr = "";
	$name = $email = $gender = $dateofbirth  = $degree = $bloodgroup = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["name"])) {
	    $nameErr = "Name is required";
	  } else {
	    $name = test_input($_POST["name"]);
		if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
		  $nameErr = "Only letters and white space allowed";
		  $name = "";
		}
	  }

	  if (empty($_POST["email"])) {
	    $emailErr = "Email is required";
	  } else {
	    $email = test_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  $emailErr = "Invalid email format";
		  $email="";
		}
	  }


	  if (empty($_POST["dateofbirth"])) {
	    $dateofbirth = "";
	  } else {
	    $dateofbirth = test_input($_POST["dateofbirth"]);
	  }

	  if (empty($_POST["gender"])) {
	    $genderErr = "Gender is required";
	  } else {
	    $gender = test_input($_POST["gender"]);
	  }
	}
	if (empty($_POST["degree"])) {
	    $degreeErr = "Degree is required";
	  } else {
	    $degree = test_input($_POST["degree"]);
	  }

	  if (empty($_POST["bloodgroup"])) {
	    $bloodgroupErr = "Gender is required";
	  } else {
	    $bloodgroup = test_input($_POST["bloodgroup"]);
	  }
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	?>

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		Name: <input type="text" name="name" value="<?php echo $name;?>">
		<span class="error">* <?php echo $nameErr;?></span>
		<br><br>
		E-mail:
		<input type="text" name="email" value="<?php echo $email;?>">
		<span class="error">* <?php echo $emailErr;?></span>
		<br><br>
		Date Of Birth:
		<input class="nice" type="date" name="<?php echo $dateofbirth?>" >
		<span class="error"><?php echo $dateofbirthErr;?></span>
		<br><br>
		Gender:
		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="female") echo "checked";?>
		value="female">Male
		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="male") echo "checked";?>
		value="male">Female
		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="other") echo "checked";?>
		value="other">Other
		<span class="error">* <?php echo $genderErr;?></span>
		<br><br>
		Degree:
		<input type="checkbox" name="degree"
		<?php if (isset($dender) && $dender=="SSC") echo "checked";?>
		value="SSC">SSC
		<input type="checkbox" name="degree"
		<?php if (isset($degree) && $degree=="HSC") echo "checked";?>
		value="HSC">HSC
		<input type="checkbox" name="degree"
		<?php if (isset($degree) && $degree=="BSc") echo "checked";?>
		value="BSc">BSC
		<input type="checkbox" name="degree"
		<?php if (isset($degree) && $degree=="MSc") echo "checked";?>
		value="MSc">MSC
		<br><br>
		Blood Group:
        <label for="blood Group"></label>
        <select name="bloodgroup" id="bloodgroup">
	    <option value="">--- Choose a Blood Group ---</option>
	    <option value="a+">A+</option>
	    <option value="a-">A-</option>
	    <option value="b+">B+</option>
	    <option value="b-">B-</option>
        <option value="o+">O+</option>
        <option value="o-">O-</option>
        <option value="ab+">AB+</option>
        <option value="ab-">AB-</option>
        
        <br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<h2>Your input</h2>
	<?php 
			echo $name."<br>";
			echo $email."<br>";
			echo $dateofbirth."<br>";
			echo $gender."<br>";
			echo $degree."<br>";
			echo $bloodgroup."<br>";
	 ?>
</body>
</html>