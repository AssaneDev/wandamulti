<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\DescriptionService;

class SectionModel2 extends Model
{
    //
    use HasFactory;
    protected $guarded = [];
    public function detail_service()
    {
        return $this->hasOne(DescriptionService::class, 'id_service');
    }
}
