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

    
    public function __construct(){
        $this->form = new OrderForm();
    }

   
    public function getFormParams(){
        $this->form->ulica = ParamUtils::getFromRequest('ulica');
        $this->form->miasto = ParamUtils::getFromRequest('miasto');
        $this->form->kodPocztowy = ParamUtils::getFromRequest('kodPocztowy');
        $this->form->nrBudynku = ParamUtils::getFromPost('nrBudynku');
        $this->form->ilosc = ParamUtils::getFromRequest('ilosc');
        $this->form->id = ParamUtils::getFromRequest('id');
        
      
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
                'required_message' => 'ulica jest wymagany',

            ]);

            $v->validate($this->form->miasto,[
                'trim' => true,
                'required' => true,
            
                'required_message' => 'Miasto jest wymagany',
               
            ]);

            $v->validate($this->form->kodPocztowy,[
                'required' => true,
                'trim' => true,
                'required_message' => 'Kod POcztowy  jest wymagane',
    
            ]);

            $v->validate($this->form->nrBudynku,[
                'required' => true,
                'trim' => true,
                'required_message' => 'Numer budynku jest wymagane',
    
            ]);

	
		return ! App::getMessages()->isError();  
    }

    public function action_order() {

   $this->getFormParams();
        
        if($this->validate()) {
        
            try {
                    $this->userLog = SessionUtils::load('id',$keep = true);
                    $this->itemPrice = App::getDB() -> get('item', 'cena',["id"=>$this->form->id]);
                    $this->money = $this->itemPrice*floatval($this->form->ilosc);
                    App::getDB() -> insert('order', [
                    'ulica' => $this->form->ulica,
                    'miasto' => $this->form->miasto,
                    'kodPocztowy' => $this->form->kodPocztowy,
                    'nrBudynku' => $this->form->nrBudynku,
                    'user_id' => $this->userLog,
                    'kwota' => $this->money
                    
                    ]);

                    $this->orderID = App::getDB() -> id();
                    App::getDB() -> insert('orderitem', [
                        'ilosc' => $this->form->ilosc,
                        'item_id' => $this->form->id,
                        'cena' => $this->itemPrice,
                        'order_id' => $this->orderID
                        
                        ]);


                App::getMessages()->addMessage(new \core\Message("Złożono zamówienie", \core\Message::ERROR)); 

                } catch (\PDOException $ex) {
                App::getMessages()->addMessage(new \core\Message(var_export($ex), \core\Message::ERROR)); 
                }  

                App::getSmarty()->assign('page_title','Rejestracja');      
                App::getSmarty()->display("OrderView.tpl");
            } else {
                App::getSmarty()->assign('form', $this->form);
                App::getSmarty()->assign('page_title','Rejestracja');      
                App::getSmarty()->display("OrderView.tpl");
            }
        }

}