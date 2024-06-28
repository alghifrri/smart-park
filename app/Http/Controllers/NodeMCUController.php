<?php

namespace App\Http\Controllers;
use App\Models\Tbdataparkir;

use Illuminate\Http\Request;

class NodeMCUController extends Controller
{
    public function welcome()
    {
        return view('welcome', [
            'sensor' => Tbdataparkir::select('*')->get()
        ]);
    }
    public function simpandatasensor()
    {
        Tbdataparkir::where('iddataparkir', 1)->update([
            'status' => request()->slot1
        ]);

        // Tbdataparkir::where('id', 2)->update([
        //     'status' => request()->slot2
        // ]);

        // Tbdataparkir::where('id', 3)->update([
        //     'status' => request()->slot3
        // ]);
    }
}
