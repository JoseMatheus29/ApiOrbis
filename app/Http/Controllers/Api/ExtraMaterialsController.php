<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\extra_materials;
use Illuminate\Http\Request;

class ExtraMaterialsController extends Controller
{
    public function add(Request $request){
        try{
            $extraMaterials = new extra_materials();

            $extraMaterials->id = $request->id;
            $extraMaterials->name = $request->name;
            $extraMaterials->body = $request->body;
            $extraMaterials->Tool_idTool  = $request -> Tool_idTool ;


            $extraMaterials->save();

            return ['status' => 'ok'];

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
    public function listAll(){
        try{

            $extraMaterials = new extra_materials();
            return $extraMaterials;

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
    public function listAespecifc($id, $tipo){
        try{

            $extraMaterials = extra_materials::find($id);
            return $extraMaterials[$tipo];

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
    public function listOne($id){
        try{

            $extraMaterials = new extra_materials();
            return $extraMaterials;

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
    public function update(Request $request, $id){
        try{

            $extraMaterials = new extra_materials();

            $extraMaterials->id = $request->id;
            $extraMaterials->name = $request->name;
            $extraMaterials->body = $request->body;
            $extraMaterials->Tool_idTool  = $request -> Tool_idTool ;

            $extraMaterials -> save();

            return ['retorno' => 'ok', 'data' => $request->all()];

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
    public function delete($id){
        try{

            $extraMaterials = new extra_materials();
            
            $extraMaterials->delete();

            return ['status' => 'ok'];

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
}
