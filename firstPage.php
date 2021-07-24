 <?php
 $page="defaultOpen";
 include("registration.php");
 include("database/connection.php");
 echo "<script>document.getElementById('sec_page').disabled=true
               document.getElementById('third_page').disabled=true
               document.getElementById('fourth_page').disabled=true
       </script>";


 if(isset($_POST['next'])){
	 $page="sec_page";
	 $names=$_POST['names'];
	 $number=$_POST['number'];
	 $type=$_POST['type'];
	 $phoneNum=$_POST['phoneNum'];

   $sql="select * from personaldata where id='$number'";
   $res=mysqli_query($conn,$sql);
   $numRows=mysqli_num_rows($res);
   $_SESSION['names']=$names;
   $_SESSION['number']=$number;
   $_SESSION['type']=$type;
   $_SESSION['phoneNum']=$phoneNum;
   if($numRows==0){

     echo "<script>document.getElementById('sec_page').disabled=false
	               document.getElementById('sec_page').click()
	               document.getElementById('defaultOpen').disabled = true
                 document.getElementById('third_page').disabled = true
                 document.getElementById('fourth_page').disabled = true
	               document.getElementById('names').disabled=true
				         document.getElementById('number').disabled=true
				         document.getElementById('type').disabled=true
				         document.getElementById('phoneNum').disabled=true
          </script>";

        }
        else{
          echo "<script>
                       swal({
                       title: 'Already Registered for Today!!',
                       text: 'Please Click Ok To download Your PDF to provide it as Proof',
                       icon: 'warning',
                       buttons: true,
                       dangerMode: true,
                    })
                       .then((open) => {
                            if (open) {
                                window.location ='downloadPdf';
                          } else {
                              swal('Cancelled');
                          }
                         });
                </script>";
        }

 }
echo "<script>document.getElementById('secNext').disabled=true</script>";
echo "<script>function check(){

        }
		function enable(){
			var a='',b='',c='',d='',e='',f='',g='',h='',i='',j='';
            if(document.getElementById('temperatureYes').checked){
			   a='a';
            }
            else if(document.getElementById('temperatureNo').checked) {
			   a='a';

            }
            if(document.getElementById('coughY').checked){
			   b='b';
            }
            else if(document.getElementById('coughN').checked) {
			   b='b';

            }
            if(document.getElementById('throatYes').checked){
			   c='c';
            }
            else if(document.getElementById('throatNo').checked) {
			   c='c';

            }
            if(document.getElementById('eyeYes').checked){
			   d='d';
            }
            else if(document.getElementById('eyeNo').checked) {
			   d='d';

            }
            if(document.getElementById('breathYes').checked){
			   e='e';
            }
            else if(document.getElementById('breathNo').checked) {
			   e='e';

            }
            if(document.getElementById('achesoYes').checked){
			   f='f';
            }
            else if(document.getElementById('achesoNo').checked) {
			   f='f';

            }
            if(document.getElementById('smellYes').checked){
			   g='g';
            }
            else if(document.getElementById('smellNo').checked) {
			   g='g';

            }
            if(document.getElementById('vomitingYes').checked){
			   h='h';
            }
            else if(document.getElementById('vomitingNo').checked) {
			   h='h';

            }
            if(document.getElementById('diarrheaYes').checked){
			   i='i';
            }
            else if(document.getElementById('diarrheaNo').checked) {
			   i='i';

            }
            if(document.getElementById('tirednessYes').checked){
			   j='j';
            }
            else if(document.getElementById('tirednessNo').checked) {
			   j='j';

            }

            if(a!=''&&b!=''&&c!=''&&d!=''&&e!=''&&f!=''&&g!=''&&h!=''&&i!=''&&j!='')
			{
              document.getElementById('secNext').disabled=false;
              document.getElementById('third_page').disabled = false;
              document.getElementById('secNext').style.background='#339DFF';
			}

		}
   </script>";



 if(isset($_POST['secNext'])){

     $firstResults=$_POST['firstResults'];
     $secResults=$_POST['secResults'];
     $thirdResults=$_POST['thirdResults'];
     $fourthResults=$_POST['fourthResults'];
     $fifthResults=$_POST['fifthResults'];
     $sixthResults=$_POST['sixthResults'];
     $sevResults=$_POST['sevResults'];
     $eightResults=$_POST['eightResults'];
     $nineResults=$_POST['nineResults'];
     $lastResults=$_POST['lastResults'];

     $_SESSION['firstResults']=$firstResults;
     $_SESSION['secResults']=$secResults;
     $_SESSION['thirdResults']=$thirdResults;
     $_SESSION['fourthResults']=$fourthResults;
     $_SESSION['fifthResults']=$fifthResults;
     $_SESSION['sixthResults']=$sixthResults;
     $_SESSION['sevResults']=$sevResults;
     $_SESSION['eightResults']=$eightResults;
     $_SESSION['nineResults']=$nineResults;
     $_SESSION['lastResults']=$lastResults;

     echo "<script>
	               document.getElementById('third_page').disabled=false
	               document.getElementById('third_page').click()
	               document.getElementById('defaultOpen').disabled = true</script>";

 }
//echo "<script>document.getElementById('third_page').disabled=true</script>";


 ?>
