<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class Produk extends BaseController
{
    use ResponseTrait;

    public function __construct()
    {
        // tulis code construct disini
    }

    public function index()
    {
        $data = [
            'status' => true,
            'message' => 'yameteee....!'
        ];
        return $this->respond($data);
    }
}
