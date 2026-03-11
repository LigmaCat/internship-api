<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupInternship extends Model
{
    public function group()
    {
        return $this->belongsTo(StudentGroup::class, 'group_id');
    }

    public function internship()
    {
        return $this->belongsTo(Internship::class);
    }
}
