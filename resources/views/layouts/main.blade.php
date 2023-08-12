<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/produto.css">
    <link rel="stylesheet" href="/css/edit-produtos.css">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/perfil-user.css">


    <!-- link js -->
    <script src="/js/script.js"></script>
</head>

<body class="antialiased">

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">

                <!-- logo -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <a class="navbar-brand" href="/">
                        <img src="/img/logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
                    </a>
                    <!-- botões de navegação -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/criar-produtos">Criar produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contatos/contatos">Contatos</a>
                        </li>
                    </ul>
                    <form>
                        
                        <input type="search" placeholder=" buscar por" id="buscar">
                        <label for="buscar"><ion-icon name='search'></ion-icon></label>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                                <a class="nav-link" href="/login">Entrar</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="/">Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')

    <footer></footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>