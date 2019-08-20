<?php

	Class db {
		
		// First define all properties
		private $host = DB_HOST;
		private $username = DB_USER;
		private $password = DB_PASSWORD;
		private $database = DB_NAME;
		public $conn;
		public $result;
		public $total;
		public $data;
		public $isSuccessful;
		public $feedback = '';
		public $eachData;
		
		// The constructor starts the database connection
		function __construct() {
			$this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
		}
		
		// Function for sanitizing data
		public function sanitize($data) {
			
			// This one trims it of all spaces
			$data = trim($data);
			
			// This one strips away all html/code tags
			$data = strip_tags($data);
			
			// This one strips away all slashes
			$data = stripslashes($data);
			
			// This one removes all html special characters
			$data = htmlspecialchars($data);
			
			// This one removes quotes and other thing that will cause database malfunction
			$data = mysqli_real_escape_string($this->conn, $data);
			
			// FInally, the data is returned
			return $data;

		}
		
		public function escape($data) {
			$data = mysqli_real_escape_string($this->conn, $data);
			return $data;
		}

		// This will run whatever SQL statement you pass into it
		public function sql($statement) {
			
			$this->result = $this->conn->query($statement);
			
			// This will tell if there is data or not, it simply returns true or false, which you can use in your code
			if ($this->result == true) {
				$this->isSuccessful = true;
				return true;
			}
			
			else {
				$this->isSuccessful = false;
				$this->feedback = $this->conn->error;
				return false;
			}
		}

		
		// This checks if there is data 
		public function there_is_data() {
			
			$this->total = $this->result->num_rows;
				
			if ($this->total > 0) {
				return true;
			}
			
			else {
				return false;
			}
			
		}
		
		// This converts the query data to array, used for single data
		public function getData() {
			$this->data = $this->result->fetch_assoc();
			return $this->data;
		}
		
		// This is used when you want to full array to loop through
		public function getAllData() {
			$this->eachData = array();
			while ($this->data = $this->result->fetch_assoc()) {
				$this->eachData[] = $this->data;
			}
		}
		
		// This function gets details of a user
		public function getUser($whoever) {
			$this->sql("SELECT * FROM users WHERE ". USER ."='$whoever'");
			$this->getData();
			return $this->data;
		}

		// This function checks if user exists
		public function user_exists($whoever) {
			$this->sql("SELECT id FROM users WHERE ". USER ."='$whoever'");
			if ($this->there_is_data()) {
				return true;
			} else {
				return false;
			}
			
		}
		
		// This function gets the total data
		public function getTotal() {

			$this->total = $this->result->num_rows;
			return $this->total;
		}
		
		// This function checks for error
		public function there_is_no_error() {
			if ($this->isSuccessful == 'success') {
				return true;
			} else {
				return false;
			}
		}


		public function get($field) {
			return $this->sanitize($_POST[$field]);
		}
	}
	
	$db = new db;
	$GLOBALS['db'] = $db;
