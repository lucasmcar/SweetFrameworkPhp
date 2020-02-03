<?php

require_once(realpath(MODEL_PATH).'/Model.php');

class User extends Model 
{
    protected static $tableName = '';
    protected static $columns = [ /* Nome das colunas*/ ];
    protected $values = [];

    function __construct__($arr)
    {

    }

    public function loadFromArray()
    {

    }
} 