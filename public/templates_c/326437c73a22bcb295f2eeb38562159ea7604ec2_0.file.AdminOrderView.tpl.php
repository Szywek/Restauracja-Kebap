<?php
/* Smarty version 4.1.0, created on 2022-06-10 12:57:43
  from 'C:\xampp\htdocs\kebap\app\views\AdminOrderView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a323a7c76c46_69648352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '326437c73a22bcb295f2eeb38562159ea7604ec2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kebap\\app\\views\\AdminOrderView.tpl',
      1 => 1654858661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a323a7c76c46_69648352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202996769262a323a7c6a2c4_40173761', 'menu');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178671023362a323a7c70263_64311636', 'content');
?>
 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107669097862a323a7c708a6_65178837', 'footer');
?>
 <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'menu'} */
class Block_202996769262a323a7c6a2c4_40173761 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_202996769262a323a7c6a2c4_40173761',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="content">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="full">
                        <a class="logo" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
start"><img src="images/logo.png" alt="#" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <div class="right_header_info">
                        <ul>
                            <li class="button_user">
                                
                                <?php if (\core\RoleUtils::inRole("admin")) {?>
                                <a class="button active" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
usrPanel">Klienci</a>
                                 <?php }?>
                                
                                <?php if (\core\RoleUtils::inRole("admin")) {?>
                                <a class="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
order">Zamów</a>
                                 <?php }?>
                                
                                
                                  <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) == 1) {?>
                                 <a class="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
profile">Konto</a>
                                 <?php }?>  

                                <a class="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
start">Strona Główna</a>
                                
                            </li>
                              </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_178671023362a323a7c70263_64311636 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_178671023362a323a7c70263_64311636',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    
    <div class="yellow_bg">
   <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>Zamówienia</h2>
                    
                  </div>
               </div>
            </div>
          </div>
</div>

<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_107669097862a323a7c708a6_65178837 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_107669097862a323a7c708a6_65178837',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer>
        <div class="footer" style="margin-top:1em">
            <div class="container-fluid">
                <div class="row">
                  <div class=" col-md-12">
                    <h2 style="text-align:center; color: #ffff; margin-right: 13%;">Historia zamówień</h2>
                    <table style="width:50%; border: 1px solid black; margin-left:25%;" >
                        <tr style="width:100%; border: 1px solid black;">
                          <th>Zamówienie</th>
                          <th>Adres</th>
                          <th>Klient</th>
                          <th>Cena</th>
                      
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                        <tr>
                          <td>nr. <?php echo $_smarty_tpl->tpl_vars['row']->value["id"];?>
</td>
                          <td>ul. <?php echo $_smarty_tpl->tpl_vars['row']->value["ulica"];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value["nrBudynku"];?>
, <?php echo $_smarty_tpl->tpl_vars['row']->value["kodPocztowy"];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value["miasto"];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['row']->value["imie"];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value["nazwisko"];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['row']->value["kwota"];?>
 zł</td>
                        </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                      </table>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer_logo">
                          <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
start><img src="images/logo.png" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                    
                    </div>
                    <div class="col-md-12">
                        <div class="new"></div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
                </div>
            </div>
        </div>
    </footer>
   <?php
}
}
/* {/block 'footer'} */
}
