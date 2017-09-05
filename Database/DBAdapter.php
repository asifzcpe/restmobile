<?php

namespace Database;
require_once(dirname(dirname(__FILE__)).'/config/DBconfig.php');

class DBAdapter
{
	private $con=null;
	private $sql=null;
	private $fields=null;
	private $values=null;
	public function __construct()
	{
		$this->con=new \PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
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
	public function __destruct()
	{
		$this->con=null;
	}
}