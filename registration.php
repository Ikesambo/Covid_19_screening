<?php
 SESSION_START();
 $_SESSION['type'];
 $type=$_SESSION['type'];
 class Person{
	 //Properties
	 public $type;
	 public $secondLine;
	 public $thirdLine;

	 //methods
	 function setLines($type){
		 if($type=='employee'){
			 $this->secLine="Please Enter Staff No:";
			 $this->thirdLine="From which University entity / division / school:";
		 }
		 else if($type=='student'){
			 $this->secLine="Please Enter Student No:";
			 $this->thirdLine="From which University entity / division / school:";
		 }
         else if($type=='constructor'||$type=='s_provider'||$type=='suplier'){
			 $this->secLine="Enter Id Number";
             $this->thirdLine="Please Company Name:";
		 }
         else{
			 $this->secLine="Enter Id Number";
			 $this->thirdLine="Reaso For Visiting the University:";
		 }
	 }
	 function getSecLine(){
		 return $this->secLine;
	 }
	 function getThirdLine(){
		 return $this->thirdLine;
	 }
 }

 $results=new person();
 $results->setLines($type);
 $firstLine=$results->getSecLine();
 $secLine=$results->getThirdLine();



?>

<!DOCTYPE html>
<html>
<head><title>ONLINE SCREENING</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="styles/style.css">
   <link rel="stylesheet" href="styles/style2.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
</head>
<body style="margin:0 auto">
<form method="POST" onchange="ValidateDetails()">
   <button class="tablink" onclick="openPage('Home', this, 'red')" id="defaultOpen">PERSONAL DETAILS</button>
   <button class="tablink" onclick="openPage('News', this, 'red')"id="sec_page" >SYMPTOM</button>
   <button class="tablink" onclick="openPage('Contact', this, 'red')"id="third_page" name="myPage">Contact Risk</button>
   <button class="tablink" onclick="openPage('About', this, 'red')"id="fourth_page">Other Risk Factors</button>

<?php
     include("formPages/personalDetails.php");
     include("formPages/conditions.php");
     include("formPages/contactRisks.php");
     include("formPages/otherFactors.php");
 ?>

<script>
    function openPage(pageName,elmnt,color) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
           tabcontent[i].style.display = "none";
           }
              tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
              tablinks[i].style.backgroundColor = "";
           }
        document.getElementById(pageName).style.display = "block";
        elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
var page='<?php echo $page;?>';
document.getElementById(page).click();
</script>

 <script src="javascript/validatePersonalDet.js"></script>

</body>
</html>
