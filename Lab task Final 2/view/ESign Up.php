<?php
  include "EHeader.php";
  ?>
<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if (!preg_match("/^[a-zA-Z-' ]*$/",($_POST["fname"])))  
      {  
           $error = "<label class='text-danger'>Name,Only use letter.</label>";  
      }
      

      else if (!filter_var(($_POST["email"]), FILTER_VALIDATE_EMAIL)) 
      {  
           $error = "<label class='text-danger'>Enter an valide e-mail</label>";  
      } 
      else if(empty($_POST["add"]))  
      {  
           $error = "<label class='text-danger'>Enter Your address</label>";  
      }

      else if(empty($_POST["pnumber"]))  
      {  
           $error = "<label class='text-danger'>Enter Phone Number</label>";  
      }


     else if(empty($_POST["np1"]))  
      {  
           $error = "<label class='text-danger'>Enter a username</label>";  
      }  

      elseif((strlen($_POST["np1"]))<='8'){

       $error="<label class='text-danger'>Password,Must be at least 8 digit</label>";
     }


      else if(empty($_POST["rp1"]))  
      {  
           $error = "<label class='text-danger'>password is required</label>";  
      }  

      else if(($_POST["rp1"])!=($_POST["np1"]))
     {
          $error = "<label class='text-danger'>Same password is required</label>"; 

      }

      else if (empty($_POST["dob"])) {
          $error = "<label class='text-danger'>Date Of Birth is required</label>";  
       } 
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Gender cannot be empty</label>";  
      } 
       
      else  
      {  
           if(file_exists('../data/employeedata.json'))  
           {  
                $current_data = file_get_contents('../data/employeedata.json');  
                // echo "old data: <br>". $current_data."<br>";
                $array_data = json_decode($current_data, true);  
                $new_data = array(  
                     
    'Name'=> $_POST["fname"],
    'Email'=>$_POST["email"],
    'Address'=>$_POST["add"],
    'phone number'=>$_POST["pnumber"],
    'Password'=>$_POST["np1"],
    'Dob'=>$_POST["dob"],
    'Gender'=>$_POST["gender"]
                );  

                // echo "new data:";
                // echo json_encode($new_data);
                $array_data[] = $new_data;  
                $final_data = json_encode($array_data);  

                // echo "final data: <br>". $final_data."<br>";
                if(file_put_contents('../data/employeedata.json', $final_data))  
                {  
                     $message = "<label class='text-success'>SignUp Successfull</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Sign Up </title> 
           <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" />  

<br></br> 
<div style="text-align:right;">
<li><a href="ELogin.php">Login</a></li>


</div>
     </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Sign Up</h3>      
                <p>Please fill this form to create an account.</p>          
                <form method="post">  
                   
                     <br />  
                     <label>Name</label>  
                     <input type="text" name="fname" class="form-control" placeholder="Enter your username "required  /><br />  

                    

                     <label>E-mail</label>
                     <input type="text" name = "email" class="form-control" placeholder="Enter your e-mail "required /><br />


                     <label>Phone Number</label>
                     <input type="Number" name = "pnumber" class="form-control"placeholder="Enter your phone number "required  /><br />

                     <label>Address</label>
                     <input type="text" name = "add" class="form-control"placeholder="Enter your address "required /><br />



                    <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" id="male" name="gender" value="male" >
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label><br>

                     <legend>Date of Birth:</legend>
                     <input type="date" name="dob" required > <br><br>
                     </fieldset>

                     <label>Password</label>
                     <input type="password" name = "np1" class="form-control" placeholder="Enter a password "required /><br />
                   
                     <label>Confirm Password</label>
                     <input type="password" name = "rp1" class="form-control" placeholder="Again enter a password"required/><br />
                     
                   

                     <input type="submit" name="submit" value="Sign Up" class="btn btn-info" /><br />                      
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
           <br />  
      </body>  
 </html>  
 <?php
  include "EFooter.php";
  ?>