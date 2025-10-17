<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DeveloperService;

class PortfolioController extends Controller
{
    protected $developerService;


    public function __construct(DeveloperService $developerService) {
        $this->developerService = $developerService;
    }

    public function homeData() {
        $profile = $this->developerService->getProfile();

        return view('home', ['profile' => $profile]);
    }
}
