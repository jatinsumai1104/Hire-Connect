<?php 
//include_once(BASEURL."classes/includes/Connection.class.php");
class Database{
	private $conn;
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $dbname = "hire_connect";

    /**
     * Database constructor.
     */
  function __construct(){
		try{
			$dsn = "mysql:host=$this->host;dbname=$this->dbname";

			//create an object of pdo(PHP Data Object)

			$this->conn = new PDO($dsn, $this->user, $this->password);
		}catch(PDOException $e){
			echo "Issue : " . $e->getMessage();
		}
	}
	public function getConnection(){
        return $this->conn;
    }
}

?>
