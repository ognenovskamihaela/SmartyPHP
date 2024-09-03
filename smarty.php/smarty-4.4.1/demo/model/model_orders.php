<?php
require_once "popo/orders.php";
require_once "dao/orders.php";
$objOrders=new OrdersDAO(($DB));
$results=$objOrders->selectOrders();
//var_dump($results);
$data_orders=array();
foreach($results as $row){
    //echo $row["d_id"],"<br>";
    //assoc "index"=>value;
    $data_orders[]=array("n_id"=>$row["n_id"],
                  "date"=>$row["date"],
                  "s_id"=>$row["s_id"],
                  "u_id"=>$row["u_id"],
                  "d_id"=>$row["d_id"],
                  "name"=>$row["name"],
                  "last_name"=>$row["last_name"],
                  "adress_petshops"=>$row["adress_petshops"],
                  "phone_number"=>$row["phone_number"],
                  "product_name"=>$row["product_name"],
                  "price"=>$row["price"],
                  "title"=>$row["title"],
                  "city"=>$row["city"],
                  "adress_users"=>$row["adress_users"],);
}//END foreach
/*var_dump($data_orders);
exit();*/
$smarty->assign("orders",$data_orders);

?>