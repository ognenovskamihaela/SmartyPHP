<?php
/* Smarty version 4.4.1, created on 2024-03-11 16:32:32
  from 'C:\xampp\htdocs\smarty.php\smarty-4.4.1\demo\templates\petshops.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65ef2410b713a6_79092113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d9be48d6397a5a454ccceec65ab6bf34be184b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty.php\\smarty-4.4.1\\demo\\templates\\petshops.tpl',
      1 => 1710171138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ef2410b713a6_79092113 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '32032927065ef2410b67f92_68019369';
?>
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
                    <?php
$__section_index_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['petshops']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_index_3_total = $__section_index_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_index'] = new Smarty_Variable(array());
if ($__section_index_3_total !== 0) {
for ($__section_index_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] = 0; $__section_index_3_iteration <= $__section_index_3_total; $__section_index_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']++){
?>
                        <tr><td><?php echo $_smarty_tpl->tpl_vars['petshops']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['d_id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['petshops']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['adress'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['petshops']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['city'];?>
</td>
                            <td title="edit"><i class="fa fa-edit"></i></td>
                            <td title="delete"><i class="fa fa-trash" style="color:red"></i></td></tr>
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
