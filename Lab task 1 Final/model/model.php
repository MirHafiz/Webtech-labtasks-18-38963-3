<?php 

require_once 'db_connect.php';



function ESignUp($data){
	$conn = db_conn();


    $sql = "INSERT INTO user(Name, Email, Address, PN, Gender,Dob ,Password)
VALUES (:Name, :Email, :Address, :PN,:Gender,:Dob, :Password)";
    try{
        $stmt = $conn->prepare($sql);
        $stmt->execute([

  ':Name' => $data['Name'],
  ':Email' => $data['Email'],
  ':Address' => $data['Address'],
   ':PN' =>$data['PN'],
  ':Gender' => $data['Gender'],
  ':Dob' => $data['Dob'],
':Password' => $data['Password'],

        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

