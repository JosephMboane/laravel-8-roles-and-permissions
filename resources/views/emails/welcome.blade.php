<DOCTYPE html>
    <html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <title>JCS Mail</title>
    <body>
    <h1 class="text-center">Joaquim Chaves Saude</h1>
    <h2>
        Ola {{$data['name']}},
        estamos felizes por você estar aqui! A seguir estão os detalhes da sua conta: <br>
        </h3>
        <h3>Email: </h3><p>{{$data['email']}}</p>
        <h3>Password: </h3><p>{{$data['password']}}</p>
        <h3>Phone: </h3><p>{{$data['contact']}}</p>
        <h3><strong>Nota:</strong>Deves usar o seu email e a palavra pass para veres os seus resultados</h3>
    </h2>
    </body>
    </html>
</DOCTYPE>
