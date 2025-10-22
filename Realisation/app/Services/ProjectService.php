<?php

namespace App\Services;

use App\Services\TechnologyService;

class ProjectService
{
    protected $techService;

    public function __construct(TechnologyService $techService)
    {
        $this->techService = $techService;
    }

    public function getProjects()
    {
        return [
            [
                'id' => 1,
                'title' => 'Portfolio Website',
                'description' => 'A personal portfolio website to showcase my projects.',
                'image' => '/images/projects/portfolio.png',
                'github_link' => 'https://github.com/janedoe/portfolio',
                'demo_link' => 'https://janedoe.dev',
                'start_date' => '2024-01-01',
                'end_date' => '2024-03-01',
                'technologies' => [1, 2, 3],
            ],
            [
                'id' => 2,
                'title' => 'E-commerce App',
                'description' => 'An online shopping platform with cart and checkout features.',
                'image' => '/images/projects/ecommerce.png',
                'github_link' => 'https://github.com/janedoe/ecommerce',
                'demo_link' => '#',
                'start_date' => '2024-04-01',
                'end_date' => '2024-06-01',
                'technologies' => [1, 4],
            ],

            [
                'id' => 3,
                'title' => 'Task Manager App',
                'description' => 'A task management web app using Vue.js frontend and Laravel API backend.',
                'image' => '/images/task-manager.jpg',
                'github_link' => 'https://github.com/janedoe/task-manager',
                'demo_link' => 'https://tasks.janedoe.dev',
                'start_date' => '2023-03-01',
                'end_date' => '2023-05-10',
                'technologies' => [1, 2, 4],
            ],
        ];
    }

    public function getProjectById($id)
    {
        $projects = $this->getProjects();
        $project = collect($projects)->firstWhere('id', $id);
        if ($project) {
            $project['technologies'] = $this->techService->getByIds($project['technologies']);
        }
        return $project;
    }
}
