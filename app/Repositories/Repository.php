<?php

namespace App\Repositories;

use Config;

abstract class Repository
{
    protected $model = FALSE;

    public function get()
    {
        $builder = $this->model->select('*');
        dd($builder);
        //return $this->model;
    }
}