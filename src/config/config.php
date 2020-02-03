<?php

$date = new DateTime();
date_timezone_set($date, 'America/Sao_Paulo');
setlocale(LC_TIME, 'pt_br', 'pt_br.utf8', 'portuguese');

//Definições Pastas

define('MODEL_PATH', realpath(dirname(__FILE__).'/../models'));

require_once(realpath(dirname(__FILE__).'/SWDatabase.php'));