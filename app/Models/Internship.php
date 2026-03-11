<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    public function groupInternships()
    {
        return $this->hasMany(GroupInternship::class);
    }
}
