<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Projeto Biblioteca - Lista Gêneros</title>

    <style>
        body {
            background-color: rgba(230, 230, 230, 0.418);
        }

        /* Navbar */

        nav {
            background-color: #24386e;
        }

        .logo {
            width: 120px;
            margin-left: 50px
        }

        /* Botão Navbar */

        .cadastro {
            width: 100px;
            height: 40px;
            padding: 6.5px 0;
            margin: 0 10px 0 auto;
            border-radius: 5px;
            border: 1px solid transparent;
            background-color: #fff;
            color: #24386e;
            font-weight: 600;
            text-decoration: none;
            text-align: center;
            transition: 0.2s;
        }

        .cadastro:hover {
            width: 100px;
            height: 40px;
            padding: 6.5px 0;
            margin: 0 10px 0 auto;
            border-radius: 5px;
            border: 1px solid #fff;
            background-color: #24386e;
            color: #fff;
            font-weight: 600;
            text-decoration: none;
            text-align: center;
            transition: 0.2s;
        }

        /* Background */

        .cor-fundo {
            width: 100%;
            height: 175px;
            background-color: #24386e;
        }

        /* Lista */

        .tabela-livros {
            width: 90%;
            height: auto;
            margin: -150px auto 75px auto;
            padding: 50px 75px;
            border-radius: 10px;
            border: 1px solid rgb(218, 218, 218);
            background-color: #fff;
        }

        h1 {
            color: #24386e;
            margin: 0 0 20px 0;
        }

        .lista {
            display: flex;
            flex-direction: row;
            list-style: none;
            padding-bottom: 20px;
            border-bottom: 1px solid #74747480
        }

        .id {
            width: 30px;
            padding: 22px 5px;
        }

        .li-capa {
            width: 80px;
            padding: 0 15px;
        }

        .capa {
            width: 50px;
        }

        .detalhes-livros {
            padding: 11px;
            list-style: none;
        }

        .descricao {
            color: rgba(116, 116, 116, 0.8);
        }

        .excluir{
            list-style: none;
            position: fixed;
            right: 10%;
        }

        /* Rodapé */

        .footer {
            width: 100%;
            height: 50px;
            padding: 10px;
            background-color: #24386e;
            color: #fff;
            bottom: 0;
            position: fixed;
            text-align: center;
        }

    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAM0AAABMCAYAAADOUDMUAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8AAADImlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS4zLWMwMTEgNjYuMTQ1NjYxLCAyMDEyLzAyLzA2LTE0OjU2OjI3ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo1Q0UwNzU0QTY0QTcxMUU2ODFGOEI5NzIyMjJCOTdCRSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo1Q0UwNzU0QjY0QTcxMUU2ODFGOEI5NzIyMjJCOTdCRSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjVDRTA3NTQ4NjRBNzExRTY4MUY4Qjk3MjIyMkI5N0JFIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjVDRTA3NTQ5NjRBNzExRTY4MUY4Qjk3MjIyMkI5N0JFIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQg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"
                    alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="cadastro" href="/index">Início</a>
            </div>
            <a class="cadastro" href="/genero/cadastro">Cadastrar</a>
        </div>
    </nav>

    <div>
        <div class="cor-fundo"></div>
        <div class="tabela-livros">
            <h1>Gêneros</h1>
            <div>
                @foreach ($listaGenero as $genero)
                    <ul class="lista">
                        <li class="id">{{ $genero->id }}</li>
                        <ul class="detalhes-livros">
                            <li class="titulo">{{ $genero->nome }}</li>
                            <li class="descricao">{{ $genero->descricao }}</li>
                        </ul>
                        <ul class="excluir">
                            <li>
                                <form action="/genero/{{ $genero->id }}/excluir" method="POST"
                                    onsubmit="return confirm('Deseja excluir?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger excluir">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
                                            class="bi bi-trash" viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd"
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>

    <div class="footer">
        Artur Daniel e Lucas Gabriel
    </div>
</body>

</html>
