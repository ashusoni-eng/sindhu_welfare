<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GalleryModel;

class GalleryController extends BaseController
{
    public function index()
    {
        $title = 'Gallery | ' . config('App')->name;
        $model = new GalleryModel();

        $data['gallery'] = $model->orderBy('id', 'DESC')->findAll();

        $data['title'] = $title;

        return view('Pages/gallery', $data);
    }
}
