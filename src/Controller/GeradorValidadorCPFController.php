<?php
    declare(strict_types=1);

    class GeradorValidadorCPFController extends AbstractController {
        public function telaInicialCPF(): void {
            $this->load('CPF/index');
        }
    }
?>