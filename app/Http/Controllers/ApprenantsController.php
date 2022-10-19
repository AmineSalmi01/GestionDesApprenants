<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListApprenant;

class ApprenantsController extends Controller
{
    public function show(){
        return view('index');
    }

    // public function addApprenants(Request $request){
    //     \Log::info(json_encode($request->all()));
    //     return view('index');
    // }

    // public function addId($name){
    //     $data = [
    //         'amine'=>'amine',
    //         'mohamed'=>'mohamed'
    //     ];
    //     return view('index', [
    //         'apprenants' => $data[$name]
    //     ]);
    // }
}
