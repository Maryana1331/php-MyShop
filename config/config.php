<?php
/**
 * Файл настроек проекта
 **/
//константы для обращения к контроллерам
const PATHPREFIX = '../controllers/';
const  PATHPOSTFIX = 'Controller.php';

//Константы для подключения к БД
const DB_HOST = 'localhost';
const DB_NAME = 'myshop';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const LASTPRODUCTS =12;


//Папка шаблона
$templateFolder = 'default';
// Пути к шаблонам
define('TMPLTPREFIX', "../views/{$templateFolder}/");

const TMPLTPOSTFIX = '.tpl';


//Пути к шаблонам в www
define('TMPLTWEBPATH', "/templates/{$templateFolder}/");

//Подключение класса Smarty
require ('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();
//Инициализация(Конфигуряция объекта) Smarty
$smarty-> setTemplateDir(TMPLTPREFIX);
$smarty->setCompileDir('../tmp/smarty/templateC');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('templateWebPath', TMPLTWEBPATH);
