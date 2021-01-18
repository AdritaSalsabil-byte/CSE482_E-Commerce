<?php
class Database2{
    public $host = "localhost";
    public $user = "root";
    public $password ="";
    public $dbName="ecom_site";

    public $link;
    public $error;

    public function __construct(){
        $this->connectDatabase();

    }
    private function connectDatabase(){
       $this->link = new mysqli($this->host, $this->user, $this->password, $this->dbName);
        if(!$this->link){
            $this->error = "Database connection failed".$this->link->connect_error;
            return false;
        }
    }
    public function select($query){
        $result = $this->link->query($query) or die($this->link->error.__LINE__);
        if($result->num_rows >0){
            return $result;
        }else{
            return false;
        }
    }
    public function insert($q){
        $insert_row = $this->link->query($q) or die ($this->link->error.__LINE__);
        if($insert_row){
            return $insert_row;
            exit();
        }else{
            return false;
        }
    }

}
?>
