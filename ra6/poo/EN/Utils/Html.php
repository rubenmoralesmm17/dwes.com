<?php
namespace EN\Utils;

class Html {
  public static function inicioHTML($titulo, $estilos):void {
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head><title>$titulo</title></head>";
    echo "<body>";
    echo "<link rel='stylesheet' type='text/css' href='".implode("'>", $estilos)."'>";
    echo "<h1>$titulo</h1>";
    
  }

  public static function finHtml() {
    echo "</body>";
    echo "</html>";
  }
}
