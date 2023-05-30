<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stage;

class StageController extends Controller
{
    public function add(Request $request){
        try{
            $stage = new Stage();

            $stage->id = $request->nome;
            $stage->name_pt = $request->name_pt;
            $stage->name_en = $request->name_en;
            $stage->description = $request->description;

            $stage->save();

            return ['status' => 'ok'];

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }

    }
    public function listAll(){
        try{

            $stages = Stage::all();
            return $stages;

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
    public function listOne($id){
        try{

            $stages = Stage::find($id);
            return $stages;

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
    public function update(Request $request, $id){
        try{

            $stage = Stage::find($id);

            $stage->id = $request->nome;
            $stage->name_pt = $request->name_pt;
            $stage->name_en = $request->name_en;
            $stage->description = $request->description;

            $stage -> save();

            return ['retorno' => 'ok', 'data' => $request->all()];

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
    public function delete($id){
        try{

            $stage = Stage::find($id);
            
            $stage->delete();

            return ['status' => 'ok'];

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
}
