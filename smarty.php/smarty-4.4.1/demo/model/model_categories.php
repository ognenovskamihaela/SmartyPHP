<?php
require_once "popo/categories.php";
require_once "dao/categories.php";
$objCategories=new CategoriesDAO($DB);
$results=$objCategories->selectCategories();
//var_dump($results);
$data_categories=array();
foreach($results as $row){
    //echo $row["d_id"],"<br>";
    //assoc "index"=>value;
    $data_categories[]=array("title"=>$row["title"]);
}//END foreach
//var_dump($data_categories);
$smarty->assign("categories",$data_categories);
?>