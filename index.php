<!-- Head -->
<?php include 'php/head.php';?>



<div class="row m-0">
    <!-- tarea 1 -->
    <div class="col-md-6 p-1">
        <div class="card">
        <div class="card-header">
        Tarea 1 | <b>Fibonacci</b>.
        </div>
        <div class="card-body">

            <h4 class="card-title">Fibonacci</h4>
            <p class="card-text">Cálculo de la serie Fibonacci de un número.</p>
            
            <form method="post" action="php/fibonacci.php" class="form-inline p-0">
                <input class="form-control mb-2 mr-2" type="number" name="numeroFibo" id="numeroFibo" min="10" value="10" max="100" required>
                <input type="submit" class="btn btn-primary mb-2" value="Evaluar" name="btnFibo">
            </form>
            <span class="help-block">Ingrese un número entre 10 - 100</span>

            
        </div>
        </div>
    </div>
    <!-- Tarea 2 -->
    <div class="col-md-6 p-1">
        <div class="card">
        <div class="card-header">
        Tarea 2 | <b>Cadena téxto invertida</b>.
        </div>
        <div class="card-body">
            <h4 class="card-title">Invertir cadena</h4>
            <p class="card-text">
            De una cadena Invertir el orden de sus caracteres, sin usar métodos propios del lenguaje, sólo estructuras de control.
            </p>

            <form method="post" action="php/invertirString.php" class="form-inline p-0">
                <input class="form-control mb-2 mr-2" type="text" name="palabra" id="palabra" maxlength="50" minlength="3" placeholder="Palabra" required>
                <input type="submit" class="btn btn-primary mb-2" value="Evaluar" name="btnPalabra">
            </form>
        </div>
        </div>
    </div>

    <div class="col-md-6 p-1">
        <div class="card">
        <div class="card-header">
        Tarea 3 | <b>Multiplicación (!x)</b>.
        </div>
        <div class="card-body">
            <h4 class="card-title">Multiplicar sin signo</h4>
            <p class="card-text">Función que permite multiplicar dos números sin utilizar el signo de multiplicación.</p>

            <form method="post" action="php/multiplicar.php" class="form-inline p-0">
            <input class="form-control mb-2 mr-2" type="number" name="num1" id="num1" min="1" value="1" max="100" required>
            <input class="form-control mb-2 mr-2" type="number" name="num2" id="num2" min="1" value="1" max="100" required>
                <input type="submit" class="btn btn-primary mb-2" value="Evaluar" name="btnMultiplicar">
            </form>

        </div>
        </div>
    </div>

    <div class="col-md-6 p-1">
        <div class="card">
        <div class="card-header">
        Tarea 4 | <b>Sumar primos de un arreglo</b>.
        </div>
        <div class="card-body">
            <h4 class="card-title">Sumar array primos</h4>
            <p class="card-text">Suma los números del siguiente array [1,2,3,...,100], siempre y cuando los números contenidos sean primos.</p>
            
        <form method="post" action="php/sumarArray.php" class="form-inline p-0">
            <input type="submit" class="btn btn-primary mb-2" value="Evaluar" name="btnSumarPrimos">            
        </form>

</div>
</div>
</div>
</div>



<!-- footer -->
<?php include 'php/footer.php';?>
