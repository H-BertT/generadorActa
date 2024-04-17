<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Matrimonio;

class Invitacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'acta_id',
        // Aquí puedes agregar los demás campos de la invitación
    ];

    public function acta()
    {
        return $this->belongsTo(Matrimonio::class);
    }
}
