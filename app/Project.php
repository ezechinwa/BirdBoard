<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $guarded = [];

    function path()
    {
        return "/projects/{$this->id}";
    }
}
