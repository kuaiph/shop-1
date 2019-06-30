<?php /* Smarty version Smarty-3.1.6, created on 2018-11-16 14:09:36
         compiled from "F:/wamp/www/shop/Admin/View\Manager\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:219845bee5ba4ba9334-23652080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7abf1ed553835effb90c202f107c938c540b8c4b' => 
    array (
      0 => 'F:/wamp/www/shop/Admin/View\\Manager\\showlist.html',
      1 => 1542348574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219845bee5ba4ba9334-23652080',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5bee5ba4c5d50',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bee5ba4c5d50')) {function content_5bee5ba4c5d50($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>管理员列表</title>

        <link href="<?php echo @Admin_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{ background-color: #9F88FF }
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：管理员管理-》管理员列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="#">【添加管理员】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="#" method="get">
                    品牌<select name="s_product_mark" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <option value="1">苹果apple</option>
                    </select>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>管理员名称</td>
                        <td>最近登录时间</td>
                        <td>分配权限角色ID</td>
                        <td align="center">操作</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ma_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ma_name'];?>
</td>
                        <td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['v']->value['ma_time']);?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ma_role_id'];?>
</td>
                        <td><!-- <a href="#">修改</a> -->
                        <a href="javascript:;" onclick="javascript:if(confirm('确定删除吗?'))location='<?php echo @__CONTROLLER__;?>
/delete/ma_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ma_id'];?>
'">删除</a></td>
                    </tr>
                  <?php } ?>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                            [1]
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html><?php }} ?>