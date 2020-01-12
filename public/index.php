<?php

require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';

new \calamary\App();        //Обьект приложения

//  \calamary\App::$app->setProperty('test', 'TEST'); -добовляет в контейнер ниже, новое свойство
debug(\calamary\App::$app->getProperties()); //Контейнер содежащий инфу о регистрации
/*
array(5) {
  ["admin_email"]=>
  string(14) "admin@mail.com"
  ["sayt_name"]=>
  string(46) "Курьерская служба calamary.com"
  ["pagintion"]=>
  int(3)
  ["smtp_login"]=>
  string(0) ""
  ["smtp_password"]=>
  string(0) ""
}
*/
?>