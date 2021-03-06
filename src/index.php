<?php
    if (isset($_POST['login'])) {
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        if (($login == 'admin') and ($senha == 'admin')) {
            session_start();
            $_SESSION['user'] = "Robson";
            header('location: restrito');
        } else {
            echo "Login inválido!";
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./restrito/css/estilo.css">
    <title>Empresa</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="login-container">
                <div class="col-6 login-brand">
                    <img src='restrito/img/logo.png'>
                    <h1 class="login-title">Grupo Barigüi</h1>
                </div>
                <div class="col-6 login-form">
                    <form action="index.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Login</label>
                            <input type="text" class="form-control" name="login">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1">Senha</label>
                            <input type="password" class="form-control" name="senha">
                        </div>
                        <button type="submit" class="btn btn-primary">Acessar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>