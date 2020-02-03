<?php

class Model
{
    protected static $tableName = '';
    protected static $columns = [];

    function __construct($arr)
    {
        $this->loadFromArray($arr);
    }

    function loadFromArray($arr)
    {
        if($arr)
        {
            foreach($arr as $key => $value)
            {
                
            }
        }
    }


}