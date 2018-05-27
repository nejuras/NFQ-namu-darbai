<?php

namespace App\Tests\Service;

use App\Service\MoneyFormatter;
use App\Service\NumberFormatter;
use PHPUnit\Framework\TestCase;

class MoneyFormatterTest extends TestCase
{

    public function testEuroFormat()
    {
        $numberMock = $this->createMock(NumberFormatter::class);
        $numberMock->expects($this->once())
            ->method('format')
            ->with(2837895)
            ->willReturn('2.84M');
        $moneyFormatter = new MoneyFormatter($numberMock);
        $this->assertEquals('2.84M €.', $moneyFormatter->formatEur(2837895));
    }

    public function testUsdFormat()
    {
        $numberMock = $this->createMock(NumberFormatter::class);
        $numberMock->expects($this->once())
            ->method('format')
            ->with(2837895)
            ->willReturn('2.84M');
        $moneyFormatter = new MoneyFormatter($numberMock);
        $this->assertEquals('$2.84M', $moneyFormatter->formatUsd(2837895));
    }
}