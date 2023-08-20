<?php
require_once "Retangulo.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de Formulário do carro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\styles.css">
</head>
<body>
    <hr class="invisible">
    <hr class="invisible">

    <div class="container">
        <h3>Preencha os Dados</h3>
        <form method="post">
            <div class="form-group">
                <label for="altura">Altura:</label>
                <input type="text" class="form-control" id="altura" name="altura" required>
            </div>
            <div class="form-group">
                <label for="largura">Largura:</label>
                <input type="text" class="form-control" id="largura" name="largura" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"]=="POST") {

                $largura = $_POST["largura"];
                $altura = $_POST["altura"];
                $retangulo = new Retangulo($largura, $altura);
                

                echo "<hr class='invisible'>";
                echo "<h3>Dados Enviados</h3>";
                echo "<p><strong>Area:</strong> " . $retangulo->calcula_area();
                echo "<p><strong>Perímetro:</strong> " . $retangulo->calcula_perimetro();
            }
        ?>  
    </div>
</body>
</html>