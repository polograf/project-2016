<?php

class Samochod
{
    public function __construct($pojemnoscSilnika, $rokProdukcji, $kolor = 'czerwony')
    {
        $this->rokProdukcji = $rokProdukcji;
        $this->kolor=$kolor;
    }
    public function __getRokProdukcji()
    {
        return $this->rokProdukcji;
    }
    public function setRokProdukcji($rokProdukcji)
    {
        $this->rokProdukcji = $rokProdukcji;
    }
    public function __getKolor()
    {
        return $this->kolor;
    }
    public function setKolor($kolor)
    {
        $this->kolor = $kolor;
    }
    public function info()
    {
        return 'rok:' .$this->rokProdukcji . ' kolor: ' . $this->kolor;
    }
}
class Informacje
{
    public function __construct($samochod)
    {
        $this->samochod = $samochod;
    }
    public function renderCar(){

        return 'Samochod: rok: ' . Samochod::
    }
}

$ferrari = new Samochod(6000,2010);


$ferrari->setRokProdukcji(2016);
echo $ferrari->info();

$lamborghini = new Samochod(7000, 2015,'żółty');
echo $lamborghini->info();