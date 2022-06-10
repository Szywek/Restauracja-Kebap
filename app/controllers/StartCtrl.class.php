<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class StartCtrl {
    
    public function action_start() {
		        

        App::getSmarty()->assign('page_title','Kebap'); 
        App::getSmarty()->display("StartView.tpl");
        
    }

    public function action_register() {

		App::getSmarty()->assign('page_title','Kebap');      
        App::getSmarty()->display("RegisterView.tpl");
        
    }

    public function action_login() {

		App::getSmarty()->assign('page_title','Kebap');      
        App::getSmarty()->display("LoginView.tpl");
        
    }

    public function action_order() {

		App::getSmarty()->assign('page_title','Kebap');      
        App::getSmarty()->display("OrderView.tpl");
        
    }

    public function action_profile() {

		App::getSmarty()->assign('page_title','Kebap');      
        App::getSmarty()->display("ProfileView.tpl");
        
    }

    public function action_usrPanel() {

		App::getSmarty()->assign('page_title','Kebap');      
        App::getSmarty()->display("AdminCustomersView.tpl");
        
    }

    public function action_orderMng() {

		App::getSmarty()->assign('page_title','Kebap');      
        App::getSmarty()->display("AdminOrderView.tpl");
        
    }



    
}
