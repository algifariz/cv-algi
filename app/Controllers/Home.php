<?php

namespace App\Controllers;

use App\Models\AlgiModel;
use App\Models\EduModel;
use App\Models\SkillModel;

class Home extends BaseController
{
    public function index()
    {
        $algi = new AlgiModel();
        $edu = new EduModel();
        $skill = new SkillModel();
        $data = [
            'title' => 'ALLTAN CV',
            'algi' => $algi->findAll()[0],
            'edu' => $edu->findAll(),
            'skill' => $skill->findAll(),
        ];

        return view('index', $data);
    }
}
