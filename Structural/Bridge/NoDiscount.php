<?php

require_once __DIR__.'/IDiscount.php';

class NoDiscount implements IDiscount
{
    public function DiscountValue(): int
    {
        return 0;
    }
}