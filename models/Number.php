<?php
class Number {
   
    private $number;
 

    public function getNumber() {
        return $this->number;
    }
    public function setNumber($n) {
        $this->number = trim($n);
    }

   
}

interface NumberDAO {
    public function add();
   
}

