<?php
 session_start();
 include("database/connection.php");
 $id=$_SESSION['number'];
 $sql="select userCode from personaldata where id='$id'";
 $results=mysqli_query($conn,$sql);
 $rows=mysqli_fetch_assoc($results);

 //creating a session
 $userCode=$rows['userCode'];
 $_SESSION['userCode']=$userCode;
 header("LOCATION:GeneratePDF/generatePdf");

 ?>
