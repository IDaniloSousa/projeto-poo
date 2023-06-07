<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Situacao extends Model
{
    use HasFactory;

    protected $table = 'situacao';
    protected $primaryKey = 'id';
    protected $fillable = ['description'];

    public function requests()
    {
        return $this->hasMany(Request::class);
    }
}
