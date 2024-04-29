<?php

require_once 'PizzaBuilder.php';
require_once __DIR__.'/../Interfaces/PizzaBuilders.php';

class MargheritaPizzaBuilder extends PizzaBuilder implements PizzaBuilders
{

    public function prepareCake(): void
    {
        $this->pizza->setPartOfPizza('Ciasto: grube', new Cake());
    }
    public function addMeatAndCheese(): void
    {
        $this->pizza->setPartOfPizza('Ser: Gouda', new Cheese());
    }

    public function addVegetables(): void
    {
        $this->pizza->setPartOfPizza('Warzywa: Sos pomidorowy', new Vegetable());
    }
    public function AddCondiments()
    {
        $this->pizza->setPartOfPizza('Przyprawy: Pieprz', new Condiment());
    }
}