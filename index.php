<?php include("QuadraticEquation.php"); ?>
<?php
 $quadratic = new quadraticEquation(1,1,1);
 echo "delta = ".$quadratic->getDiscriminant()."<br>";
 try{
      echo "No1: ".$quadratic->getRoot1()."<br>";
      echo "No2: ".$quadratic->getRoot2()."<br>";
      echo "dung";
 }catch (Exception $e) {
     echo 'Message: ' . $e->getMessage() ;
 }



