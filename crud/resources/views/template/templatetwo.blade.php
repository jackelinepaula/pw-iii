<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/styletwo.css')}}">
    <title>Home</title>
</head>

<body>
    <header class="header">
        <div class="logo">
            <h3>Laravel | Contacts</h3>
        </div>
        <div class="menu">
            <li><a href="/">Home</a></li>
            <li><a href="/contact-return">Contatos</a></li>
            <li><a href="/novocontato">Novo Contato</a></li>
        </div>
    </header>

    @yield('content')

    <footer>
        <p>&copy;2021, JackelineEstudante | Todos os direitos reservados.</p>
    </footer>
</body>

</html>