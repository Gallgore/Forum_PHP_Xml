<!doctype html>
<html lang="pt-BR">
<!--Projeto criado por José Gabriel de valença Silva, RA - 29027936 Desenvolvido no Visual Studio Code-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tríade Horóscopo - Seu Signo</title>
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
        <div class="row row-cols-1 py-3">
            <div class="col text-center">
                <?php
                $Nome = $_POST['nomePess'];
                $dtaNasc = $_POST['dataNasc'];
                $date = new DateTime($dtaNasc);
                $dtaSigno = $date->format('m-d');
                // Transformando arquivo XML em Objeto
                $xml = simplexml_load_file('signos.xml');
                
                // Exibe as informações do XML
                echo '<h2 ><font color="#FFFAFA">' . $Nome .' seu signo é: </font></h2>';
                foreach ($xml->signo as $retorno) :
                    if ($dtaSigno >= $retorno->dtaInicio and $dtaSigno <= $retorno->dtaFinal) {
                        echo '<h1 class="fw-bold"><font color="#FFFAFA">' . $retorno->descSigno . '</font></h1>';
                        echo '<Image src=' . $retorno->imagem . '/>';
                        
                        echo '<p class="my-3"><font color="#FFFAFA" Size=5.2>' . nl2br($retorno->personalidade) . '</font><p>';
                    }
                endforeach;
                
                ?>
            </div>
            <div class="col">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a class="btn btn-outline-primary" href="./index.php">Voltar</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
<!--Projeto criado por José Gabriel de valença Silva, RA - 29027936 Desenvolvido no Visual Studio Code-->
</html>