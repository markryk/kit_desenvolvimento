<?php
    declare(strict_types=1);

    abstract class AbstractController {
        //Essa função é onde se carrega a estrutura da página (cabeçalho, menu, conteudo da página, rodapé)    
        public function load(string $view): void {
            //desenvolver cada página
            include "../src/Views/_templates/head.phtml";        
            //include "../src/Views/_components/menu.phtml";

            include "../src/Views/{$view}.phtml";
    
            include "../src/Views/_templates/footer.phtml";
        }
    }
?>