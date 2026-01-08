<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PagesController extends BaseController
{
    protected array $models = [];

    public function __construct()
    {
        $this->models['profileModel'] = new \App\Models\Profile();
        $this->models['educationModel'] = new \App\Models\Education();
        $this->models['activityModel'] = new \App\Models\Activity();
    }

    public function home()
    {
        $data = [
            'profile' => $this->models['profileModel']->first()
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'profile' => $this->models['profileModel']->first()
        ];

        return view('pages/about', $data);
    }

    public function education()
    {
        $data = [
            'educations' => $this->models['educationModel']->findAll()
        ];

        return view('pages/education', $data);
    }

    public function activities()
    {
        $data = [
            'activities' => $this->models['activityModel']->findAll()
        ];

        return view('pages/activities', $data);
    }
}
