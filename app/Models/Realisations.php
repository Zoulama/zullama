<?php

namespace Zullama\Models;

use Illuminate\Database\Eloquent\Model;

class Realisations extends Model
{
    protected $table = 'realisations';

    protected $fillable = [
        'name', 'url', 'secteur','description', 'technologies'
    ];
}
