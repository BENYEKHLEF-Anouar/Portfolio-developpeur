<?php

namespace App\Services;

class ProjectService
{
    protected $technologyService;

    public function __construct(TechnologyService $technologyService)
    {
        $this->technologyService = $technologyService;
    }

    public function getProjects()
    {
        $projects = [
            [
                'id' => 1,
                'title' => 'WalletHub – Budget Management Web Application',
                'description' => 'WalletHub is a PHP-based web application that allows users to efficiently manage income and expenses, track balance evolution, and view a detailed budget history. It emphasizes security, clean code, and a smooth user experience.',
                'image' => '/images/wallethub.png',
                'github_link' => 'https://github.com/BENYEKHLEF-Anouar/WalletHub.git',
                'demo_link' => null,
                'start_date' => '2023-01-10',
                'end_date' => '2023-03-15',
                'technologies' => [1, 2, 3, 4, 6],
            ],
            [
                'id' => 2,
                'title' => 'Solirestaurant – Restaurant Order Management Web App',
                'description' => 'Solirestaurant is a PHP web application designed to simplify the management of menus, orders, and users for restaurants. It focuses on accessibility, simplicity, and maintainable code structure.',
                'image' => '/images/solirestaurant.webp',
                'github_link' => 'https://github.com/BENYEKHLEF-Anouar/Solirestaurant.git',
                'demo_link' => null,
                'start_date' => '2023-04-01',
                'end_date' => '2023-06-10',
                'technologies' => [1, 2, 3, 4, 6],
            ],
            [
                'id' => 3,
                'title' => 'FarhaEvents – Event Management Platform for Farha Association',
                'description' => 'FarhaEvents is a PHP web app developed for the Farha association to efficiently manage events, room capacities, and ticket types (standard or reduced). It also provides users with profiles and participation history.',
                'image' => '/images/farhaevents.webp',
                'github_link' => 'https://github.com/BENYEKHLEF-Anouar/FarhaEvents.git',
                'demo_link' => null,
                'start_date' => '2023-07-01',
                'end_date' => '2023-09-05',
                'technologies' => [1, 2, 3, 4, 6],
            ],
            [
                'id' => 4,
                'title' => 'Mentora – Intergenerational Tutoring and Mentoring Platform',
                'description' => 'Mentora is a collaborative web platform developed as a capstone project at Solicode. It connects students with mentors for tutoring and mentoring sessions, offering user profiles, session booking, gamification, and administrative management tools.',
                'image' => '/images/mentora2.png',
                'github_link' => 'https://github.com/BENYEKHLEF-Anouar/Mentora.git',
                'demo_link' => null,
                'start_date' => '2023-10-01',
                'end_date' => '2023-12-15',
                'technologies' => [1, 2, 3, 4, 6],
            ],
            [
                'id' => 5,
                'title' => 'Orbit – AI-Powered Code Generation App',
                'description' => 'Orbit is a modern React + Vite web app that allows users to generate code using Gemini AI. It features a beautiful cosmic UI, real-time generation, Supabase authentication, and responsive design built with Tailwind CSS.',
                'image' => '/images/orbit.jpg',
                'github_link' => 'https://github.com/BENYEKHLEF-Anouar/Orbit.git',
                'demo_link' => '',
                'start_date' => '2024-03-01',
                'end_date' => '2024-05-30',
                'technologies' => [3, 8, 9, 10, 11],
            ]
        ];

        foreach ($projects as &$project) {
            $project['technologies'] = $this->technologyService->getByIds($project['technologies']);
        }

        return $projects;
    }

    public function getProjectById($id)
    {
        $projects = $this->getProjects(); // This will now return hydrated projects
        foreach ($projects as $project) {
            if ($project['id'] == $id) {
                return $project;
            }
        }
        return null;
    }
}
