<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function user()
    {
        return $this->belongsTo(User::class); // select * from user where project_id
    }
}
