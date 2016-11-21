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
}

$ferrari = new Samochod('6000','2010');

echo $ferrari->getRokProdukcji();