<?php

namespace Zullama\Zullama\Repositories;

use DB;

class UserRepository extends BaseRepository
{
    public function getClassName()
    {
        return 'Zullama\Models\User';
    }

    public function find()
    {
        $query = DB::table('users');
        //dd($query);
        //->select('users.name', 'users.email', 'users.remember_token');

        $this->applyFilters($query, 'user');

        $query->select('users.name', 'users.email', 'users.remember_token');

        return $query;
    }

    
}
