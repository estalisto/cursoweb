<?php


class PDOConnection {

    private $dbh;

    function __construct() {
        try {

           
            $db_username    = "inter";
            $db_password    = "I48BBB43C11F6EC0A0AC7A18E1F5D5";
            $dbtns          = "(DESCRIPTION = 
    (ADDRESS_LIST = 
        (ADDRESS = 
          (COMMUNITY = tcp.world)
          (PROTOCOL = TCP)
          (Host = 10.150.30.20)
          (Port = 1195)
        )
    )
    (CONNECT_DATA = (SID = SFBA0708)
    )
  )";
			

            //$this->dbh = new PDO("mysql:host=".$server.";dbname=".dbname, $db_username, $db_password);

            $this->dbh = new PDO("oci:dbname=" . $dbtns . ";charset=utf8", $db_username, $db_password, array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC));

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function select($sql) {
        $sql_stmt = $this->dbh->prepare($sql);
        $sql_stmt->execute();
        $result = $sql_stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function insert($sql) {
        $sql_stmt = $this->dbh->prepare($sql);
        try {
            $result = $sql_stmt->execute();
        } catch (PDOException $e) {
            trigger_error('Error occured while trying to insert into the DB:' . $e->getMessage(), E_USER_ERROR);
        }
        if ($result) {
            return $sql_stmt->rowCount();
        }
    }

    function __destruct() {
        $this->dbh = NULL;
    }

}



/*
$dbh = new PDOConnection();
 $respuesta=$dbh->select("select * from cuenta");
 echo json_encode($respuesta);
die;
*/
//$dbh->select($select_sql);
//$dbh->insert("INSERT INTO cuenta (user_name ,email) VALUES('addad','lodadadaok@gmail.com')");




?>


