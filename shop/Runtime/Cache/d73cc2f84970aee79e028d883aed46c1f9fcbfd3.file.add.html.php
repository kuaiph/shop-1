<?php /* Smarty version Smarty-3.1.6, created on 2018-11-15 12:48:13
         compiled from "F:/wamp/www/shop/Admin/View\Good\add.html" */ ?>
<?php /*%%SmartyHeaderCode:32465beadf23258596-23924744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd73cc2f84970aee79e028d883aed46c1f9fcbfd3' => 
    array (
      0 => 'F:/wamp/www/shop/Admin/View\\Good\\add.html',
      1 => 1542257268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32465beadf23258596-23924744',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5beadf2332056',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5beadf2332056')) {function content_5beadf2332056($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加商品</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @Admin_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》添加商品信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="./admin.php?c=goods&a=showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>商品名称</td>
                    <td><input type="text" name="good_name" /></td>
                </tr>
                <tr>
                    <td>商品价格</td>
                    <td><input type="text" name="good_price" /></td>
                </tr>
                 <tr>
                    <td>商品数量</td>
                    <td><input type="text" name="good_number" /></td>
                </tr>
                 <tr>
                    <td>商品图片</td>
                    <td><input type="file" name="good_pic" /></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="添加">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>