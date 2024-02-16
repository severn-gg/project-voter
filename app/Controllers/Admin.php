<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        return view('admin');
    }

    public function insert_candidate()
    {
        $nourut = $_POST['nourut'];
        $can_name = $_POST['candidate_name'];
        $pict = $_POST['profile_pict'];
        $insert = array('no_urut' => $nourut, 'candidate_name' => $can_name, 'picture_url' => $pict);
        $db = \Config\Database::connect();
        $builder = $db->table('candidates');
        $data = $builder->insert($insert);

        return redirect()->to('admin');
    }
}
