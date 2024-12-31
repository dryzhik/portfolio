<?php
	$root = $_SERVER['DOCUMENT_ROOT'];

	require_once($root.'/assets/backend/config/config_smarty.php');

	$smarty->assign("MAIN", $root.'/assets/frontend/mains/main_for_index.php'); // Указываем, что добавляем. (Реализуем и добавляем только основную часть кода);
	$smarty->display($root.'/smarty_dirs/templates/main.tpl' );  // Указываем, куда добавляем и выводим обработанный шаблон.
?>

