<?php
/*Batalles: Cada batalla té dos lluitadors. El combat funciona de la següent manera, mentre no ha acabat el combat:
Es compara la força dels dos lluitadors. Si la força és:
    igual: hi ha un 50% de possibilitats que l’atac tingui éxit per un lluitador o l’altre.
    Lluitador 1 té més força: 70% de possibilitats de que l’atac tingui èxit al lluitador 1 i 30% el lluitador 2.
    Lluitador 2 té més força: El mateix però a l’inrevés.
    Cada cop que un lluitador té èxit en l’atac, es resta tanta vida al rival com: Força 
    té el lluitador que ha atacat amb èxit – defensa lluitador atacat. Per exemple, si el lluitador que 
    ha atacat amb èxit té 6 de força i el lluitador atacat té 4 de defensa, rep 2 de dany.
    Si el resultat d’aquesta operació és igual o menor que 0, rep 1 de dany.
El combat acaba quan un dels dos lluitadors té la vida a 0. S’anuncia el guanyador/a llavors.*/

class Combate {

    private $luchador1;
    private $luchador2;

    public function __construct($luchador1, $luchador2) {
        $this->luchador1 = $luchador1;
        $this->luchador2 = $luchador2;
    }
    public function atacar($atacante, $defensor) {
        if($atacante->getFuerza()== $defensor->getFuerza()) { 
            $probGanar = 50;   
        }
        else if($atacante->getFuerza()> $defensor->getFuerza()){
            $probGanar = 70;

        }else {
        $probGanar = 30;
        }
        $numAleatorio = rand(1,100);
        if($numAleatorio <= $probGanar) {
            $danyoVida = $atacante->getFuerza() - $defensor->getDefensa();
            if($danyoVida <= 0) {
                $danyoVida = 1;
            }
            $vidaCombateDefensor = $defensor->getVida();
            $defensor->setVida($vidaCombateDefensor - $danyoVida);  
        }
        
    }
    public function combatir() : void {
        while ($this->luchador1->getVida()> 0 && $this->luchador2->getVida()> 0) {

        $this->atacar ($this->luchador1, $this->luchador2);
       if($this->luchador2->getVida() > 0 ); {
        $this->atacar ($this->luchador2, $this->luchador1);
       }    
    }
    if($this->luchador1->getVida()>0){
        echo "El ganador del combate es: " . $this->luchador1->getNombre() . PHP_EOL;
    }else {
        echo "El ganador del combate es: " .  $this->luchador2->getNombre() . PHP_EOL; 
    }
    }
}
?>