<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/assets/backend/config/paths.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Обязательно указываем размеры, иначе не будет смены @media -->
		
		<!--{0} Название сайта -->
		<!--<title>Портфолио - ВЕГА</title>-->
		
		<!--{1} Иконка сайта -->
		<!--<link href="./frontend/icons/vega.ico" 			 type="image/x-icon" 	rel="icon">-->
		
		<!--{2} Стили -->
		<link href="<?php echo AUTH::CSS->value; ?>"  	type="text/css" 		rel="stylesheet"> <!-- "./../frontend/styles/css/auth.css" -->
		
		<!--{3} Скрипты -->
        <script src="<?php echo TOTAL::JQR->value; ?>"  type="text/javascript"></script> <!-- "./../backend/js/library/jquery/jquery-3.7.1.min.js" -->
		<script src="<?php echo AUTH::JSX->value; ?>" 	type="text/javascript"></script> <!-- "./../backend/js/auth.js" -->
    </head>
    <body class="body-auth">
        <div class="div_2">
            <span class="btn-close" onclick="close_authorization_registration();">×</span>
        </div>
        <form> <!-- action="/forms/helper.php" --> <!-- method="POST" action="/action.php" target="_top" -->
            <svg xmlns="http://www.w3.org/2000/svg" width="70" viewBox="0 0 45 45">
                <path id="Logo" data-name="Logo" d="M149.546,195.5a22.506,22.506,0,0,0-22.1,18.244,54.633,54.633,0,0,1,9.445-2.678,55.249,55.249,0,0,1,18.59-.3,54.567,54.567,0,0,0-28.435,7.519,22.527,22.527,0,0,0,.674,5.206,40.427,40.427,0,0,1,29.827-10.734,37.33,37.33,0,0,0-11.988,3.283,38.273,38.273,0,0,0-15.447,13.3,22.594,22.594,0,0,0,3.914,4.945,37.942,37.942,0,0,1,8.877-11.167,38.443,38.443,0,0,1,17.365-8.412l.008-.551-5.975,1.918,4.869-3.836-6.418-4.131,7.451,2.139v-4.131l2.066,3.541,2.434-1.475-.664,2.8,3.91.885-3.91,1.254,4.426,7.008-6.049-5.533-2.213,4.943.054-3.912c-5.48,3.747-11.053,7.675-13.849,13.428a21.07,21.07,0,0,0-1.908,10.866,22.5,22.5,0,1,0,5.044-44.432Z" 
                    transform="translate(-127.05 -195.5)" fill="#17a2b8">
                </path>
            </svg>
            <h2>Введите данные</h2>

            <label for="login-auth">Логин</label>
            <input  id="login-auth" type="text" name="login" value="root@vega.su" autocomplete="on" required /> <!-- type="email" -->
            <label for="password-auth">Пароль</label>
            <input  id="password-auth" type="password" name="password" value="1234" autocomplete="on" required />

            <button onclick="authorization('<?php echo PAGE::ACT->value; ?>'); return false;">Войти</button>
        </form>
        <div class="div_4">
            <p class="p_3" id="status" hidden="hidden"></p>
            <small id="advice"></small>
            </div>
        </div>
        <div class="div_4">
            <button onclick="next_form('<?php echo REG::PATH->value; ?>');" >Зарегистрироваться</button> <!-- name="action" value="register" -->
            <div class="div_3">
                <p class="p_3">Забыли логин или пороль ?</p>
                <small>обратитесь к системному администратору</small>
            </div>
        </div>
    </body>
</html>
