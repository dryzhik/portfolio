<?php

enum TABS_NAME : string {
    case TAB_REGISTRATION_USER = "info_user";
}

class_alias('TABS_NAME', 'TBN');

enum TAB_REGISTRATION_USER { /* TAB_REGISTRATION_USER */ 
    case hash; /* 8 */
    case status_profile; /* end */
}

class_alias('TAB_REGISTRATION_USER', 'TRU'); 

enum SELECT_QUERY : int {
    case SELECT  = 0;
    case FROM    = 1;
    case WHERE   = 2;
    case LIMIT   = 3;
    case OFFSET  = 4;
    case HAVING  = 5;
    case GROUPBY = 6;
    case ORDERBY = 7;
    case ORDERBYTYPE = 8;
}

class_alias('SELECT_QUERY', 'SQ');

enum ORDERBYTYPE {
    case ACS;
    case DESC;
}

class_alias('ORDERBYTYPE', 'OBT');

enum INSERT_INTO_QUERY : int {
    case INSERT_INTO  = 0;
    case COLUMNS      = 1;
    case VALUES       = 2;
}

class_alias('INSERT_INTO_QUERY', 'IIQ');

enum OPBIN : string {
    case AND    = "AND";
    case OR     = "OR";
}

enum ERRORCODE: int {
    case   BLOCK_PROFILE = 1;
    case UNBLOCK_PROFILE = 0;
    case        PASSWORD = 2;
}

class_alias('OPBIN', 'OB');

class Query {
    private $dbconn;

    private $request;
    private $responce;

    private $result_last_request;

    function __construct($dbconn){
        $this->dbconn = $dbconn;
    }

    function accomulate(){
        $count_args = func_num_args();
        $result = "";
        for($index_arg = 0; $index_arg < $count_args; $index_arg++){
            $arg = func_get_arg($index_arg);
            $result = $result."$arg";

            if($index_arg != $count_args - 1)
                $result = $result.", ";
        }

        return $result;
    }

    function selector_query_select($op_code, $data){
        $op_code_val = $op_code->value;
        switch($op_code_val){
            case SELECT_QUERY::SELECT->value:
                $this->request = "SELECT $data";
                break;
            case SELECT_QUERY::FROM->value:
                $this->request = $this->request." FROM ".$data;
                break;
            case SELECT_QUERY::WHERE->value:
                $this->request = $this->request." WHERE ".$data;
                break;
            case SELECT_QUERY::LIMIT->value:
                $this->request = $this->request." LIMIT ".$data;
                break;
            case SELECT_QUERY::OFFSET->value:
                $this->request = $this->request." OFFSET ".$data;
                break;
            case SELECT_QUERY::HAVING->value:
                $this->request = $this->request." HAVING ".$data;
                break;
            case SELECT_QUERY::GROUPBY->value:
                $this->request = $this->request." GROUP BY ".$data;
                break;
            case SELECT_QUERY::ORDERBY->value:
                $this->request = $this->request." ORDER BY ".$data;
                break;
        }
    }

    // [SELECT QUERY START] ------------------------------------------------------- //
    function select(){
        $this->clear_query();

        $res_sels = $this->accomulate(...func_get_args());          /* ... (Spread) - распаковывает массив аргументов; */
        
        $this->selector_query_select(SELECT_QUERY::SELECT, $res_sels);

        return $this;
    }

    function from(){
        $res_froms = $this->accomulate(...func_get_args()); 
        
        $this->selector_query_select(SELECT_QUERY::FROM, $res_froms);

        return $this;
    }

    function where(){
        $count_args = func_num_args();
        $cond = "";
        for($index_arg = 0; $index_arg < $count_args - 1; $index_arg=$index_arg+3){
            $arg1 = func_get_arg($index_arg + 0);
            $arg2 = func_get_arg($index_arg + 1);
            $cond = $cond."$arg1='$arg2'";

            if($index_arg != $count_args - 2){
                $op = func_get_arg($index_arg + 2)->value;
                $cond = $cond." $op ";
            }
        }

        $this->selector_query_select(SELECT_QUERY::WHERE, $cond);

        return $this;
    }

    function limit($lim){
        $this->selector_query_select(SELECT_QUERY::LIMIT, $lim);

        return $this;
    }

    function offset($offst){
        $this->selector_query_select(SELECT_QUERY::OFFSET, $offst);

        return $this;
    }

    function having(){
        $res_having = $this->accomulate(...func_get_args());          
        
        $this->selector_query_select(SELECT_QUERY::HAVING, $res_having);
    }

