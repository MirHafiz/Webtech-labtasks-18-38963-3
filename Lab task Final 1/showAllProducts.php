<?php
  include "EHeader.php";
  ?>
<?php  
require_once 'controller/ProductInfo.php';

$students = fetchAllStudents();


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title>Show All Products</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" /> 
           <div style="text-align:right;">
</head>
<body>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>Product Name</th>
			<th>Color</th>
			<th>Size</th>
			<th>Price</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($students as $i => $student): ?>
			<tr>
				<td><a href="showProduct.php?id=<?php echo $student['ID'] ?>"><?php echo $student['Name'] ?></a></td>
				<td><?php echo $student['Surname'] ?></td>
				<td><?php echo $student['Username'] ?></td>
				<td><?php echo $student['Password'] ?></td>
				<td><img width="100px" src="uploads/<?php echo $student['image'] ?>" alt="<?php echo $student['Name'] ?>"></td>
				<td><a href="editProduct.php?id=<?php echo $student['ID'] ?>">Edit</a>&nbsp<a href="controller/deleteProduct.php?id=<?php echo $student['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>
<?php
  include "EFooter.php";
  ?>