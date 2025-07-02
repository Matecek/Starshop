<?php

namespace App\Controller;

use App\Model\Starship;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships')]
    public function getCollection(LoggerInterface $logger): Response
    {
        $logger->info('Starship collection retrieved');
        $starships = [
            new Starship(
                1,
                'USS LeafyCruiser (NCC-0001)',
                'Garden',
                'Jean-Luc Pickles',
                'under construction'
            ),
            new Starship(
                2,
                'USS VeggieVoyager (NCC-0002)',
                'Explorer',
                'Kathryn Carrot',
                'active'
            ),
            new Starship(
                3,
                'USS TomatoTrek (NCC-0003)',
                'Research',
                'Benjamin Broccoli',
                'decommissioned'
            ),
        ];

        return $this->json($starships);
    }
}
