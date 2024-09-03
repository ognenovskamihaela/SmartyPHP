<?php
/* Smarty version 4.4.1, created on 2024-03-11 16:18:10
  from 'C:\xampp\htdocs\smarty.php\smarty-4.4.1\demo\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65ef20b2db87e8_59426547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bfa5ad3d917b153efedefc3e724b64611da2bf6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty.php\\smarty-4.4.1\\demo\\templates\\header.tpl',
      1 => 1710170288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ef20b2db87e8_59426547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '206902387065ef20b2d25a10_00278298';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Petshop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
  
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">PETSHOP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Petshops</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categories
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Food</a>
            <a class="dropdown-item" href="#">Clothes</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Other</a>
          </div>
        </li>
        <li class="nav-item">
        <a class="nav-item nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
        <a class="nav-item nav-link" href="#">Employees</a>
        </li>
        <li class="nav-item">
        <a class="nav-item nav-link" href="#">Orders</a>
        </li>
        <li class="nav-item">
        <a class="nav-item nav-link" href="#">Users</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</head>
<body class="bg-dark">




<?php }
}
