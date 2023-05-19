<?php
    require_once('../controllers/readAluno.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body class="bg-primary">
        
        <div class="container p-2 bg-light mt-5">
            <h2 class="text-center">Alunos cadastrados</h2>
            <a class="btn btn-primary d-block w-25 mx-auto" href="../index.php">Voltar</a>

            <?php
                foreach($consulta as $data){
            ?>
                <div class="box w-50 mx-auto mt-4 p-4 text-center ">
                    <hr>
                    <h4>ID: <?php echo $data['ID'];?> | Nome: <?php echo $data['NOME'];?></h4>
                    <div class="d-flex justify-content-around">
                        <a class="btn btn-danger d-block w-25" href="../controllers/deleteAluno.php?id=<?php echo $data['ID'];?>">Deletar</a>
                        <a class="btn btn-success d-block w-25" href="alunoUpdate.php?id=<?php echo $data['ID'];?>">Atualizar</a>
                    </div>
                    <hr>
                </div>
            <?php
                }
            ?>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>