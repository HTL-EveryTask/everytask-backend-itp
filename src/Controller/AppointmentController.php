<?php

namespace App\Controller;

use App\Entity\Appointment;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class AppointmentController extends AbstractController
{
    #[Route('/api/appointments', name: 'app_appointment', methods: ['GET'])]
    public function index(ManagerRegistry $doctrine): JsonResponse
    {
        $appointments = $doctrine->getRepository(Appointment::class)->findAll();

        return $this->json(
            $appointments
        );
    }

    #[Route('/api/appointments/{id}', name: 'app_appointment_id', methods: ['GET'])]
    public function show(ManagerRegistry $doctrine, int $id): JsonResponse
    {
        $appointment = $doctrine->getRepository(Appointment::class)->find($id);

        return $this->json(
            $appointment
        );
    }
}