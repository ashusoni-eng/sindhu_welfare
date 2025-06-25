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

        $allGallery = $model->orderBy('year', 'DESC')->findAll();

        $grouped = [];
        foreach ($allGallery as $item) {
            $grouped[$item['year']][] = $item;
        }

        $data['gallery'] = $grouped;

        $data['title'] = $title;

        return view('Pages/gallery', $data);
    }
}
