<?php
$tarea = 1;
$titulo = "Fibonacci";
$objetivo = "Cálculo de la serie Fibonacci de un número.";
$valor = 'Número a evaluar <b>'. $_POST["numeroFibo"] .'</b>';
//header
include 'head.php';
//Crea el encabezado de la tarea
include 'tituloTarea.php';

//Ejecuta las funciones
if(isset($_POST['btnFibo']))
{
    fibonacci($_POST["numeroFibo"]);
} 
//pie tarea
include 'footerTarea.php';
// footer
include 'footer.php';

//Funciones 
function fibonacci($n)
{
    $fibonacci  = [0,1];
    
  for($i=2;$i<=$n;$i++)
    {
        $fibonacci[] = $fibonacci[$i-1]+$fibonacci[$i-2];
        echo ' Serie: <b>'. $fibonacci[$i] . '</b><br>';
        
    }
}
?>