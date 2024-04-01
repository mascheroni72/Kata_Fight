<?php
class Luchador {

    private string $nombre;
    private int $vida;
    private int $fuerza;
    private int $defensa;

    public function __construct(string $nombre,int $vida, int $fuerza, int $defensa) {
        $this->nombre = $nombre;
        $this->vida = $vida;
        $this->fuerza = $fuerza;
        $this->defensa = $defensa;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getVida() {
        return $this->vida;
    }
    public function getFuerza() {
        return $this->fuerza;   
    }
    public function getDefensa() {
        return $this->defensa;   
    }
    public function setVida($vida) {
        $this->vida = $vida;
    }

}
?>