<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Edase;

class EdaseController extends Controller
{
    public function index(){
        return view ('Edase.index');
    }

    public function create(array $data){
        return Edase::create([
            'name' => $data['name'],
            'cargo' => $data['cargo'],
            'phone' => $data['phone'],
            'photo' => $data['photo'],
        ]);
    }

    public function preview(Request $request)
    {
        $edase = $request->all();

        if (isset($_POST['btnPreviewAyudaT'])) {
            if ($photo=$request->file('photo')) {
                $photo=$request->file('photo');
                $nombreImagen = Str::slug("nombre").time().'.'.$photo->getClientOriginalExtension();
                $nuevaRuta = public_path('/images/'.$nombreImagen);
                copy($photo->getRealPath(), $nuevaRuta);
                $edase['photo'] = '/images/'.$nombreImagen;
            } else {

                $rutaGuardarImg = '/images/';
                $edase['photo'] = (string)$rutaGuardarImg . "default.jpg";
            }

            return view('Edase.preview', compact('edase'));
        }
    }
}
