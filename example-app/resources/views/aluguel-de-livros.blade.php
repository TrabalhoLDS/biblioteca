<x-app-layout>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Simples</title>
    <link rel="stylesheet" href="estantedelivros.css">
</head>
<body>
    
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">Aluga-se Livros Virtuais</h1>
 

    <div class="container">
        <div class="row">
            <div class="product">
                <img src="/img/python.png" alt="Livro 1">
                <h2>Pense em Python</h2>
               
                <x-button class="buy-button">Alugar</x-button>
            </div>
            <div class="product">
                <img src="/img/sql.png" alt="Livro 2">
                <h2>Introdução à Linguagem SQL</h2>
                
                <x-button class="buy-button">Alugar</x-button>
            </div>
            <div class="product">
                <img src="/img/javas.png" alt="Livro 3">
                <h2>JavaScript: O Guia Definitivo</h2>
                
                <x-button class="buy-button">Alugar</x-button>
            </div>
        </div>
        <div class="row">
            <div class="product">
                <img src="/img/java.png" alt="Livro 4">
                <h2>Java®: Como Programar</h2>
                
                <x-button class="buy-button">Alugar</x-button>
            </div>
            <div class="product">
                <img src="/img/html.png" alt="Livro 5">
                <h2>HTML5 e CSS3</h2>
                
                <x-button class="buy-button">Alugar</x-button>
            </div>
            <div class="product">
                <img src="/img/c.png" alt="Livro 6">
                <h2>Introdução à Programação com a Linguagem C</h2>
                
                <x-button class="buy-button">Alugar</x-button>
            </div>
        </div>
    </div>

    <BR><BR></BR></BR>
        <h5>&copy; 2024 Minha Loja</h5>
    
</body>
</html>
</x-app-layout>
