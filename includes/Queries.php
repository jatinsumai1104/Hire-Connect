<?php 
require_once('Database.php');
class Queries{
	
	private $conn;
	
	public function __construct(){
		$this->conn = (new Database())->getConnection();
	}
	
	//getPost() : returns the fetched data from the db
	//$table is used for table name
	public function readData($table,$wheres = 1){
		$query = "Select * from {$table} as t join meta_data as m where $wheres and t.meta_data_id = m.meta_data.id and m.is_deleted = 0";
		return $this->execteQuery($query);
	}
	
	public function execteQuery($query){
		$result = $this->conn->prepare($query);
		$result->execute();
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}
	
	public function addData($table, $data){
		$sql = "insert into meta_data values ()";
		$ps = $this->conn->prepare($sql);
		$result = $ps->execute($data);
		$columnString['meta_data_id'] = 'meta_data_id';
		$valueString['meta_data_id'] = $result['meta_data_id'];
		$columnString = implode(", ", array_keys($data));
		$valueString = " :".implode(", :", array_keys($data));
		
		$sql = "insert into {$table} ({$columnString}) values ({$valueString})";
		
		$ps = $this->conn->prepare($sql);
		$result = $ps->execute($data);
		if($result){
			return $this->conn->lastInsertId();
		}else{
			return false;
		}
	}
	/*
	returns number of rowsaffected else return false
	$condition should be a string of conditions
	*/
	public function updateData($table, $data, $condition=1){
		$i = 0;
		$columnValueSet = "";
		foreach($data as $key=>$value){
			$comma = ($i<count($data)-1 ? ", " : "");
			$columnValueSet .= $key. "='".$value."'".$comma;
			$i++;
		}
		$sql = "update $table set $columnValueSet where $condition";
		// echo $sql;
		$this->execteQuery($sql);
	}
	
	public function deleteData($table, $condition){

		$sql = "update meta_data set is_deleted = 1, deleted_at = now() where meta_data_id = ( select meta_data_id from $table where $condition)";
		$this->execteQuery($sql);
	}
}

?>