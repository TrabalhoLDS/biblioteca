<x-app-layout>

<head>
  <title>Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="login.css">  
    <script src="login.js"></script>
</head>

     <body>
      <div class='container'>
      <div class='card'>
           <h1>Cadastrar Livro </h1>
        
         <div class='label-float'>
          <input type='text' id='Usoario'paceholder=''required>
          <label type= for='Usoario'>Livro</label>
        </div>
        <div class='label-float'>
          <input type='text' id='Usoario'paceholder=''required>
          <label type= for='Usoario'>Autor</label>
        </div>
        <div class='label-float'>
          <input type='text' id='Usoario'paceholder=''required>
          <label type= for='Usoario'>Sinopse</label>
        </div>

        <div class='label-float'>
            <input type='file' id='foto' name='foto' accept="image/*" required>
            <label>Foto</label>
        </div>
          
        <div class='justify-center'>
           <x-button>Enviar</x-button>
        </div>

        
          
        </div>
      </body>

      </x-app-layout>
    
          
          
      
      