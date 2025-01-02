<?php
/* Smarty version 5.4.2, created on 2025-01-01 11:05:28
  from 'file:C:\projects\site_portfolio/smarty_dirs/templates/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCached()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6774f7486a9521_19884033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb7f699a3867fe7aa93cb3d0576d3599b9f1dc66' => 
    array (
      0 => 'C:\\projects\\site_portfolio/smarty_dirs/templates/main.tpl',
      1 => 1735718561,
      2 => 'file',
    ),
    'a6c92767204320c5a17bf527ded34eb437306681' => 
    array (
      0 => 'C:\\projects\\site_portfolio/assets/frontend/mains/main_for_index.php',
      1 => 1735632631,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
))) {
function content_6774f7486a9521_19884033 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\projects\\site_portfolio\\smarty_dirs\\templates';
?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Обязательно указываем размеры, иначе не будет смены @media -->
		
		<!--0 Название сайта -->
		<title>Портфолио - ВЕГА</title>
		
		<!--1 Иконка сайта -->
		<link  href="/assets/frontend/icons/vega.ico" type="image/x-icon" 	rel="icon">
		
		<!--2 Стили-->
		<link  href="/assets/frontend/styles/css/index.css" type="text/css" 	rel="stylesheet">
		
		<!--3 Скрипты -->
		<script src="/assets/backend/js/index.js" type="text/javascript"></script> 
		<script src="/assets/backend/js/library/jquery/jquery-3.7.1.min.js" type="text/javascript"></script>
	</head>
	<body>
		<div class="layout">
			<header>
				<a class="logo"><h1 class="font-logo">ПОРТФОЛИО</h1></a>
				<div class="menu">
					<nav class="nav">
						<ul>
							<li>
								<a href="/assets/frontend/pages/projects.php">Проекты</a>
							</li>
							<li>
								<a href="/assets/frontend/pages/teams.php">Команды</a>
							</li>
							<li>
								<a href="/assets/frontend/pages/vacancies.php">Вакансии</a>
							</li>
						</ul>
					</nav>
					<div>
													<div>
								<a target="iframe-auth-reg" onclick="create_iframe_authorization_registration();" href="/assets/frontend/pages/authorization.php" >Вход</a> <!-- <?php echo '<?php'; ?>
 echo AUTH::PATH->value; <?php echo '?>'; ?>
 href="./frames/authorization.html" -->
							</div>
											</div> 						<!--1735718728-->
				</div>
			</header>
			<main>
				
<!--<iframe id="iframe-auth" name="iframe1" src="./frames/auth.html">
</iframe>--> <!-- src="target.html" -->
<section class="section_1">
	<!-- Сначало указываем элементы с абсолютным расположением, а потом с относительным-->
	<!--<div class="corners">
		<p class="corner_top_left" id="1">∟</p>
		<p class="corner_top_right" id="2">∟</p>
		<p class="corner_bottom_left" id="3">∟</p>
		<p class="corner_bottom_right" id="4">∟</p>
	</div>
	<h2 class="logotype font-logo">ПОРТФОЛИО</h2>
	<p class="p_1">БК 536</p>-->
	<div class="an-1">
		<p class="p_2" >Здесь представлены лучшие проекты наших талантливых студентов</p>
		<p class="p_3">↓</p>
	</div>
</section>
<section class="section_2">
	
</section>
<section class="section_3">
	
</section>
			</main>
			<footer>
            </footer>
		</div>
	</body>
</html><?php }
}
