<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Projeto Site Dinamico</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <script src="https://kit.fontawesome.com/5b3c22f624.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <header>
    <div class="center">   
        <div class="logo left"><i class="fa-brands fa-wolf-pack-battalion"></i></div>
        <nav class="desktop right">
            <ul>
                <li> <a href="home">Home</a></li>
                <li> <a href="Sobre">Sobre</a></li>
                <li> <a href="Servicos">Serviços</a></li>
                <li> <a href="Contato">Contato</a></li>
            </ul>
        </nav>
        <nav class="mobile right">
            <div class="botao-menu-mobile"><i class="fa-solid fa-bars"></i></div>
            <ul>
                <li> <a href="Home">Home</a></li>
                <li> <a href="Sobre">Sobre</a></li>
                <li> <a href="Servicos">Serviços</a></li>
                <li> <a href="Contato">Contato</a></li>
            </ul>
        </nav>
        <div class="clear"></div>
    </div>   
    </header>

    <section class="banner-principal">
    <div class="overlay"></div>
    <div class="center"> 
        <form>
            <h2>Qual o seu melhor email?</h2>   
            <input type="email" name="email" required/>
            <input type="submit" name="acao" value="Cadastrar!"/>
        </form>
    </div>
    </section>

    <section class="descricao-autor">
    <div class="center">
        <div class="w50 left">
        <h2>Gabriel Neto</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam turpis lacus, ornare eu urna quis, egestas sollicitudin purus. Aenean venenatis feugiat magna, a faucibus dolor elementum in. Donec gravida finibus gravida. Maecenas sed orci iaculis turpis venenatis aliquam. Vestibulum posuere maximus blandit. Nulla id risus tempus, rutrum augue eu, dictum nisi. Sed tincidunt sagittis velit eu malesuada. Mauris sit amet malesuada nibh. Sed semper molestie dolor vel mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed ac dapibus elit, vel porta ipsum. Quisque dapibus id ligula in imperdiet. Curabitur lacinia et ante sit amet feugiat. </p>
        </div>

        <div class="w50 left">
            <img class="right" src="images/autor.png"/>
        </div>
        <div class="clear"></div>
    </div>
    </section>

    <section class="especialidades">
        <div class="center">
            <h2 class="title">Especialidades</h2>
            <div class="w33 left box-especialidades">
                <h3><i class="fa-brands fa-css3"></i></h3>
                <h4>CSS3</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam turpis lacus, ornare eu urna quis, egestas sollicitudin purus. Aenean venenatis feugiat magna, a faucibus dolor elementum in. Donec gravida finibus gravida. Maecenas sed orci iaculis turpis venenatis aliquam. Vestibulum posuere maximus blandit. Nulla id risus tempus, rutrum augue eu, dictum nisi. Sed tincidunt sagittis velit eu malesuada. Mauris sit amet malesuada nibh. Sed semper molestie dolor vel mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed ac dapibus elit, vel porta ipsum. Quisque dapibus id ligula in imperdiet. Curabitur lacinia et ante sit amet feugiat. </p>
            </div>

            <div class="w33 left box-especialidades">
                <h3><i class="fa-brands fa-html5"></i></h3>
                <h4>HTML5</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam turpis lacus, ornare eu urna quis, egestas sollicitudin purus. Aenean venenatis feugiat magna, a faucibus dolor elementum in. Donec gravida finibus gravida. Maecenas sed orci iaculis turpis venenatis aliquam. Vestibulum posuere maximus blandit. Nulla id risus tempus, rutrum augue eu, dictum nisi. Sed tincidunt sagittis velit eu malesuada. Mauris sit amet malesuada nibh. Sed semper molestie dolor vel mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed ac dapibus elit, vel porta ipsum. Quisque dapibus id ligula in imperdiet. Curabitur lacinia et ante sit amet feugiat. </p>
            </div>

            <div class="w33 left box-especialidades">
                <h3><i class="fa-brands fa-js"></i></h3>
                <h4>JavaScript</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam turpis lacus, ornare eu urna quis, egestas sollicitudin purus. Aenean venenatis feugiat magna, a faucibus dolor elementum in. Donec gravida finibus gravida. Maecenas sed orci iaculis turpis venenatis aliquam. Vestibulum posuere maximus blandit. Nulla id risus tempus, rutrum augue eu, dictum nisi. Sed tincidunt sagittis velit eu malesuada. Mauris sit amet malesuada nibh. Sed semper molestie dolor vel mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed ac dapibus elit, vel porta ipsum. Quisque dapibus id ligula in imperdiet. Curabitur lacinia et ante sit amet feugiat. </p>
            </div>
        </div>
        <div class="clear"></div>
    </section>

    <section class="extras">
    <div class="center">
        <div class="w50 left depoimentos-container">
            <h2 class="title">Depoimentos dos nossos clientes</h2>
            <div class="depoimentos-single">
                <p class="depoimento-desc">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam turpis lacus, ornare eu urna quis, egestas sollicitudin purus. Aenean venenatis feugiat magna, a faucibus dolor elementum in. Donec gravida finibus gravida. Maecenas sed orci iaculis turpis venenatis aliquam. Vestibulum posuere maximus blandit. Nulla id risus tempus, rutrum augue eu, dictum nisi. Sed tincidunt sagittis velit eu malesuada. Mauris sit amet malesuada nibh. Sed semper molestie dolor vel mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed ac dapibus elit, vel porta ipsum. Quisque dapibus id ligula in imperdiet. Curabitur lacinia et ante sit amet feugiat. "</p>
                <p class="depoimento-autor">Lorem Ipsum</p>
            </div>

            <div class="depoimentos-single">
                <p class="depoimento-desc">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam turpis lacus, ornare eu urna quis, egestas sollicitudin purus. Aenean venenatis feugiat magna, a faucibus dolor elementum in. Donec gravida finibus gravida. Maecenas sed orci iaculis turpis venenatis aliquam. Vestibulum posuere maximus blandit. Nulla id risus tempus, rutrum augue eu, dictum nisi. Sed tincidunt sagittis velit eu malesuada. Mauris sit amet malesuada nibh. Sed semper molestie dolor vel mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed ac dapibus elit, vel porta ipsum. Quisque dapibus id ligula in imperdiet. Curabitur lacinia et ante sit amet feugiat. "</p>
                <p class="depoimento-autor">Lorem Ipsum</p>
            </div>

            <div class="depoimentos-single">
                <p class="depoimento-desc">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam turpis lacus, ornare eu urna quis, egestas sollicitudin purus. Aenean venenatis feugiat magna, a faucibus dolor elementum in. Donec gravida finibus gravida. Maecenas sed orci iaculis turpis venenatis aliquam. Vestibulum posuere maximus blandit. Nulla id risus tempus, rutrum augue eu, dictum nisi. Sed tincidunt sagittis velit eu malesuada. Mauris sit amet malesuada nibh. Sed semper molestie dolor vel mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed ac dapibus elit, vel porta ipsum. Quisque dapibus id ligula in imperdiet. Curabitur lacinia et ante sit amet feugiat. "</p>
                <p class="depoimento-autor">Lorem Ipsum</p>
            </div>
        </div>

        <div class="w50 left servicos-container">
            <h2 class="title">Serviços</h2>
            <div class="servicos">
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam turpis lacus, ornare eu urna quis, egestas sollicitudin purus.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam turpis lacus, ornare eu urna quis, egestas sollicitudin purus.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam turpis lacus, ornare eu urna quis, egestas sollicitudin purus.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam turpis lacus, ornare eu urna quis, egestas sollicitudin purus.</li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    </section>

    <footer>
        <div class="center">
        <p>Todos os direitos reservados. <i class="fa-regular fa-registered"></i></p>
        </div>
    </footer>
</body>
</html>