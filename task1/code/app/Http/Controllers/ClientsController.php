<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repository\ClientRepositoryInterface;
use App\Repository\DbClientRepository;

class ClientsController extends Controller
{
    protected $clients;

    public function __construct(DbClientRepository $clients)
    {
        $this->clients = $clients;
    }

    public function index($page)
    {
        return response()->json($this->clients->getPaged([], $page, 10));
    }
}