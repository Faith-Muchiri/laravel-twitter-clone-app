<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index() {

        $users = [
            [
                'name' => 'Alex',
                'age' => 30,
            ],
            [
                'name' => 'Dan',
                'age' => 25,
            ],
            [
                'name' => 'Liz',
                'age' => 17,
            ]

        ];
        // return view('profile');
        return view(
            'profile',
            [
                'users' => $users
            ]
            );
    }
}
