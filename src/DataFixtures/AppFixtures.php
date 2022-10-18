<?php

namespace App\DataFixtures;

use App\Entity\Task;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $tasks = [
            [
                'title' => 'Task 1',
                'description' => 'Description 1',
                'due_date' => '2021-01-01',
                'create_time' => '2021-01-01',
                'is_done' => false,
            ],
            [
                'title' => 'Task 2',
                'description' => 'Description 2',
                'due_date' => '2021-01-02',
                'create_time' => '2021-01-02',
                'is_done' => false,
            ],
            [
                'title' => 'Task 3',
                'description' => 'Description 3',
                'due_date' => '2021-01-03',
                'create_time' => '2021-01-03',
                'is_done' => false,
            ],
            [
                'title' => 'Task 4',
                'description' => 'Description 4',
                'due_date' => '2021-01-04',
                'create_time' => '2021-01-04',
                'is_done' => false,
            ],
            [
                'title' => 'Task 5',
                'description' => 'Description 5',
                'due_date' => '2021-01-05',
                'create_time' => '2021-01-05',
                'is_done' => false,
            ],
            [
                'title' => 'Task 6',
                'description' => 'Description 6',
                'due_date' => '2021-01-06',
                'create_time' => '2021-01-06',
                'is_done' => false,
            ],
            [
                'title' => 'Task 7',
                'description' => 'Description 7',
                'due_date' => '2021-01-07',
                'create_time' => '2021-01-07',
                'is_done' => false,
            ],
            [
                'title' => 'Task 8',
                'description' => 'Description 8',
                'due_date' => '2021-01-08',
                'create_time' => '2021-01-08',
                'is_done' => false,
            ],
            [
                'title' => 'Task 9',
                'description' => 'Description 9',
                'due_date' => '2021-01-09',
                'create_time' => '2021-01-09',
                'is_done' => false,
            ],
            [
                'title' => 'Task 10',
                'description' => 'Description 10',
                'due_date' => '2021-01-10',
                'create_time' => '2021-01-10',
                'is_done' => false,
            ],
        ];

        foreach ($tasks as $task) {
            $newTask = new Task();
            $newTask->setTitle($task['title']);
            $newTask->setDescription($task['description']);
            $newTask->setDueTime(new \DateTime($task['due_date']));
            $newTask->setCreateTime(new \DateTime($task['create_time']));
            $newTask->setIsDone($task['is_done']);
            $manager->persist($newTask);
        }

        $manager->flush();
    }
}
