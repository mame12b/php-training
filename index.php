<?php
declare(strict_types=1); 

require 'Transaction.php';

// class and objects
$transaction1= (new Transaction(100, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(10);

$transaction2= (new Transaction(200, 'Transaction 2'))
    ->addTax(8)
    ->applyDiscount(20);
 
 
var_dump($transaction1->getAmount(),$transaction2->getAmount()); 