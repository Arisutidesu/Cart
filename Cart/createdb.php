<?php

class CreateDb
{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $con;

    // class constructor
    public function __construct(
        $dbname = "cartdb",
        $tablename = "carttb",
        $servername = "localhost",
        $username = "root",
        $password = ""
    ) {
        $this->dbname = $dbname;
        $this->tablename = $tablename;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;

        // create connection, including database name
        $this->con = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$this->con) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    // Get product from the database
    public function getData() {
        $sql = "SELECT * FROM $this->tablename";

        $result = mysqli_query($this->con, $sql);

        if (!$result) {
            die("Error retrieving data: " . mysqli_error($this->con));
        }

        if (mysqli_num_rows($result) > 0) {
            return $result;
        } else {
            return [];
        }
    }
}
?>