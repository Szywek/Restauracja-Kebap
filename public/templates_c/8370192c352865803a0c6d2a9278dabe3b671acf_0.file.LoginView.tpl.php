<?php
/* Smarty version 4.1.0, created on 2022-06-10 15:06:58
  from 'C:\xampp\htdocs\kebap\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a341f26a90f8_31291814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8370192c352865803a0c6d2a9278dabe3b671acf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kebap\\app\\views\\LoginView.tpl',
      1 => 1654863512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a341f26a90f8_31291814 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169461379062a341f2696d88_56568707', 'menu');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202876724062a341f269c236_05726370', 'content');
?>
 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54191140562a341f26a8726_60446741', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'menu'} */
class Block_169461379062a341f2696d88_56568707 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_169461379062a341f2696d88_56568707',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div id="content">
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="full">
                        <a class="logo" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
start"><img src="images/logo.png"/></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <div class="right_header_info">
                            <ul>
                                
                                <li class="button_user"><a class="button active" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
register">Rejestracja</a></li>
                                <li class="button_user"><a class="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
start">Strona Główna</a></li>

                                <li>
                                    <button type="button" id="sidebarCollapse">
                                        <img src="images/menu_icon.png" alt="#">
                                    </button>
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
class Block_202876724062a341f269c236_05726370 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_202876724062a341f269c236_05726370',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <!-- end header -->
    
    <div class="yellow_bg">
   <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>Logowanie</h2>
                    
                  </div>
               </div>
            </div>
          </div>
</div>

        <div class="footer" style="margin-top:1em">
            <div class="container-fluid">
                <div class="row">
                  <div class=" col-md-12">
                    <h2>Zaloguj się<strong class="white"> tutaj:</strong></h2>
                  </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      
                        <form class="main_form" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
                            <div class="row">
    
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Login" type="text" name="login">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Hasło" type="password" name="password">
                                </div>
                                
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <button class="send" type="submit">Zaloguj</button>
                                </div>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['msgs']->value->getMessages()) {?>
                                <ol class="col-xl-6>" style="color:red; font-weight:bold">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                                <li>
                                    <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {
}?>
                                    <?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>

                                    <br/>
                                </li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ol>
                            <?php }?>
                        </form>

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="img-box">
                            <figure><img src="images/img.jpg" alt="img" /></figure>
                        </div>
                    </div>
                     
                </div>
                
        </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_54191140562a341f26a8726_60446741 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_54191140562a341f26a8726_60446741',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <!-- footer -->
    <footer>
        <div class="footer">
           
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
