<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class porduct extends Model
{
    protected $table = ['Products'];
    protected$hidden = ['created_at','update_ad'];
}
