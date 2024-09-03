<?php
/* Smarty version 4.4.1, created on 2024-03-11 16:32:32
  from 'C:\xampp\htdocs\smarty.php\smarty-4.4.1\demo\templates\categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65ef2410ab15c2_53927538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94e9bd464aea39b57b8e8377a6ef1cd52598b19a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty.php\\smarty-4.4.1\\demo\\templates\\categories.tpl',
      1 => 1710171150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ef2410ab15c2_53927538 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '65209264465ef2410a0b5f5_79047567';
?>
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
                    <?php
$__section_index_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['categories']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_index_0_total = $__section_index_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_index'] = new Smarty_Variable(array());
if ($__section_index_0_total !== 0) {
for ($__section_index_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] = 0; $__section_index_0_iteration <= $__section_index_0_total; $__section_index_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']++){
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['categories']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['title'];?>
</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td>
                        </tr>
                    <?php
}
}
?>
                </tbody>
            </table>  
        </div>       
        </div>
    </div>
    <!-- /class row -->
</div>
<!-- /Container -->
   <?php }
}
