<?php

namespace App\Services;
use App\Models\Assessment;

class AssessmentService
{
    public function create($data)
    {
        return Assessment::create($data);
    }
}
