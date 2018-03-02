<?php
namespace App\Repository;

use App\Model\ClientModel;

class DbClientRepository implements ClientRepositoryInterface
{
    /** @var $model ClientModel */
    protected $model;

    public function __construct(ClientModel $model)
    {
        $this->model = $model;
    }

    public function getPaged($filters = [], $page = 1, $perPage = 10)
    {
        $query = $this->model->query();

        if ($perPage > 0 && $page > 0)
            $query->offset(($page-1)*$perPage)->limit($perPage);

        return $query->get();
    }

    public function getAll($filters = [])
    {
        return $this->getPaged($filters, 1, 0);
    }

    public function getOne($filters = [])
    {
        $items = $this->getPaged($filters, 1, 1);

        return count($items) ? array_pop($items) : false;
    }
}