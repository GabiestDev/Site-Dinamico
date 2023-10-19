<?php include('config.php');?>
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
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo INCLUDE_PATH; ?>css/style.css'>
    <script src="https://kit.fontawesome.com/5b3c22f624.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <header>
    <div class="center">   
        <div class="logo left"><i class="fa-brands fa-wolf-pack-battalion"></i></div>
        <nav class="desktop right">
            <ul>
                <li> <a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                <li> <a href="<?php echo INCLUDE_PATH; ?>Sobre">Sobre</a></li>
                <li> <a href="<?php echo INCLUDE_PATH; ?>Servicos">Serviços</a></li>
                <li> <a href="<?php echo INCLUDE_PATH; ?>Contato">Contato</a></li>
            </ul>
        </nav>
        <nav class="mobile right">
            <div class="botao-menu-mobile"><i class="fa-solid fa-bars"></i></div>
            <ul>
                <li> <a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                <li> <a href="<?php echo INCLUDE_PATH; ?>Sobre">Sobre</a></li>
                <li> <a href="<?php echo INCLUDE_PATH; ?>Servicos">Serviços</a></li>
                <li> <a href="<?php echo INCLUDE_PATH; ?>Contato">Contato</a></li>
            </ul>
        </nav>
        <div class="clear"></div>
    </div>   
    </header>

    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }
        else{
            $pagina404 = true;
            include('pages/404.php');
        }

    ?>

    <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"' ?>>
        <div class="center">
        <p>Todos os direitos reservados. <i class="fa-regular fa-registered"></i></p>
        </div>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>