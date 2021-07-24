<div id="News" class="tabcontent" style="background-color:#E7E9EB;">
   <h3>|CONDITION / SYMPTOM</h3>
   <p>I hereby attest that the information provided in the below checklist is a true reflection of my screening results.</p>
   <h5>Symptom Check (Please select the relevant response in the yes / no Options Below)</h5>
   <br>
   <label>1.Are yo suffering from fever/high temperature or have temperature influctuations?</label><br>
   <div class="radio-toolbar">
     <p style="color:red" id="error1"></p>
     <input type="radio" id="temperatureYes" name="firstResults" value="yes" onclick="enable()">
     <label for="temperatureYes">YES</label>

     <input type="radio" id="temperatureNo" name="firstResults" value="no" onclick="enable()">
   <label for="temperatureNo">NO</label>
   </div>
   <p>&nbsp;</p>

     <label>2.Do you have a dry cough?</label><br>
   <div class="radio-toolbar">
     <input type="radio" id="coughY" name="secResults" value="yes" onclick="enable()">
     <label for="coughY">YES</label>

     <input type="radio" id="coughN" name="secResults" value="no" onclick="enable()">
     <label for="coughN">NO</label>
   </div>
   <p>&nbsp;</p>

   <label>3.Do you have a sore throat?</label><br>
   <div class="radio-toolbar">
     <input type="radio" id="throatYes" name="thirdResults" value="yes" onclick="enable()">
     <label for="throatYes">YES</label>

     <input type="radio" id="throatNo" name="thirdResults" value="no" onclick="enable()">
     <label for="throatNo">NO</label>
   </div>
   <p>&nbsp;</p>

   <label>4.Do you have redness of eyes?</label><br>
   <div class="radio-toolbar">
     <input type="radio" id="eyeYes" name="fourthResults" value="yes" onclick="enable()">
     <label for="eyeYes">YES</label>

     <input type="radio" id="eyeNo" name="fourthResults" value="no" onclick="enable()">
     <label for="eyeNo">NO</label>
   </div>
   <p>&nbsp;</p>

   <label>5.Do you experience shortness of breath / difficulty in breathing?</label><br>
   <div class="radio-toolbar">
     <input type="radio" id="breathYes" name="fifthResults" value="yes" onclick="enable()" onclick="enable()">
     <label for="breathYes">YES</label>

     <input type="radio" id="breathNo" name="fifthResults" value="no" onclick="enable()" onclick="enable()">
     <label for="breathNo">NO</label>
   </div>
   <p>&nbsp;</p>

   <label>6.Have you got unusual body aches / muscle pain?</label><br>
   <div class="radio-toolbar">
     <input type="radio" id="achesoYes" name="sixthResults" value="yes" onclick="enable()">
     <label for="achesoYes">YES</label>

     <input type="radio" id="achesoNo" name="sixthResults" value="no"  onclick="enable()">
     <label for="achesoNo">NO</label>
   </div>
   <p>&nbsp;</p>

   <label>7.Do you experience a loss of smell / taste? </label><br>
   <div class="radio-toolbar">
     <input type="radio" id="smellYes" name="sevResults" value="yes" onclick="enable()">
     <label for="smellYes">YES</label>

     <input type="radio" id="smellNo" name="sevResults" value="no"  onclick="enable()">
     <label for="smellNo">NO</label>
   </div>
   <p>&nbsp;</p>

    <label>8.Are you nausea and/or do you experience unusual vomiting?</label><br>
    <div class="radio-toolbar">
      <input type="radio" id="vomitingYes" name="eightResults" value="yes" onclick="enable()">
      <label for="vomitingYes">YES</label>

      <input type="radio" id="vomitingNo" name="eightResults" value="no" onclick="enable()">
      <label for="vomitingNo">NO</label>
    </div>
    <p>&nbsp;</p>

    <label>9.Have you got diarrhea?</label><br>
    <div class="radio-toolbar">
       <input type="radio" id="diarrheaYes" name="nineResults" value="yes" onclick="enable()">
       <label for="diarrheaYes">YES</label>

       <input type="radio" id="diarrheaNo" name="nineResults" value="no" onclick="enable()">
       <label for="diarrheaNo">NO</label>
    </div>
    <p>&nbsp;</p>

    <label>10.Do you suffer from fatigue / physical weakness / tiredness? </label><br>
    <div class="radio-toolbar">
       <input type="radio" id="tirednessYes" name="lastResults" value="yes" onclick="enable()">
       <label for="tirednessYes">YES</label>

       <input type="radio" id="tirednessNo" name="lastResults" value="no"  onclick="enable()">
       <label for="tirednessNo">NO</label>
    </div>
    <p>&nbsp;</p>

    <button class="tablink" name="secNext" id="secNext">NEXT</button>

</div>
