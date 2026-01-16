<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

use Monolog\Formatter\LineFormatter;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Level;


//Creamos el logger
$logger = new Logger('app');

// 2º Generamos un archivo para el log
$archivolog = new StreamHandler(__DIR__.'/app.log', Level::Debug);

// 3º Configuramos el formato de la linea para el archivo log
$formato = "[%datetime%] - %channel% %level_name%: %message% %context%\n"; 

?>