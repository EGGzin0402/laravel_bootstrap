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
        <h1>Hello, Bootstrap and Vite!</h1>
        <button class="btn btn-primary">
            Primary button
        </button>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#PrimeiroPasso" aria-expanded="false" aria-controls="collapseExample">
            Primeiro passo
        </button>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#SegundoPasso" aria-expanded="false" aria-controls="collapseExample">
            Segundo passo
        </button>
    </div>

    <div class="" style="width: 500px; padding-left: 130px;">
        <div class="collapse" id="PrimeiroPasso">
            <div class="card card-body">
                Primeiro crie o projeto Laravel com o composer usando:<br>
                composer create-project laravel/laravel NomeDoProjeto
            </div>
        </div>
        <br>
        <div class="collapse" id="SegundoPasso">
            <div class="card card-body">
                Primeiro crie o projeto Laravel com o composer usando:<br>
                composer create-project laravel/laravel NomeDoProjeto
            </div>
        </div>
    </div>
    
</body>
</html>