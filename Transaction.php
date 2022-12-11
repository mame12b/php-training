<?php
declare (strict_types=1);
class Transaction
{

    private float $amount ;
    private string $descrpition; 
  
    public function __construct(float $amount, string $descrpition)
    {
        $this->amount =$amount;
        $this->descrpition=$descrpition;
    }
    public function addTax(float $rate):Transaction
    {
        $this->amount+=$this->amount* $rate / 100;
        return $this;
    }
    public function applyDiscount(float $rate):Transaction
    {
        $this->amount-=$this->amount*$rate/100;
        return $this;
    }
    public function getAmount(): float
    {
    return $this->amount;
    }
}