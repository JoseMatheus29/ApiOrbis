<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stage;

class StageController extends Controller
{
    /**
     * @OA\Post(
     *      path="/Stage/add",
     *      operationId="add",
     *      tags={"Stages"},
     *      summary="Add a stage",
     *      @OA\Parameter(
     *          name="id",
     *          description="Stage id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          ),),
     *      @OA\Parameter(
     *          name="name_pt",
     *          description="Name of Stage",
     *          
     *          in="path",
     *          @OA\Schema(
     *              type="varchar"
     *          ),),
     *      @OA\Parameter(
     *          name="name_en",
     *          description="Name of Stage in English",
     *          
     *          in="path",
     *          @OA\Schema(
     *              type="varchar"
     *          ),),
     *     @OA\Parameter(
    *           name="description",
     *          description= "Description of Stage",
     *          
     *          in="path",
     *          @OA\Schema(
     *              type="varchar"
     *          ),),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation"
     *       )
     *     )
     *
     * Returns list of products
     */
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
    /**
     *      @OA\Get(
     *      path="/Stage/list",
     *      operationId="listAllStage",
     *      tags={"Stages"},
     *      summary="Get list of Stage",
     *      description="Returns list of Stages",
     *      @OA\Response(
     *          response=200,
     *          description="successful operation"
     *       )
     *     )
     *
     * Returns list of projects
     */
    public function listAllStage(){
        try{

            $stages = Stage::all();
            return $stages;

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
    /**
     * @OA\Get(
     *      path="/Stage/list/{id}",
     *      operationId="listOneStage",
     *      tags={"Stages"},
     *      description="Return a Stage",
     *      @OA\Parameter(
     *          name="id",
     *          description="Stage id",
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
    public function listOneStage($id){
        try{

            $stages = Stage::find($id);
            return $stages;

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
    public function listAespecifc($id, $tipo){
        try{

            $stages = Stage::find($id);
            return $stages[$tipo];

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }

    public function update(Request $request, $id){
        try{

            $stage = Stage::find($id);

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
