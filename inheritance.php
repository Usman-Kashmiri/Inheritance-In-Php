<?php 

class GrandFather {
    public function __construct($eyeColor,$hairColor,$height,$disease) 
    {
        $this->eyeColor = $eyeColor;
        $this->hairColor = $hairColor;
        $this->height = $height;
        $this->disease = $disease;
    }
    public function Dada()
    {
        echo "Dada has {$this->eyeColor} eyes, {$this->hairColor} hairs, he's {$this->height} feets tall & he's suffering from {$this->disease}.";
    }
}

class Father extends GrandFather {
    public function Abba()
    {
        echo "Abba has {$this->eyeColor} eyes, {$this->hairColor} hairs, he's {$this->height} feets tall & he's suffering from {$this->disease}.";
    }
}

class Son extends Father {
    public function Bacha()
    {
        echo "Bacha has {$this->eyeColor} eyes, {$this->hairColor} hairs, he's {$this->height} feets tall & he's suffering from {$this->disease}.";
    }
}

$obj = new Son('Brown','Black',5.5,'none');
$obj->Dada();

?>