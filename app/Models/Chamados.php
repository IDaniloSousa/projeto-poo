<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamados extends Model
{
    use HasFactory;

    protected $table = 'chamados';
    protected $primaryKey = 'id';
    protected $fillable = [
        'setor_id',
        'situacao_id',
        'title',
        'description',
        'fim_date',
        'created_at',
        'updated_at'
    ];

    public function setor()
    {
        return $this->belongsTo(Setor::class);
    }

    public function situacao()
    {
        return $this->belongsTo(Situacao::class);
    }
}
