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
	<title>Product Info</title>
</head>
<body>

<table>
	<tr>
		<th>Product Name</th>
		<th>Color</th>
		<th>Size</th>
		<th>Price</th>
		<th>Image</th>
	</tr>
	<tr>
		<td><a href="showStudent.php?id=<?php echo $student['ID'] ?>"><?php echo $student['Name'] ?></a></td>
		<td><?php echo $student['Surname'] ?></td>
		<td><?php echo $student['Username'] ?></td>
		<td><?php echo $student['Password'] ?></td>
		<td><img width="100px" src="uploads/<?php echo $student['image'] ?>" alt="<?php echo $student['Name'] ?>"></td>
	</tr>

</table>


</body>
</html>
<?php
  include "EFooter.php";
  ?>