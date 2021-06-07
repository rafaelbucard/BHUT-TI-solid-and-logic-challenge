<?php

require_once 'dao/DaoStructure.php';
$list = "";
$numberDao = new DaoStructure();
//O único IF só vai exibir os numeros se existir um Objeto  da classe DaoStructure
if($numberDao){
    $list = $numberDao->add();
}    
?>
<main >
    <section class="d-flex  ">
        
    
    </section>
    <section>
        <table class="table bg-light text-dark table-responsive mt-3">
            <thead>
                <tr>
                    <th><h2>ID</h2></th>
                </tr>
            </thead>
            <tbody >
            <?php foreach($list as $item): ?>
                <tr>
                    <td><h3><?=$item->getNumber();?></h3></td>
                </tr>
            <?php endforeach; ?>
            </tbody>    
        </table>
    </section>
</main>