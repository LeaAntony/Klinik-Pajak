<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        // $data = [
        //     'nama' => 'Doraemon',
        //     'pekerjaan' => 'Developer',
        // ];

        // return view('home')->with($data);

        $nama = "Ultraman";
        $pekerjaan = "Pembasmi Kejahatan";
        return view('home', compact('nama', 'pekerjaan'));
=======
       // $data = [
       //     'nama' => 'Doraemon',
       //    'pekerjaan' => 'Developer',
        //];
        // return view('home')->with($data);

        $nama = "Nobita";
        $pekerjaan = "student";
        return view('home', compact('nama','pekerjaan'));

>>>>>>> ee6d7a546df556303d86e4f1303efeeb84da0eb1
    }

    public function contact()
    {
        return view('contact');
    }
}
<<<<<<< HEAD
=======
?>
>>>>>>> ee6d7a546df556303d86e4f1303efeeb84da0eb1
