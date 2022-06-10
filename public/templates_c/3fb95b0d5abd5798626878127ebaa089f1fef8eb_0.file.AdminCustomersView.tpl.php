<?php
/* Smarty version 4.1.0, created on 2022-06-10 09:32:05
  from 'C:\xampp\htdocs\kebap\app\views\AdminCustomersView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a2f375391aa1_77194451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fb95b0d5abd5798626878127ebaa089f1fef8eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kebap\\app\\views\\AdminCustomersView.tpl',
      1 => 1654846323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a2f375391aa1_77194451 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146003028362a2f375385663_62527162', 'menu');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211033906862a2f37538bf89_20452639', 'content');
?>
 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149142264462a2f37538c4b8_78884344', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'menu'} */
class Block_146003028362a2f375385663_62527162 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_146003028362a2f375385663_62527162',
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
                        <a class="logo" href="index.html"><img src="images/logo.png" alt="#" /></a>
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
class Block_211033906862a2f37538bf89_20452639 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_211033906862a2f37538bf89_20452639',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    
    <div class="yellow_bg">
   <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>Klienci</h2>
                    
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
class Block_149142264462a2f37538c4b8_78884344 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_149142264462a2f37538c4b8_78884344',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer>
        <div class="footer" style="margin-top:1em">
            <div class="container-fluid">
                <div class="row">
                  <div class=" col-md-12">
                    <h2 style="text-align:center; color: #ffff; margin-right: 13%; margin-bottom:1em;">Lista klientów</h2>
                    <table style="width:50%; border: 1px solid black; margin-left:25%;" >
                        <tr style="width:100%; border: 1px solid black;">
                          <th>ID</th>
                          <th>Imie i nazwisko</th>
                          <th>E-mail</th>
                          <th>Login</th>
                          <th>Hasło</th>
                        </tr>
                         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                        <tr>
                          <td><?php echo $_smarty_tpl->tpl_vars['row']->value["id"];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['row']->value["imie"];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value["nazwisko"];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['row']->value["email"];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['row']->value["login"];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['row']->value["password"];?>
</td>
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
    <!-- end footer -->
<?php
}
}
/* {/block 'footer'} */
}
