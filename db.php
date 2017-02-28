<?php 
class db {
    private $hostname = "localhost";
    private $username = "it58160038";
    private $password = "23072539";
    private $dbname = "it58160038";
    public $link;
    public $result;

    function connect() {
        if($this->link = mysqli_connect($this->hostname, $this->username,$this->password, $this->dbname)) {
            echo "Connected";
            return true;
        } else {
            echo "Can't connect to the database";
            return false;
        }                             
    }
    function query($sql){
        if($this->result = mysqli_query($thislink,$sql)){
            return true;
        }else {
            return false;
        }
    }
}
?>