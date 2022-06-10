<?php

namespace app\controllers;

use app\forms\LoginForm;
use core\Logs;
use core\SessionUtils;
use core\ParamUtils;
use core\Message;
use core\Messages;
use core\App;
use core\Utils;
use core\Validator;
use core\RoleUtils;

class LoginCtrl{
	private $form;
	
public function __construct(){
	$this->form = new LoginForm();
}

public function getFormParams(){
	$this->form->login = ParamUtils::getFromRequest('login');
	$this->form->password = ParamUtils::getFromRequest('password');

}

public function validate(){
	if (!(isset($this->form->login) && isset($this->form->password))) 
	{return false;}
	
	if ($this->form->login == "") {
		App::getMessages()->addMessage(new \core\Message("Nie podano loginu!", \core\Message::ERROR));
	}
	if ($this->form->password == "") {
		App::getMessages()->addMessage(new \core\Message("Nie podano hasła!", \core\Message::ERROR));    
	}


	if(! App::getMessages()->isError()) {
	try{
		$loginCheck = App::getDB() -> has("user", [
			"login" => $this->form->login
		]);
        $emailCheck = App::getDB() -> has("user", [
			"email" => $this->form->email
		]);

		if(! $loginCheck || $emailCheck) {
			App::getMessages()->addMessage(new \core\Message("Wprowadzono błędne dane!", \core\Message::ERROR)); 

		}
		}catch (\PDOExpection $ex){
			App::getMessages()->addMessage(new \core\Message("Wystąpił błąd bazy danych!", \core\Message::ERROR)); 
		}
	}
	return ! App::getMessages()->isError();
}

public function action_login() {

	$this->getFormParams();
if ($this->validate()) {
try{
	//sesja

	$userLog = App::getDB() -> get("user",	["id", "login"],["login" => $this->form->login, "password" => $this->form->password]);
	$adminLog = App::getDB() -> has("user", ["id" => $userLog["id"], "admin" => 1]);
	SessionUtils::store("id", $userLog["id"]);
	SessionUtils::store("login", $userLog["login"]);

	if ($adminLog) {
        RoleUtils::addRole("admin");    
        }
        if (!$adminLog) {
		RoleUtils::addRole("user");
		}
	}catch (\PDOExpection $ex) {
		App::getMessages()->addMessage(new \core\Message("Wystąpił błąd bazy danych!", \core\Message::ERROR)); 
	}

  App::getRouter()->redirectTo('start');
} else {
	$this->generateView();
}
} 

public function action_logout(){

	SessionUtils::remove("id");
	SessionUtils::remove("login");

	session_destroy();

	App::getRouter()->redirectTo("start");

}
public function generateView() {
	
    App::getSmarty()->assign('form', $this->form);
    App::getSmarty()->assign('page_title','Logowanie');      
    App::getSmarty()->display("LoginView.tpl");
}
}