<?php

class PizzaMaker
{
    public function build($builder, string $name)
    {
        $builder->PizzaBuilder($name);
        $builder->PrepareCake();
        $builder->addMeatAndCheese();
        $builder->addCondiments();
        $builder->addVegetables();

        return $builder->getPizza();
    }
}

