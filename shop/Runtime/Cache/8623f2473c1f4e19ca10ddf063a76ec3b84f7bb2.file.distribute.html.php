<?php /* Smarty version Smarty-3.1.6, created on 2018-11-16 15:22:28
         compiled from "F:/wamp/www/shop/Admin/View\Role\distribute.html" */ ?>
<?php /*%%SmartyHeaderCode:30865bee66db66ddf3-08125104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8623f2473c1f4e19ca10ddf063a76ec3b84f7bb2' => 
    array (
      0 => 'F:/wamp/www/shop/Admin/View\\Role\\distribute.html',
      1 => 1542352944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30865bee66db66ddf3-08125104',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5bee66db6ff91',
  'variables' => 
  array (
    'role_info' => 0,
    'auth_infoA' => 0,
    'v' => 0,
    'have_authids' => 0,
    'auth_infoB' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bee66db6ff91')) {function content_5bee66db6ff91($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>权限列表</title>

        <link href="<?php echo @Admin_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{ background-color: #9F88FF }
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：权限管理-》权限列表&nbsp;&nbsp;[<?php echo $_smarty_tpl->tpl_vars['role_info']->value['role_name'];?>
]</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="#">【添加权限】</a>
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
        <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <input type="hidden" name="role_id" value="<?php echo $_smarty_tpl->tpl_vars['role_info']->value['role_id'];?>
">
            <table class="table_a" border="1" width="100%">
              <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
              <tr>
                <td width="18%">
                    <input type="checkbox" name="auth_id[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['auth_id'],$_smarty_tpl->tpl_vars['have_authids']->value)){?>checked='checked'<?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>

                </td>
                <td>
                    <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoB']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
                    <?php if ($_smarty_tpl->tpl_vars['vv']->value['auth_pid']===$_smarty_tpl->tpl_vars['v']->value['auth_id']){?>
                        <div style="width: 200px;float: left;">
                            <input type="checkbox" name="auth_id[]" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['vv']->value['auth_id'],$_smarty_tpl->tpl_vars['have_authids']->value)){?>checked='checked'<?php }?>>
                            <?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_name'];?>

                        </div>
                        <?php }?>
                        <?php } ?>
                </td>
              </tr>
              <?php } ?>
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