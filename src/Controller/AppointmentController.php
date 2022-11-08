<?php

namespace App\Controller;

use App\Entity\Appointment;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class AppointmentController extends AbstractController
{
    #[Route('/api/appointments', name: 'app_appointment')]
    public function index(ManagerRegistry $doctrine): JsonResponse
    {
        $appointments = $doctrine->getRepository(Appointment::class)->findAll();

        return $this->json(
            $appointments
        );
    }
}