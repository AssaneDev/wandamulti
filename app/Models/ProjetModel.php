<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ProjetModel extends Model
{
    //
    use HasFactory;
    protected $guarded = [];
     public function detail_projet()
    {
        return $this->hasOne(DescriptionProjet::class, 'id_projet');
    }
    public function categorie()
    {
        return $this->belongsTo(CategorieModel::class, 'categorie_id');
    }
}
