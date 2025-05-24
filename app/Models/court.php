<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class court extends Model
{
    public function type(){
        return $this->belongsto(CourtType::class, 'court_type_id');
    }
    use HasFactory;
}

// belajar migration
