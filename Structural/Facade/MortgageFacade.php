<?php

require __DIR__.'/BankService.php';
require __DIR__.'/LoanService.php';
require __DIR__.'/CreditService.php';
class MortgageFacade
{
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
        $this->bankService = new BankService();
        $this->loanService = new LoanService();
        $this->creditService = new CreditService();
    }

    public function IsEligible(Customer $customer)
    {
        $name = $this->customer->getName();
        $amound = $this->customer->getAmount();
        Echo "$name ubiega się o $amound pożyczki.<br>";
        $eligible = true;

        // Sprawdzenie czy kwalifikuje się do kredytu
        if (!$this->bankService->HasSufficientSavings($customer))
        {
            $eligible = false;
        }
        else if (!$this->creditService->HasCredit($customer))
        {
            $eligible = false;
        }
        else if (!$this->loanService->HasLoans($customer))
        {
            $eligible = false;
        }

    return $eligible;
    }
}