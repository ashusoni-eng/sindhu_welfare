<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MembersModel;

class Member extends BaseController
{
    public function index()
    {
        $model = new MembersModel();

        $data['members'] = $model->where('status', 1)->where('member_type !=', 'team')->orderBy('name', 'ASC')->findAll();
        $data['teams'] = $model->where('status', 1)->where('member_type', 'team')->orderBy('name', 'ASC')->findAll();

        $data['title'] = 'Members';

        return view('Pages/members', $data);
    }   
    public function working_committee()
    {
        $model = new MembersModel();

        $data['members'] = $model->where('member_type !=', 'member')->where('member_type !=', 'past president')
            ->orWhere('id', 12)
            ->orderBy("FIELD(member_type, 'president', 'vice president', 'joint president', 'secretary',  'joint secretary', 'past president',  'treasurer' ,'working committee')", '', false)->findAll();

        $data['title'] = 'Dice & Working Committee';

        return view('Pages/wokring_committee', $data);
    }

    public function memberProfile($id)
    {
        $member = new \App\Models\MembersModel();

        $data['member'] = $member->where('id', $id)->first();

        $data['title'] = $data['member']['name'] . ' | ' . config('App')->name;

        $photo      = $data['member']['photo'];
        $photoPath  = FCPATH . 'members/' . $photo;
        $finalPhoto = (is_file($photoPath) && ! empty($photo)) ? $photo : 'default.png';

        $data['photo'] = $finalPhoto;

        return view('Pages/profile', $data);
    }

    public function single($id)
    {
        $member = new \App\Models\MembersModel();

        $data['member'] = $member->where('id', $id)->first();

        $data['title'] = $data['member']['name'] . ' | ' . config('App')->name;

        $photo      = $data['member']['photo'];
        $photoPath  = FCPATH . 'members/' . $photo;
        $finalPhoto = (is_file($photoPath) && ! empty($photo)) ? $photo : 'default.png';

        $data['photo'] = $finalPhoto;

        return view('Pages/single_member', $data);
    }
}
