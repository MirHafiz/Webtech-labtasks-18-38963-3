<?php
  include "EHeader.php";
  ?>
<!DOCTYPE html>
<html>
<head>
   <title>Profile</title> 
           <meta charset="UTF-8">
           <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" /> 
           <div style="text-align:right;">
<br><br>
<li><a href="EHomePage.php">HomePage</a></li>
<li><a href="Elogin.php">Logout</a></li>



</div> 

</head>
<body>





<div style="text-align:center;">
<h2 >Employee Profile</h2></br>




<table class="table table-bordered">
	<tr>

<th>Name: </th>

<th>E-mail: </th>

<th>Adderss:</th>

<th>Phone Number:</th>

<th>Date of birth:</th>

<th>Gender:</th>
</tr>


<?php
session_start();





echo '<tr>
<td>'.$_SESSION['eName'].'</td>

<td>'.$_SESSION['eMail'].'</td>

<td>'.$_SESSION['eaddress'].'</td>

<td>'.$_SESSION['ephone'].'</td>

<td>'.$_SESSION['edob'].'</td>

<td>'.$_SESSION['egender'].'</td>

</tr>';





?>
</div>
</table>







</body>
</html>
<?php
  include "EFooter.php";
  ?>