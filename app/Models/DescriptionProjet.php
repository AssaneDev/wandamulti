<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class DescriptionProjet extends Model
{    use HasFactory;
    protected $guarded = [];
    public function projet()
    {
        return $this->belongsTo(ProjetModel::class, 'id_projet');
    }
    //
}
