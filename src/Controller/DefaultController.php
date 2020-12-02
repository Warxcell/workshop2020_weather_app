<?php
/**
 * @author Ralitsa Radeva <ralica.radeva@gmail.com>
 * @copyright (c) 2020
 */

namespace App\Controller;

use App\WeatherProvider\CityHandler;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function index(string $city, CityHandler $cityHandler): Response
    {
        $weather = $cityHandler->handle($city);

        return $this->json($weather);
    }
}
