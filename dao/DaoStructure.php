<?php
require_once 'models/Number.php';


class DaoStructure implements NumberDAO {
   
    public function add(){
        $array = [];
        for ($i = 1; $i <= 100; $i++) {
           
          switch ($i) {

            case $i%3 == 0 && $i%5 == 0:
                $n = new Number();
                $n->setNumber("BHUT TI");
                $array[] = $n;
            break;

            case $i%5 == 0:
                $n = new Number();
                $n->setNumber("TI");
                $array[] = $n;
            break;

            case $i%3 == 0:
                $n = new Number();
                $n->setNumber("BHUT");
                $array[] = $n;
             break;
            
            default:
                $n = new Number();
                $n->setNumber($i);
                $array[] = $n;
            break;
            }
        

    }
    return $array;
    }
   
}
