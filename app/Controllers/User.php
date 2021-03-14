<?php

namespace App\Controllers;

use App\Models\UserModel;
use phpDocumentor\Reflection\Types\Null_;



class User extends BaseController
{
    protected $UserModel;
    public function __construct()
    {
        $this->UserModel = new UserModel();
    }
    public function biodata()
    {
        $data = [
            'title' => 'User Profile',
            'validation' => \Config\Services::validation()
        ];
        return view('user/biodata', $data);
    }
    public function update_bio($id)
    {
        // dd('berhasil berhasil hore');
        $post = $this->request->getVar();
        if (empty($post['tanggal'])) {
            # code...
            $birthday = 'NULL';
        } elseif (empty($post['bulan'])) {
            # code...
            $birthday = 'NULL';
        } elseif (empty($post['tahun'])) {
            # code...
            $birthday = 'NULL';
        } else {
            $birthday = $post['tahun'] . '-' . $post['tanggal'] . '-' . $post['bulan'];
        }
        // dd($id);
        $data = [
            'id' => $id,
            'fullname' => $this->request->getVar('fullname'),
            'age' => $this->request->getVar('age'),
            'birthday' => $birthday,
            'gender' => $this->request->getVar('gender'),
            'address' => $this->request->getVar('address'),
            'city' => $this->request->getVar('city'),
            'job' => $this->request->getVar('job'),
            'national' => $this->request->getVar('national'),
            'type' => 1,
        ];
        $this->UserModel->update($id, $data);
        return redirect()->to('/user/profile_account/' . $id);
    }
    public function profile_account($id)
    {
        $user = $this->UserModel->where('id', $id)->first();
        $birthday = $user['birthday'];
        // dd($user);
        $year = substr($birthday, 0, 4);
        $date = substr($birthday, 5, 2);
        $month = substr($birthday, -2, 2);
        // dd($month);
        $data = [
            'date' => $date,
            'month' => $month,
            'year' => $year,
            'user' => $user,
            'validation' => \Config\Services::validation()
        ];
        return view('user/profile_account', $data);
    }
    public function edit_profile_account($id)
    {
        $user = $this->UserModel->where('id', $id)->first();
        $birthday = $user['birthday'];
        // dd($user);
        $year = substr($birthday, 0, 4);
        $date = substr($birthday, 5, 2);
        $month = substr($birthday, -2, 2);
        // dd($month);
        $data = [
            'date' => $date,
            'month' => $month,
            'year' => $year,
            'user' => $user,
            'validation' => \Config\Services::validation()
        ];
        return view('user/edit_profile_account', $data);
    }
    public function update_profile_account($id)
    {
        if (!$this->validate([
            'email' => 'required|valid_email',
            'phone' => 'required|integer|min_length[11]',
            // 'age' => 'integer',
            // 'date' => 'integer',
            // 'month' => 'integer',
            // 'year' => 'integer',
            'gambar' => 'is_image[gambar]|ext_in[gambar,png,jpg,jpeg,gif]|max_size[gambar,4096]'
        ])) {
            # code...
            return redirect()->to('/user/edit_profile_account' . '/' . $id)->withInput();
        }
        $post = $this->request->getVar();
        if (empty($post['tanggal'])) {
            # code...
            $birthday = 'NULL';
        } elseif (empty($post['bulan'])) {
            # code...
            $birthday = 'NULL';
        } elseif (empty($post['tahun'])) {
            # code...
            $birthday = 'NULL';
        } else {
            $birthday = $post['tahun'] . '-' . $post['tanggal'] . '-' . $post['bulan'];
        }

        $fileGambar = $this->request->getFile('gambar');
        if ($fileGambar->getError() == 4) {
            # code...
            $gambar = $this->request->getVar('gambarLama');
        } else {
            if (!$fileGambar == 'default.png') {
                # code...
                unlink('img/' . $this->request->getVar('gambarLama'));
            }
            $gambar = $fileGambar->getRandomName();
            $fileGambar->move('img', $gambar);
        }
        // dd($gambar);
        // dd($this->request->getVar());
        $data = [
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
            'fullname' => $this->request->getVar('fullname'),
            'age' => $this->request->getVar('age'),
            'birthday' => $birthday,
            'gender' => $this->request->getVar('gender'),
            'address' => $this->request->getVar('address'),
            'city' => $this->request->getVar('city'),
            'job' => $this->request->getVar('job'),
            'national' => $this->request->getVar('national'),
            'image' => $gambar,
        ];
        // dd($data);
        $this->UserModel->update($id, $data);
        return redirect()->to('/user/profile_account' . '/' . $id);
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/homepage');
    }
}
