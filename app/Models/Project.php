<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = "projects";
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
