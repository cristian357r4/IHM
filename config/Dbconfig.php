<?php
class Dbconfig {
    protected $serverName;
    protected $userName;
    protected $passCode;
    protected $dbName;

    function __construct($type) {
        $this->setHost($type);
    }

    private function setHost($type_host){

        if($type_host == 'local'){
            $this->serverName='localhost';
            $this->userName='root';
            $this->passCode='';
            $this->dbName='nutritionsmart';

        }elseif ($type_host == 'remote'){
            $this->serverName='107.180.41.126';
            $this->userName='agjesus';
            $this->passCode='123456';
            $this->dbName='nutritionsmart';
        }
    }




}
?>