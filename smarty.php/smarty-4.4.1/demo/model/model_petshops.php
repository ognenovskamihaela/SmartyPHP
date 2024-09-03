<?php
 require_once "popo/petshops.php";
 require_once "dao/petshops.php";
 $objPetshops=new PetshopsDAO(($DB));
 $results=$objPetshops->selectPetshops();
 //var_dump($results);
 $data_petshops=array();
 foreach($results as $row){
     //echo $row["d_id"],"<br>";
     //assoc "index"=>value;
      $data_petshops[]=array("d_id"=>$row["d_id"],
                   "city"=>$row["city"],
                   "adress"=>$row["adress"]);
 }//END foreach
/*var_dump($data_orders);
exit();*/
 $smarty->assign("petshops", $data_petshops);

?>