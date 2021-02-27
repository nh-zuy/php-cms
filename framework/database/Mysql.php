<?php

/**
 *	Framework/database/Mysql.php	
 *	Database operation class
 **/
class Mysql {
	protected $connect = false;  // DB connection status
	protected $sql;            	 // SQL statement

	public function __construct($config = array()) {

		/* Configure DB connection */
		$host = isset($config['host']) ? $config['host'] : 'localhost';
		$user = isset($config['user']) ? $config['user'] : 'root';
		$password = isset($config['password']) ? $config['password'] : '';
		$dbname = isset($config['dbname']) ? $config['dbname'] : '';
		$port = isset($config['port']) ? $config['port'] : '3306';
		$charset = isset($config['charset']) ? $config['charset'] : 'utf8';

		/* Start connect / Exit if false */
		$this->connect = mysqli_connect($host, $user, $password, $dbname) or die("ERROR: Connect Database error !");

		mysqli_set_charset($this->connect, $charset);

		/* ERROR connect Database */
		if (mysqli_connect_error() != 0) {
			die("ERROR " . mysqli_connect_error());
		}
	}

	/**
	 *	Query a sql command
	 *	@return $result of sql command
	 *	@param sql The sql command
	 *	@access public
	 **/
	public function query($sql) {
		$this->sql = $sql;

		$data = "[" . date("Y-m-d H:i:s") . "] " . $sql . PHP_EOL;
		file_put_contents("mysql.log", $data, FILE_APPEND);

		$result = mysqli_query($this->connect, $sql);

		if (!$result) {
			die($this->errno().':'.$this->error().'.<br/>Error SQL statement -| '.$this->sql.'<br/>');
		};

		return $result;
	}


	/**
	 *	Check if mysql error
	 *	@return true/false
	 **/
	public function errno() {
		return mysqli_errno($this->connect);
	}

	/**
	 *	@return The last error description
	 *	@param no params
	 *	@access public
	 **/
	public function error() {
		return mysqli_error($this->connect);
	}

	/**
	 *	@return One record
	 *	@param sql command
	 *	@access public
	 **/
	public function findById($sql) {
		$result = $this->query($sql);

		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	/**
	 *	@return all the record of the table
	 *	@param sql command
	 *	@access public
	 **/
	public function getAll($sql) {
		$result = $this->query($sql);
		$data = array();

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($data, $row);
		};

		return $data;
	}

	/**
	 *	@return the id of the recent inserted record
	 *	@param
	 *	@access public
	 **/
	public function getInsertId() {
		return mysqli_insert_id($this->connect);
	}

	/**
	 *	Insert new record into the table
	 *	@return the id of the recent inserted record
	 *	@param
	 *	@access public
	 **/
	public function insert($sql) {
		$this->query($sql);

		return $this->getInsertId();
	}

	/**
	 *	Update data of a record
	 *	@return result
	 *	@param
	 * 	@access public
	 **/
	public function update($sql) {
		return $this->query($sql);
	}

	/**
	 *	Delete a record
	 *	@return
	 *	@param
	 *	@access public
	 **/
	public function delete($sql) {
		return $this->query($sql);
	}
}




