<?php

require_once __DIR__.'/PriceList.php';

class TVPriceList implements PriceList
{

    public function __construct(IDiscount $iDiscount)
    {
        $this->iDiscount = $iDiscount;
    }

    public function CalculatePrice()
    {
        $coupon = $this->iDiscount->DiscountValue();
        return 500 - $coupon;
    }
}
