<?php
//Insert userDetails into a Database

class insertData{
   //properties
   public $conn; //Database connection
   public $userCode;  //unique user code

   //Methods
   //Generate Random String
   function generateRandomString($length = 25) {

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
           $randomString .= $characters[rand(0, $charactersLength - 1)];
         }
           $this->userCode=$randomString;
           return $randomString;

     }

    //Insert into Personal Data Personal Data Table
    function insertPersonalDetails($conn,$v1,$v2,$v3,$v4){

        $userCode=$this->userCode;
        $this->conn=$conn;
        $query="insert into PersonalData
                Values('$userCode','$v1','$v2','$v3','$v4',DATE_ADD(now(),INTERVAL 1 DAY),'Not Accepted')";
        $results=mysqli_query($conn,$query);

        if(!$results){

          echo "Something went wrong on Personal Data Function";

        }
        else{
          return $results;
        }

     }

     //inserting Data into symptoms table
     function insertSymptoms($optOne,$optTwo,$optThree,$optFour,$optFive,$optSix,
             $optSev,$optEight,$optNine,$optTen){

        $userCode=$this->userCode;
        $conn=$this->conn;

        $query="insert into symptoms values('$userCode','$optOne','$optTwo','$optThree',
               '$optFour','$optFive','$optSix','$optSev','$optEight','$optNine','$optTen')";

        $results=mysqli_query($conn,$query);
        if(!$results)
          {
            echo "Something went wrong On Symtoms Function";
          }
        else{
            return $results;
          }

       }

       //insert Data into risks Table
       function insertRisk($optOne,$optTwo){

         $userCode=$this->userCode;
         $conn=$this->conn;

         $query="insert into contactRisk Values('$userCode',
                 '$optOne','$optTwo')";
         $results=mysqli_query($conn,$query);
         if(!$results)
         {
           echo "Something went wrong on contactRisk Class";
         }
         else {
           return $results;
         }

        }
       function insertFactors($optOne,$optTwo){

         $userCode=$this->userCode;
         $conn=$this->conn;

         $query="insert into otherFactors Values('$userCode',
                 '$optOne','$optTwo')";
         $results=mysqli_query($conn,$query);
         if(!$results)
         {
           echo "Something went wrong on otherFactors Class";
         }
         else {
           return $results;
         }
       }

}

 ?>
