<?php

require_once 'AcoesVideo.php';
class Video implements AcoesVideo {
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function __construct($titulo) {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }


    public function play() {
        $this->reproduzindo = true;
    }

    public function pause() {
        $this->reproduzindo = false;
    }

    public function like() {
        $this->curtidas++;
    }


    public function getTitulo() {
        return $this->titulo;
    }


    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }


    public function getAvaliacao() {
        return $this->avaliacao;
    }


    public function setAvaliacao($avaliacao): void {
        $media = ($this->avaliacao + $avaliacao) / $this->views;
        $this->avaliacao = $media;
    }


    public function getViews() {
        return $this->views;
    }


    public function setViews($views): void {
        $this->views = $views;
    }


    public function getReproduzindo() {
        return $this->reproduzindo;
    }


    public function setReproduzindo($reproduzindo): void {
        $this->reproduzindo = $reproduzindo;
    }


    public function getCurtidas() {
        return $this->curtidas;
    }


    public function setCurtidas($curtidas): void {
        $this->curtidas = $curtidas;
    }


}