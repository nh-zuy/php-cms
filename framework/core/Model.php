<?php 

/**
 *	Framework/core/Model.php
 *	Working with database
 *	Base class for another model
 **/
class Model {
	protected $db;               // Database connect object
	protected $table;            // Table
	protected $fields = array(); // All the fields of the table

	public function __construct($table) {
		$dbconfig['host'] = $GLOBALS['config']['host'];
		$dbconfig['user'] = $GLOBALS['config']['user'];
		$dbconfig['password'] = $GLOBALS['config']['password'];
		$dbconfig['dbname'] = $GLOBALS['config']['dbname'];
		$dbconfig['charset'] = $GLOBALS['config']['charset'];

		$this->db = new Mysql($dbconfig);
		$this->table = $GLOBALS['config']['prefix'] . $table;
		$this->getFields();
	}

	/**
	 * Get all the fields of the table
	 * @access public
	 **/
	private function getFields() {
		$sql = "DESC " . $this->table;

		$fields = $this->db->getAll($sql);

		foreach ($fields as $field) {
			$this->fields[] = $field['Field'];

			if ($field['Key'] == 'PRI') {
				$primaryKey = $field['Field'];
			};
		};

		if (isset($primaryKey)) {
			$this->fields['primary_key'] = $primaryKey;
		};
	}

	/**
	 *	Get all the row of the table
	 *	@access public
	 **/
	public function getAll($selects = array('*'), $orders = array(), $limits = '30') {
		$columns = implode(',', $selects);
		$ordersBy = implode(' ', $orders);
		
		if ($ordersBy == ' ') {
			$sql = "SELECT {$columns} FROM {$this->table} LIMIT {$limits}";
		} else {
			$sql = "SELECT {$columns} FROM {$this->table} ORDER BY {$ordersBy} LIMIT {$limits}";
		}

		return $this->db->getAll($sql);
	}

	/**
	 *	Get a ID record of the table
	 *	@access public
	 **/
	public function findById($id) {
		$sql = "SELECT * FROM {$this->table} WHERE id={$id} LIMIT 1";
		
		return $this->db->findById($sql);
	}

	/**
	 *	Insert new data into table
	 *	@access public
	 **/
	public function insert($data) {

		$columns = implode(',', array_keys($data));

		$values = array_map(function($value) {
			return "'".$value."'";
		}, array_values($data));

		$values = implode(",", $values);
		

		$sql = "INSERT INTO {$this->table}({$columns}) VALUES({$values})";

		return $this->db->insert($sql);
	}

	/**
	 *	Update the ID record
	 *	@param $id The ID of product
	 *	@param $data The new data of the product
	 *	@access public
	 **/
	public function update($id, $data) {
		$dataSets = array();

		foreach ($data as $key => $value) {
			array_push($dataSets, "{$key}='" . $value . "'");
		};

		$updatedData = implode(",", $dataSets);

		$sql = "UPDATE {$this->table} SET {$updatedData} WHERE id={$id}";

		return $this->db->update($sql);
	}

	/**
	 *	Delete the ID record
	 *	@access public
	 **/
	public function delete($id) {
		$sql = "DELETE FROM {$this->table} WHERE id={$id}";

		return $this->db->delete($sql);
	}
}