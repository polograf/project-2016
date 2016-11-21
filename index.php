<?php

class Samochod
{
    public function __construct($pojemnoscSilnika, $rokProdukcji, $kolor = 'czerwony')
    {
        $this->rokProdukcji = $rokProdukcji;
    }

    public function __getRokProdukcji()
    {
        return $this->rokProdukcji;
    }
    public function setRokProdukcji($rokProdukcji)
    {
        $this->rokProdukcji = $rokProdukcji;
    }
}

$ferrari = new Samochod('6000',2010);


$ferrari->setRokProdukcji(2016)
echo $ferrari->getRokProdukcji();