<?php

namespace App\Service;


class MoneyFormatter
{

    private $numberFormatter;

    public function __construct(NumberFormatter $numberFormatter)
    {
        $this->numberFormatter = $numberFormatter;
    }

    public function formatEur($number)
    {
        return $this->numberFormatter->format($number) . ' €.';
    }

    public function formatUsd($number)
    {
        return '$' . $this->numberFormatter->format($number);
    }
}