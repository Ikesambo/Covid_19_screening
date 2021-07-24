<?php

  class fetchData{

    function fecthDataFun($conn,$tableName,$userCode){

       $query="select * From $tableName where userCode = '$userCode'";
       $results=mysqli_query($conn,$query);

       if($results){
         return $results;
       }
       else{
         echo"Something Went wrong in fetchData Class";
       }
     }
   }

 ?>
