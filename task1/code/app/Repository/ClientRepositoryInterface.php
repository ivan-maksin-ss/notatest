<?php
namespace App\Repository;

interface ClientRepositoryInterface
{
    public function getAll($filters = []);
    public function getOne($filters = []);
    public function getPaged($filters = [], $page = 1, $perPage = 0);
}