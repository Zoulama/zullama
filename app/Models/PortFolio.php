<?php

namespace Zullama\Models;

use Illuminate\Database\Eloquent\Model;

class PortFolio extends Model
{
    protected $table = 'portfolio';

    protected $fillable = [
        'name', 'url', 'secteur','description', 'technologies'
    ];
}
