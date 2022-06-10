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


class ProfileCtrl{



    public function action_profile() {
             
    $this->userLog = SessionUtils::load("id",$keep = true);  
    
    $name = App::getDB()->select('user','*',[
        "id" => $this->userLog,
    
    ]);


    $orders = App::getDB()->select('order',[
        "[>]user" => ["user_id" => "id"]
    
    ],[
        "order.id",
        "order.ulica",
        "order.miasto",
        "order.nrBudynku",
        "order.kodPocztowy",
        "order.kwota",
        "user.imie",
        "user.nazwisko",
        "user.login"
        
    ],[ 
        "user.id" => $this->userLog,

    ]);
                            

    App::getSmarty()->assign('name', $name);
    App::getSmarty()->assign('orders', $orders);
    App::getSmarty()->assign('page_title','Profil');      
    App::getSmarty()->display("ProfileView.tpl");
                   
    }
             
}