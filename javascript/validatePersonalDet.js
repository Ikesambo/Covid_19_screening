
  function ValidateDetails() {

    //Validating full Names
   var names = document.getElementById('names').value
   if (!names==""&&names.length<6) {
       document.getElementById("erroNames").innerHTML = "Please provide a valid Full Name(s)";
       document.getElementById("next1").disabled = true;
   }
   else{
       document.getElementById("erroNames").innerHTML = "";
       document.getElementById("next1").disabled = false;
   }


     //Validating Student No, Staff No And Id No
    //Validating Student No(8 Characters Required)
   var pValue=document.getElementById('lnumber').innerHTML;
   var x = document.getElementById('number').value
   if(pValue=="Please Enter Student No:"){

     if (!x==""&&x.length!=8) {
         document.getElementById("erro1").innerHTML = "Please provide a valid Student No";
         document.getElementById("next1").disabled = true;
     }
     else if(!x==""&&!/[0-9]/.test(x)){
         document.getElementById("erro1").innerHTML = "Please provide a valid Student No";
         document.getElementById("next1").disabled = true;
   }
     else{
         document.getElementById("erro1").innerHTML = "";
         document.getElementById("next1").disabled = false;
      }
   }
   //Validating Staff no

  if(pValue=="Please Enter Staff No:"){

     if (!x==""&&x.length!=6) {
         document.getElementById("erro1").innerHTML = "Please provide a valid Staff No";
         document.getElementById("next1").disabled = true;
     }
     else if(!x==""&&!/[0-9]/.test(x)){
         document.getElementById("erro1").innerHTML = "Please provide a valid Staff No";
         document.getElementById("next1").disabled = true;
   }
     else{
         document.getElementById("erro1").innerHTML = "";
         document.getElementById("next1").disabled = false;
      }
   }
   //Else Validate Id Number
   if(pValue=="Enter Id Number"){

	 if (!x==""&&x.length!=13) {
         document.getElementById("erro1").innerHTML = "Please provide a valid Id No";
         document.getElementById("next1").disabled = true;
     }
     else if(!x==""&&!/[0-9]/.test(x)){
         document.getElementById("erro1").innerHTML = "Please provide a valid Id No";
         document.getElementById("next1").disabled = true;
   }
     else{
         document.getElementById("erro1").innerHTML = "";
         document.getElementById("next1").disabled = false;
      }


   }


 //validating  Contact No
   var number = document.getElementById('phoneNum').value
   if (!number==""&&number.length<10) {
       document.getElementById("erroNumber").innerHTML = "Please provide a valid Contact No";
       document.getElementById("next1").disabled = true;
   }
   else if(!number==""&&!/[0-9]/.test(number)){
       document.getElementById("erroNumber").innerHTML = "Please provide a valid Contact No";
       document.getElementById("next1").disabled = true;
   }
   else{
       document.getElementById("erroNumber").innerHTML = "";
       document.getElementById("next1").disabled = false;
   }


}
