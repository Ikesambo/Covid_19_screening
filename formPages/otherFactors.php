<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js">
</script>
<!------ Include the above in your HEAD tag ---------->

<div id="preloader">
   <div id="loader"></div>
</div>
<div id="About" class="tabcontent" style="background-color:#E7E9EB;">
    <h3>|Other Risk Factors</h3>
    <p>Other Risk Factors (Please select the relevant response in the yes / no)</p>
    <label>1.Do you suffer from any pre-existing medical condition / chronic illness
           that may have compromised your immune system, i.e. respiratory disease, diabetes,
           heart disease, or any other chronic illness that could compromise one’s immune system?In
           the past 10 days have you tested positive for COVID-19?
    </label><br>
    <div class="radio-toolbar">
       <p style="color:red" id="error1"></p>
       <input type="radio" id="sufferYes" name="sufferR" value="yes" onclick="getValue(),enable_submit()">
       <label for="sufferYes">YES</label>

       <input type="radio" id="sufferNo" name="sufferR" value="no" onclick="getValue(),enable_submit()">
       <label for="sufferNo">NO</label>
    </div>
    <p>&nbsp;</p>

    <label>2.Are you 60 years of age or older?</label><br>
    <div class="radio-toolbar">
       <input type="radio" id="ageYes" name="ageResults" value="yes" onclick="getSec_Value(),enable_submit()">
       <label for="ageYes">YES</label>

       <input type="radio" id="ageNo" name="ageResults" value="no" onclick="getSec_Value(),enable_submit()">
       <label for="ageNo">NO</label>
   </div>
   <p>&nbsp;</p>
   <button name="submit" class="tablink" onclick="register()" id="submit">SUBMIT</button>
 </div>
<script>
   document.getElementById('submit').disabled=true;
</script>
<?php
  include("cookies.php");
  $answer= "
  <script>
   function save(){
     var ValA;
   }
   function getValue(){
     var a='';
     if(document.getElementById('sufferYes').checked){
     a='yes';
     }
     else if(document.getElementById('sufferNo').checked) {
     a='no';

   }
  return  createCookie('suffer',a,2);

}
function getSec_Value(){
  var b='';
  if(document.getElementById('ageYes').checked){
  b='yes';
  }
  else if(document.getElementById('ageNo').checked) {
  b='no';

}
  return  createCookie('age',b,2);
}
function enable_submit(){

  var a='',b='';
  if(document.getElementById('sufferYes').checked)
  {
    a='yes';
  }
  else if(document.getElementById('sufferNo').checked){
    a='yes';
  }
  if(document.getElementById('ageYes').checked){
    b='yes';
  }
  else if(document.getElementById('ageNo').checked){
    b='yes';
  }

  if(a!=''&&b!='')
  {
    document.getElementById('submit').disabled=false;
    document.getElementById('submit').style.background='#339DFF';
  }
}
</script>
";
echo $answer;




?>

<script>
function register(){
  swal("COVID-19 ONLINE ASSESSMENT", "Successfully Registered", "success", {
    button: "OK",
  }).then (function(){
    window.location = "database/saveData";
  });
}
</script>
