<?php
  include "EHeader.php";
  ?>
<?php 

require_once 'controller/ProductInfo.php';
$student = fetchStudent($_GET['id']);


 include "nav.php";



 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Product</title>
    <meta charset="UTF-8">
           <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" /> 
</head>
<body>
<div class="container" style="width:300px;"> 
 <form action="controller/updateProduct.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $student['Name'] ?>" type="text" id="name" name="name"><br>
  <label for="surname">Surname:</label><br>
  <input value="<?php echo $student['Surname'] ?>" type="text" id="surname" name="surname"><br>
  <label for="username">User Name:</label><br>
  <input value="<?php echo $student['Username'] ?>" type="text" id="username" name="username"><br>
  <input type="file" name="image"><br><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateStudent" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>
<?php
  include "EFooter.php";
  ?>

