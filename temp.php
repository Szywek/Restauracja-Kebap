<?php

namespace app\controllers;

use app\forms\OrderForm;
use core\Logs;
use core\SessionUtils;
use core\ParamUtils;
use core\Message;
use core\Messages;
use core\App;
use core\Utils;
use core\Validator;


class OrderCtrl
{
 
    public $form;
    public $userLog;
    
    public function __construct(){
        $this->form = new OrderForm();
    }

   
    public function getFormParams(){
        $this->form->ulica = ParamUtils::getFromRequest('ulica');
        $this->form->miasto = ParamUtils::getFromRequest('miasto');
        $this->form->kodPocztowy = ParamUtils::getFromRequest('kodPocztowy');
        $this->form->nrBudynku = ParamUtils::getFromPost('nrBudynku');;
        $this->form->ilosc = ParamUtils::getFromRequest('ilosc');
        $this->form->nazwa = ParamUtils::getFromRequest('nazwa');

      
    }

   
    public function validate() {
		
		if (! (isset($this->form->miasto) && isset($this->form->kodPocztowy) 
            && isset($this->form->nrBudynku) && isset($this->form->ulica)))

            {

			return false;

			}


            $v = new Validator();

            $v->validate($this->form->ulica,[  
                'trim' => true,
                'required' => true,
                'required_message' => 'Ulica jest wymagana',
                
            ]);

            $v->validate($this->form->miasto,[
                'trim' => true,
                'required' => true,
                'required_message' => 'Miasto jest wymagane',
               
            ]);

            $v->validate($this->form->kodPocztowy,[
                'required' => true,
                'trim' => true,
                'required_message' => 'Kod POcztowy jest wymagane',
    
            ]);

            $v->validate($this->form->nrBudynku,[
                'required' => true,
                'trim' => true,
                'required_message' => 'Numer budynku jest wymagany',
    
            ]);
        
	
		return ! App::getMessages()->isError();  
    }

    public function action_order() {

   $this->getFormParams();
        
   
        if($this->validate()) {
        
            try {
                    $cenaZam = App::getDB() -> get("item", "cena",["nazwa" => $this->form->nazwa]);
                    $itemID = App::getDB() -> get("item", "id",["nazwa" => $this->form->nazwa]);
                    $this->userLog = SessionUtils::load("user",$keep = true);

                    

                    App::getDB() -> insert('order', [
                    'ulica' => $this->form->ulica,
                    'nrBudynku' => $this->form->nrBudynku,
                    'miasto' => $this->form->miasto,
                    'kodPocztowy' => $this->form->kodPocztowy,
                    'user_id' => $userLog,
                    'kwota' => $this->cenaZam*floatval($this->form->ilosc)
                    ]);
                    
                    $this -> orderID = App::getDB()->id('id');

                    App::getDB() -> insert('orderItem', [
                    'ilosc' => $this->form->ilosc,
                    'item_id' => $itemID,
                    'cena' => $cenaZam,
                    'order_id' => $orderID   
                    ]);
                    
                    $
                App::getMessages()->addMessage(new \core\Message("Złożono zamówienie na kwotę  zł.", \core\Message::ERROR)); 

                } catch (\PDOException $ex) {
                App::getMessages()->addMessage(new \core\Message("Wystąpił błąd bazy danych!", \core\Message::ERROR)); 
                }  

                App::getSmarty()->assign('page_title','Zamówienie');      
                App::getSmarty()->display("OrderView.tpl");
            } else {
                App::getSmarty()->assign('form', $this->form);
                App::getSmarty()->assign('page_title','Zamówienie');      
                App::getSmarty()->display("OrderView.tpl");
            }
        }

}