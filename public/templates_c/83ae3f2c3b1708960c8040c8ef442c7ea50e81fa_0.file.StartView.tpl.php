<?php
/* Smarty version 4.1.0, created on 2022-06-10 10:40:59
  from 'C:\xampp\htdocs\kebap\app\views\StartView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a3039b7977a9_38533579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83ae3f2c3b1708960c8040c8ef442c7ea50e81fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kebap\\app\\views\\StartView.tpl',
      1 => 1654850397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a3039b7977a9_38533579 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92304326962a3039b78cc98_92196513', 'menu');
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31807184262a3039b795751_22400770', 'content');
?>

 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102253418762a3039b797347_57249845', 'footer');
?>

    <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'menu'} */
class Block_92304326962a3039b78cc98_92196513 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_92304326962a3039b78cc98_92196513',
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
usrPanel">Klienci</a>
                                 <?php }?>

                                <?php if (\core\RoleUtils::inRole("admin")) {?>
                                <a class="button active" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
orderMng">Obsługa zamówień</a>
                                 <?php }?>

                                <?php if (\core\RoleUtils::inRole("user")) {?>
                                <a class="button active" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
order">Zamów</a>
                                 <?php }?>

                                 <?php if (\core\RoleUtils::inRole("admin")) {?>
                                <a class="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
order">Zamów</a>
                                 <?php }?>

                                <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) == 0) {?>
                                <a class="button active" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login">Zaloguj</a>
                                 <?php }?>

                                  <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) == 1) {?>
                                 <a class="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
profile">Konto</a>
                                 <?php }?>

                                 <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) == 1) {?>
                                 <a class="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a>
                                 <?php }?>

                    
                                <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) == 0) {?>
                                <a class="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
register">Rejestracja</a></li>
                                <?php }?>
                                <li>
                    
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
class Block_31807184262a3039b795751_22400770 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_31807184262a3039b795751_22400770',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <!-- end header -->
    <!-- start slider section -->
    <div class="slider_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div id="main_slider" class="carousel vert slide" data-ride="carousel" data-interval="5000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider_cont">
                                                <h3>Odkryj Prawdziwy<br>Smak kebabu Blisko ciebie</h3>
                                                <p>​Chcesz prawdziwie tureckiego kebabu?  Możesz na nas liczyć! Duże porcje, najlepszej jakości składniki, bogaty wybór - najlepsze tureckie jedzenie tylko u nas.</p>
                                                <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) == 1) {?>
                                                <a class="main_bt_border" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
order">Zamów teraz</a>
                                                 <?php }?>
                                                 <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) == 0) {?>
                                                <a class="main_bt_border" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login">Zamów teraz</a>
                                                 <?php }?>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="slider_image full text_align_center">
                                                <img class="img-responsive" src="images/keb.png" alt="#" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end slider section -->

   
<div class="bg_bg">
<!-- about -->
<div class="about">
    <div class="container">
      <div class="row">
         <div class="col-md-12">
             <div class="title">
                <i><img src="images/title.png" alt="#"/></i>
                <h2>O naszym jedzeniu & restauracji</h2>
                <span>Zajrzyj do jedenj z najdłużej działającej na polskim rynku restauracji tureckiej
                   <br> oraz przekonaj się co znaczy 30 lat dośiadczenia w robieniu kebabu.
                </span>
             </div>
          </div>
       </div>
       <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
             <div class="about_box">
                 <h3>Najlepsze jedzenie</h3>
                 <p>Przygotowywane przez nas kebaby oddają cały smak prawdziwej kuchni orientalnej. Wszak kebab pochodzi z krajów arabskich, pełnych aromatycznych przypraw i wyszukanych smaków, dlatego zawsze dbamy by nasze mięso dostarczało Wam niezwykłych doznań smakowych, a każdy kolejny kęs przenosił Was oczami wyobraźni do niezwykłych krajów Orientu! </p>
                 
             </div>
         </div>
          <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 about_img_boxpdnt">
             <div class="about_img">
                 <figure><img src="images/about-img.jpg" alt="#/"></figure>
             </div>
         </div>      
       </div> 
    </div>
</div>
<!-- end about -->

<!-- blog -->
<div class="blog">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title">
          <i><img src="images/title.png" alt="#"/></i>
          <h2>Nasze pomysły</h2>
          <span>nasze całkiem nietypowe i niesamowicie przepyszne przepisy!</span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
        <div class="blog_box">
          <div class="blog_img_box">
            <figure><img src="images/blog_img1.png" alt="#"/>
             <span>23 LUT 2022</span>
            </figure>
          </div>
          <h3>Keb & Burg</h3>
          <p>Keb & Burg to ciekawy eksperyment obok którego nie można przejść obojętnie. Sprawdź czy połączenie ulubionej amerykańskiej potrawy z turecką kuchnią przypadnie Ci do gustu! </p>
        </div>
      </div>
       <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
        <div class="blog_box">
          <div class="blog_img_box">
            <figure><img src="images/blog_img2.png" alt="#"/>
             <span>11 MAR 2022</span>
            </figure>
          </div>
          <h3>​Fitness Kebab</h3>
          <p>Nowatorski przepis naszych tureckich kucharzy łączący prawdziwy smak kebabu z zdrowymi składnikami pozwalającymi w pełni cieszyć się naszą orientalną kuchnią nawet prawdziwym Fitt-świrom! </p>
        </div>
      </div>
       <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <div class="blog_box">
          <div class="blog_img_box">
            <figure><img src="images/blog_img3.png" alt="#"/>
             <span>11 KWI 2021</span>
            </figure>
          </div>
          <h3>Pizz & Roll</h3>
          <p>Pizz & Roll to jedno z naszych nowatorskich spojrzeń na formę podawania kebabu. Sprawdź czy połączenie włoskiej pizzy z turecką kuchnią przypadnie Ci do gustu!</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end blog -->


</div>

 <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_102253418762a3039b797347_57249845 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_102253418762a3039b797347_57249845',
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
