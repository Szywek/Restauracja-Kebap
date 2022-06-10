<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('start');
App::getRouter()->setLoginRoute('login'); 

Utils::addRoute('start', 'StartCtrl');
Utils::addRoute('register', 'RegisterCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('order', 'OrderCtrl', ['user', 'admin']);
Utils::addRoute('profile', 'ProfileCtrl', ['user', 'admin']);
Utils::addRoute('usrPanel', 'AdminCustomersCtrl', ['admin']);
Utils::addRoute('orderMng', 'AdminOrderCtrl', ['admin']);
//Utils::addRoute('action_name', 'controller_class_name');addOrder