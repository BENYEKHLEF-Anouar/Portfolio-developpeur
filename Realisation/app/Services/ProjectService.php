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
        return [
            [
                'id' => 1,
                'title' => 'Portfolio Website',
                'description' => 'A personal portfolio built with Laravel and Tailwind CSS.',
                'image' => '/images/portfolio.jpg',
                'github_link' => 'https://github.com/janedoe/portfolio',
                'demo_link' => 'https://janedoe.dev',
                'start_date' => '2023-01-01',
                'end_date' => '2023-02-15',
                'technologies' => [1, 3],
            ],
            [
                'id' => 2,
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
        foreach ($projects as $project) {
            if ($project['id'] == $id) {
                $project['technologies'] = $this->technologyService->getByIds($project['technologies']);
                return $project;
            }
        }
        return null;
    }
}
