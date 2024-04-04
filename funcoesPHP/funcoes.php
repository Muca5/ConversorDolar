<?php

if(isset($_POST['valorDolar']) && isset($_POST['valorReal'])){
    $dolar = $_POST['valorDolar'];
    $real = $_POST['valorReal'];
    
    function converterDolarParaReal($dolar, $real){
        return $real / $dolar;
    }
    
    $dolares = converterDolarParaReal($dolar, $real);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Conversor de Moedas</h2>
        <form method="POST">
            <div class="form-group">
                <label for="valorDolar">Valor do Dólar:</label>
                <input type="number" class="form-control" name="valorDolar" placeholder="Digite o valor do dólar">
            </div>
            <div class="form-group">
                <label for="valorReal">Valor em Reais:</label>
                <input type="number" class="form-control" name="valorReal" placeholder="Digite o valor em reais">
            </div>
            <div class="form-group">
                <label for="resultado">Resultado:</label>
                <input type="text" class="form-control" name="resultado" value="<?php if(isset($dolares)){ echo $dolares; } ?>" disabled>
            </div>
            <button type="submit" class="btn btn-primary">Converter</button>
        </form>
    </div>
</body>
</html>

