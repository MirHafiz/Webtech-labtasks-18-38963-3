<?php
  include "EHeader.php";
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
    <meta charset="UTF-8">
           <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" /> 
</head>
<body>
    <?php 
        include "nav.php";

     ?>
      <div class="container" style="width:300px;">         
   

 <form action="controller/createProduct.php" method="POST" enctype="multipart/form-data">
  <label for="name">Product Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="surname">Color:</label><br>
  <input type="text" id="surname" name="surname"><br>
  <label for="username">Product Size:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="password">Price:</label><br>
  <input type="password" id="password" name="password"><br>
  <label for=>Upload Product Image:</label><br>
  <input type="file" name="image"><br><br>
  <br></br>
  <input type="submit" name = "createStudent" value="Upload Product">
  <input type="reset"> 
</form> 

</body>
</html>
</div>
<?php
  include "EFooter.php";
  ?>
