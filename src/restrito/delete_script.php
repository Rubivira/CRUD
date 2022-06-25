<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Exclusão de Cadastro</title>
</head>

<body>

    <div class="container">
        <div class="row mt-2">
            <?php   
            include "connect.php";

            $id = $_POST['id'];
            $nome = $_POST['nome'];
            
            
            $sql = "DELETE FROM `pessoas` WHERE cod_pessoa = $id";

            if (mysqli_query($conn, $sql)) { 
                mensagem("$nome excluído com sucesso!", 'success');
            } else
                mensagem("$nome NÃO excluído.", 'danger');
            ?>
            <a href="pesquisa.php" class="btn btn-primary col-1">Voltar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>