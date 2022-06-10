{extends file="main.tpl"}
{block name=menu}

    <div id="content">
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="full">
                        <a class="logo" href="{$conf->action_url}start"><img src="images/logo.png" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <div class="right_header_info">
                            <ul>
                                
                                <li class="button_user"><a class="button active" href="{$conf->action_url}login">Zaloguj</a></li>
                                <li class="button_user"><a class="button" href="{$conf->action_url}start">Strona Główna</a></li>

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
{/block}
{block name=content} 
    <!-- end header -->
    
    <div class="yellow_bg">
   <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>Rejestracja</h2>
                    
                  </div>
               </div>
            </div>
          </div>
</div>

        <div class="footer" style="margin-top:1em">
            <div class="container-fluid">
                <div class="row">
                  <div class=" col-md-12">
                    <h2>Zarejestruj się<strong class="white"> tutaj:</strong></h2>
                  </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      
                        <form class="main_form" action="{$conf->action_url}register" method="post">
                            <div class="row">
                             
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Imie" type="text" name="imie">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Nazwisko" type="text" name="nazwisko">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Telefon" type="text" name="telefon">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="E-mail" type="text" name="email">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Login" type="text" name="login">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Hasło" type="password" name="password">
                                </div>
                                
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <button class="send" type="submit">Rejestruj</button>
                                </div>
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

                        </form>

                   

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="img-box">
                            <figure><img src="images/img.jpg" alt="img" /></figure>
                        </div>
                    </div>
                </div>
                
        </div>
{/block} 
 {block name=footer} 
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
{/block}