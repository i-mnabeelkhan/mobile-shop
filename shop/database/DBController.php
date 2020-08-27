<?php


class DBController
{
    // DATABASE CONNECTION PROPERTIES
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = 'root78';
    protected $database = "shop";

    // $CON FOR DATABASE CONNECTION LINK
    public $con = null;

    // DBController CONSTRUCTOR
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error){
            echo "Fail " . $this->con->connect_error;
        }
    }
    //DESTRUCTOR
    public function __destruct()
    {
        $this->closeConnection();
    }

    //FOR MYSQLI CLOSING CONNECTION
    protected function closeConnection(){
        if ($this->con != null ){
            $this->con->close();
            $this->con = null;
        }
    }
}