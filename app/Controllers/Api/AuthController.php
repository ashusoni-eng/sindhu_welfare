<?php
namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\User;
use Firebase\JWT\JWT;

class AuthController extends BaseController
{

    public function index()
    {
        $json = $this->request->getJSON(true);

        $email    = $json['email'] ?? null;
        $password = $json['password'] ?? null;

        // log_message('debug', 'Login attempt for email: ' . $password);

        $userModel = new User();
        $user      = $userModel->where('email', $email)->first();

        if (! $user || ! password_verify($password, $user['password'])) {
            return $this->response->setJSON([
                'status'  => false,
                'message' => 'Invalid credentials',
            ])->setStatusCode(401);
        }

        $key = getenv('JWT_SECRET');

        $payload = [
            'iss'   => 'sinduwelfaresocietygwalior.com',
            'aud'   => 'sinduwelfaresocietygwalior.com',
            'iat'   => time(),
            'exp'   => time() + 3600, // 1 hour
            'sub'   => $user['id'],
            'email' => $user['email'],
        ];

        $token = JWT::encode($payload, $key, 'HS256');

        return $this->response->setJSON([
            'success' => true,
            'data'    => [
                'access_token' => $token,
            ],
            'user'    => [
                'id'    => $user['id'],
                'email' => $user['email'],
            ],
        ]);
    }

    public function profile()
    {
        $user = $this->request->user;
        return $this->response->setJSON([
            'success' => true,
            'data'    => [
                'id'    => $user['sub'] ?? null,
                'email' => $user['email'] ?? null,
            ],
        ]);
    }
}
