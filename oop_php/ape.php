
<?php

class ape{

        public $nama = 'kera sakti';
        public $yell = 'auooo';

    public function namanya(){
        echo 'nama keranya:' . $this->nama;
       
    }
    public function suara(){
        return $this->yell;
      
    }
}
    $ape1 = new ape;
    $ape1->namanya();
        echo "<br>";
        echo 'suaranya:';
    echo $ape1->suara();


?>