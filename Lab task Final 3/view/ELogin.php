<?php
  include "EHeader.php";
  ?>
<?php    

$username_err =  $password_err = "";
$username = $password = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") 
{


  if (empty($_POST["username"])) {
    $username_err = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
  }
   

  if(empty($_POST["password"])){
 
    $password_err = "password is required";
  }

  else {
    $password = test_input($_POST["password"]);
  }
 if(isset($_POST["rememberme"]))
 {
 
    setcookie('usernamecookie',$username,time()+86400);
    setcookie('passwordcookie',$password,time()+86400);
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
                         $data = file_get_contents("../data/employeedata.json");
                      $arr= json_decode($data,true);

                              
                      
                            
                                 
                     foreach($arr as list("Name"=>$ename,"Email"=>$email,"Address"=>$address,"phone number"=>$number,"Password"=>$password,"Dob"=>$dateofbirth,"Gender"=>$gender) )  
                          {  
                            

                                 
                          
                              
                      
                            

                    
                          if($_POST["username"] == $ename && $_POST["password"] == 
                                 $password)

                         {

                         header( 'Location: EHomepage.php');

                         $_SESSION['eName'] =  $ename;
                         $_SESSION['eMail'] =  $email;
                         $_SESSION['eaddress'] =  $address;
                         $_SESSION['ephone'] =  $number;
                         $_SESSION['edob'] =  $dateofbirth;
                         $_SESSION['egender'] =  $gender;
                            

                         }
                       else{

                       $error = "<label class='text-danger'>Incorrect username or password!</label>"; 

                        }
                      }
                      }
                      else{

                        echo ' ';
                      }
                      
               ?> 

 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Login</title> 
           <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" />  

<br></br> 
<div style="text-align:right;">
  

</div>
     </head>  
       <br />  
</body>
</html>

<html>
<head>
<script>
function validateForm() {
  let x = document.forms["login"]["username"].value;
  if (x == "") {
    alert("Username must be filled out");
    return false;
  }
}

function validateForm1() {
  let y = document.forms["login"]["password"].value;
  if (y == "") {
    alert("Password must be filled out");
    return false;
  }
}


</script>


</head>
 </div>
 <div class="container" style="width:500px;">  
                <h2 align="">Login</h2>      
                <p>Please fill in your credentials to login.</p>  

<form style="text-align:left;" form name="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="POST" onsubmit="return validateForm(),validateForm1()">
  

    Username: <input type="text" name="username" class="form-control" placeholder="Enter Your Username" value="<?php if(isset($_COOKIE['usernamecookie'])) { echo $_COOKIE['usernamecookie'];} ?>">
  <br></br>
  
  Password: <input type="password" name="password" class="form-control"placeholder="Enter Your Password" value="<?php if(isset($_COOKIE['passwordcookie'])) { echo $_COOKIE['passwordcookie'];} ?>"> 
<br>
<input type="checkbox" name="rememberme" >
<span>Remember Me</span> 
<br>
 <div style="text-align:left;">

  <input  type="submit" name="submit" value="Login" class="btn btn-info" >    
    <p>Don't have an account? <a href="ESign Up.php">Sign up now</a>.
      <br></br>

<?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  

                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>
  

</form>

</div>
</body>
</html>
</div>


<?php
  include "EFooter.php";
  ?>