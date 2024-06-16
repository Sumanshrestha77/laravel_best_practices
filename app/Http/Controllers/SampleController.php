<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function __invoke()
    {
        User::create([
            'name' => 'suman shrestha',
            'email' => '3@gmail.com',
            'password' => 'mypassword'
        ]);
        User::create([
            'name' => 'shyam shrestha',
            'email' => '2@gmail.com',
            'password' => 'sdfsf'
        ]);
        User::create([
            'name' => 'Hari shrestha',
            'email' => '1@gmail.com',
            'password' => 'mypasvvsword'
        ]);

        return [1, 2, 3];
    }
}
