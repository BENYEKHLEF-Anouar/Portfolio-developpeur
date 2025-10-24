<?php

namespace App\Http\Controllers;

use App\Services\DeveloperService;
use App\Services\ProjectService;
use App\Services\TechnologyService;

class PortfolioController extends Controller
{
    protected $developerService;
    protected $projectService;
    protected $technologyService;

    public function __construct(
        DeveloperService $developerService,
        ProjectService $projectService,
        TechnologyService $technologyService
    ) {
        $this->developerService = $developerService;
        $this->projectService = $projectService;
        $this->technologyService = $technologyService;
    }

    public function home()
    {
        $developer = $this->developerService->getDeveloper();
        $projects = $this->projectService->getProjects();
        return view('home', compact('developer', 'projects'));
    }

    public function about()
    {
        $developer = $this->developerService->getDeveloper();
        return view('about', compact('developer'));
    }

    public function projects()
    {
        $developer = $this->developerService->getDeveloper();
        $projects = $this->projectService->getProjects();
        return view('projects', compact('developer', 'projects'));
    }

    public function projectDetails($id)
    {
        $developer = $this->developerService->getDeveloper();
        $project = $this->projectService->getProjectById($id);

        if (!$project) {
            abort(404); 
        }

        // Hydrate technologies for the project details view
        if (isset($project['technologies']) && is_array($project['technologies']) && !empty($project['technologies']) && is_int($project['technologies'][array_key_first($project['technologies'])])) {
            $project['technologies'] = $this->technologyService->getByIds($project['technologies']);
        }

        return view('project-details', compact('developer', 'project'));
    }
}
