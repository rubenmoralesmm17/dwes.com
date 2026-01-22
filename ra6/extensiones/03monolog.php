<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/include/funciones.php');
use EN\Utils\Html;
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
$formatter = new LineFormatter($formato);


// 4º Asignamos el formateador al manejador de archivo
$archivolog->setFormatter($formatter);

// 5º asignar el archivo log al logger
$logger->pushHandler($archivolog);

// 6º Generamos mensajes de log
$logger->debug('Esto es un mensaje de depuración');
$logger->info('El usuario ha iniciado sesión', ['usuario' => 'juanperez']);
$logger->warning('El espacio en disco es bajo');
$logger->error('No se pudo conectar a la base de datos', ['error' => 500, 'mensaje' => 'El usuario no existe en la base de datos']);
$logger->critical('Fallo crítico en el sistema!');

$logger->close();

inicioHtml("Ejemplo de uso de Monolog", ['/estilos/general.css']);
// abrimos el archivo log y vemos su contenido
$log = fopen(__DIR__.'/app.log', 'r');
while ($linea = fgets($log)) {
    echo $linea . "<br>";
}
fclose($log);
finHtml();
?>