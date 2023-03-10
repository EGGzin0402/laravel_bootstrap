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
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#PrimeiroPasso" aria-expanded="false" aria-controls="collapseExample">
            Primeiro passo
        </button>
        <button class="btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#SegundoPasso" aria-expanded="false" aria-controls="collapseExample">
            Segundo passo
        </button>
        <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#TerceiroPasso" aria-expanded="false" aria-controls="collapseExample">
            Terceiro passo
        </button>
        <button class="btn btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#QuartoPasso" aria-expanded="false" aria-controls="collapseExample">
            Quarto passo
        </button>
        <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#QuintoPasso" aria-expanded="false" aria-controls="collapseExample">
            Quinto passo
        </button>
    </div>

    <div class="collapse collapse-horizontal" id="PrimeiroPasso">

            <div class="card" style="width: 500px; left: 315px; top: 20px;">

                <div class="card-body">
                Primeiro crie o projeto Laravel com o composer usando:<br>
                composer create-project laravel/laravel NomeDoProjeto
            </div>
        </div>
    </div>

        <br>

    <div class="collapse collapse-horizontal" id="SegundoPasso">

        <div class="card" style="width: 500px; left: 315px; top: 20px;">

            <div class="card-body">
                Navegue até a pasta do projeto usando:<br>
                cd NomeDoProjeto<br><br>
                Instale os pacotes necessários executando:<br>
                npm install<br><br>
            </div>
        </div>

    </div>

        <br>

        <div class="collapse collapse-horizontal" id="TerceiroPasso">

            <div class="card" style="width: 500px; left: 315px; top: 20px;">

                <div class="card-body">
                    Instale o bootstrap inserindo:<br>
                    npm i bootstrap @popperjs/core<br><br>
                    Depois o sass:<br>
                    npm i --save-dev sass<br><br>
                </div>
            </div>
        </div>

        <br>

    <div class="collapse collapse-horizontal" id="QuartoPasso">

        <div class="card" style="width: 500px; left: 315px; top: 20px;">

            <div class="card-body">
                Abra a pasta do arquivo e edite o arquivo<br><br>
                vite.config.js<br><br>
                Adicionando a referência ao módulo do bootstrap no node.js:<br><br>
                'node_modules/bootstrap/dist/css/bootstrap.min.css'<br>
                'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
            </div>
        </div>

    </div>

    <br>

    <div class="collapse collapse-horizontal" id="QuintoPasso">

        <div class="card" style="width: 500px; left: 315px; top: 20px;">

            <div class="card-body">
                Para referenciar o bootstrap nas páginas utilize a seguinte referência no head:<br><br>
                @vite([
                    'resources/css/app.css',
                    'resources/js/app.js',
                    'node_modules/bootstrap/dist/css/bootstrap.min.css',
                    'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
                    ])
            </div>
        </div>

    </div>
    
</body>
</html>