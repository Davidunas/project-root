<?php

namespace App\Controllers;

use App\Database\Migrations\User;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->UserModel = new UserModel();
    }
    public function index()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('auth/index', $data);
    }
    public function register()
    {
        // dd('berhasil');
        if (!$this->validate([
            'email' => 'required|valid_email',
            'username' => 'required|min_length[3]',
            'phone' => 'required|integer|min_length[11]',
            'password' => 'required|min_length[6]',
            'password2' => 'required|matches[password]'
        ])) {
            # code...
            return redirect()->to('/auth/index')->withInput();
        }

        // dd($this->request->getVar());
        $this->UserModel->save([
            'id_user' => rand(1, 99999999),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'phone' => $this->request->getVar('phone')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan, Silahkan login');
        return redirect()->to('/auth/index');
    }

    public function login()
    {
        // $post = $this->request->getVar();
        $post = $this->request->getVar();
        if (!$this->validate([
            'email_login' => 'required|valid_email',
            'password_login' => 'required',
        ])) {
            return redirect()->to('/auth/index')->withInput();
        }
        $UserModel = new UserModel();
        $user = $UserModel->where('email', $post['email_login'])->first();
        //dd($user['password_login']);
        if ($user) {
            if (password_verify($post['password_login'], $user['password'])) {
                $sessData = [
                    'id' => $user['id'],
                    'id_user' => $user['id_user'],
                    'username' => $user['username'],
                    'fullname' => $user['fullname'],
                    'email' => $user['email'],
                    'image' => $user['image'],
                    'phone' => $user['phone'],
                    'age' => $user['age'],
                    'birthday' => $user['birthday'],
                    'gender' => $user['gender'],
                    'address' => $user['address'],
                    'city' => $user['city'],
                    'job' => $user['job'],
                    'national' => $user['national'],
                    'role' => $user['role'],
                    'type' => $user['type'],
                    'created_at' => $user['created_at'],
                    'last_activity' => $user['last_activity'],
                    'IsLogged' => true
                ];
                session()->set($sessData);
                // dd($sessData);
                // dd($ade);
                // $ade = session()->get('type');
                if ($user['type'] == 0) {
                    # code...
                    // dd('berhasil ke biodata');
                    return redirect()->to('/user/biodata');
                } elseif ($user['type'] == 1) {
                    # code...
                    // dd('berhasil ke hompage');
                    return redirect()->to('/homepage');
                }
            }
            session()->setFlashdata('pesan_login', 'Password yang anda masukkan salah ! ');
            return redirect()->to('/auth/index')->withInput();
        }
        session()->setFlashdata('pesan_login', 'Email atau Password yang anda masukkan salah ! ');
        return redirect()->to('/auth/index')->withInput();
    }
}
