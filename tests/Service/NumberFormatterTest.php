<?php

namespace App\Tests\Service;

use App\Service\NumberFormatter;
use PHPUnit\Framework\TestCase;

class NumberFormatterTest extends TestCase
{
    public function getFormatData()
    {
        return [
            ['2835779', '2.84M'],
            ['999500', '1.00M'],
            ['999480', '999K'],
            ['535216', '535K'],
            ['99950', '100K'],
            ['-123654.89', '-124K'],

            ['27533.78', '27 534'],
            ['999.99', '999.99'],
            ['999.9999', '1 000'],
            ['999.994999', '999.99'],

            ['533.1', '533.10'],
            ['66.6666', '66.67'],
            ['12.00', '12']
        ];
    }

    /**
     * @dataProvider getFormatData
     * @param $name
     * @param $expected
     */
    public function testFormat($name, $expected)
    {
        $converter = new NumberFormatter();
        $result = $converter->format($name);
        $this->assertEquals($expected, $result);
    }
}