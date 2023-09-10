<?php
ini_set('display_errors', 1);
error_reporting(1);
require_once '../inc/cabecalho.php';

require './Curso.php';


$curso1 = new Curso("API Laravel", "https://www.youtube.com/watch?v=AO3gug_3DRs&t=1809s");
$curso2 = new Curso("Git", "https://youtu.be/Zwv9qRyVeU4");
$curso3 = new Curso("Git Flow", "https://youtu.be/oweffeS8TRc?si=yk7-GrUGMp2OPQCu");

$arrayCursos = array($curso1, $curso2, $curso3);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1 - LP2D3</title>

</head>

<body>
    <hr class="invisible vr" style="height: 200;">

    <div class="main align-items-center justify-content-center">
        <div class="d-flex justify-content-center align-items-center">
            <h3>Exercicio 4 - Catálogo de Cursos</h3>
        </div>
        <hr class="invisible vr" style="height: 25;">
        <div class="container justify-content-center align-items-center">
            <hr class="invisible">
            <div class="contaniner d-flex justify-content-center">
                <h2>Lista de Cursos</h2>
            </div>
            <table class="table align-middle table-hover table-bordered">
                <thead class="table-dark">
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Link</th>
                </thead>

                <tbody class="align-middle">

                    <?php
                    $id = 0;
                    foreach ($arrayCursos as $curso) {
                    ?>
                        <tr>
                            <th><?= $id + 1 ?></th>
                            <td><?= $curso->getNome() ?></td>
                            <td><?= $curso->getLink() ?></td>
                        </tr>
                    <?php $id++;
                    } ?>

                </tbody>

            </table>
            <vr class="vr invisible" style="height: 100px;"></vr>
            <div class="d-flex align-items-center justify-content-center">
                <a href="../index.php" class="btn btn-lg btn-rounded btn-primary">Voltar ao Início</a>
            </div>
        </div>
</body>

</html>