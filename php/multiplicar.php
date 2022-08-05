<?php
$tarea = 3;
$titulo = "Multiplicar sin signo";
$objetivo = "Función que permite multiplicar dos números sin utilizar el signo de multiplicación.";
$valor = 'Números a multiplicar: <b>'. $_POST["num1"] . ' por '. $_POST["num2"]  .'</b>';
//header
include 'head.php';
//Crea el encabezado de la tarea
include 'tituloTarea.php';

//Ejecuta las funciones
if(isset($_POST['btnMultiplicar']))
{
    Multiplicar($_POST["num1"],$_POST["num2"]);
} 

//pie tarea
include 'footerTarea.php';
// footer
include 'footer.php';

//funciones

function Multiplicar($num1, $num2)
{
    $res = 0;

    if($num1 == 0 or $num2 == 0)
    {
        $res = 0;
    }else{
    
        for($i=1;$i<=$num1;$i++)
            {
                $res = $res + $num2;
            }
        }
        echo 'Resultado: <b>' . $res .'</b>';

}








?>