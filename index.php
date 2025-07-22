<!DOCTYPE html>
<html lang="pt-br">
    <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Meu Site</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
            </head>
<body>
<div class="container mt-5 mb-3 w-50 text-center">
    <h1>Calculadora de Tempo</h1>
    <p class="lead">Insira o total de segundos para calcular a quantidade em semanas, dias, horas e minutos.</p>
<!--Calcular o tempo, informar o total de segundos e mostrar a qtde em semanas, dias, horas e minutos-->
<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
    <label for="totalSegundos" class="form-label">Total de Segundos:</label>
        <input type="number" class="form-control" id="seg" name="seg" required  value="<?=$seg?>">
    <button type="submit" class="btn btn-dark mt-3">Calcular</button>
</form>
</div>
<div class="container mt-5 w-50 text-center">
<?php
$seg=$_REQUEST['seg'] ?? 0;
$hrs= $seg / 3600;
$min= $seg / 60;
$sem= $seg / 604800;
$dia= $seg / 86400;
$semInteiro=intval($sem);
$diaInteiro=intval($dia);
$minInteiro=intval($min);
$hrsInteiro=intval($hrs);
if ($seg > 0) {
    echo "<h2>Resultados:</h2>";
    echo "<p>Total de Segundos: $seg</p>";
    echo "<p>Total de Horas: " . $hrsInteiro . "</p>";
    echo "<p>Total de Minutos: " . $minInteiro . "</p>";
    echo "<p>Total de Semanas: " .$semInteiro . "</p>";
    echo "<p>Total de Dias: " . $diaInteiro . "</p>";
} else {
    echo "<p>Por favor, insira um valor válido.</p>";
}


?>

</div>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>
