<?php
require_once "popo/employees.php";
require_once "dao/employees.php";
$objEmployees=new EmployeesDAO(($DB));
$results=$objEmployees->selectEmployees();
//var_dump($results);
$data_employees=array();
foreach($results as $row){
    //echo $row["d_id"],"<br>";
    //assoc "index"=>value;
    $data_employees[]=array("v_id"=>$row["v_id"],
                  "first_name"=>$row["first_name"],
                  "last_name"=>$row["last_name"],
                  "short_name"=>strtoupper($row["first_name"][0].".".$row["last_name"][0]."."),
                  "salary"=>$row["salary"],
                  "d_id"=>$row["d_id"],
                  "city"=>$row["city"],
                  "adress"=>$row["adress"],
                "full_adress"=>$row["adress"]." / ".$row["city"]);
}//END foreach
$smarty->assign("employees",$data_employees);
?>