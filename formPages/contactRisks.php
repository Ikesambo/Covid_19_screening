
<div id="Contact" class="tabcontent" style="background-color:#E7E9EB;">
  <h3>|Contact Risk</h3>
  <p>Contact / Exposure Risk (Please select Yes Or No Below)</p>
  <label>1.In the past 10 days have you tested positive for COVID-19?</label><br>
  <div class="radio-toolbar">
    <p style="color:red" id="error1"></p>
    <input type="radio" id="testedYes" name="testedR" value="yes" onclick="getValue(),enable_sec()">
    <label for="testedYes">YES</label>

    <input type="radio" id="testedNo" name="testedR" value="no" onclick="getValue(),enable_sec()">
    <label for="testedNo">NO</label>
  </div>
  <p>&nbsp;</p>

   <label>2.In the past 10 days were you exposed* to someone who is positively diagnosed with COVID-19,
            or to someone who is in quarantine / self-isolation for COVID-19?</label><br>
   <a style="color:red">* Exposed in family or community setting is spending >15 minutes in infected person’s company
        AND being 1.5m apart AND not wearing a face mask.
         * Exposed in clinical setting is not wearing proper PPE, or PPE failure AND spending
         >15 minutes in infected person’s company AND being 1.5m apart</a><br>
  <div class="radio-toolbar">
    <input type="radio" id="meetYes" name="meetResults" value="yes" onclick="getSec_Value(),enable_sec()">
    <label for="meetYes">YES</label>

    <input type="radio" id="meetNo" name="meetResults" value="no"  onclick="getSec_Value(),enable_sec()">
    <label for="meetNo">NO</label>
  </div>
  <p>&nbsp;</p>
  <button class="tablink" onclick="openPage('About', this, 'blue'),save()" id="third_Click" name="third_Click">NEXT</button>
</div>
<script>

  document.getElementById('third_Click').disabled=true;

</script>
<?php
include("cookies.php");

$answer= "
<script>

function getValue(){
  var a='';
  if(document.getElementById('testedYes').checked){
     a='yes';
   }
  else if(document.getElementById('testedNo').checked) {
     a='no';
  }
  return  sessionStorage.setItem('tested', a);
  }
  function getSec_Value(){
    var b='';
    if(document.getElementById('meetYes').checked){
      b='yes';
   }
  else if(document.getElementById('meetNo').checked) {
      b='no';
   }
  return  sessionStorage.setItem('meet', b);
   }
 function enable_sec(){
   var a='',b='';
   if(document.getElementById('testedYes').checked)
    {
      a='yes';
    }
   else if(document.getElementById('testedNo').checked){
     a='no';
    }
   if(document.getElementById('meetYes').checked){
     b='yes';
    }
     else if(document.getElementById('meetNo').checked){
    b='no';
    }

 if(a!=''&&b!=''){

    sessionStorage.setItem('tested', a);
    createCookie('tested',a,2);
    createCookie('meet',b,2);
    sessionStorage.setItem('meet', b);
    document.getElementById('third_Click').style.background='#339DFF';
    document.getElementById('third_Click').disabled=false;

  }

}
</script>
";
echo $answer;

?>
