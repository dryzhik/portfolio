<?php
    session_start();

    enum ACTION {
        case registr;
        case login;
        case logout;
    }

    require_once($_SERVER['DOCUMENT_ROOT'].'/assets/backend/config/paths.php');

    require_once($_SERVER['DOCUMENT_ROOT'].TOTAL::CDB->value);             /* -> [$dbname, $host, $port, $user, $passwd]; -> './config/config_db.php'*/
    require_once($_SERVER['DOCUMENT_ROOT'].TOTAL::WDBC->value);             /* -> WrapperDataBase(); -> './config/WrapperDataBaseConn.php' */

    $wdbc = new WDBC($dbname, $host, $port, $user, $passwd);

    $URL = "";
    $last_error_wdbc = 0;
    switch($_POST['action']){
        case ACTION::registr->name:
            $result = $wdbc->register();

            $last_error_wdbc = $wdbc->last_error();
            /*$URL = ($result 
                ? "index.php?register=success" 
                : "index.php?register=$last_error_wdbc"
            );*/

            echo json_encode(array('register' => ($result ? "success" : "failed"), 
                                    'error_code' => $last_error_wdbc )); // ( $result ?  "0" :  )
            break;
        case ACTION::login->name:
            $result = $wdbc->login($_POST['login'], $_POST['password']);

            $last_error_wdbc = $wdbc->last_error();

            $URL = ($result 
                ?  PAGE::PFL->value
                : "index.php?error=$result"
            );

            echo json_encode(array(
                'login'      => ($result ? "success" : "failed"), 
                'error_code' => $last_error_wdbc,
                'url'        => $URL
            ));

            break;
        case ACTION::logout->name:
            session_destroy();
            $URL = "/index.php"; // ?logout=true

            echo json_encode(array(
                'logout'      => "success", 
                'error_code' => 0,
                'url'        => $URL
            ));
            break;
    }

   // if($last_error_wdbc != 0) echo "./../".$URL ; else echo $last_error_wdbc; // "Location: ./$URL"; header("Location: ./$URL");

    exit();
?>