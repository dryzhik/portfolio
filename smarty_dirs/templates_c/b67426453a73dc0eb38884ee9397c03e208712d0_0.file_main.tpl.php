<?php
/* Smarty version 5.4.2, created on 2024-12-31 10:20:11
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67739b2b5f38e5_05081983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b67426453a73dc0eb38884ee9397c03e208712d0' => 
    array (
      0 => 'main.tpl',
      1 => 1735629598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67739b2b5f38e5_05081983 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\projects\\site_portfolio\\smarty_dirs\\templates';
?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Обязательно указываем размеры, иначе не будет смены @media -->
		
		<!--<?php echo 0;?>
 Название сайта -->
		<title>Портфолио - ВЕГА</title>
		
		<!--<?php echo 1;?>
 Иконка сайта -->
		<link  href="<?php echo $_smarty_tpl->getValue('FCN');?>
" type="image/x-icon" 	rel="icon"> <!-- "<?php echo '<?php'; ?>
 echo TOTAL::FCN->value; <?php echo '?>'; ?>
" -->
		
		<!--<?php echo 2;?>
 Стили-->
		<link  href="<?php echo $_smarty_tpl->getValue('CSS');?>
" type="text/css" 	rel="stylesheet"> <!-- "<?php echo '<?php'; ?>
 echo INDEX::CSS->value; <?php echo '?>'; ?>
" -->
		
		<!--<?php echo 3;?>
 Скрипты -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('JSX');?>
" type="text/javascript"><?php echo '</script'; ?>
> <!-- "<?php echo '<?php'; ?>
 echo INDEX::JSX->value; <?php echo '?>'; ?>
" -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('JQR');?>
" type="text/javascript"><?php echo '</script'; ?>
> <!-- "<?php echo '<?php'; ?>
 echo TOTAL::JQR->value; <?php echo '?>'; ?>
" -->
	</head>
	<body>
		<div class="layout">
			<header>
				<a class="logo"><h1 class="font-logo">ПОРТФОЛИО</h1></a>
				<div class="menu">
					<nav class="nav">
						<ul>
							<li>
								<a href="">Проекты</a>
							</li>
							<li>
								<a href="">Команды</a>
							</li>
							<li>
								<a href="">Вакансии</a>
							</li>
						</ul>
					</nav>
					<div>
						<div>
							<a target="iframe-auth-reg" onclick="create_iframe_authorization_registration();" href="<?php echo $_smarty_tpl->getValue('HFR');?>
" >Вход</a> <!-- <?php echo '<?php'; ?>
 echo AUTH::PATH->value; <?php echo '?>'; ?>
 href="./frames/authorization.html" -->
						</div>
						<!--<a href="">
							<img class="" src="./frontend/img/profile_oleg.jpg"/>
						</a>-->
					</div>
				</div>
			</header>
			<main>

			</main>
			<footer>
            </footer>
		</div>
	</body>
</html><?php }
}
