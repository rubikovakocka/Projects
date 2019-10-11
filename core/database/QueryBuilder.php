<?php


class QueryBuilder
{
	protected $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function findSearched($table)
	{
		$searchVal = $_GET['searchVal'];
		$statement = $this->pdo->prepare("select * from {$table} WHERE email LIKE '%{$searchVal}%' OR name LIKE '%{$searchVal}%'");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

	public function insert($table, $parameters)
	{
		$sql = sprintf(
			'insert into %s (%s) values (%s)',
			$table,
			implode(', ', array_keys($parameters)),
			':' . implode(', :', array_keys($parameters))
		);

		try{
			$statement = $this->pdo->prepare($sql);
			$statement->execute($parameters);
		} catch (Exception $e){
			die('Something went wrong..');
		}
	}

	public function checkLog($table, $parameters)
	{
		$sql="select email, password from {$table} where
		email='{$parameters['email']}'
		AND 
		password='{$parameters['password']}'";
		try{
			$statement = $this->pdo->prepare($sql);
			$statement->execute();
			$row = $statement->fetchAll(PDO::FETCH_CLASS);

			if(!empty($row)){
				if(array_key_exists('email', $row[0]) && array_key_exists('password', $row[0])){
					return true;
				}
				else{
					die('Something went wrong..');
				}
			}
			if(empty($row)) {
				return false;
			}
			
		}catch (Exception $e){
			die('Something went wrong..');
		}
		
	}
}