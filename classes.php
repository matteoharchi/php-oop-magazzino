<?php
class Giochi {
    public $nome;
    public $prezzo;
    public $etaMinima;
    public $genere;
    public $maxGiocatori;
    public $editore;
    public $copie;
    public $disponibilita;


    public function __construct($_nome, $_prezzo, $_etaMinima, $_genere, $_maxGiocatori, $_editore, $_copie){
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->etaMinima = $_etaMinima;
        $this->genere = $_genere;
        $this->maxGiocatori = $_maxGiocatori;
        $this->editore = $_editore;
        $this->copie = $_copie;
    }

//metodo disponibilità
public function disponibilita($_copie){
    if($_copie > 0){
        $this->disponibilita = true;
    }else {
        $this->disponibilita = false;
    }
    return $this->disponibilita;
}

}