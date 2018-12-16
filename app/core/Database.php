<?php
/**
 * 
 */
class Database 
{
	private $host = 'localhost';
    private $db_name ='suyambus_datastore';
    private $user = 'root';
    private $passwd = '';
    private $conn;
	
	// DB Connect
    public function connect() {
      $this->conn = null;

      try { 
        $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->user, $this->passwd);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo 'Connection Error: ' . $e;
      }

      return $this->conn;
    }
    public  function query($query, $params = array()) {
                $statement = $this->connect()->prepare($query);
                $statement->execute($params);
                if (explode(' ', $query)[0] == 'SELECT') {
                $data = $statement->fetchAll();
                return $data;
                }
        }
}