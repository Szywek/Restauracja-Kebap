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
                                <a class="button" href="{$conf->action_url}order">Zamów</a>
                                 {/if}
                                
                                
                                  {if count($conf->roles)==1}
                                 <a class="button" href="{$conf->action_url}profile">Konto</a>
                                 {/if}  

                                <a class="button" href="{$conf->action_url}start">Strona Główna</a>
                                
                            </li>
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
                     <h2>Zamówienia</h2>
                    
                  </div>
               </div>
            </div>
          </div>
</div>

{/block} 
 {block name=footer}
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
                        {foreach $orders as $row}
                        <tr>
                          <td>nr. {$row["id"]}</td>
                          <td>ul. {$row["ulica"]} {$row["nrBudynku"]}, {$row["kodPocztowy"]} {$row["miasto"]}</td>
                          <td>{$row["imie"]} {$row["nazwisko"]}</td>
                          <td>{$row["kwota"]} zł</td>
                        </tr>
                        {/foreach}

                      </table>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer_logo">
                          <a href="{$conf->action_url}start><img src="images/logo.png" alt="logo" /></a>
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
   {/block} 