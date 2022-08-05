<?php
$tarea = 2;
$titulo = "Invertir cadena";
$objetivo = "De una cadena Invertir el orden de sus caracteres, sin usar métodos propios del lenguaje, sólo estructuras de control.";
$valor = 'Cadena a invertir: <b>'. $_POST["palabra"] .'</b>';
//header
include 'head.php';
//Crea el encabezado de la tarea
include 'tituloTarea.php';

//Ejecuta las funciones
if(isset($_POST['btnPalabra']))
{
    invertirCadena($_POST["palabra"]);
} 

//pie tarea
include 'footerTarea.php';
// footer
include 'footer.php';

//Funciones 
function invertirCadena($s)
{
    $s_inv = '';
    $ind = strlen($s) - 1;

    while ($ind >= 0) {
        $s_inv .= $s[$ind];
        $ind--;
    }
    echo 'Cadena invertida: <b>'. $s_inv .'</b>';
}

?>