<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessageLog extends Model
{
    //
        protected $fillable = ['name', 'email', 'phone', 'projet', 'message', 'source'];

}
