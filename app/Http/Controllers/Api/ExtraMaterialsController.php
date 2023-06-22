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
    /**
     *      @OA\Get(
     *      path="/ExtraMaterials/list",
     *      operationId="listAllExtraMaterials",
     *      tags={"ExtraMaterials"},
     *      summary="Get list of ExtraMaterials",
     *      description="Returns list of ExtraMaterials",
     *      @OA\Response(
     *          response=200,
     *          description="successful operation"
     *       )
     *     )
     *
     * Returns list of ExtraMaterials
     */
    public function listAllExtraMaterials(){
        try{

            $extraMaterials = extra_materials::all();
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
    /**
     * @OA\Get(
     *      path="/ExtraMaterials/list/{id}",
     *      operationId="listOneExtra",
     *      tags={"ExtraMaterials"},
     *      description="Return a ExtraMaterials",
     *      @OA\Parameter(
     *          name="id",
     *          description="ExtraMaterials id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation"
     *       ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function listOneExtra($id){
        try{

            $extraMaterials = extra_materials::find($id);
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
