<?php

class Database {
    
    private $dbh;
    
    public function __construct(Settings $settings){
        try{
            $this->dbh = new PDO('mysql:host='.$settings->params['db']['host'].';dbname='.$settings->params['db']['name'], $settings->params['db']['user'], $settings->params['db']['pass']);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            //do smth
        }
    }
    
    public function __get($param){
        return $this->$param;
    }