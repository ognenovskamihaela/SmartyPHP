<?php
require_once "popo/products.php";
require_once "dao/products.php";
$objProducts=new ProductsDAO(($DB));
$results=$objProducts->selectProducts();
//var_dump($results);
$data_products=array();
foreach($results as $row){
    //echo $row["d_id"],"<br>";
    //assoc "index"=>value;
    $data_products[]=array("s_id"=>$row["s_id"],
                  "product_name"=>$row["product_name"],
                  "price"=>$row["price"],
                  "title"=>$row["title"]);
}//END foreach
 $smarty->assign("products",$data_products);
?>
