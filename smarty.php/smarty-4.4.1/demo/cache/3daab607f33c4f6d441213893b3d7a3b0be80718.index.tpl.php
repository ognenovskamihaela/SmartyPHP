<?php
/* Smarty version 4.4.1, created on 2024-04-16 17:39:25
  from 'C:\xampp\htdocs\smarty.php\smarty-4.4.1\demo\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_661e9bad696a94_07846182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '092dd880dad9f268741896705202104e72c5525a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty.php\\smarty-4.4.1\\demo\\templates\\index.tpl',
      1 => 1710170246,
      2 => 'file',
    ),
    '6bfa5ad3d917b153efedefc3e724b64611da2bf6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty.php\\smarty-4.4.1\\demo\\templates\\header.tpl',
      1 => 1710170288,
      2 => 'file',
    ),
    '94e9bd464aea39b57b8e8377a6ef1cd52598b19a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty.php\\smarty-4.4.1\\demo\\templates\\categories.tpl',
      1 => 1710171150,
      2 => 'file',
    ),
    'd271cf09003acd0805b1ba897f4be1588c0fbdb9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty.php\\smarty-4.4.1\\demo\\templates\\employees.tpl',
      1 => 1710171143,
      2 => 'file',
    ),
    'd7549fde65896c6c87afa2d13b20903ff771ea37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty.php\\smarty-4.4.1\\demo\\templates\\orders.tpl',
      1 => 1710171146,
      2 => 'file',
    ),
    '8d9be48d6397a5a454ccceec65ab6bf34be184b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty.php\\smarty-4.4.1\\demo\\templates\\petshops.tpl',
      1 => 1710171138,
      2 => 'file',
    ),
    'a1e6e33652ef7eae7670564687699b55455af54f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty.php\\smarty-4.4.1\\demo\\templates\\products.tpl',
      1 => 1710171133,
      2 => 'file',
    ),
    '16e9a2eaae21ce9b842456bba3fb1884ca77faff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty.php\\smarty-4.4.1\\demo\\templates\\users.tpl',
      1 => 1710171124,
      2 => 'file',
    ),
    '213ace1824fb6dffc96624c66a6a2009b43c35a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty.php\\smarty-4.4.1\\demo\\templates\\footer.tpl',
      1 => 1709311039,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_661e9bad696a94_07846182 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Petshop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  
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




<div class="container mt-5">
    <div class="row">
        <div class="col-sm-3">
            <h3 class="text-light">New Category</h3>
            <div class="alert alert-success">Successful!</div>
            <div class="alert alert-danger">Unsuccessful!</div>
            <form name="myForm">
                <div class="mb-3 mt-3">
                    <label for="title" class="form-label">Title:</label>
                    <span class="text-danger">Insert a category with at least three characters!</span>
                    <input type="text" class="form-control"  placeholder="Enter category title" name="title" id="title">
                </div>
                <button type="button" class="btn btn-success" name="btnSave">Save</button>
            </form>
        </div>
        <!-- /left content -->
        <div class="col-sm-9">
        <h3 class="text-light">List Categories</h3>  
        <div class="table-responsive">
            <table class="table table-dark table-hover mt-4" >
                <thead>
                    <tr>
                        <th>categories</th>
                        <th>edit</th>
                        <th>delete</th>
                    </tr>
                </thead>
                <tbody>
                                            <tr>
                            <td>clothes</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr>
                            <td>food</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr>
                            <td>medicine</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr>
                            <td>other</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr>
                            <td>test</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr>
                            <td>testest</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                    </tbody>
            </table>  
        </div>       
        </div>
    </div>
    <!-- /class row -->
</div>
<!-- /Container -->
   <div class="container mt-5">
    <div class="row">
        <div class="col-sm-3">
            <h3 class="text-light">New Employee</h3>
            <div class="alert alert-success">Successful!</div>
            <div class="alert alert-danger">Unsuccessful!</div>
            <form name="myForm">
                <div class="mb-3 mt-3">
                    <label for="title" class="form-label">Title:</label>
                    <span class="text-danger">Insert employee</span>
                    <input type="text" class="form-control"  placeholder="Enter employee title" name="title" id="title">
                    </div>
                    <button type="button" class="btn btn-success" name="btnSave">Save</button>
            </form>
        </div>
        <!-- /left content -->
        <div class="col-sm-9">
        <h3 class="text-light">List Employees</h3> 
        <div class="table-responsive"> 
            <table class="table table-dark table-hover mt-4">
                <thead>
                    <tr><th>employee_number</th>
                        <th>employees</th>
                        <th>salary</th>
                        <th>petshop_number</th>
                        <th>edit</th>
                        <th>delete</th>
                    </tr>
                </thead>
                <tbody>
                                            <tr><td>16</td>
                            <td>Vesna Ognenov</td>
                            <td>30000 denari</td>
                            <td>1</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr><td>17</td>
                            <td>Valentina Dostin</td>
                            <td>50000 denari</td>
                            <td>2</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr><td>18</td>
                            <td>Valentina Tinov</td>
                            <td>40000 denari</td>
                            <td>4</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr><td>19</td>
                            <td>Hristina Daskalova</td>
                            <td>35000 denari</td>
                            <td>2</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr><td>20</td>
                            <td>Hristina Angelova</td>
                            <td>25000 denari</td>
                            <td>7</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr><td>21</td>
                            <td>Olivera Ognenoska</td>
                            <td>30000 denari</td>
                            <td>7</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr><td>22</td>
                            <td>Olivera Martinoska</td>
                            <td>28000 denari</td>
                            <td>7</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr><td>23</td>
                            <td>Oliver Ognenovski</td>
                            <td>70000 denari</td>
                            <td>6</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr><td>24</td>
                            <td>Oliver Nikolov</td>
                            <td>70000 denari</td>
                            <td>4</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr><td>25</td>
                            <td>Andrea Milev</td>
                            <td>10000 denari</td>
                            <td>3</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr><td>26</td>
                            <td>Andrea Taneva</td>
                            <td>34000 denari</td>
                            <td>5</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr><td>27</td>
                            <td>Angela Bushkova</td>
                            <td>44000 denari</td>
                            <td>5</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr><td>28</td>
                            <td>Bojan Martinov</td>
                            <td>46000 denari</td>
                            <td>3</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr><td>29</td>
                            <td>Mihaela Popovska</td>
                            <td>39000 denari</td>
                            <td>1</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                    </tbody>
            </table>   
        </div>
        </div>
    </div>
    <!-- /class row -->
</div>
<!-- /Container -->
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-3">
            <h3 class="text-light">New Order</h3>
            <div class="alert alert-success">Successful!</div>
            <div class="alert alert-danger">Unsuccessful!</div>
            <form name="myForm">
                <div class="mb-3 mt-3">
                    <label for="title" class="form-label">Title:</label>
                    <span class="text-danger">Insert order</span>
                    <input type="text" class="form-control"  placeholder="Enter order title" name="title" id="title">
                    </div>
                    <button type="button" class="btn btn-success" name="btnSave">Save</button>
            </form>
        </div>
        <!-- /left content -->
        <div class="col-sm-9">
        
        <h3 class="text-light">Orders</h3>
        <div class="table-responsive">
            <table class="table table-dark table-hover mt-4">
                <thead>
                    <tr>
                    <th>orders</th>
                    <th>date of order</th>
                    <th>products</th>
                    <th>user</th>
                    <th>petshop</th>
                    <th>edit</th>
                    <th>delete</th>
                    </tr>
                </thead>
                <tbody>
                                    <tr><td>13</td>
                        <td>2023-12-11</td>
                        <td>1</td>
                        <td>Marija Ognenov</td>
                        <td>street: Nikola Tesla <br> city: Bitola</td>
                        <td title="edit"><i class="fa fa-edit"></i></td>
                        <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                    </tr>
                                    <tr><td>14</td>
                        <td>2023-12-10</td>
                        <td>3</td>
                        <td>Marija Ognenov</td>
                        <td>street: Nikola Tesla <br> city: Bitola</td>
                        <td title="edit"><i class="fa fa-edit"></i></td>
                        <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                    </tr>
                                    <tr><td>16</td>
                        <td>2023-10-01</td>
                        <td>6</td>
                        <td>Marija Ognenov</td>
                        <td>street: Nikola Tesla <br> city: Bitola</td>
                        <td title="edit"><i class="fa fa-edit"></i></td>
                        <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                    </tr>
                                    <tr><td>12</td>
                        <td>2021-01-24</td>
                        <td>1</td>
                        <td>Mihaela Ognenovska</td>
                        <td>street: Centar <br> city: Prilep</td>
                        <td title="edit"><i class="fa fa-edit"></i></td>
                        <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                    </tr>
                                    <tr><td>31</td>
                        <td>2024-01-10</td>
                        <td>3</td>
                        <td>Mihaela Ognenovska</td>
                        <td>street: Nikola Tesla <br> city: Bitola</td>
                        <td title="edit"><i class="fa fa-edit"></i></td>
                        <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                    </tr>
                                    <tr><td>32</td>
                        <td>2013-11-10</td>
                        <td>6</td>
                        <td>Mihaela Ognenovska</td>
                        <td>street: Nikola Tesla <br> city: Bitola</td>
                        <td title="edit"><i class="fa fa-edit"></i></td>
                        <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                    </tr>
                                    <tr><td>15</td>
                        <td>2023-12-19</td>
                        <td>5</td>
                        <td>Melanija Karanfilov</td>
                        <td>street: Nikola Tesla <br> city: Bitola</td>
                        <td title="edit"><i class="fa fa-edit"></i></td>
                        <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                    </tr>
                                    <tr><td>28</td>
                        <td>2023-12-12</td>
                        <td>9</td>
                        <td>Melanija Karanfilov</td>
                        <td>street: Prilepska <br> city: Bitola</td>
                        <td title="edit"><i class="fa fa-edit"></i></td>
                        <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                    </tr>
                                    <tr><td>29</td>
                        <td>2023-11-01</td>
                        <td>9</td>
                        <td>Melanija Karanfilov</td>
                        <td>street: Mosha Pijade <br> city: Bitola</td>
                        <td title="edit"><i class="fa fa-edit"></i></td>
                        <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                    </tr>
                                    <tr><td>33</td>
                        <td>2024-12-11</td>
                        <td>1</td>
                        <td>Melanija Karanfilov</td>
                        <td>street: Centar <br> city: Ohrid</td>
                        <td title="edit"><i class="fa fa-edit"></i></td>
                        <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                    </tr>
                                    <tr><td>24</td>
                        <td>2023-10-10</td>
                        <td>4</td>
                        <td>Kristijan Kristov</td>
                        <td>street: Nikola Tesla <br> city: Bitola</td>
                        <td title="edit"><i class="fa fa-edit"></i></td>
                        <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                    </tr>
                                    <tr><td>25</td>
                        <td>2023-10-10</td>
                        <td>14</td>
                        <td>Kristijan Kristov</td>
                        <td>street: Prilepska <br> city: Bitola</td>
                        <td title="edit"><i class="fa fa-edit"></i></td>
                        <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                    </tr>
                                    <tr><td>26</td>
                        <td>2023-12-12</td>
                        <td>17</td>
                        <td>Kristijan Kristov</td>
                        <td>street: Centar <br> city: Ohrid</td>
                        <td title="edit"><i class="fa fa-edit"></i></td>
                        <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                    </tr>
                                    <tr><td>34</td>
                        <td>2025-03-02</td>
                        <td>4</td>
                        <td>Kristijan Kristov</td>
                        <td>street: Nikola Tesla <br> city: Bitola</td>
                        <td title="edit"><i class="fa fa-edit"></i></td>
                        <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                    </tr>
                                    <tr><td>17</td>
                        <td>2023-10-01</td>
                        <td>5</td>
                        <td>Dejan Hristov</td>
                        <td>street: Nikola Tesla <br> city: Bitola</td>
                        <td title="edit"><i class="fa fa-edit"></i></td>
                        <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                    </tr>
                                    <tr><td>30</td>
                        <td>2023-11-01</td>
                        <td>10</td>
                        <td>Dejan Hristov</td>
                        <td>street: Nikola Tesla <br> city: Bitola</td>
                        <td title="edit"><i class="fa fa-edit"></i></td>
                        <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                    </tr>
                                    <tr><td>19</td>
                        <td>2023-11-09</td>
                        <td>4</td>
                        <td>Hristijan Hristov</td>
                        <td>street: Nikola Tesla <br> city: Bitola</td>
                        <td title="edit"><i class="fa fa-edit"></i></td>
                        <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                    </tr>
                                    <tr><td>21</td>
                        <td>2023-10-27</td>
                        <td>1</td>
                        <td>Hristijan Hristov</td>
                        <td>street: Nikola Tesla <br> city: Bitola</td>
                        <td title="edit"><i class="fa fa-edit"></i></td>
                        <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                    </tr>
                                </tbody>
            </table>
        </div>
        </div>
    </div>
    <!-- /class row -->
</div>
<!-- /Container -->
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-3">
            <h3 class="text-light">New Petshop</h3>
            <div class="alert alert-success">Successful!</div>
            <div class="alert alert-danger">Unsuccessful!</div>
            <form name="myForm">
                <div class="mb-3 mt-3">
                    <label for="title" class="form-label">Title:</label>
                    <span class="text-danger">Insert petshop</span>
                    <input type="text" class="form-control"  placeholder="Enter petshop title" name="title" id="title">
                    </div>
                    <button type="button" class="btn btn-success" name="btnSave">Save</button>
            </form>
        </div>
        <!-- /left content -->
        <div class="col-sm-9">
        
        <h3 class="text-light">Petshops</h3>
            <table class="table table-dark table-hover mt-4">
            <div class="table-responsive">
                <thead>
                    <tr>
                    <th>petshop number</th>
                    <th>adress</th>
                    <th>city</th>
                    <th>edit</th>
                    <th>delete</th>
                    </tr>
                </thead>
                <tbody>
                                            <tr><td>1</td>
                            <td>Nikola Tesla</td>
                            <td>Bitola</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>2</td>
                            <td>Prilepska</td>
                            <td>Bitola</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>3</td>
                            <td>Mosha Pijade</td>
                            <td>Bitola</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>4</td>
                            <td>Vasko Karangelevski</td>
                            <td>Bitola</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>5</td>
                            <td>Filip II</td>
                            <td>Skopje</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>6</td>
                            <td>Centar</td>
                            <td>Ohrid</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>7</td>
                            <td>Centar</td>
                            <td>Prilep</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>8</td>
                            <td>Vasko Angelevski</td>
                            <td>Bitola</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>9</td>
                            <td>Kole Kaninski</td>
                            <td>Debar</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>10</td>
                            <td>Solunska</td>
                            <td>Veles</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>11</td>
                            <td>Stiv Naumov</td>
                            <td>Berovo</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>12</td>
                            <td>Jorgo Osmano</td>
                            <td>Struga</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>13</td>
                            <td>Koco Colakov</td>
                            <td>Tetovo</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>14</td>
                            <td>Ignjat Atanasovski</td>
                            <td>Radovis</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>15</td>
                            <td>Mirka Ginova</td>
                            <td>Kumanovo</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>16</td>
                            <td>Treta Reonska</td>
                            <td>Strumica</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>17</td>
                            <td>Stiv Naumov</td>
                            <td>Kriva Palanka</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>18</td>
                            <td>13-ta</td>
                            <td>Gevgelija</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>19</td>
                            <td>Aleksandar Veliki</td>
                            <td>Skopje</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>20</td>
                            <td>Vasko Karangelevski</td>
                            <td>Prilep</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                    </tbody>
            </table>
        </div>
        </div>
    </div>
    <!-- /class row -->
</div>
<!-- /Container -->
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-3">
            <h3 class="text-light">New Product</h3>
            <div class="alert alert-success">Successful!</div>
            <div class="alert alert-danger">Unsuccessful!</div>
            <form name="myForm">
                <div class="mb-3 mt-3">
                    <label for="title" class="form-label">Title:</label>
                    <span class="text-danger">Insert product </span>
                    <input type="text" class="form-control"  placeholder="Enter Product title" name="title" id="title">
                    </div>
                    <button type="button" class="btn btn-success" name="btnSave">Save</button>
            </form>
        </div>
        <!-- /left content -->
        <div class="col-sm-9">
                
        <h3 class="text-light">Products</h3>
        <div class="table-responsive">
            <table class="table table-dark table-hover mt-4">
                <thead>
                    <tr>
                    <th>products number</th>
                    <th>product name</th>
                    <th>price</th>
                    <th>categories</th>
                    <th>edit</th>
                    <th>delete</th>
                    </tr>
                </thead>
                <tbody>
                                            <tr>
                            <td>1</td>
                            <td>Dog Food</td>
                            <td>300 denari</td>
                            <td>food</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr>
                            <td>3</td>
                            <td>Cat Food</td>
                            <td>300 denari</td>
                            <td>food</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr>
                            <td>12</td>
                            <td>Vitamin Food </td>
                            <td>1000 denari</td>
                            <td>food</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr>
                            <td>13</td>
                            <td>Vitamin Food for Dogs</td>
                            <td>1000 denari</td>
                            <td>food</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr>
                            <td>14</td>
                            <td>Vitamin Food for Cats</td>
                            <td>900 denari</td>
                            <td>food</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr>
                            <td>15</td>
                            <td>Medicine</td>
                            <td>1200 denari</td>
                            <td>medicine</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr>
                            <td>16</td>
                            <td>Eye Medicine</td>
                            <td>1200 denari</td>
                            <td>medicine</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr>
                            <td>17</td>
                            <td>Food Medicine</td>
                            <td>1200 denari</td>
                            <td>medicine</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr>
                            <td>18</td>
                            <td>Vaccines</td>
                            <td>1200 denari</td>
                            <td>medicine</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr>
                            <td>4</td>
                            <td>Leash</td>
                            <td>100 denari</td>
                            <td>other</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr>
                            <td>5</td>
                            <td>Dog Leash</td>
                            <td>100 denari</td>
                            <td>other</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr>
                            <td>6</td>
                            <td>Cat Leash</td>
                            <td>100 denari</td>
                            <td>other</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr>
                            <td>7</td>
                            <td>Dog Bed</td>
                            <td>800 denari</td>
                            <td>other</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr>
                            <td>8</td>
                            <td>Cat Bed</td>
                            <td>800 denari</td>
                            <td>other</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr>
                            <td>9</td>
                            <td>Toys</td>
                            <td>600 denari</td>
                            <td>other</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr>
                            <td>10</td>
                            <td>Cat Toys</td>
                            <td>600 denari</td>
                            <td>other</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                            <tr>
                            <td>11</td>
                            <td>Dog Toys</td>
                            <td>600 denari</td>
                            <td>other</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                                    </tbody>
            </table>
        </div>
        </div>
    </div>
    <!-- /class row -->
</div>
<!-- /Container -->
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-3">
            <h3 class="text-light">New User</h3>
            <div class="alert alert-success">Successful!</div>
            <div class="alert alert-danger">Unsuccessful!</div>
            <form name="myForm">
                <div class="mb-3 mt-3">
                    <label for="title" class="form-label">Title:</label>
                    <span class="text-danger">Insert user</span>
                    <input type="text" class="form-control"  placeholder="Enter User title" name="title" id="title">
                    </div>
                    <button type="button" class="btn btn-success" name="btnSave">Save</button>
            </form>
        </div>
        <!-- /left content -->
        <div class="col-sm-9">
        
        <h3 class="text-light">Users</h3>
        <div class="table-responsive">
            <table class="table table-dark table-hover mt-4">
                <thead>
                    <tr>
                    <th>user number</th>
                    <th>user</th>
                    <th>adress</th>
                    <th>phone number</th>
                    <th>edit</th>
                    <th>delete</th>
                    </tr>
                </thead>
                <tbody>
                                            <tr><td>1</td>
                            <td>Marija Ognenov</td>
                            <td>Bitola</td>
                            <td>077777777</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>2</td>
                            <td>Mihaela Ognenovska</td>
                            <td>DMH</td>
                            <td>009999999</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>3</td>
                            <td>Melanija Karanfilov</td>
                            <td>Skopje</td>
                            <td>071771271</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>4</td>
                            <td>Kristijan Kristov</td>
                            <td>Prilep</td>
                            <td>070075271</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>5</td>
                            <td>Dejan Hristov</td>
                            <td>Bitola</td>
                            <td>079045221</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>6</td>
                            <td>Hristijan Hristov</td>
                            <td>Skopje</td>
                            <td>075019231</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>7</td>
                            <td>Mihaela Ognenovska</td>
                            <td>Bitola</td>
                            <td>075049561</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>8</td>
                            <td>Maja Ivanoska</td>
                            <td>Ohrid</td>
                            <td>075991234</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>9</td>
                            <td>Petrina Jovanovska</td>
                            <td>Struga</td>
                            <td>077712534</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                            <tr><td>10</td>
                            <td>Sara Mitrovska</td>
                            <td>Bitola</td>
                            <td>073472964</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
                                    </tbody>
            </table>
        </div>
        </div>
    </div>
    <!-- /class row -->
</div>
<!-- /Container -->
<h3>Mihaela Ognenovska</h3>

<!-- 
    An example of section looped key values:

            phone: 1
        <br>

            fax: 2
        <br>

            cell: 3
        <br>
            phone: 555-4444
        <br>

            fax: 555-3333
        <br>

            cell: 760-1234
        <br>
    -->
<div class="card text-center  bg-dark mt-3">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills ">
      <li class="nav-item">
        <a class="nav-link active bg-success" href="#">Petshop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Social Media</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Forms</a>
      </li>
    </ul>
  </div>
  <div class="card-body bg-light">
    <h5 class="card-title bg-dark text-light">WELCOME TO OUR PETSHOPS</h5>
    <p class="card-text bg-dark text-light">Take care of your pets.</p>
    <a href="#" class="btn btn-success text-dark">Follow us on social media</a>
  </div>
</div>
</BODY>
</HTML>
<?php }
}
