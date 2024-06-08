<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="port.css">
    <title>Document</title>
</head>
<body>
<header>
        <div class="topo">
            <nav class="titulo">
            <a>Quem Eu Sou?</a>
            </nav>
        
        <img src="eu.jpeg" id="minhaimg" alt="">
        </div>
    </header>
    <main>
      
    <form action="#" method="POST">
        <h2> Contato </h2>
        <label for="nome"> Nome </label>
        <input type="text" id="nome" class="input-form" required>

        <label for="email">Email</label>
        <input type="email" id="email" class="input-form" required>

        <label for="descricao"> Descrição </label>
        <textarea cols="50" rows="10" id="descricao" class="input-form" required></textarea>

        <input type="submit" value="Enviar formulário" class="enviar">

    </form>
</main>
</body>
</html>