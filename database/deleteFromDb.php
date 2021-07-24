<?php
include("connection.php");
  class DeleteData{

    function delete($conn){
      $sql="select userCode from personaldata where expire_date<=CURDATE()";
      $results=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_array($results))
      {

          $userCodes[]=$row['userCode'];

      }
      $rowCount=mysqli_num_rows($results);
      for($i=0;$i<$rowCount;$i++){

      $sql1Del="Delete from otherfactors where userCode LIKE('%$userCodes[$i]%')";
      $symptomsDel="Delete from symptoms where userCode LIKE('%$userCodes[$i]%')";
      $contactDel="Delete from contactrisk where userCode LIKE('%$userCodes[$i]%')";
      $personalDataDel="Delete from personaldata where userCode LIKE('%$userCodes[$i]%')";

      $resDel=mysqli_query($conn,$sql1Del);
      $resSec=mysqli_query($conn,$symptomsDel);
      $resThird=mysqli_query($conn,$contactDel);
      $resFourth=mysqli_query($conn,$personalDataDel);
      
      if(!$resDel)
      {
        echo "something went wrong";
      }
    }
           //$sql1="Delete * from personaldata where expire_date<=CURDATE()";
    }
  }

  $res=new DeleteData();
  $res->delete($conn);

 ?>
