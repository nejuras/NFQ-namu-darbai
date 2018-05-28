<?php

namespace App\Controller;


use App\Service\MoneyFormatter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller

{

    /**
     * @return Response
     */
    public function index()

    {

//        $name = 'Paulius';
//        $dative = $this->get(DativeConverter::class)->convert($name);
//        return new Response($name . ' => ' . $dative);
//
//        $number = '22569';
//
//        $formatted = $this->get(NumberFormatter::class)->format($number);
//        return new Response($number . ' => ' . $formatted);

        $number = '999.995';

        $formattedEur = $this->get(MoneyFormatter::class)->formatEur($number);
        $formattedUsd = $this->get(MoneyFormatter::class)->formatUsd($number);
        return new Response($formattedEur . ' - ' . $formattedUsd);

    }

}