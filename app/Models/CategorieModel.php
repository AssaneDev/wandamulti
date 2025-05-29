<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategorieModel extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function projets()
{
    return $this->hasMany(ProjetModel::class, 'categorie_id');
}
}
