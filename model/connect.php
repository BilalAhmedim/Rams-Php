<?php

class connect
{
    private string $host;
    private string $user;
    private string $password;
    private string $database;

    function __construct($host, $user, $password, $database, $query)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
        $this->connection($query);
    }

    protected function connection($query)
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $sql = new mysqli($this->host, $this->user, $this->password, $this->database) or die("Unable to Connect $sql->connect_error");
        $result = $sql->query($query);
        while($row = $result -> fetch_assoc()){
            echo "Name: $row[name]<br>ID: $row[id]<br>";
        }
        $sql->close();
    }

    protected function close(){
        
    }
}

//$con = new connect("localhost", 'root', '', 'rams', 'SELECT * FROM category');