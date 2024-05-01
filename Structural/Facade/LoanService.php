<?php

class LoanService
{
    public function HasLoans(Customer $customer): bool
        {
            Echo "<br>Sprawdzam pożyczki dla ".$customer->getName();

            return true;
        }
}