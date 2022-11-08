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
        $serializedTasks = [];
        foreach ($tasks as $task) {
            $serializedTasks[] = [
                'id' => $task->getId(),
                'title' => $task->getTitle(),
                'description' => $task->getDescription(),
                'due_date' => $task->getDueTime()->format('Y-m-d'),
                'create_time' => $task->getCreateTime()->format('Y-m-d'),
                'is_done' => $task->isIsDone(),
            ];
        }

        return $this->json(
            $serializedTasks
        );
    }
}
