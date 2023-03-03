<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap w/ Vite</title>

    <!-- Styles -->
    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])

</head>

<body>

    <div class="container py-4 px-3 mx-auto">
        <h1>Utilizando Bootstrap e Vite no Laravel!</h1>
        <button class="btn btn-primary">
            Primary button
        </button>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#PrimeiroPasso" aria-expanded="false" aria-controls="collapseExample">
            Primeiro passo
        </button>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#SegundoPasso" aria-expanded="false" aria-controls="collapseExample">
            Segundo passo
        </button>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#TerceiroPasso" aria-expanded="false" aria-controls="collapseExample">
            Terceiro passo
        </button>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#TerceiroPasso" aria-expanded="false" aria-controls="collapseExample">
            Terceiro passo
        </button>
    </div>

    <div class="" style="width: 600px; padding-left: 130px;">

        <div class="collapse" id="PrimeiroPasso">
            <div class="card card-body">
                Primeiro crie o projeto Laravel com o composer usando:<br>
                composer create-project laravel/laravel NomeDoProjeto
            </div>
        </div>

        <br>

        <div class="collapse" id="SegundoPasso">
            <div class="card card-body">
                Navegue até a pasta do projeto usando:<br>
                cd NomeDoProjeto<br><br>
                Instale os pacotes necessários executando:<br>
                npm install<br><br>
            </div>
        </div>

        <br>

        <div class="collapse" id="TerceiroPasso">
            <div class="card card-body">
                Instale o bootstrap inserindo:<br>
                npm i bootstrap @popperjs/core<br><br>
                Depois o sass:<br>
                npm i --save-dev sass<br><br>
            </div>
        </div>

        <br>

        <div class="collapse" id="QuartoPasso">
            <div class="card card-body">
                Instale o bootstrap inserindo:<br>
                npm i bootstrap @popperjs/core<br><br>
                Depois o sass:<br>
                npm i --save-dev sass<br><br>
            </div>
        </div>

    </div>
    
</body>
</html>