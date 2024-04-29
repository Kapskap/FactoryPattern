<?php

require_once 'PizzaBuilder.php';
require_once __DIR__.'/../Interfaces/PizzaBuilders.php';

class CapriciosaPizzaBuilder extends PizzaBuilder implements PizzaBuilders
{

    public function prepareCake(): void
    {
        $this->pizza->setPartOfPizza('Ciasto: cieńkie', new Cake());
    }
    public function addMeatAndCheese(): void
    {
        $this->pizza->setPartOfPizza('Ser: Mozzarella', new Cheese());
        $this->pizza->setPartOfPizza('Mięso: Szynka', new Meat());
    }

    public function addVegetables(): void
    {
        $this->pizza->setPartOfPizza('Warzywa: Sos pomidorowy', new Vegetable());
        $this->pizza->setPartOfPizza('Warzywa: Kukurydza', new Vegetable());
        $this->pizza->setPartOfPizza('Warzywa: Pieczarki', new Vegetable());
    }
    public function AddCondiments()
    {
        $this->pizza->setPartOfPizza('Przyprawy: Pieprz', new Condiment());
    }
}