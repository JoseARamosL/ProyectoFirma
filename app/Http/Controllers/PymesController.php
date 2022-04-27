<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PymesController extends Controller
{
    public function index(){
        return view ('Pymes.index');

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

        return view('Pymes.preview');
    }
}
