<?php
session_start();
include("checking.php");
$userCode=$_SESSION['userCode'];
$expDate= Date('Y-M-d',strtotime(' + 1 days'));
$notice=$_SESSION['notice'];
if(isset($_POST['pdf'])){
  header("LOCATION:GeneratePDF/generatePdf");
}

?>
<style>
  body {
      padding:20px;
  }
</style>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/style2.css">
  </head>
  <body>
    <form method="POST">
    <div class="container-1">
      <br><br>
       <h1 style="width:80%;margin:0 auto;">|YOU ARE NOT ALLOWED TO ACCESS THE CAMPUS</h1>
       <div style="color:red;margin-left:10%"><br>
         <br><br>
         <?php echo $notice; ?>
       </div>
       <br>
       <canvas id="qr-code" style="margin-left:26%"></canvas><br><br><br>
       <p style="width:80%;margin:0 auto;text-align:left">This Token expires:<b><?php echo $expDate." 00:00 AM";?></b></p>
        <br/>
        <div class="container-2">
        <button  name="pdf">Generate PDF file</button>
        </div>
   </form>
	</body>
</html>