    function orderBy(){
        $res_ordby = $this->accomulate(...func_get_args());          /* ... (Spread) - распаковывает массив аргументов; */
        
        $this->selector_query_select(SELECT_QUERY::ORDERBY, $res_ordby);
    }

    function orderByType($type){
        $this->selector_query_select(SELECT_QUERY::ORDERBYTYPE, $type);
    }

    function groupBy(){
        $res_groupby = $this->accomulate(...func_get_args());          
        
        $this->selector_query_select(SELECT_QUERY::GROUPBY, $res_groupby);
    }

    // [SELECT QUERY END] ------------------------------------------------------- //

    function exec_query($dbconn){
        if($dbconn)
            $this->result_last_request = pg_query($dbconn, $this->request) || die('Ошибка запроса: ' . pg_last_error($dbconn));
        else
            $this->result_last_request = pg_query($this->dbconn, $this->request);

        if($this->result_last_request)
            $this->responce = pg_fetch_all($this->result_last_request);

        return $this->get_query_status();
    }

    function exec(){
        $count_args = func_get_args();

        if($count_args){
            $dbconn = func_get_arg(0);
        } else {
            $dbconn = NULL;
        }

        return $this->exec_query($dbconn);
    }

    function get_query_status(){
        if($this->result_last_request)
            return true;
        else
            return false;
    }

    function clear_query(){
        $this->clear_query_request();
        $this->clear_query_responce();

        return ($this->responce == $this->request) && ($this->request == "");
    }

    function clear_query_request(){
        $this->request = "";

        return $this->request == "";
    }

    function clear_query_responce(){
        $this->responce = "";

        return $this->responce == "";
    }

    function get_query_responce(){
        return $this->responce;
    }

    function responce(){
        return $this->get_query_responce();
    }

    function get_query_request(){
        return $this->request;
    }

    function request(){
        return $this->get_query_request();
    }

    // [INSERT INTO QUERY START] --------------------------------- //

    function selector_query_insert_into($op_code, $data){
        $op_code_val = $op_code->value;
        switch($op_code_val){
            case INSERT_INTO_QUERY::INSERT_INTO->value:
                $this->request = "INSERT INTO PUBLIC.".$data;
                break;
            case INSERT_INTO_QUERY::COLUMNS->value:
                $this->request = $this->request." (".$data.")";
                break;
            case INSERT_INTO_QUERY::VALUES->value:
                $this->request = $this->request." VALUES(".$data.")";
                break;
        }
    }

    function insert_into(){
        $this->clear_query();

        $res_insert_into = $this->accomulate(...func_get_args());
        
        $this->selector_query_insert_into(INSERT_INTO_QUERY::INSERT_INTO, $res_insert_into);

        return $this;
    }

    function columns(){
        $res_columns = $this->accomulate(...func_get_args());

        $this->selector_query_insert_into(INSERT_INTO_QUERY::COLUMNS, $res_columns);

        return $this;
    }

    function decorator_value($arg){
        $result = $_POST[$arg];

        switch($arg){
            case "password": /* "passwd" */
                $result = password_hash($_POST[$arg], PASSWORD_DEFAULT);
                break;
        }

        return "'".$result."'";
    }

    function decorator_column($arg){
        $result = $arg;

        switch($arg){
            case "password":
                $result = "hash";
                break;
        }

        return $result;
    }

    function values_from_columns(){
        $res_columns = "";
        $res_values = "";

        $count_args = func_num_args();

        //implode(",", $args);
        for($index_arg = 0; $index_arg < $count_args - 1; $index_arg++){
            $arg = func_get_arg($index_arg);

            $res_columns = $res_columns.$this->decorator_column($arg).", ";
            $res_values = $res_values.$this->decorator_value($arg).", ";
        }

        $res_columns = $res_columns.$this->decorator_column(func_get_arg($count_args - 1));
        $res_values = $res_values.$this->decorator_value(func_get_arg($count_args - 1));

        $this->selector_query_insert_into(INSERT_INTO_QUERY::COLUMNS, $res_columns);
        $this->selector_query_insert_into(INSERT_INTO_QUERY::VALUES, $res_values);

        return $this;
    }

    function values(){
        $res_values = $this->accomulate(...func_get_args()); 

        $this->selector_query_insert_into(INSERT_INTO_QUERY::VALUES, $res_values);

        return $this;
    }

    // [INSERT INTO QUERY END] --------------------------------- //
}

class WrapperDataBaseConn {
    public $name;
    public $host;
    public $port;
    public $user;
    public $passwd;
    public $dbconn;

