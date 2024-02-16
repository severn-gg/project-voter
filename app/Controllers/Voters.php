<?php

namespace App\Controllers;

class Voters extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function fetch()
    {
        // $muser = new M_nasabah();
        $db = \Config\Database::connect();
        $builder = $db->table('candidates');
        $data = $builder->get()->getResult();

        echo json_encode($data);
    }
}
