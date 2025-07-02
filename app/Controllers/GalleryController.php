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

        $allGallery = $model->orderBy('date', 'DESC')->findAll(); // sort by date, not year

        $grouped = [];

        foreach ($allGallery as $item) {
            $date = new \DateTime($item['date']);
            $year = (int) $date->format('Y');
            $month = (int) $date->format('m');

            // Determine session based on July-June cutoff
            if ($month >= 7) {
                // From July to Dec → session = currentYear - nextYear
                $sessionKey = $year . '-' . substr($year + 1, -2);
            } else {
                // From Jan to June → session = previousYear - currentYear
                $sessionKey = $year - 1 . '-' . substr($year, -2);
            }

            $type = $item['type'] ?? 'event';

             $grouped[$sessionKey][$type][] = $item;

            // $grouped[$sessionKey][] = $item;
        }

        $data['gallery'] = $grouped;
        $data['title'] = $title;

        return view('Pages/gallery', $data);
    }
}
