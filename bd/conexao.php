<?php
    class Conexao{
        private $host="localhost";
       
        private $db_name='academia';
        
        private $username='root';

        private $password='';

        private $conectar;

        public function novaConexao(){
            $this->conectar=null;
            try{
                $this->conectar=new PDO("mysql:host=".$this->host.";dbname =".$this-db_name, $this->username, $this->password);
            }catch (PDOExceptio $exception){
                echo 'Connection error: '.$exception->getMessage();
            }
            return $this->connection
        }
    }
?>