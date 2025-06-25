<?php
namespace App\Controllers;

use App\Models\GalleryModel;

class Home extends BaseController
{
    public function index(): string
    {
        $title = config('App')->name;
        $data['title'] = $title;
        $eventModel = new \App\Models\EventsModel();
        $data['events'] = $eventModel->get_latest();

        $memberModel = new \App\Models\MembersModel();
        $data['members'] = $memberModel->get_dice();
        return view('Pages/index', $data);
    }

    public function about(): string
    {
        $title         = 'About | ' . config('App')->name;
        $data['title'] = $title;

        $model           = new GalleryModel();
        $data['gallery'] = $model->orderBy('id', 'DESC')->limit(4)->findAll();

        return view('Pages/about', $data);
    }

    public function contact(): string
    {
        $title         = 'Contact Us | ' . config('App')->name;
        $data['title'] = $title;

        return view('Pages/contact', $data);
    }    
}
