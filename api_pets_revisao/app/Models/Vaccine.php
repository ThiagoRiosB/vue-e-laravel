<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;

    protected $fillable = ['professional_id', 'pet_id', 'dose', 'name'];

    public function professional() {
        return $this->hasOne(Professional::class, 'id', 'professional_id');
    }
}
