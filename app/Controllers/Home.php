<?php
namespace App\Controllers;

use App\Models\GalleryModel;

class Home extends BaseController
{
    public function index(): string
    {
        $title          = config('App')->name;
        $data['title']  = $title;
        $eventModel     = new \App\Models\EventsModel();
        $data['events'] = $eventModel->get_latest();

        $memberModel               = new \App\Models\MembersModel();
        $data['members']           = $memberModel->get_dice();
        $data['contact'] = false;
        $data['former_presidents'] = $memberModel->get_former_president();
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
        $memberModel     = new \App\Models\MembersModel();
        $data['members'] = $memberModel->get_dice();
        $data['contact'] = true;
        $title           = 'Contact Us | ' . config('App')->name;
        $data['title']   = $title;

        return view('Pages/contact', $data);
    }

    public function contact_form()
    {
        $name    = $this->request->getPost('name');
        $mobile  = $this->request->getPost('mobile');
        $email   = $this->request->getPost('email');
        $message = $this->request->getPost('message');

        $formatted      = "A New Enquiry On <?= config('App')->siteName; ?>\nName: $name\nMobile: $mobile\nEmail: $email\nMessage: $message\n\nThanks";
        $encodedMessage = urlencode($formatted); // important: encode full message

        // Load from .env
        $apiUrl   = getenv('WHATSAPP_API_URL');
        $apiKey   = getenv('WHATSAPP_API_KEY');
        $receiver = getenv('WHATSAPP_RECEIVER');

        // Full GET URL
        $finalUrl = "$apiUrl?mobile=$receiver&api=$apiKey&message=$encodedMessage";

        $client   = \Config\Services::curlrequest();
        $response = $client->post($finalUrl);

        if ($response->getStatusCode() === 200) {
            return $this->response->setJSON(['status' => true, 'message' => 'Message sent.']);
        } else {
            return $this->response->setJSON(['status' => false, 'message' => 'Failed to send.']);
        }
    }

    public function email_subscription()
    {
        $email = $this->request->getPost('email');

        if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $this->response->setJSON(['status' => false, 'message' => 'Invalid Email.']);
        }

        $model = new \App\Models\EmailSubscriptionModel();
        $model->insert(['email' => $email]);

        return $this->response->setJSON(['status' => true, 'message' => 'Thank You For Subscribe.']);
    }
}
