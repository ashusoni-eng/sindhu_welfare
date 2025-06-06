<?php
namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $title = config('App')->name;
        $data  = [
            'title' => $title,
        ];
        return view('Pages/index', $data);
    }

    public function memberProfile()
    {
        $title = config('App')->name;
        $data  = [
            'title' => $title,
        ];
        return view('Pages/profile', $data);
    }
}
