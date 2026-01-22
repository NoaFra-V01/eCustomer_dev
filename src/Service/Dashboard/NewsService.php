<?php

namespace App\Service\Dashboard;

use Doctrine\ORM\EntityManagerInterface;

class NewsService
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function getLatestNews(int $limit = 5): array
    {
        // À connecter avec votre entité News réelle
        return []; 
    }
}