<?php

namespace Database;
require_once(dirname(dirname(__FILE__)).'/config/DBconfig.php');

class DBAdapter
{
	private $con=null;
	private $sql=null;
	private $fields=null;
	private $values=null;
	private $limit=null;
	private $rows=null;
	public function __construct()
	{
		$this->con=new \PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
		$this->con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
	}

	public function insert($table,$fields_values)
	{
		$this->fields=implode(',',array_keys($fields_values));
		$this->values=sprintf("'%s'", implode("','",array_values($fields_values) ) );
		$this->sql=sprintf("INSERT INTO $table (%s) VALUES (%s)",$this->fields,$this->values);
		if(!$this->con->exec($this->sql))
		{
			echo "Error code#".$this->con->errorInfo()[1]." </br>Error-".$this->con->errorInfo()[2];
		}
		else
		{
			return  $this->con->lastInsertId();
		}
	}

	public function selectAll($table,$fields=false,$limit=false)
	{
		if($fields==true && is_array($fields))
		{
			$this->fields=implode(',',$fields);
		}
		else
		{
			$this->fields='*';
		}
		$this->limit=($limit==true)?"limit $limit":'';
		$this->sql=sprintf("SELECT %s FROM $table %s",$this->fields,$this->limit);
		try
		{

			$stmt = $this->con->prepare($this->sql);
			$stmt->execute();
			$this->rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $this->rows;
		}
		catch(\PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	public function __destruct()
	{
		$this->con=null;
	}
}