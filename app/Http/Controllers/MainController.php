<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Olá Laravel 10!",
            "description" => "Aprendendo Laravel 10"
        ];
        return view('main', $data);
    }
    public function users()
    {
        //get users com sql puro
        // $users = DB::select('SELECT * FROM users');
        // dd($users);

        //Outra forma de exibição pura
        // echo '<pre>';
        // print_r($users);

        //Exibição com query builder
        // $users = DB::table('users')->get();
        // dd($users);

        //Query bulder com array
        // $users = DB::table('users')->get()->toArray();
        // dd($users);
    }
}
