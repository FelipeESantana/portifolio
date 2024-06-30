<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="port.css">
    <link rel="stylesheet" href="meusprojetos.css">
    <title>Meu Portifolio</title>
    <script>
        function construirProjetos(){
            const jasao = `[
                {
                "projetoNome":"MONTASK",
                "projetoIMG":"IMGmontask.jpeg",
                "projetoDesc": "O projeto montask é um site organizador de tarefas basico",
                "projetoLink": "https://github.com/dashboard"
                },
                {
                "projetoNome":"PORTIFOLIO",
                "projetoIMG":"portfolio.png",
                "projetoDesc": "Este proprio projeto em que voce esta e demonstra minhas capacidade em programação",
                "projetoLink": "https://github.com/FelipeESantana/portifolio"
                }
                ]`;
                let objetoProjetos = JSON.parse(jasao);
                //cria o template original para ser copiado abaixo
                const template = document.getElementById('objetoTemplate');
                // Adiciona o objeto ao container de objetos
                const container = document.getElementById('objetosContainer');
                //forech para fazer o loop que passara pelo json
                objetoProjetos.forEach(projeto =>{ 
                // Clona o template
                const objetoClone = document.importNode(template.content, true);

                // Preenche os dados do objeto
                objetoClone.querySelector('.objetoNome').textContent = projeto.projetoNome;
                objetoClone.querySelector('.objetoDesc').textContent = projeto.projetoDesc;
                objetoClone.querySelector('.objetoLink').textContent = projeto.projetoLink;
                objetoClone.querySelector('.objetoLink').href = projeto.projetoLink;
                objetoClone.querySelector('#objetoImagem').src = projeto.projetoIMG;
                container.appendChild(objetoClone);
                })//termina o forEach
                
        }
        document.addEventListener('DOMContentLoaded', function() {
            construirProjetos();
        });
    </script>
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

        <div class="central">

            <ul class="texto">
                
                <li>Meu nome é Felipe Eduardo santana</li>
                <li>Tenho 17 anos e estou no 3°ano do ensino medio</li>
                <li>Gosto de ler, jogar, estudar e sou critico como hobby</li>
                <li>Estudo programação no semear e no colégio
                    no ensino médio tecnico em desinvolvimento de sistemas</li>
                 
            </ul>
            <ul>
            <nav class="lista">
                <a>Minhas capacitações:</a>
                <li>HTML e CSS</li>
                <li>JavaScript</li>
                <li>C</li>
                <li>Python</li>
                <li>Programação em Arduino</li>
                <li>Word,PowerPoint e Exel</li>
                <li>Esses são alguns projetos que eu criei:</li>
            </nav>
                
            </ul>
        </div>
        <!-- Definição do template -->
    <template id="objetoTemplate">
        <div class="objeto">
            <img id="objetoImagem">
            <h2 class="objetoNome"></h2>
            <p class="objetoDesc"></p>
            <a class="objetoLink" href=""></a>
        </div>
    </template>

    <!-- Container para inserir os objetos -->
    <div id="objetosContainer">

    </div>
        
    </main>
    <footer>
        <nav class="final">
            
        <a>Para entrar em contato:</a>
            <ul>
            
            <li>Contato:<a href="Contato.php">Pagina de contato</a></li>
            <li>github:<a href="https://github.com/FelipeESantana">FelipeESantana</a></li>
            <p class="fabio">E para quem nao sabe sou irmão gemeo desse animal aqui ==><a href="fabio.php">Fábio:)</a></p>
            <li class="copy">&copy;Todos os direitos reservados a -Felipe Eduardo Santana</li>
            </ul>
        </nav>
      
    </footer>
    
</body>
</html>