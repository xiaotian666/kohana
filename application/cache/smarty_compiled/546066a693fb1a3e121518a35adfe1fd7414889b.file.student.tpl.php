<?php /* Smarty version Smarty-3.1.18, created on 2016-05-10 22:35:36
         compiled from "C:\Users\jinha\Desktop\kohana-v3.3.5\application\views\student.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86525732a7ebe0c7a8-63096929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '546066a693fb1a3e121518a35adfe1fd7414889b' => 
    array (
      0 => 'C:\\Users\\jinha\\Desktop\\kohana-v3.3.5\\application\\views\\student.tpl',
      1 => 1462937688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86525732a7ebe0c7a8-63096929',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5732a7ebef1c72_12290408',
  'variables' => 
  array (
    'value' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5732a7ebef1c72_12290408')) {function content_5732a7ebef1c72_12290408($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="resource/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="resource/bootstrap-table-master/src/bootstrap-table.css">

    <script src="resource/bootstrap/js/jquery.min.js"></script>
    <script src="resource/bootstrap/js/bootstrap.min.js"></script>
    <script src="resource/bootstrap-table-master/src/bootstrap-table.js"></script>
    <script src="resource/bootstrap-table-master/src/extensions/export/bootstrap-table-export.js"></script>
</head>
<body>
    <table id="table"
           data-toggle="table"
           data-show-export="true"
           data-pagination="true"
           data-click-to-select="true"
           data-toolbar="#toolbar">
        <thead>
        <tr>
            <th data-field="name">学号</th>
            <th data-field="begin">姓名</th>
        </tr>
        </thead>
        <body>
        <?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable(Student::getAllStudent(), null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['value']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
        <tr class="gradeX">

            <td class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['t']->value['studentId'];?>
</td>
            <td class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['t']->value['name'];?>
</td>
        </tr>
        <?php } ?>
        </body>
    </table>
</body>
</html><?php }} ?>
