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


class AdminOrderCtrl{



    public function action_orderMng() {
             
    $orders = App::getDB()->select('order',[
        "[><]user" => ["user_id" => "id"]
    
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
    ]);
                            

    App::getSmarty()->assign('orders', $orders);
    App::getSmarty()->assign('page_title','Zamówienia');      
    App::getSmarty()->display("AdminOrderView.tpl");
                   
    }
             
}