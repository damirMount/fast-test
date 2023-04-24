<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['id','name', 'address'];


    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getId(strind $id)
    {
        return $this->id;
    }


    public function home()
    {
        return $this->belongsTo(Home::class);
    }

    public function sale()
    {
        return $this->hasOne(Sale::class);
    }
}
