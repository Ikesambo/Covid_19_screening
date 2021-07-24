<?php
session_start();
include("checking.php");
$userCode=$_SESSION['userCode'];
echo "<script>alert($userCode)</script>";
$expDate= Date('Y-M-d',strtotime(' + 1 days'));

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
       <h1 style="width:80%;margin:0 auto;">|Covid-19 Screening Access Code</h1>
       <div class="secHead"><br>
         <br><p style="margin: auto 0;width:80%
           ;margin:0 auto;text-align:left">Please note this must be presented at the Gates</p><br><br>
           <p>Staff/Stud/Id No:</p>
           <p><b><?php echo $_SESSION['number'];?></b></p>
           <p>Name(s):</p>
           <p><b><?php echo $_SESSION['names'];?></b></p>
       </div>
       <br>
       <canvas id="qr-code" style="margin-left:26%"></canvas><br><br><br>
       <p style="width:80%;margin:0 auto;text-align:left">This Token expires:<b><?php echo $expDate." 00:00 AM";?></b></p>
        <br/>
        <div class="container-2">
        <button  name="pdf">Generate PDF file</button>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
		<script>
			var qr;
			(function() {
                    qr = new QRious({
                    element: document.getElementById('qr-code'),
                    size: 400,

                });
            })();

            function generateQRCode() {
                var qrtext = '<?php echo $userCode;?>' ;
                qr.set({
                    foreground: 'black',
                    size: 400,
                    value: qrtext
                });
            }
            generateQRCode();
		</script>
   </form>
	</body>
</html>
