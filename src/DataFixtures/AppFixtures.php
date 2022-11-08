<?php

namespace App\DataFixtures;

use App\Entity\Appointment;
use App\Entity\Task;
use App\Entity\User;
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
        
        $users = [
            [
                'username' => 'user1',
                'password' => 'user1',
                'email' => 'user1'],
            [
                'username' => 'user2',
                'password' => 'user2',
                'email' => 'user2'],
            [
                'username' => 'user3',
                'password' => 'user3',
                'email' => 'user3'],
            [
                'username' => 'user4',
                'password' => 'user4',
                'email' => 'user4'],
            [
                'username' => 'user5',
                'password' => 'user5',
                'email' => 'user5'],
        ];

        foreach ($users as $user) {
            $newUser = new User();
            $newUser->setUsername($user['username']);
            $newUser->setPassword($user['password']);
            $newUser->setEmail($user['email']);
            $manager->persist($newUser);
        }

        $appointments = [
            [
                'title' => 'Termin 1',
                'description' => 'Description 1',
                'start_time' => '2021-01-01',
                'end_time' => '2021-01-01',
                'is_done' => false,
            ],
            [
                'title' => 'Termin 2',
                'description' => 'Description 2',
                'start_time' => '2021-01-02',
                'end_time' => '2021-01-02',
                'is_done' => false,
            ],
            [
                'title' => 'Termin 3',
                'description' => 'Description 3',
                'start_time' => '2021-01-03',
                'end_time' => '2021-01-03',
                'is_done' => false,
            ],
            [
                'title' => 'Termin 4',
                'description' => 'Description 4',
                'start_time' => '2021-01-04',
                'end_time' => '2021-01-04',
                'is_done' => false,
            ],
            [
                'title' => 'Termin 5',
                'description' => 'Description 5',
                'start_time' => '2021-01-05',
                'end_time' => '2021-01-05',
                'is_done' => false,
            ],
        ];

        foreach ($appointments as $appointment) {
            $newTermin = new Appointment();
            $newTermin->setTitle($appointment['title']);
            $newTermin->setStartTime(new \DateTime($appointment['start_time']));
            $newTermin->setEndTime(new \DateTime($appointment['end_time']));
            $manager->persist($newTermin);
        }

        

        $manager->flush();
    }
}
