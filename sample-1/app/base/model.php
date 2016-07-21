<?php

class Model
{
	protected $connection = null;

	function __construct()
	{
		// do nothing until it needs to establish database connection
	}

	protected function getConnection()
	{
		if (is_null($this->connection))
		{
			$this->connection = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
		}
	}

	protected function closeConnection()
	{
		$this->connection = null;
	}

	protected function loadTable($obj, $query)
	{
		try
		{
			$this->getConnection();
			$statement = $this->connection->prepare($query);
			$statement->execute();
			$datatable = array();

			while ($row = $statement->fetch())
			{
				$datatable[] = new $obj($row);
			}
		}
		catch (PDOException $e)
		{
			'MariaDB Error: ' . $e->getMessage();
			die();
		}

		return $datatable;
	}

	protected function updateTable($query)
	{
		try
		{
			$this->getConnection();
			$statement = $this->connection->prepare($query);
			$statement->execute();
		}
		catch (PDOException $e)
		{
			'MariaDB Error: ' . $e->getMessage();
			die();
		}
	}
}

?>