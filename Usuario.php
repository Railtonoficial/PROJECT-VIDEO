<?php

require_once 'Pessoa.php';
class Usuario extends Pessoa {
    private $loguin;
    private $totAssistido;


    public function __construct($nome, $idade, $sexo, $loguin) {
        parent::__construct($nome, $idade, $sexo);
        $this->loguin = $loguin;
        $this->totAssistido = 0;
    }

    public function assistirMaisUm() {
        $this->totAssistido++;
    }


    public function getLoguin() {
        return $this->loguin;
    }


    public function setLoguin($loguin): void {
        $this->loguin = $loguin;
    }

    public function getTotAssistido(): int {
        return $this->totAssistido;
    }

    public function setTotAssistido(int $totAssistido): void {
        $this->totAssistido = $totAssistido;
    }


}