<?php
/* Smarty version 4.1.0, created on 2022-06-10 12:17:16
  from 'C:\xampp\htdocs\kebap\app\views\ProfileView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a31a2c6719d8_51584397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c41db246c135759baf4812e9e1f1a04d5588567c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kebap\\app\\views\\ProfileView.tpl',
      1 => 1654856233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a31a2c6719d8_51584397 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12501735762a31a2c65f665_59904258', 'menu');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20708028362a31a2c6669e5_14712433', 'content');
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196667221962a31a2c6710c3_42423093', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'menu'} */
class Block_12501735762a31a2c65f665_59904258 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_12501735762a31a2c65f665_59904258',
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
orderMng">Obsługa zamówień</a>
                                 <?php }?>
                                
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
class Block_20708028362a31a2c6669e5_14712433 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20708028362a31a2c6669e5_14712433',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

<div class="yellow_bg">
   <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>Twój profil</h2>
                    
                  </div>
               </div>
            </div>
          </div>
</div>

<!-- blog -->
<div class="blog">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title">
          <i><img src="images/title.png" alt="#"/></i>
          
          <span>Tu sprawdzisz swoje zamówienia</span><br/>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>

        <h1 style="text-align:left;">Imie i nazwisko:
             <?php echo $_smarty_tpl->tpl_vars['row']->value["imie"];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value["nazwisko"];?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </h1><br/> 

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?> 
          <h3 style="text-align:left;">Login: <?php echo $_smarty_tpl->tpl_vars['row']->value["login"];?>

         <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
          </h3>
        


        </div>
    

      </div>
    </div>
    <div>
    <h2>Historia zamówień</h2>
    <table style="width:50%; border: 1px solid black; text-align:center;" >
        <tr style="width:100%; border: 1px solid black;">
          <th>Zamówienie</th>
          <th>Cena</th>
          <th>Adres</th>
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
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value["kwota"];?>
 zł</td>
          <td>ul. <?php echo $_smarty_tpl->tpl_vars['row']->value["ulica"];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value["nrBudynku"];?>
, <?php echo $_smarty_tpl->tpl_vars['row']->value["kodPocztowy"];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value["miasto"];?>
</td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
       
      </table>
    </div>

  </div>
</div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_196667221962a31a2c6710c3_42423093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_196667221962a31a2c6710c3_42423093',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="container-fluid">
            
                <div class="row">

                    <div class="col-md-12">
                        <div class="footer_logo">
                          <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
start"><img src="images/logo.png" alt="logo" /></a>
                        </div>
                    </div>
                
                    <div class="col-md-12">
                
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
