<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {

        $data = [
            'nama' => "Ivan aditya",
            'kelas' => "C",
            'npm' => "2217051147",
        ];

        return view ('profile', $data);
    }
}