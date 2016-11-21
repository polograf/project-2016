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

}

$ferrari = new Samochod('6000',2010);


$ferrari->setRokProdukcji(2016);
echo 'Ferrari: rok produkcji: '.$ferrari->getRokProdukcji().' kolor: '.$ferrari->getKolor().'.';