<?php
$tarea = 4;
$titulo = "Sumar array primos";
$objetivo = "Suma los números del siguiente array [1,2,3,...,100], siempre y cuando los números contenidos sean primos.";
$valor = 'Numeros desde: <b>1</b> hasta el <b>100</b>';
//header
include 'head.php';
//Crea el encabezado de la tarea
include 'tituloTarea.php';

//Ejecuta las funciones
if(isset($_POST['btnSumarPrimos']))
{
    sumarPrimos();
} 

//pie tarea
include 'footerTarea.php';
// footer
include 'footer.php';

//Funciones

// $numeros = array(1,2,3,4,5,6,7,8,9,10,
// 11,12,13,14,15,16,17,18,19,20,
// 21,22,23,24,25,26,27,28,29,30,
// 31,32,33,34,35,36,37,38,39,40,
// 41,42,43,44,45,46,47,48,49,50,
// 51,52,53,54,55,56,57,58,59,60,
// 61,62,63,64,65,66,67,68,69,70,
// 71,72,73,74,75,76,77,78,79,80,
// 81,82,83,84,85,86,87,88,89,90,
// 91,92,93,94,95,96,97,98,99,100);

function sumarPrimos()
{
    $num1 = 1; //Numero inicial 
    $num2 = 100; //Numero final
    $suma = 0;

    for ($i = $num1; $i <= $num2; $i++)
    {
        $numDivisor = 0; 

        for ($n = 1; $n <= $i; $n++) 
        {
            if($i%$n == 0)
        {
            $numDivisor = $numDivisor + 1;
        }
        }
        if($numDivisor == 2 or $i == 1)//Primo
        {
            $suma = $suma + $i; //Agremos a la suma total
        }
    }

    echo 'Total suma numeros primos: <b>' . $suma .'</b>';

}

?>