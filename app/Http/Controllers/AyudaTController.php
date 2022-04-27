<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AyudaTController extends Controller
{
    public function index()
    {
        return view('AyudaT.index');
    }

    public function preview()
    {

        if (isset($_GET['btnPreviewAyudaT'])) {
            $name = $_GET['name'];
            $cargo = $_GET['cargo'];
            $phone = $_GET['phone'];
            $photo = $_GET['photo'];

            $arr = [
                $name, $cargo, $phone
            ];

            return view('AyudaT.preview', $arr);
        }
    }
}
