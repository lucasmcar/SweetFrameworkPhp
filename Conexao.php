<?php

//////////////
/*Classe de conexao ao banco*/
class Conexao {
    
    //Propriedades da conexao
    private $host;
    private $dbname;
    private $user;
    private $password;
    private $con;
   
    
    function __construct()
    {
    }
    
    private function setHost($host)
    {
        $this->host = $host;
    }
    
   private function getHost()
    {
        return $this->host;
    }
    
    private function setDbName($dbname)
    {
        $this->dbname = $dbname;
    }
    
    private function getDbName()
    {
        return $this->dbname;
    }
    private function setUser($user)
    {
        $this->user = $user;
    }
    
    private function getUser()
    {
        return $this->user;
    }
    
    private function setPassword($password)
    {
        $this->password = $password;
    }
    
    private function getPasswoprd()
    {
        return $this->password;
    }

    public function connectionDB()
    {
        $this->setHost("Localhost");
        $this->setDbName("nome_do_banco");
        $this->setUser("root");
        $this->setPassword("");
        /*Se nada for definido na constante ou for definido incorretamente
         * jogará uma exceção.         
         */
        if(empty($this->getHost()))
        {
           echo "Host precisa ser definido";
        }
        if(empty($this->getDbName()))
        {
            throw new Exception("Banco de dados não encontrado ou inexistente");
        }
        if(empty($this->getUser()))
        {
           throw new Exception("Nome de usuário não encontrado"); 
        }
       
        
        try
        {
        //Define a definição com o banco
        $this->con = new PDO(
                "mysql:host='{$this->getHost()}';dbname='{$this->getDbName()}'; "
                . "'{$this->getUser()}','{$this->getPasswoprd()}'");
        
        $this->con->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ATTR_ERRMODE);
        
            if(!$this->con)
            {
                echo "Não foi possível conectar ao banco";
                
            }
        }
        catch (PDOException $ex)
        {
            echo $ex->getMessage();
        }
        
    }
    
    
    
    private function isDefined()
    {
        
    }
}

