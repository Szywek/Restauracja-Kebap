{extends file="main.tpl"}
{block name=menu}
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
                                {if \core\RoleUtils::inRole("admin")}
                                <a class="button active" href="{$conf->action_url}orderMng">Obsługa zamówień</a>
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
                     <h2>Klienci</h2>
                    
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
                    <h2 style="text-align:center; color: #ffff; margin-right: 13%; margin-bottom:1em;">Lista klientów</h2>
                    <table style="width:50%; border: 1px solid black; margin-left:25%;" >
                        <tr style="width:100%; border: 1px solid black;">
                          <th>ID</th>
                          <th>Imie i nazwisko</th>
                          <th>E-mail</th>
                          <th>Login</th>
                          <th>Hasło</th>
                        </tr>
                         {foreach $name as $row}
                        <tr>
                          <td>{$row["id"]}</td>
                          <td>{$row["imie"]} {$row["nazwisko"]}</td>
                          <td>{$row["email"]}</td>
                          <td>{$row["login"]}</td>
                          <td>{$row["password"]}</td>
                        </tr>
                        {/foreach}
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
{/block}