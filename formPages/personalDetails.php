<?php
  

 ?>
<div id="Home" class="tabcontent">
   <h3>|Personal Details</h3>
   <h5>DAILY COVID -19 SYMPTOM SCREENING ASSESSMENT.</h5>
   <p>Please complete this online daily self-screening questionnaire before leaving home and before coming onto Campus</p>
   <p>NB: Persons are not permitted onto Campus if the below screening has not been done</p>

   <p id="erroNames" style="color:red"></p>
   <label>Enter Full Name(s):</label><br>
	   <input type="text" id="names" name="names" required><br><br>

	 <p id="erro1" style="color:red"></p>
   <label id="lnumber"><?php echo $firstLine ;?></label><br>
	    <input type="number" id="number" name="number" required><br><br>

   <label><?php echo $secLine; ?></label><br>
	    <input type="text" name="type" id="type" required><br><br>

   <p id="erroNumber" style="color:red"></p>
   <label>Enter Contact Number:</label><br>
	    <input type="number" id="phoneNum" name="phoneNum" required>
   <br><br>

   <button class="tablink"  name="next" id="next1">NEXT</button>
</div>
