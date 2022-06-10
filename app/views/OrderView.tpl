{extends file="main.tpl"}
{block name=menu}
    <div id="content">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="full">
                        <a class="logo" href="{$conf->action_url}start"><img src="images/logo.png" alt="#" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <div class="right_header_info">
                            <ul>
                                <li class="button_user">
                                {if \core\RoleUtils::inRole("admin")}
                                <a class="button active" href="{$conf->action_url}usrPanel">Klienci</a>
                                 {/if}

                                {if \core\RoleUtils::inRole("admin")}
                                <a class="button active" href="{$conf->action_url}orderMng">Obsługa zamówień</a>
                                 {/if}
                                  {if count($conf->roles)==1}
                                 <a class="button" href="{$conf->action_url}profile">Konto</a>
                                 {/if}

                                 <a class="button" href="{$conf->action_url}start">Strona Główna</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

{/block}
{block name=content} 

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
            <td>Mięso wołowe, frytki, sałatka</td>
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
            <td>Mięso wołowe, frytki, ser, sałatka</td>
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
<form class="main_form" action="{$conf->action_url}order" method="post">
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
    <button style="background-color:rgb(187, 148, 20); font-size: 16px; padding: 0.5em; width: 24.5%; text-align: center;" type="submit">Zamów</button>
       </div>
    </div>
    </li>
   </form>
                           

   
  </div>
                                {if $msgs->getMessages()}
                                <ol class="col-xl-6>" style="color:red; font-weight:bold">
                                    {foreach $msgs->getMessages() as $msg}
                                <li>
                                    {if $msg->isError()}{/if}
                                    {$msg->text}
                                    <br/>
                                </li>
                                    {/foreach}
                                </ol>
                            {/if}
</div>
{/block} 
 {block name=footer} 


    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="container-fluid">
            
                <div class="row">

                    <div class="col-md-12">
                        <div class="footer_logo">
                          <a href="{$conf->action_url}start"><img src="images/logo.png" alt="logo" /></a>
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
{/block}