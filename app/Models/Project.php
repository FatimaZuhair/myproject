<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Project extends Model
{
    use HasFactory;

    protected $hidden = [
        'projectName',
        'Country',
        'projectDetail',
        'projectSource',
        'projectStatus',
    ];
}
