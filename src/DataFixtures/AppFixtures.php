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
                'title' => 'ITP Projektabnahme',
                'description' => 'Description 1',
                'due_date' => '2023-01-24',
                'create_time' => '2022-01-01',
                'is_done' => false,
            ],
            [
                'title' => 'Mathe Hausübung Beispiel 3',
                'description' => 'Description 2',
                'due_date' => '2023-05-02',
                'create_time' => '2022-01-02',
                'is_done' => false,
            ],
            [
                'title' => 'Englisch Essay schreiben',
                'description' => 'Description 3',
                'due_date' => '2023-05-03',
                'create_time' => '2022-01-03',
                'is_done' => true,
            ],
            [
                'title' => 'Katze füttern',
                'description' => 'Description 4',
                'due_date' => '2023-05-04',
                'create_time' => '2022-01-04',
                'is_done' => true,
            ],
            [
                'title' => 'Hunde verjagen',
                'description' => 'Description 5',
                'due_date' => '2023-05-05',
                'create_time' => '2022-01-05',
                'is_done' => true,
            ],
            [
                'title' => 'Kinder abholen',
                'description' => 'Description 6',
                'due_date' => '2023-05-06',
                'create_time' => '2022-01-06',
                'is_done' => false,
            ],
            [
                'title' => 'Buch lesen',
                'description' => 'Description 7',
                'due_date' => '2023-05-07',
                'create_time' => '2022-01-07',
                'is_done' => true,
            ],
            [
                'title' => 'Auf Professor Weiss`s Interview vorbereiten und beten',
                'description' => 'Description 8',
                'due_date' => '2023-05-08',
                'create_time' => '2022-01-08',
                'is_done' => false,
            ],
            [
                'title' => 'Micro Frontends studieren',
                'description' => 'Description 9',
                'due_date' => '2023-05-09',
                'create_time' => '2022-01-09',
                'is_done' => true,
            ],
            [
                'title' => 'Kuchen backen',
                'description' => 'Description 10',
                'due_date' => '2023-05-10',
                'create_time' => '2022-01-10',
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
                'id' => 1,
                'username' => 'user1',
                'password' => 'user1',
                'email' => 'user1'],
            [
                'id' => 2,
                'username' => 'user2',
                'password' => 'user2',
                'email' => 'user2'],
            [
                'id' => 3,
                'username' => 'user3',
                'password' => 'user3',
                'email' => 'user3'],
            [
                'id' => 4,
                'username' => 'user4',
                'password' => 'user4',
                'email' => 'user4'],
            [
                'id' => 5,
                'username' => 'user5',
                'password' => 'user5',
                'email' => 'user5'],
        ];

        $appointments = [
            [
                'title' => 'Termin 1',
                'description' => 'Description 1',
                'start_time' => '2022-01-21',
                'end_time' => '2022-01-22',
                'is_done' => false,
            ],
            [
                'title' => 'Termin 2',
                'description' => 'Description 2',
                'start_time' => '2022-01-02',
                'end_time' => '2022-01-03',
                'is_done' => false,
            ],
            [
                'title' => 'Termin 3',
                'description' => 'Description 3',
                'start_time' => '2022-01-03',
                'end_time' => '2022-01-14',
                'is_done' => false,
            ],
            [
                'title' => 'Termin 4',
                'description' => 'Description 4',
                'start_time' => '2022-01-14',
                'end_time' => '2022-01-15',
                'is_done' => false,
            ],
            [
                'title' => 'Termin 5',
                'description' => 'Description 5',
                'start_time' => '2022-01-05',
                'end_time' => '2022-01-06',
                'is_done' => false,
            ],
        ];

        foreach ($appointments as $appointment) {
            $newAppointment = new Appointment();
            $newAppointment->setTitle($appointment['title']);
            $newAppointment->setStartTime(new \DateTime($appointment['start_time']));
            $newAppointment->setEndTime(new \DateTime($appointment['end_time']));
            $appointments_objetcs[] = $newAppointment;
            $manager->persist($newAppointment);
        }

        foreach ($users as $user) {
            $newUser = new User();
            $newUser->setUsername($user['username']);
            $newUser->setPassword($user['password']);
            $newUser->setEmail($user['email']);
            $newUser->addAppointment($appointments_objetcs[$user['id'] - 1]);
            $manager->persist($newUser);
        }


        $manager->flush();
    }
}
