<?php

class Compte
{
    private $nomUsuari;
    private $diners;

    public function __construct($nomUsuari, $diners)
    {
        $this->nomUsuari = $nomUsuari;
        $this->diners = $diners;
    }

    public function __construct2($nomUsuari)
    {
        $this->nomUsuari = $nomUsuari;

    }

    public function getNomUsuari()
    {
        return $this->nomUsuari;
    }


    public function setNomUsuari($nomUsuari)
    {
        $this->nomUsuari = $nomUsuari;
    }


    public function getDiners()
    {
        return $this->diners;
    }


    public function setDiners($diners)
    {
        $this->diners = $diners;
    }


}


$bar = new Compte("Kevin", 1700);
$treuDiners = 100;
$dinersActuals = $bar->getDiners();
$ingresarDiners = 500;

echo " {$bar->getNomUsuari()} te {$bar->getDiners()} diners<br>";
$bar->setDiners($dinersActuals - $treuDiners);
echo " {$bar->getNomUsuari()} te {$bar->getDiners()} diners<br>";
$bar->setDiners($dinersActuals + $ingresarDiners);
echo " {$bar->getNomUsuari()} te {$bar->getDiners()} diners<br>";


?>