<?php

namespace Zullama\Zullama\Datatables;

use URL;

class UserDatatable extends EntityDatatable
{
    public $entityType = 'user';
    public $sortCol = 4;

    public function columns()
    {
        return [
            [
                'name',
                function ($model) {
                    return  $model->name;
                },
            ],
            [
                'email',
                function ($model) {
                    return $model->email;
                },
            ],
            [
                'remember_token',
                function ($model) {
                    return $model->remember_token;
                },
            ],
        ];
    }

    public function actions()
    {
        return [
            [
                uctrans('texts.edit_user'),
                function ($model) {
                    return URL::to("users/{$model->id}/edit");
                },
                function ($model) {
                    return $model->id;
                },
            ],
        ];
    }

}
