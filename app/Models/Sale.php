<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ['id', 'name'];

    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
