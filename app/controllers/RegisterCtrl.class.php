<?php

namespace app\controllers;

use app\forms\RegisterForm;
use core\Logs;
use core\SessionUtils;
use core\ParamUtils;
use core\Message;
use core\Messages;
use core\App;
use core\Utils;
use core\Validator;


class RegisterCtrl
{
 
    public $form;

    
    public function __construct(){
        $this->form = new RegisterForm();
    }

   
    public function getFormParams(){
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->password = ParamUtils::getFromRequest('password');
        $this->form->imie = ParamUtils::getFromRequest('imie');
        $this->form->nazwisko = ParamUtils::getFromPost('nazwisko');
        $this->form->telefon = ParamUtils::getFromRequest('telefon');
        $this->form->email = ParamUtils::getFromRequest('email');
        
      
    }

   
    public function validate() {
		
		if (! (isset($this->form->login) && isset($this->form->password) 
            && isset($this->form->imie) && isset($this->form->nazwisko) 
            && isset($this->form->telefon) && isset($this->form->email))) 

            {

			return false;

			}


            $v = new Validator();

            $v->validate($this->form->email,[
                'email' => true,
                'trim' => true,
                'min_length' => 3,
                'required' => true,
                'required_message' => 'Adres E-mail jest wymagany',
                'validator_message' => "Nieprawidłowy adres email"
            ]);

            $v->validate($this->form->login,[
                'trim' => true,
                'required' => true,
                'min_length' => 3,
                'required_message' => 'Login jest wymagany',
               
            ]);

            $v->validate($this->form->password,[
                'required' => true,
                'trim' => true,
                'required_message' => 'Hasło jest wymagane',
    
            ]);

            $v->validate($this->form->imie,[
                'required' => true,
                'trim' => true,
                'required_message' => 'Imie jest wymagane',
    
            ]);

            $v->validate($this->form->nazwisko,[
                'required' => true,
                'trim' => true,
                'required_message' => 'Nazwisko jest wymagane',
            ]);

            $v->validate($this->form->telefon,[
                'required' => true,
                'max_length' => 9,
                'trim' => true,
                'required_message' => 'Telefon jest wymagany',
            ]);

        if(! App::getMessages()->isError()) {

            try {

				$nameCheck = App::getDB() -> has("user", 
                ["login" => $this->form->login
                ]);
                $emailCheck = App::getDB() -> has("user", 
                ["email" => $this->form->email
                ]);
                
                    if ($nameCheck) {
                        App::getMessages()->addMessage(new \core\Message("Podany login jest już zajęty!", \core\Message::ERROR)); 
                    }

                    if ($emailCheck) {
                        App::getMessages()->addMessage(new \core\Message("Podany E-mail jest już przypisany do konta!", \core\Message::ERROR)); 
                    }

		} catch (\PDOException $ex) {
            App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
		    }
        }
	
		return ! App::getMessages()->isError();  
    }

    public function action_register() {

   $this->getFormParams();
        
        if($this->validate()) {
        
            try {
                    App::getDB() -> insert('user', [
                    'imie' => $this->form->imie,
                    'nazwisko' => $this->form->nazwisko,
                    'email' => $this->form->email,
                    'password' => $this->form->password,
                    'login' => $this->form->login,
                    'telefon' => $this->form->telefon,
                    
                    ]);

                App::getMessages()->addMessage(new \core\Message("Utworzono użytkownika", \core\Message::ERROR)); 

                } catch (\PDOException $ex) {
                App::getMessages()->addMessage(new \core\Message("Wystąpił błąd bazy danych!", \core\Message::ERROR)); 
                }  

                App::getSmarty()->assign('page_title','Rejestracja');      
                App::getSmarty()->display("RegisterView.tpl");
            } else {
                App::getSmarty()->assign('form', $this->form);
                App::getSmarty()->assign('page_title','Rejestracja');      
                App::getSmarty()->display("RegisterView.tpl");
            }
        }

}