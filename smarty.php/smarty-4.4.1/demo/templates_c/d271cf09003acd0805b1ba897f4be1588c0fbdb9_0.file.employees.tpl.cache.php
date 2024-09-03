<?php
/* Smarty version 4.4.1, created on 2024-03-11 16:32:32
  from 'C:\xampp\htdocs\smarty.php\smarty-4.4.1\demo\templates\employees.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65ef2410af4d40_11033248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd271cf09003acd0805b1ba897f4be1588c0fbdb9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty.php\\smarty-4.4.1\\demo\\templates\\employees.tpl',
      1 => 1710171143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ef2410af4d40_11033248 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '155192818265ef2410ae3c54_31513566';
?>
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
                    <?php
$__section_index_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['employees']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_index_1_total = $__section_index_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_index'] = new Smarty_Variable(array());
if ($__section_index_1_total !== 0) {
for ($__section_index_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] = 0; $__section_index_1_iteration <= $__section_index_1_total; $__section_index_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']++){
?>
                        <tr><td><?php echo $_smarty_tpl->tpl_vars['employees']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['v_id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['employees']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['employees']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['last_name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['employees']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['salary'];?>
 denari</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['employees']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['d_id'];?>
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
