<?php
namespace App\Repositories\Eloquent\API;


class BaseRepository
{
    protected $model;

    public function find($id)
    {
        return $this->model->find($id);
    }

}
