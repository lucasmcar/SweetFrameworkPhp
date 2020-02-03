<style>
    span
    {
        background-color: burlywood;
        padding: 6px;
        margin-left: auto;
        margin-right: auto;
    }

    span.error
    {
        color: red;
    }
</style>
<?php

require('Message.php');

class SWDatabase
{

    public static function getConnetion()
    {
        #Linha de constante não pode ser alterada
        define('EXT', '.ini');

        $envPath = realpath(dirname(__FILE__). '/../env'.EXT);

        //Verifica se arquivo existe
        if(!(file_exists($envPath)))
        {
            if(EXT != '.ini')
            {
                die("<span class='error'>".Message::showErrors(2)."</span>");
            }

            die("<span class='error'>".Message::showErrors(1)."</span>");
        }

        $env = parse_ini_file($envPath);
        
        try
        {
            $conn = new PDO("mysql:host=".$env['host'].";dbname=".$env['database'], $env['username'], $env['password']);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $ex)
        {
            die("Erro: " .$ex->getMessage());
        }

        return $conn;

    }
}