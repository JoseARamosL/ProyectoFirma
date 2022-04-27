<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EdaseController extends Controller
{
    public function index(){
        return view ('Edase.index');

        $name = $_POST['name'];
        $cargo = $_POST['cargo'];
        $phone = $_POST['phone'];
        $photo = $_POST['photo'];
    }

    public function preview(){

        $name = $_POST['name'];
        $cargo = $_POST['cargo'];
        $phone = $_POST['phone'];
        $photo = $_POST['photo'];

        return view('Edase.preview');
    }
}
