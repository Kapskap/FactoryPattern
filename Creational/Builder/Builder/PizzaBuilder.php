<?php

abstract class PizzaBuilder
{
    public Pizza $pizza;

    public function PizzaBuilder(string $name)
    {
        $this->pizza = new Pizza();
        echo "<br>Tworzę pizze <b>$name</b><br>";
    }
    public function getPizza(): Pizza
    {
        return $this->pizza;
    }

}