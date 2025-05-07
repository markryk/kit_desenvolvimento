<?php
    //1ª página a ser criada

    ini_set('display_errors', 1);

    //route
    $url = $_SERVER['REQUEST_URI']; //retorna uma '/'
    //echo $url;

    //include '../Connection.php';
    include '../src/Controller/AbstractController.php';
    include '../src/Controller/GeradorValidadorCPFController.php';
    //include '../src/Controller/RestaurantController.php';

    //router
    echo match ($url) {
        '/' => load('inicio'),
        '/validador_de_cpf'=> (new GeradorValidadorCPFController)->telaInicialCPF(),
        //'/restaurantes/adicionar'=> (new RestaurantController)->add(),
        default => load('erro')
    };

    //Essa função é onde se carrega a estrutura da página (cabeçalho, menu, conteudo da página, rodapé) 
    function load(string $view): void {
        //desenvolver cada página
        include "../src/Views/_templates/head.phtml";        
        //include "../src/Views/_components/menu.phtml";
        include "../src/Views/{$view}.phtml";    
        include "../src/Views/_templates/footer.phtml";

        /*echo $view;

        switch ($view) {
            case 'inicio':
                $title = "Kit desenvolvimento";
                $subtitle = "Ferramentas básicas para desenvolver sistemas";
                break;
            
            default:
                # code...
                break;
        }*/
    }
    //(Essa função foi para a pág. AbstractController.php)
?>