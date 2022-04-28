<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Pymes;

class PymesController extends Controller
{
    public function index()
    {
        return view('Pymes.index');
    }

    public function create(array $data)
    {
        return Pymes::create([
            'name' => $data['name'],
            'cargo' => $data['cargo'],
            'phone' => $data['phone'],
            'photo' => $data['photo'],
        ]);
    }

    public function preview(Request $request)
    {
        $pymes = $request->all();

        if (isset($_POST['btnPreviewAyudaT'])) {
            if ($photo = $request->file('photo')) {
                $photo = $request->file('photo');
                $nombreImagen = Str::slug("nombre") . time() . '.' . $photo->getClientOriginalExtension();
                $nuevaRuta = public_path('/images/' . $nombreImagen);
                copy($photo->getRealPath(), $nuevaRuta);
                $pymes['photo'] = '/images/' . $nombreImagen;
            } else {

                $rutaGuardarImg = '/images/';
                $pymes['photo'] = (string)$rutaGuardarImg . "default.jpg";
            }

            return view('Pymes.preview', compact('pymes'));
        }
    }
}
