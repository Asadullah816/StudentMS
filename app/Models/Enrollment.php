<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
