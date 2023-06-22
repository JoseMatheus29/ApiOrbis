<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tool;
use Illuminate\Http\Request;

class ToolsController extends Controller
{
    public function add(Request $request){
        try{
            $tool = new Tool();

            $tool->id = $request->nome;
            $tool->name_pt = $request->name_pt;
            $tool->name_en = $request->name_en;
            $tool->effort = $request->effort;
            $tool->time = $request->time;
            $tool->origin = $request->origin;
            $tool->type_of_data = $request->type_of_data;
            $tool->users = $request -> users;
            $tool -> experts = $request -> experts;
            $tool -> participants = $request -> participants;
            $tool -> icon = $request -> icon;
            $tool -> tip = $request -> tip;
            $tool -> templateName = $request -> templateName;
            $tool -> Stage_idStage = $request -> Stage_idStage;
            


            $tool->save();

            return ['status' => 'ok'];

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
    /**
     *      @OA\Get(
     *      path="/Tools/list",
     *      operationId="listAllTool",
     *      tags={"Tool"},
     *      summary="Get list of Tool",
     *      description="Returns list of Tool",
     *      @OA\Response(
     *          response=200,
     *          description="successful operation"
     *       )
     *     )
     *
     * Returns list of Tool
     */
    public function listAllTool(){
        try{

            $tools = Tool::all();
            return $tools;

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
    /**
     * @OA\Get(
     *      path="/Tools/list/{id}",
     *      operationId="listOneTool",
     *      tags={"Tool"},
     *      description="Return a Tool",
     *      @OA\Parameter(
     *          name="id",
     *          description="Tool id",
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
    public function listOneTool($id){
        try{

            $tool = Tool::find($id);
            return $tool;

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
    public function listAespecifc($id, $tipo){
        try{

            $tool = Tool::find($id);
            return $tool[$tipo];

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
    public function update(Request $request, $id){
        try{

            $tool = Tool::find($id);
            
            $tool->name_pt = $request->name_pt;
            $tool->name_en = $request->name_en;
            $tool->effort = $request->effort;
            $tool->time = $request->time;
            $tool->origin = $request->origin;
            $tool->type_of_data = $request->type_of_data;
            $tool->users = $request -> users;
            $tool -> experts = $request -> experts;
            $tool -> participants = $request -> participants;
            $tool -> icon = $request -> icon;
            $tool -> tip = $request -> tip;
            $tool -> templateName = $request -> templateName;

            $tool -> save();

            return ['retorno' => 'ok', 'data' => $request->all()];

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
    public function delete($id){
        try{

            $tool = Tool::find($id);
            
            $tool->delete();

            return ['status' => 'ok'];

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
}
