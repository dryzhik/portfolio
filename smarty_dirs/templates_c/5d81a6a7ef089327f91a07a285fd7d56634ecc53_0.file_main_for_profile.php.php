<?php
/* Smarty version 5.4.2, created on 2025-01-06 09:29:53
  from 'file:C:\projects\site_portfolio/assets/frontend/mains/main_for_profile.php' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_677b7861175405_55554413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d81a6a7ef089327f91a07a285fd7d56634ecc53' => 
    array (
      0 => 'C:\\projects\\site_portfolio/assets/frontend/mains/main_for_profile.php',
      1 => 1735900059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_677b7861175405_55554413 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\projects\\site_portfolio\\assets\\frontend\\mains';
?><section class="section_1" style="width: 100%; display: flex; flex-direction: column; gap: 100px;">
	<div style="display: flex; flex-direction: column; width: 100%; padding-top: 10%; align-items: center;">
		<article style="display: flex;  width: fit-content; justify-content: center; space-between; gap: 5%; align-items: center;">
            <img src="<?php echo $_smarty_tpl->getValue('icon');?>
" alt="..." style="width: 150px; height: 150px; border-radius: 20px;">
            <p style="font-family: 'Vasek', arial; font-size: 96px; color: #EA5657; margin: 0; line-height: .8em;"><?php echo $_smarty_tpl->getValue('firstname');?>
</p>
            <p style="font-family: 'Vasek', arial; font-size: 96px; color: #EA5657; margin: 0; line-height: .8em;"><?php echo $_smarty_tpl->getValue('lastname');?>
</p>
		</article>
	    <div class="container" style="display: grid; width: 50%; grid-template-columns: 2fr auto; gap: 20px;"> <!-- height: 500px; -->
	        <div class="container" style="display: flex; flex-direction: column; width: 100%; background-color: #fff;"> <!-- Основная информация-->
	            <article> <!-- display: flex; gap: 2%;-->
	                <h1><span style="display: inline-flex; width: 25px;">//</span> Основная информация</h1>
	            </article>
	            <div class="container" style="display: flex; flex-direction: column; gap: 10px;">
	                <string>Группа:                    <input value="КМБО-01-23" readonly /></string>                                       
					<string>Курс:                      <input value="КМБО-01-23" readonly /></string>                         
					<string>Шифр:                      <input value="КМБО-01-23" readonly /></string>
					<string>Навыки:                    <input value="КМБО-01-23" readonly /></string>  
					<string>Институт:                  <input value="КМБО-01-23" readonly /></string>
					<string>Год приёма:                <input value="КМБО-01-23" readonly /></string>   
					<string>Специальность:             <input value="КМБО-01-23" readonly /></string>                <!-- (Направление) -->
					<string>Образовательная программа: <input value="КМБО-01-23" readonly /></string>                 
	            </div>
	        </div>
	        <div class="container" style="display: flex; flex-direction: column; width: 100%; "> <!-- ссылки - background-color: #7feb7f; -->
	            <article style="display: flex; gap: 2%;">
	                  <h1><span style="display: inline-flex; width: 25px;">//</span> Ссылки</h1>
	            </article>
	            <div class="container" style="display: flex; flex-direction: column; gap:  10px; align-items: flex-start;">
	                <a href="token@email.ru">token@email.ru</a> <!-- style="text-decoration: auto;"-->
					<a href="token@email.ru">token@email.ru</a>
	            </div>
	        </div>
	        <div class="container" style="grid-column: 1 / span 2; display: flex; flex-direction: column; width: 100%; "> <!-- о себе background-color: orange;-->
	            <article style="display: flex; gap: 2%;">
	                  <h1><span style="display: inline-flex; width: 25px;">//</span> О себе </h1>
	            </article>
	            <div class="container" style="display: flex; flex-direction: column; gap:  10px; align-items: flex-start;">
	                <a href="token@email.ru">token@email.ru</a> <!-- style="text-decoration: auto;"-->
					<a href="token@email.ru">token@email.ru</a>
	            </div>
			</div>
	        <div class="container" style="grid-column: 1 / span 2; display: flex; flex-direction: column; width: 100%;"> <!-- Проекты  background-color: gray; -->
	            <article style="display: flex; gap: 2%;">
	                  <h1><span style="display: inline-flex; width: 25px;">//</span> Проекты </h1>
	            </article>
	            <div class="container" style="display: flex; flex-direction: column; gap:  10px; align-items: flex-start;">
	                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('query_top_projects')->handle(array('select'=>"*",'from'=>"info_project",'orderby'=>"id",'limit'=>"3"), $_smarty_tpl);?>

	            </div>
			</div>
		</div>
	</div>
	<div style="display: flex; align-items: center; justify-content: end; flex-direction: row; width: 100%; height: 10%; background-color: #EA5657;"> <!-- background-color: #EA5657; -->
		<p>Посмотрите все наши проекты</p> <!-- position: fixed; -->
		<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"></path>
		</svg>
	</div>
</section>
<section class="section_1" style="width: 100%;"> <!-- Артефакты -->
	<div style="width: 100%; height: fit-content; padding-bottom: 2%; padding-left: 25%; padding-right: 25%; margin: 0%;">
		<article style="display: grid; width: 50%; align-items: center;">
            <p style="font-family: 'Vasek', arial; font-size: 96px; color: #EA5657; margin: 0; line-height: .8em;">Артефакты</p>
		</article>
		<div class="container" style="display: flex; flex-direction: column; gap: 30px; margin-top: 2rem; width: 100%;">
		</div>
	</div>
	<div style=" height: auto; display: flex; align-items: center; justify-content: end; flex-direction: row; width: 100%; height: 10%; background-color: #EA5657;"> <!-- background-color: #EA5657; -->
		<p>Посмотрите все наши проекты</p> 
		<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"></path>
		</svg>
	</div>
</section>
<?php }
}
