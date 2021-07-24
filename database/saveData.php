<?php
session_start();
include("connection.php");
include("insertData.php");

$status="Not Accepted";
$names=$_SESSION['names'];
$idNum=$_SESSION['number'];
$compType=$_SESSION['type'];
$phoneNum=$_SESSION['phoneNum'];

//calling the InsertData Class
$insert=new insertData();

//Generating Random String
$my=$insert-> generateRandomString(20);
$_SESSION['userCode']=$my;

//Inserting Personal Data
$insert->insertPersonalDetails($conn,$names,$idNum,$compType,$phoneNum);

$firstResults=$_SESSION['firstResults'];
$secResults=$_SESSION['secResults'];
$thirdResults=$_SESSION['thirdResults'];
$fourthResults=$_SESSION['fourthResults'];
$fifthResults=$_SESSION['fifthResults'];
$sixthResults=$_SESSION['sixthResults'];
$sevResults=$_SESSION['sevResults'];
$eightResults=$_SESSION['eightResults'];
$nineResults=$_SESSION['nineResults'];
$lastResults=$_SESSION['lastResults'];


$insert->insertSymptoms($firstResults,$secResults,$thirdResults,
                         $fourthResults,$fifthResults,$sixthResults,$sevResults,
                         $eightResults,$nineResults,$lastResults);



$meetRe=$_COOKIE['meet'];
$testRe=$_COOKIE['tested'];

$insert->insertRisk($meetRe,$testRe);


$sufferR= $_COOKIE['suffer'];
$ageR=$_COOKIE['age'];

$insert->insertFactors($sufferR,$ageR);

   $symptomResults="";
   $contactResults="";
   $otherFac="";
   if($firstResults=='yes'||$secResults=='yes'||$thirdResults=='yes'||$fourthResults=='yes'
      ||$fifthResults=='yes'||$sixthResults=='yes'||$sevResults=='yes'||$eightResults=='yes'||
      $nineResults=='yes'||$lastResults=='yes')
      {
        $symptomResults="yes";
      }

     if($meetRe=='yes'||$testRe=='yes'){
        $contactResults="yes";
      }
     if($sufferR=='yes'||$ageR=='yes'){
        $otherFac="yes";
      }


     if($contactResults=='yes'&&$symptomResults=='yes'){
        $notice=".Don’t attempt to enter Campus<br><br>
                 .Consult your Healthcare Worker to seek advice.<br><br>
                 <a>.Urgently notify your Supervisor / Manager / HoS / Course Coordinator if you cannot come onto Campus.<br><br>
                 <a>.If you reside on Campus then remain in your room, seek advice telephonically from relevant CHRL staff and
                    follow the CHRL COVID-19 protocol<br><br>
                 <a>.Only enter Campus again if cleared by a Healthcare Worker.<br>";
        $_SESSION['notice']=$notice;
        header("LOCATION:../notAccess");
     }

    else if($symptomResults=='yes'&&$contactResults!='yes'){
      //Does not mean you have covid
        $notice="this does not mean that you definitely have COVID-19.
                 This screening questionnaire is used as precautionary indicator to establish whether you should be
                 quarantined. Tests may be required for a definite diagnosis to be made.";
        $_SESSION['notice']=$notice;
        header("LOCATION:../notAccess");
    }

    else if($symptomResults!='yes'&&$otherFac=='yes'){
      //Requires a decision
      $sql="update personaldata set status='Accepted' where userCode='$my'";
      mysqli_query($conn,$sql);
      header("LOCATION:../proof");

    }
     else{
        //Get a proof to access the campus
       $sql="update personaldata set status='Accepted' where userCode='$my'";
       mysqli_query($conn,$sql);
       header("LOCATION:../proof");
    }



 ?>
