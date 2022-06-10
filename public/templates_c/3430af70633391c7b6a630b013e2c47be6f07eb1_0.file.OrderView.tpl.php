<?php
/* Smarty version 4.1.0, created on 2022-06-10 16:31:52
  from 'C:\xampp\htdocs\kebap\app\views\OrderView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a355d8d381c2_00081382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3430af70633391c7b6a630b013e2c47be6f07eb1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kebap\\app\\views\\OrderView.tpl',
      1 => 1654871492,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a355d8d381c2_00081382 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188918914162a355d8d2c120_36028519', 'menu');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8572067762a355d8d32443_64958977', 'content');
?>
 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52968471662a355d8d37961_45906408', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'menu'} */
class Block_188918914162a355d8d2c120_36028519 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_188918914162a355d8d2c120_36028519',
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
                                <a class="button active" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
orderMng">Obsługa zamówień</a>
                                 <?php }?>
                                  <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) == 1) {?>
                                 <a class="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
profile">Konto</a>
                                 <?php }?>

                                 <a class="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
start">Strona Główna</a>
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
class Block_8572067762a355d8d32443_64958977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8572067762a355d8d32443_64958977',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

<div class="yellow_bg">
   <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>Złóż zamówienie</h2>
                    
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
          
          <span>Wybierz coś dla siebie, smacznego!</span><br/>
    
        </div>
    

      </div>
    </div>
    <div>
    <h2>Lista produktów</h2>


   <table style="width:100%">
        <tr>
          <th>Lp</th>  
          <th>Nazwa</th>
          <th>Skład</th>
          <th>Cena</th>
        </tr>
        <tr>
          <td>1</td>  
          <td>Kebab Rolada</td>
          <td>Mięso wołowe, frytki, ser, sałatka</td>
          <td>18,50 zł</td>
        
        </tr>
        <tr>
            <td>2</td>  
            <td>Kebab na Grubym</td>
            <td>Mięso wołowe, frytki, ser, sałatka</td>
            <td>18,50 zł</td>
            
        </tr>
        <tr>
            <td>3</td>  
            <td>Lahmacun z Kebabem</td>
            <td>Baranina, frytki, sałatka</td>
            <td>20,50 zł</td>
            
        </tr>
        <tr>
            <td>4</td>  
            <td>Keb&Bur</td>
            <td>Mięso wołowe, frytki, ser, sałatka</td>
            <td>24,50 zł</td>
            
        </tr>
        <tr>
            <td>5</td>  
            <td>Fitness Kebab</td>
            <td>Mięso wegetariańskie, frytki, ser, sałatka</td>
            <td>15,50 zł</td>
            
        </tr>
        <tr>
            <td>6</td>  
            <td>Pizz & Roll</td>
            <td>Mięso wołowe, frytki, ser, sałatka</td>
            <td>28,50 zł</td>
            
        </tr>
        <tr>
            <td>7</td>  
            <td>Frytki</td>
            <td>300g</td>
            <td>10,50 zł</td>
            
        </tr>
       
    </div>
   </table>
<form class="main_form" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
order" method="post">
       <div class="row" style="padding-left:10%">
    <li style="font-size: 16px;">
        
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="padding-top: 1em; padding-left: 16.5%;">
    <input class="form" placeholder="ID Produktu" type="text" name="id">
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="padding-top: 1em; padding-left: 16.5%;">
    <input class="form" placeholder="Ilość" type="text" name="ilosc">
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="padding-top: 1em; padding-left: 16.5%;">
        <input class="form" placeholder="Miasto" type="text" name="miasto">
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="padding-top: 1em; padding-left: 16.5%;">
        <input class="form" placeholder="Kod Pocztowy" type="text" name="kodPocztowy">
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="padding-top: 1em; padding-left: 16.5%;">
        <input class="form" placeholder="Ulica" type="text" name="ulica">
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="padding-top: 1em; padding-left: 16.5%;">
        <input class="form" placeholder="Numer Budynku" type="text" name="nrBudynku">
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="padding-top: 1em; padding-left: 16.5%;">
    <button style="background-color:rgb(187, 148, 20); font-size: 16px; padding: 0.5em;margin-left:30%; text-align: center;" type="submit">Zamów</button>
       </div>
    </div>
    </li>
   </form>
                           

   
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
</div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_52968471662a355d8d37961_45906408 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_52968471662a355d8d37961_45906408',
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
