<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="port.css">
    <title>Document</title>
    <script>
        function validacao(){
            let nome = document.getElementById("nome").value
            let email = document.getElementById("email").value
            let mensagem = document.getElementById("mensagem").value
            const rejex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
            if(nome == ""){
                alert("Preencha seu nome corretamente");
                return false;
            }if(email == "" || !rejex.teste(email)){
                alert("Preencha seu email corretamente");
                return false;
            }if(mensasgem == ""){
                alert("Preencha a mensagem corretamente");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <?php include_once("header.phtml") ?>
<main>
      
    <form action="#" method="POST"  onsubmit="return validacao()">
        <h2> Contato </h2>
        <label for="nome"> Nome </label>
        <input type="text" id="nome" class="input-form" required>

        <label for="email">Email</label>
        <input type="email" id="email" class="input-form" required>

        <label for="Mensagem"> Mensagem </label>
        <textarea cols="50" rows="10" id="mensagem" class="input-form" required></textarea>

        <input type="submit" value="Enviar formulário" class="enviar">

    </form>

</main>
</body>
</html>
