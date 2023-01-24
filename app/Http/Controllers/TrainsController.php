<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trains;

class TrainsController extends Controller
{
    
    public function index() {

        //  $trains = Trains::all();
        //qualsiasi query diversa da all necessita la funzione get() alla fine
         $trains = Trains::whereDate( "departure_time" ,"2023-01-24")->get();


        return view('index', compact('trains'));
    }

}
