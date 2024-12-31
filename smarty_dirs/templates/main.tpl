<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Обязательно указываем размеры, иначе не будет смены @media -->
		
		<!--{0} Название сайта -->
		<title>Портфолио - ВЕГА</title>
		
		<!--{1} Иконка сайта -->
		<link  href="{$FCN}" type="image/x-icon" 	rel="icon">
		
		<!--{2} Стили-->
		<link  href="{$CSS}" type="text/css" 	rel="stylesheet">
		
		<!--{3} Скрипты -->
		<script src="{$JSX}" type="text/javascript"></script> 
		<script src="{$JQR}" type="text/javascript"></script>
	</head>
	<body>
		<div class="layout">
			<header>
				<a class="logo"><h1 class="font-logo">ПОРТФОЛИО</h1></a>
				<div class="menu">
					<nav class="nav">
						<ul>
							<li>
								<a href="{$PROJECTS}">Проекты</a>
							</li>
							<li>
								<a href="{$TEAMS}">Команды</a>
							</li>
							<li>
								<a href="{$VACANCIES}">Вакансии</a>
							</li>
						</ul>
					</nav>
					<div>
						<div>
							<a target="iframe-auth-reg" onclick="create_iframe_authorization_registration();" href="{$HFR}" >Вход</a> <!-- <?php echo AUTH::PATH->value; ?> href="./frames/authorization.html" -->
						</div>
						<!--<a href="">
							<img class="" src="./frontend/img/profile_oleg.jpg"/>
						</a>-->
					</div>
				</div>
			</header>
			<main>
				{include file="$MAIN"}
			</main>
			<footer>
            </footer>
		</div>
	</body>
</html>