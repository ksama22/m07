<?php

class Vehicle
{
    private $nom;
    private $model;
    private $km;
    private $cavalls;
    private $antiguitat;

    public function __construct($nom, $model, $km, $cavalls, $antiguitat)
    {
        $this->nom = $nom;
        $this->model = $model;
        $this->km = $km;
        $this->cavalls = $cavalls;
        $this->antiguitat = $antiguitat;
    }

    public function __construct1($nom, $model)
    {
        $this->nom = $nom;
        $this->model = $model;
    }

// OHAIO
    public function __construct2()
    {
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getKm()
    {
        return $this->km;
    }

    public function setKm($km)
    {
        $this->km = $km;
    }

    public function getCavalls()
    {
        return $this->cavalls;
    }

    public function setCavalls($cavalls)
    {
        $this->cavalls = $cavalls;
    }

    public function getAntiguitat()
    {
        return $this->antiguitat;
    }

    public function setAntiguitat($antiguitat)
    {
        $this->antiguitat = $antiguitat;
    }

    // Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore voluptatum inventore expedita assumenda voluptatibus. Molestias atque provident explicabo ullam nostrum sed iste, delectus voluptate fuga praesentium aliquid accusantium, corporis ratione.
    public function __toString()
    {
        return "NOM: {$this->nom} MODEL: {$this->model} KM: {$this->km} CABALLS: {$this->cavalls} ANTIGUITAT: {$this->antiguitat}";
    }

    public function kmRecorregut()
    {
        return rand(1, 100);
    }

    public function vehicleCreat()
    {
        return "MODEL: {$this->model} CABALLS: {$this->cavalls}";
    }
}

$bar = new Vehicle("Seat", "Ateca", 80, 12, 1998);
$bar->setKm($bar->kmRecorregut());
echo $bar;
?>