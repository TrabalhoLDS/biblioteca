<x-app-layout>
    

    <head>
    <title>Inicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="login.css">  
    <script src="login.js"></script>
    </head>

    <body>
    
        <div class='container'>
            <div class='card'> 
                <h1>Escolha sua ação</h1>

                
                <x-button id="devolverLivro">Devolver Livro</x-button>
                <x-button><a href="{{ route('aluguel-de-livros') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Aluguel de livros</a></x-button>
                <x-button><a href="{{ route('cadastro-livro') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cadastrar livros</a></x-button>        
            </div>
        </div>

    </body>    
    
</x-app-layout>
