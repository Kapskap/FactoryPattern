<?php

class BankService
{

    // Czy ma wystarczające oszczędności
    public function HasSufficientSavings(Customer $customer): bool
    {
            Echo "<br>Sprawdzam bank dla ".$customer->getName();

            $savings = 50000;

            if ($savings > $customer->getAmount() / 3)
                return true;
            else
                return false;
    }
}