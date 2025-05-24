<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class DescriptionService extends Model
{
    //
    use HasFactory;
    protected $guarded = [];
    public function service()
    {
        return $this->belongsTo(SectionModel2::class, 'id_service');
    }

}
