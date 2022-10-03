<!doctype html>
<html lang="pt-BR">
<!--Projeto criado por José Gabriel de valença Silva, RA - 29027936 Desenvolvido no Visual Studio Code-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tríade Horóscopo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
    body {
        background-color: #191970
    }
    </style>
</head>

<body>
    <div class="container shadow rounded-3 my-5">
        <div class="row row-cols-1">
            <div class="col">
                <h1 class="text-center fw-bold mt-5"><font color="#FFFAFA" Size=32>Tríade Horóscopo</font></h1>
                <p class="text-muted text-center mt-2 mb-5">
                    Confira os traços de sua personalidade baseado no seu Signo!</p>
                <form action="signos.php" method="post">
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="nomePess" placeholder="Seu nome" required>
                                <label for="floatingInput">Informe seu Nome</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingInput" name="dataNasc" placeholder="Sua data" required>
                                <label for="floatingInput">Informe a data de Nascimento</label>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1">
                        <div class="col my-3">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-outline-primary" type="submit">Descobrir Personalidade</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
<!--Projeto criado por José Gabriel de valença Silva, RA - 29027936 Desenvolvido no Visual Studio Code-->
</html>