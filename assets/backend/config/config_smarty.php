<?php
    $root = $_SERVER['DOCUMENT_ROOT'];

    require_once($root.'/assets/backend/config/paths.php');

    define("SMARTY_DIR", $root.'/smarty-5.4.2/libs/');
        
    require_once(SMARTY_DIR.'Smarty.class.php');    // подключаем файл с описанием класса Smarty

    $smarty = new Smarty\Smarty; // создаем экземпляр класса Smarty

    // указываем, где находятся Smarty-директории
    $smarty->setConfigDir($root.'/smarty_dirs/configs/');
    $smarty->setCacheDir($root.'/smarty_dirs/cache/');
    $smarty->setCompileDir($root.'/smarty_dirs/templates_c/');
    $smarty->setTemplateDir($root.'/smarty_dirs/templates/');

    // $smarty->testInstall(); 

    $smarty->assign("FCN", TOTAL::FCN->value); 
    $smarty->assign("CSS", INDEX::CSS->value);
    $smarty->assign("JSX", INDEX::JSX->value);
    $smarty->assign("JQR", TOTAL::JQR->value);
    $smarty->assign("HFR", AUTH::PATH->value);
    
    $smarty->assign("PROJECTS",  NAV::PRJ->value);
    $smarty->assign("TEAMS",     NAV::TMS->value);
    $smarty->assign("VACANCIES", NAV::VAC->value);

    // $smarty->display("main.tpl");  // выводим обработанный шаблон
?>