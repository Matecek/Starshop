<?php

namespace App\Repository;

use App\Model\Starship;
use Psr\Log\LoggerInterface;

class StarshipRepository
{
    public function __construct(private LoggerInterface $logger)
    {
    }

    public function findAll(): array
    {
        $this->logger->info('Starship collection retrieved');

        return [
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
    }
}
