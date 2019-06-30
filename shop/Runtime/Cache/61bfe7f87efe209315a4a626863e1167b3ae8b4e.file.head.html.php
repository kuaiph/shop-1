<?php /* Smarty version Smarty-3.1.6, created on 2018-11-15 19:20:48
         compiled from "F:/wamp/www/shop/Admin/View\Index\head.html" */ ?>
<?php /*%%SmartyHeaderCode:31795beae3ba8f3ae4-98968489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61bfe7f87efe209315a4a626863e1167b3ae8b4e' => 
    array (
      0 => 'F:/wamp/www/shop/Admin/View\\Index\\head.html',
      1 => 1542280469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31795beae3ba8f3ae4-98968489',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5beae3ba960f4',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5beae3ba960f4')) {function content_5beae3ba960f4($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo @Admin_CSS_URL;?>
admin.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <table cellspacing=0 cellpadding=0 width="100%" 
               background="<?php echo @Admin_IMG_URL;?>
header_bg.jpg" border=0>
            <tr height=56>
                <td width=260><img height=56 src="<?php echo @Admin_IMG_URL;?>
header_left.jpg" 
                                   width=260></td>
                <td style="font-weight: bold; color: #fff; padding-top: 20px" 
                    align=middle>
                    当前用户：<?php echo $_SESSION['admin_name'];?>
 &nbsp;&nbsp; 
                    <a style="color: #fff" 
                    href="" 
                    target=main>
                修改口令</a> 
                &nbsp;&nbsp; 
                <a style="color: #fff" 
                    onclick="if (confirm('确定要退出吗？')) return true; else return false;" 
                    href="<?php echo @__MODULE__;?>
/Manager/logout" target=_top>退出系统
                </a> 
                </td>
                <td align=right width=268><img height=56 
                                               src="<?php echo @Admin_IMG_URL;?>
header_right.jpg" width=268></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="100%" border=0>
            <tr bgcolor=#1c5db6 height=4>
                <td></td>
            </tr>
        </table>
    </body>
</html><?php }} ?>