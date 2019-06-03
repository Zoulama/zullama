<?php

namespace Zullama\Models;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
	protected $table = 'teams';

    protected $fillable = [
        'first_name', 'last_name', 'role','parcours', 'linkedin'
    ];
}
