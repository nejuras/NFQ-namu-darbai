<?php

namespace App\Service;

class NumberFormatter
{
    public function format($number)
    {
        // Milijonas ir daugiau sutrumpinami iki milijonų ir paliekami du skaičiai po kablelio.
        if (strpos(abs($number), '.') >= 7 || abs($number) >= 999500) {
            return number_format($number / 1000000, 2) . 'M';
        }

        //100 000 ir daugiau trumpinami iki tūkstančių.
        if (strpos(abs($number), '.') >= 6 || abs($number) >= 99950) {
            return number_format($number / 1000) . 'K';
        }

        //1000 ir daugiau apvalinama sveikųjų tikslumu. Tarp tūkstančių ir šimtų vienas tarpas.
        if (strpos(abs($number), '.') >= 4 || abs($number) > 999.995) {
            return number_format($number, '0', '', ' ');
        }

        //Visi kiti skaičiai
        if (strpos(abs($number), '.') <= 3) {
            return round($number, '2');
        }

        return $number;
    }
}