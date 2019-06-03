<?php

namespace Zullama\Models;

use Illuminate\Database\Eloquent\Model;

class Activites extends Model
{
    protected $table = 'activites';

    protected $fillable = [
        'name', 'description', 'types'
    ];
}
