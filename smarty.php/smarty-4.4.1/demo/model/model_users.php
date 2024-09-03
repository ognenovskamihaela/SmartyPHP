<?php
require_once "popo/users.php";
require_once "dao/users.php";
$objUsers=new UsersDAO(($DB));
$results=$objUsers->selectUsers();
//var_dump($results);
$data_users=array();
foreach($results as $row){
    //echo $row["d_id"],"<br>";
    //assoc "index"=>value;
    $data_users[]=array("u_id"=>$row["u_id"],
                  "name"=>$row["name"],
                  "last_name"=>$row["last_name"],
                  "adress"=>$row["adress"],
                  "phone_number"=>$row["phone_number"]);
}//END foreach
$smarty->assign("users",$data_users);

?>