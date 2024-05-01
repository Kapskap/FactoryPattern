<?php

class CreditService
{
    public function HasCredit(Customer $customer): bool
        {
            Echo "<br>Sprawdzam kredyt dla ".$customer->getName();

            return true;
        }
}