<?php

    class frog{

            public $nama = 'buduk';
            public $jump = 'hop hop';

        public function namanya(){
            echo 'nama kodoknya:' . $this->nama;
           
        }
        public function melompat(){
            return $this->jump;
          
        }
    }
        $frog1 = new frog;
        $frog1->namanya();
            echo "<br>";
            echo 'lompatannya:';
        echo $frog1->melompat();


?>