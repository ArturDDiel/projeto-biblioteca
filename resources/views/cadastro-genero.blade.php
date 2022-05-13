<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Projeto Biblioteca - Cadastro Gêneros</title>

    <style>
        body {
            background-color: #24386e;
        }

        /* Card */
        
        .card {
            width: 500px;
            min-height: 400px;
            padding: 50px;
            margin: 2.5% auto;
            border: 1px solid #74747480;
        }

        /* Título */

        h4{
            color: #24386e;
        }

        /* Botão */

        .salvar {
            width: 100px;
            height: 40px;
            padding: 6.5px 0;
            border-radius: 5px;
            border: 1px solid #24386e;
            background-color: #24386e;
            color: #fff;
            font-weight: 600;
            text-decoration: none;
            text-align: center;
            transition: 0.2s;
        }

        .salvar:hover {
            width: 100px;
            height: 40px;
            padding: 6.5px 0;
            border-radius: 5px;
            border: 1px solid #24386e;
            background-color: #fff;
            color: #24386e;
            font-weight: 600;
            text-decoration: none;
            text-align: center;
            transition: 0.2s;
        }

        a {
            width: 100px;
            height: 40px;
            display: block;
            text-decoration: none;
            color: #24386e;
        }

        a:hover {
            text-decoration: none;
            color: #24386e;
        }

        .cancelar {
            width: 100px;
            height: 40px;
            padding: 6.5px 0;
            border-radius: 5px;
            border: 1px solid #24386e;
            background-color: #fff;
            color: #24386e;
            font-weight: 600;
            text-decoration: none;
            text-align: center;
        }

        /* Rodapé */

        .footer {
            width: 100%;
            height: 50px;
            padding: 10px;
            background-color: #fff;
            color: #24386e;
            bottom: 0;
            position: fixed;
            text-align: center;
        }

    </style>

</head>

<body>

    <div class="container">
        <div class="sobre-card">
            <div class="card">
                <h4>Cadastro de Gêneros</h4>
                <form action="/genero/cadastro" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Gênero</label>
                        <input name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Descrição</label>
                        <textarea name="descricao" class="form-control" id="exampleInputPassword1"></textarea>
                    </div>
                    <button class="salvar" type="submit">Salvar</button>
                    <button class="cancelar" type="reset">
                        <a href="/genero">Cancelar</a>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="footer">
        Artur Daniel e Lucas Gabriel
    </div>
</body>

</html>
