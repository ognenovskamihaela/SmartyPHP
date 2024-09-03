<?php
/* Smarty version 4.4.1, created on 2024-03-11 16:17:36
  from 'C:\xampp\htdocs\smarty.php\smarty-4.4.1\demo\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65ef209048a8e8_26941014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '092dd880dad9f268741896705202104e72c5525a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty.php\\smarty-4.4.1\\demo\\templates\\index.tpl',
      1 => 1710170246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:categories.tpl' => 1,
    'file:employees.tpl' => 1,
    'file:orders.tpl' => 1,
    'file:petshops.tpl' => 1,
    'file:products.tpl' => 1,
    'file:users.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65ef209048a8e8_26941014 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '135018806965ef20903da731_03790893';
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>
 
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
$_smarty_tpl->_subTemplateRender("file:categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:employees.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:orders.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:petshops.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:users.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h3><?php echo $_smarty_tpl->tpl_vars['full_name']->value;?>
</h3>

<!-- 
    An example of section looped key values:

    <?php
$__section_sec1_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['contacts']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_0_total = $__section_sec1_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_0_total !== 0) {
for ($__section_sec1_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_0_iteration <= $__section_sec1_0_total; $__section_sec1_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
        phone: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['phone'];?>

        <br>

            fax: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['fax'];?>

        <br>

            cell: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['cell'];?>

        <br>
    <?php
}
}
?>
-->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
