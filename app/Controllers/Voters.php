<?php

namespace App\Controllers;

class Voters extends BaseController
{
    public function index(): string
    {
        // $muser = new M_nasabah();
        $db = \Config\Database::connect();
        $builder = $db->table('candidates');
        $data['candidates'] = $builder->get()->getResult();

        return view('welcome_message', $data);
    }
}
