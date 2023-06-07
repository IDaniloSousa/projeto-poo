<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    use HasFactory;

    protected $table = 'setor'; 
    protected $primaryKey = 'id';
    protected $fillable = ['description'];

    public function requests()
    {
        return $this->hasMany(Request::class);
    }
}
