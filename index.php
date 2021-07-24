<?php
include("checking.php");
include("database/deleteFromDb.php");  //D
SESSION_START();
$_COOKIE['tested']=" ";
$_COOKIE['meet']=" ";

function get_type(){
   if(isset($_POST['employee'])){
	   $type="employee";
	   $_SESSION['type']=$type;
	   header("LOCATION:firstPage");
   }
   else if(isset($_POST['student'])){
	   $type="student";
	   $_SESSION['type']=$type;
	   header("LOCATION:firstPage");
   }
   else if(isset($_POST['constructor'])){
	   $_SESSION['type']=$type;
	   header("LOCATION:firstPage");
	   $type="constructor";
   }
   else if(isset($_POST['s_provider'])){
       $type="s_provider";
	   $_SESSION['type']=$type;
	   header("LOCATION:firstPage");
   }
   else if(isset($_POST['suplier'])){
	   $type="supplier";
	   $_SESSION['type']=$type;
	   header("LOCATION:firstPage");
   }
   else if(isset($_POST['visitor'])){
	   $type="other";
	   $_SESSION['type']=$type;
	   header("LOCATION:firstPage");
   }

}

get_type();


?>

<!DOCTYPE html>
<html>
<head><title>ONLINE SCREENING</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles/style.css">
</head>
<body>
   <form method="POST">
   <div class="container-1">
     <img src="logo/download.jpg">
     <p>Department of Health Covid19 24-Hour Hotline Number: 0800 029 999 and WhatsApp number: 0600 12 3456</p>
     <h5>DAILY COVID -19 SYMPTOM SCREENING ASSESSMENT</h5>
  	 <p><b>Please complete this online daily self-screening questionnaire before leaving home and before coming onto Campus.<b> </p>
	   <p class="notice"><b>NB:</b><u> Persons are not permitted onto Campus if the below screening has not been done</u></p>
     <div class="container-2">
	   <h4>Are You??</h4>
     <button name="employee">Employee</button><br>
	   <button name="student">Student</button><br>
	   <button name="constructor">Contractor</button><br>
	   <button name="s_provider">Service Provider</button><br>
	   <button name="suplier">Supplier</button><br>
	   <button name="visitor">Visitor</button><br>
     </div>
   <div>
   </form>
 </body>
