<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <header>
     <a href="{{ route ('home') }}">Home</a>
     <a href="{{ route ('comics.index') }}">Prodotti</a>
     <a href="#">Aggiungi Prodotto</a>
    </header>

    <main>
        @yield('main_content')
    </main>
    
</body>
</html>