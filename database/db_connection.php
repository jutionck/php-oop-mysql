<?php

require __DIR__ . '\\..\\' . "/vendor/autoload.php";
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '\\..\\' . '/');
$dotenv->load();

class DbConnection
{
    protected $host;
    protected $username;
    protected $password;
    protected $db;
    protected $conn;

    function __construct()
    {
        $this->host     = $_ENV["MYSQL_HOST"];
        $this->username = $_ENV["MYSQL_USER"];
        $this->password = $_ENV["MYSQL_PASSWORD"];
        $this->db       = $_ENV["MYSQL_DATABASE"];
        $this->_connect(); // function
    }

    private function _connect()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // CRUD
    function list($table)
    {
        $sql = "SELECT * FROM $table";
        $sql = $this->conn->query($sql);
        $result = [];
        while ($row = $sql->fetch_assoc()) {
            array_push(
                $result,
                [
                    "id"    => $row["id"],
                    "npm"   => $row["npm"],
                    "name"  => $row["name"],
                    "email" => $row["email"],
                ]
            );
        }

        // Kalo mau di akses REST API
        // return json_encode(
        //     [
        //         "status"    => "OK",
        //         "data"      => $result,
        //     ]
        // );

        return $result;
    }

    function create($table, $columns, $values)
    {
        $this->_connect();
        $sql = "INSERT INTO " . $table . " " . $columns . "  VALUES " . $values;
        $sql = $this->conn->query($sql);
        if ($sql == true) {
            return $sql;
        } else {
            return false;
        }
    }

    function getById($table, $id)
    {
        $sql = "SELECT * FROM " . $table . " WHERE id= " . $id;
        $sql = $this->conn->query($sql);
        $sql = $sql->fetch_assoc();
        return $sql;
    }

    function update($table, $value, $where)
    {
        $this->_connect();
        $sql = "UPDATE " . $table . " SET " . $value . "  WHERE id= " . $where;
        $sql = $this->conn->query($sql);
        if ($sql == true) {
            return $sql;
        } else {
            return false;
        }
    }

    function delete($table, $where)
    {
        $this->_connect();
        $sql = "DELETE FROM " . $table . "  WHERE id= " . $where;
        $sql = $this->conn->query($sql);
        if ($sql == true) {
            return $sql;
        } else {
            return false;
        }
    }
}
