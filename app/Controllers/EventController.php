<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EventsModel;

class EventController extends BaseController
{
    public function index()
    {
        $title = 'Events | ' . config('App')->name;
        $today = date('Y-m-d');
        $model = new EventsModel();

        $data['events'] = $model->where('date >=', $today)->orWhere('date IS NULL')->orderBy('ISNULL(date)', 'ASC')->orderBy('date', 'ASC')->findAll();

        $data['title'] = $title;

        return view('Pages/events', $data);
    }

    public function latest()
    {
        $model          = new EventsModel();
        $data['events'] = $model->orderBy('id', 'DESC')->limit(3)->findAll();
        return $data;
    }
}
