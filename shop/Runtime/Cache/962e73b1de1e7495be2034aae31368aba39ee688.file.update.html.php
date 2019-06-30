<?php /* Smarty version Smarty-3.1.6, created on 2018-11-15 17:07:03
         compiled from "F:/wamp/www/shop/Admin/View\Good\update.html" */ ?>
<?php /*%%SmartyHeaderCode:26605beaed7eead304-23245537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '962e73b1de1e7495be2034aae31368aba39ee688' => 
    array (
      0 => 'F:/wamp/www/shop/Admin/View\\Good\\update.html',
      1 => 1542272815,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26605beaed7eead304-23245537',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5beaed7ef2f85',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5beaed7ef2f85')) {function content_5beaed7ef2f85($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改商品</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @Admin_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》修改商品信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/show">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
                <input type="hidden" name="old_big_pic" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['good_big_img'];?>
" />
                <input type="hidden" name="old_small_pic" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['good_small_img'];?>
" />
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>商品名称</td>
                    <td><input type="text" name="good_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['good_name'];?>
" /></td>
                </tr>
                <tr>
                    <td>商品价格</td>
                    <td><input type="text" name="good_price" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['good_price'];?>
" /></td>
                </tr>
                <tr>
                    <td>商品图片</td>
                    <td><img style="width: 60px;height: 60px;" src="<?php echo @ROOT;?>
<?php echo $_smarty_tpl->tpl_vars['info']->value['good_big_img'];?>
">
                    <input type="file" name="good_pic" /></td>
                </tr>
                <tr>
                    <td>商品数量</td>
                    <td><input type="text" name="good_number" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['good_number'];?>
" /></td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="修改">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>