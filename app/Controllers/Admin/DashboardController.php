<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    protected array $models = [];

    public function __construct()
    {
        $this->models['userModel'] = new \App\Models\User();
        $this->models['profileModel'] = new \App\Models\Profile();
        $this->models['educationModel'] = new \App\Models\Education();
        $this->models['activityModel'] = new \App\Models\Activity();
    }

    public function index()
    {
        $data = [
            'totalEducations' => $this->models['educationModel']->countAllResults(),
            'totalActivities' => $this->models['activityModel']->countAllResults(),
            'totalSocials'    => (new \App\Models\Social())->countAllResults(),
        ];

        return view('admin/dashboard/index', $data);
    }
}
