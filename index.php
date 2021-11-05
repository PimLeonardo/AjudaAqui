<html>

<head>
    <meta charset="utf-8" />
    <title>Ajuda Aqui</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" style="color: black;" href="fazer_chamada.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                </a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">
            <div class="card-login">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="valida_login.php" method="post">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <input name="senha" type="password" class="form-control" placeholder="Senha">
                            </div>

                            <?php if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>

                                <div class="text-danger">
                                    Usuário ou senha inválido(s)
                                </div>

                            <?php } ?>

                            <?php if (isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>

                                <div class="text-danger">
                                    Faça login antes de acessar as outras páginas
                                </div>

                            <?php } ?>

                            <button class="btn btn-primary btn-block" type="submit">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>