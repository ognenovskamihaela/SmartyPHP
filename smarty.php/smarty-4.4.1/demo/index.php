<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require '../libs/Smarty.class.php';
$smarty = new Smarty;
//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$smarty->assign("full_name","Mihaela Ognenovska");
$smarty->assign(
    "contacts",
    array(
        array("phone" => "1", "fax" => "2", "cell" => "3"),
        array("phone" => "555-4444", "fax" => "555-3333", "cell" => "760-1234")
    )
);
/*
$smarty->assign("categories",array(
    //asocijativna niza
    //     key   => value
    array("title"=>"drugo"),
    array("title"=>"hrana"),
    array("title"=>"obleka")
));

$smarty->assign("employees",array(
    array("v_id"=>16,"first_name"=>"Vesna","last_name"=>"Ognenov","salary"=>30000,"d_id"=>1)
));
*/
require_once "lib/database_new.php";
$DB=new Databases();
$data=array();
//including all models with CRUD operations
require_once "model/model_categories.php";
require_once "model/model_employees.php";
require_once "model/model_orders.php";
require_once "model/model_petshops.php";
require_once "model/model_products.php";
require_once "model/model_users.php";
$smarty->display('index.tpl');
