<?php

class animal{

    public $nama = 'shaun';
    public $yell = 'mbek';
    public $darah = 'cold_blooded';

public function namanya(){
    echo 'nama:' . $this->nama;
   
}
public function panjang(){
    return $this->yell;
  
}
public function darah1(){
    return $this->darah;
}
}

  $animal1 = new animal("shaun");
  echo $animal1-> namanya;
  echo $animal1-> panjang;
  echo $animal1-> darah1;

?>