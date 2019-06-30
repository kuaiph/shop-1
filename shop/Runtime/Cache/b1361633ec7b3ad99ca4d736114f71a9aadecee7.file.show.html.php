<?php /* Smarty version Smarty-3.1.6, created on 2018-11-15 18:08:32
         compiled from "F:/wamp/www/shop/Admin/View\Good\show.html" */ ?>
<?php /*%%SmartyHeaderCode:30205beae4162c1be5-82476235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1361633ec7b3ad99ca4d736114f71a9aadecee7' => 
    array (
      0 => 'F:/wamp/www/shop/Admin/View\\Good\\show.html',
      1 => 1542274948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30205beae4162c1be5-82476235',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5beae41635ad7',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5beae41635ad7')) {function content_5beae41635ad7($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>会员列表</title>

        <link href="<?php echo @Admin_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{ background-color: #9F88FF }
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：商品管理-》商品列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/add">【添加商品】</a>
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
                        <td>商品名称</td>
                        <td>商品大图</td>
                        <td>商品小图</td>
                        <td>库存</td>
                        <td>价格</td>
                        <td align="center">操作</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr id="product<?php echo $_smarty_tpl->tpl_vars['v']->value['good_id'];?>
">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['good_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['good_name'];?>
</td>
                        <td><img style="width: 60px;height: 60px;" src="<?php echo @ROOT;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['good_big_img'];?>
"></td>
                        <td><img style="width: 40px;height: 40px;" src="<?php echo @ROOT;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['good_small_img'];?>
"></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['good_number'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['good_price'];?>
</td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/update/good_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['good_id'];?>
">修改</a>
                        <a href="#" onclick="javascript:if(confirm('确定删除吗?'))location='<?php echo @__CONTROLLER__;?>
/delete/good_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['good_id'];?>
'">删除</a></td>
                    </tr>
                   <?php } ?>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                            <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html><?php }} ?>