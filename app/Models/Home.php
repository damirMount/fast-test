<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function apartments()
    {
        return $this->hasMany(Apartment::class);
    }
}