    public $query;
    public $result;
    private $last_error;

    function __construct($name, $host, $port, $user, $passwd){
        $this->name = $name;

        $this->host = $host;
        $this->port = $port;

        $this->user = $user;
        $this->passwd = $passwd;

        $this->query = new Query($this->connect());
    }

    function connect(){
        $this->dbconn = pg_connect("host=$this->host port=$this->port user=$this->user dbname=$this->name password=$this->passwd")
        or die('Not connect db: ' . pg_last_error($this->dbconn));

        return $this->dbconn;
    }

    function login($login, $password){
        $status_query = $this->query
            ->select('*')
            ->from(TBN::TAB_REGISTRATION_USER->value)
            ->where("login", $login)
        ->exec();

        if($status_query){
            $responce = $this->query->responce();

            foreach ($responce as $row_data){
                $hash_from_db = $row_data[TRU::hash->name]; 

                // Проверка на блокировку профиля:
                $stprofile = $row_data[TRU::status_profile->name];

                if($stprofile == "block") {$this->last_error = ERRORCODE::BLOCK_PROFILE->value; return false; }

                $result = password_verify($password, $hash_from_db);
                if($result){
                    /*$_SESSION['isLogin'] = true;
                    $_SESSION['id']      = $row[0];
                    $_SESSION['nik']     = $row[1];
                    $_SESSION['nama']    = $row[2];
                    $_SESSION['email']   = $row[3];
                    $_SESSION['telp']    = $row[4];
                    $_SESSION['alamat']  = $row[5];*/

                    $this->last_error = ERRORCODE::UNBLOCK_PROFILE->value;
                } else {
                    $_SESSION['message'] = "Password error!";

                    $this->last_error = ERRORCODE::PASSWORD->value;
                }
                return $result;
            }
        } else {
            $_SESSION['message'] = "Not find account!";
            return 'account';
        }
    }

    function validate_post_args(){
        $count_args = func_num_args();
        $_SESSION['message'] = "";
        for($index_arg = 0; $index_arg < $count_args; $index_arg++){
            $arg = func_get_arg($index_arg);
            if(!isset($_POST[$arg])){
                $_SESSION['message'] = $arg;
                return $arg;
                exit;
            }
        }
    }

    function register(){
        $this->validate_post_args('firstname', 'lastname', 'telephone', 'email', 'login', 'password');
        
        $status_query = $this->query                    // Проверка, существует под данным логином  учетная запись ?
            ->select('*')
            ->from(TBN::TAB_REGISTRATION_USER->value)
            ->where("login", $_POST['login'])
        ->exec();

        // $status_query = false; // For Debug;

        $error_code = 1;
        if($status_query){ // $status_query
            if(count($this->query->responce()) == 0){

                // variance: one;
                /*  
                    $hash_pswd = password_hash($this->clean_escape($_POST['password']), PASSWORD_DEFAULT);
                    $status_query = $this->query
                        ->insert_into(TABS_NAME::TAB_REGISTRATION_USER->value)
                        ->columns("id", "firstname", "lastname", "telephone", "email", "password")                                                      // , "firstname", "lastname", "login", "passwd", "roles","icons"
                        ->values($_POST['id'], $_POST['firstname'], $_POST['lastname'], $_POST['telephone'], $_POST['email'], $_POST['password'])       // ,"root", "toor", "root@toor.com", "1234", 
                    ->exec();
                */

                // variance: two;
                $status_query = $this->query
                    ->insert_into(TBN::TAB_REGISTRATION_USER->value)
                    ->values_from_columns("firstname", "lastname", "telephone", "email", "login", "password")
                ->exec();

                $error_code = ($status_query ? 0 : 3);
            } else {
                $error_code = 2;
            }
        }

        /*switch($error_code){
            case 0:
                break;
            case 1:
                break;
            case 2:
                break;
            case 3;
                break;
        }*/

        $this->last_error = $error_code;

        $_SESSION['message'] = ($status_query ? "success_register" : "failed_register");

        return $status_query;
    }

    function last_error(){
        return $this->last_error;
    }

    function clean_escape($val){
        return pg_escape_string($val);
    }

    function get_query(){
        return $this->query;
    }

    function query(){
        return $this->get_query();
    }

    function exec(){
        return $this->query->exec_query($this->dbconn);
    }

    function setName($name){
        $this->name = $name;
        return $this->name == $name;
    }

    function getName(){
        return $this->name;
    }
}

class_alias('WrapperDataBaseConn', 'WDBC');

?>

