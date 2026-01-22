<?php

namespace App\Service\Dashboard;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;

class VignetteService
{
    private $em;
    private $security;

    public function __construct(EntityManagerInterface $em, Security $security)
    {
        $this->em = $em;
        $this->security = $security;
    }

    /**
     * Récupère les vignettes pour l'utilisateur courant
     */
    public function getVignettes(): array
    {
        // Logique à adapter selon votre ancien code
        // C'est ici que vous mettrez la logique qui était dans le contrôleur avant
        
        $user = $this->security->getUser();
        
        // Exemple de retour (à remplacer par vos requêtes réelles)
        return [
            // Données simulées pour que la page charge
            ['title' => 'Vignette 1', 'count' => 10, 'url' => '#'],
            ['title' => 'Vignette 2', 'count' => 5, 'url' => '#'],
        ];
    }
}