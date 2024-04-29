<?php

require_once __DIR__.'/IDiscount.php';

class TwentyEuroDiscount implements IDiscount
{
    public function DiscountValue(): int
    {
        return 20;
    }
}
