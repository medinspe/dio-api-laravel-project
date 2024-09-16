<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandController extends Controller
{
    public function getAll(){
        return response()->json();
    }

    public function getById($id){
        $band = null;
        foreach ($this->getBands() as $_band) {
            $band = $_band;
        }
        return response()->json($band);
    }

    protected function getBands(){
        return [
            [
                "id"=> 1,  'name' => 'dio', 'gender' => 'é isso ai'
            ]
        ];
    }
}
