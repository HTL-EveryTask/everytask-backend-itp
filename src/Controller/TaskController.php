<?php

namespace App\Controller;

use App\Entity\Task;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController
{
    #[Route('/api/tasks', name: 'app_task')]
    public function index(ManagerRegistry $doctrine): JsonResponse
    {
        $tasks = $doctrine->getRepository(Task::class)->findAll();
        //sort by due_time, closest first
        usort($tasks, function ($a, $b) {
            return $a->getDueTime() <=> $b->getDueTime();
        });
        return $this->json(
            $tasks
        );
    }
}
