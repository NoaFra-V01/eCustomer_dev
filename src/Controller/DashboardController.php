<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
// use Symfony\Component\Security\Http\Attribute\IsGranted;

class DashboardController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    // #[IsGranted('ROLE_USER')]  // ← Commente cette ligne
    public function index(): Response
    {
        // $user = $this->getUser();
        
        $dashboardData = [
            'userName' => 'Utilisateur Test', // ← En dur pour tester
            'currentDate' => new \DateTime(),
        ];

        return $this->render('dashboard/index.html.twig', $dashboardData);
    }
}