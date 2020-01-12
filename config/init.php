<?php
define ("DEBUG", 1);                                        //для отладки 1 - поепзывать ошибки, 0 - нет
define ("ROOT", dirname(__DIR__));                          //указывает на корень приложения
define ("WWW", ROOT . '/public');                           //указывает на публичную папку
define ("APP", ROOT . '/app');
define ("CORE", ROOT . '/vendor/calamary/core');
define ("LIBS", ROOT . '/vendor/calamary/core/libs');
define ("CACHE", ROOT . '/tmp/cache');
define ("CONF", ROOT . '/config');  
define ("LAYOUT", 'default');                               //шаблон сайта по умолчанию

$app_path = "http://{$_SERVER[HTTP_HOST]}{$_SERVER[PHP_SELF]}";        //http://calamary.com/public/index.php
$app_path = preg_replace("#[^/]+$#",'',$app_path);                     //http://calamary.com/public/
$app_path = str_replace('/public/','',$app_path);                      //http://calamary.com       -       URL главной страницы
define ("PATH", $app_path);
define ("ADMIN", PATH . 'admin');

require_once ROOT . '/vendor/autoload.php';