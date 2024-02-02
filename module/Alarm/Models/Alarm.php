<?php

namespace Module\Alarm\Models;

use Illuminate\Database\Eloquent\Model;

class Alarm extends Model
{
    protected $fillable = ['source','user_id','type'];
}
