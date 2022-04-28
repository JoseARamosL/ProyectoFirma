<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AyudaT;
use Illuminate\Support\Str;

class AyudaTController extends Controller
{
    public function index()
    {
        return view('AyudaT.index');
    }

    public function create(array $data){
        return AyudaT::create([
            'name' => $data['name'],
            'cargo' => $data['cargo'],
            'phone' => $data['phone'],
            'photo' => $data['photo'],
        ]);
    }

    public function preview(Request $request)
    {
        $ayudaT = $request->all();

        if (isset($_POST['btnPreviewAyudaT'])) {
            if ($photo=$request->file('photo')) {
                $photo=$request->file('photo');
                $nombreImagen = Str::slug("nombre").time().'.'.$photo->getClientOriginalExtension();
                $nuevaRuta = public_path('/images/'.$nombreImagen);
                copy($photo->getRealPath(), $nuevaRuta);
                $ayudaT['photo'] = '/images/'.$nombreImagen;
            } else {

                $rutaGuardarImg = '/images/';
                $ayudaT['photo'] = (string)$rutaGuardarImg . "default.jpg";
            }

            return view('ayudat.preview', compact('ayudaT'));
        }
    }
}
