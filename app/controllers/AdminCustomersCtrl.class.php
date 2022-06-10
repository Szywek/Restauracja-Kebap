<?php

namespace app\controllers;
use core\Logs;
use core\SessionUtils;
use core\ParamUtils;
use core\Message;
use core\Messages;
use core\App;
use core\Utils;
use core\Validator;
use core\RoleUtils;


class AdminCustomersCtrl{



    public function action_usrPanel() {
             
       
    
    $name = App::getDB()->select('user','*');
                            

    App::getSmarty()->assign('name', $name);
    App::getSmarty()->assign('page_title','Profil');      
    App::getSmarty()->display("AdminCustomersView.tpl");
                   
    }
             
}

