<?php

	//echo $_GET['register'];

	enum INDEX : string {
		case JSX = "/assets/backend/js/index.js";
		case CSS = "/assets/frontend/styles/css/index.css";
	}

	enum AUTH : string {
		case JSX  = "./../../backend/js/authorization.js";
		case CSS  = "./../../frontend/styles/css/authorization.css";
		case PATH = "/assets/frontend/pages/authorization.php";
	}

    enum REG : string {
        case JSX  = "./../../backend/js/registration.js";
		case CSS  = "./../../frontend/styles/css/registration.css";
		case PATH = "/assets/frontend/pages/registration.php";
    }

	enum TOTAL : string {
		case JQR  = "/assets/backend/js/library/jquery/jquery-3.7.1.min.js";
		case FCN  = "/assets/frontend/icons/vega.ico";
        case CDB  = "/assets/backend/config/config_db.php";
        case WDBC = "/assets/backend/config/WrapperDataBaseConn.php";
	}

    enum PAGE : string {
        case PFL = "/assets/frontend/pages/profile.php";
        case ACT = "/assets/frontend/pages/action.php";
    }

	enum NAV : string {
		case PRJ = "/assets/frontend/pages/projects.php";
		case TMS = "/assets/frontend/pages/teams.php";
		case VAC = "/assets/frontend/pages/vacancies.php";
	}

?>