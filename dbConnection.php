<?php
    class Database{
        private $hostname;
        private $dbname;
        private $username;
        private $password;

        function __construct($hostname, $dbname, $username = "root", $password = ""){
            $this->hostname = $hostname;
            $this->dbname = $dbname;
            $this->username = $username;
            $this->password = $password;
        }

        function getConnection(){
            try{
                $pdo = new PDO("mysql:host=$this->hostname;dbname=$this->dbname;charset=UTF8", $this->username, $this->password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                echo "Successfully Connected";
            }catch(PDOException $e){
                echo "Connection Failed: " . $e->getMessage();
            }
        }
    }
?>