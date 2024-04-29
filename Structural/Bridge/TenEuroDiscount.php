<?php

require_once __DIR__.'/IDiscount.php';

class TenEuroDiscount implements IDiscount
{
    public function DiscountValue(): int
    {
        return 10;
    }
}