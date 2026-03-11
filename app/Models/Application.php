<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function groupInternship()
    {
        return $this->belongsTo(GroupInternship::class);
    }
}
