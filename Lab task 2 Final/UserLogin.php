<html>
<head>

</head>
<body>

<h2 style="text-align:center;">Login</h2></br>
<h5 style="text-align:center;">Please fill in your credentials to login.</h5></br>







<?php                   
    setcookie("Cname",'Login',time()+100000,"/");                           
$emailErr =  $passErr = "";
$email = $password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {


  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
   

  if(empty($_POST["password"])){
 
    $passErr = "password is required";
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

  
  <?php
  session_start();
  $error='';
$message='';

if(isset($_POST["submit"]))  
 {  
    


$uemail=$_POST["email"];
$upass=$_POST["password"];

































 /*require_once 'db_connect.php';
    $conn = db_conn();
    $selectQuery = "SELECT * FROM  user ";

                                 
      foreach($selectQuery as list("Name"=>$name,"Email"=>$mail,"Address"=>$add,"PN"=>$pn,"Gender"=>$gn,"Dob"=>$dob,"Password"=>$pass))  
                          {  
                            

                                 
                          
                    
                          if($_POST["email"] == $mail && $_POST["password"] == $pass)

                         {

                         header( 'Location: UserHome.php');

                         $_SESSION['uname']=  $name; 
                         $_SESSION['uemail']=  $mail; 
                         $_SESSION['uadd']=  $add; 
                         $_SESSION['upn']=  $pn; 
                         $_SESSION['upass']=  $pass; 
                         $_SESSION['udob']=  $dob;   
                         $_SESSION['ugn']=  $gn;                           
                      

                         }
                         else{

                       $error = "Incorrect user email or password"; 

                        }

                     }





                        $_SESSION['uname']=  $Name; 
                         $_SESSION['uemail']=  $Email; 
                         $_SESSION['uadd']=  $Address; 
                         $_SESSION['upn']=  $PN; 
                       
                          $_SESSION['ugn']=  $Gender;
                         $_SESSION['udob']=  $Dob;   
                            $_SESSION['upass']=$Password; 
                            */                         
              
 }
               ?> 






 <form style="text-align:center;" action="controller/login.php" method="POST" enctype="multipart/form-data">
 

 <div class="container" style="width:400px;"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  

    UserName: <input type="text" name="UserName" class="form-control" placeholder="Enter your Username"required>
  <span class="error"><?php echo $emailErr;?></span>
  <br><br>
  
  Password: <input type="password" name="password" class="form-control" placeholder="Enter your Password"required>
  <span class="error"> <?php echo $passErr;?></span>
 
  <br><br>


 
    <input  type="submit" name="submit" value="Login" class="btn btn-info" >    <a href="UserPassForget.php">SignUp</a>


                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>

                     <?php   
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>
</form>



</div>



</body>
</html>
