<?php
include("assets/firebase/db.php");

if(isset($_POST['push'])){ 
    
 $bandName=$_POST['bandName'];
 $collegeName=$_POST['collegeName'];
$noofmembers=$_POST['noofmembers'];

 $contact1=$_POST['contact1'];
 $contact2=$_POST['contact2'];
 $data=  [
  'bandName' => $bandName,
  'collegeName' =>$collegeName,
  'noofmembers' => $noofmembers,
  'contact1' => $contact1,
  'contact2' => $contact2
 ];
 $ref="contact_form_data/";
 $pushData =$database->getReference($ref)->push($data);

 header("Location:index.php");
} 




?>