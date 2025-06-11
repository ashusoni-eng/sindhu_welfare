<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MembersModel;

class Member extends BaseController
{
    public function index()
    {
        $model = new MembersModel();

        $data['members'] = $model->where('status', 1)->findAll();

        $data['title'] = 'Members';

        return view('Pages/members', $data);
    }
}
