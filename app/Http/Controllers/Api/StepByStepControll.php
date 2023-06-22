<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Step_by_Step;
use Illuminate\Http\Request;

class StepByStepControll extends Controller
{
    public function add(Request $request){
        try{
            $step = new Step_by_Step();

            $step->id = $request->id;
            $step->title = $request->title;
            $step->description = $request->description;
            $step->alert = $request->alert;
            $step->Tools_idTools  = $request -> Tools_idTools ;


            $step->save();

            return ['status' => 'ok'];

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
    /**
     *      @OA\Get(
     *      path="/Step/list",
     *      operationId="listAllStep",
     *      tags={"Step"},
     *      summary="Get list of Step",
     *      description="Returns list of Step",
     *      @OA\Response(
     *          response=200,
     *          description="successful operation"
     *       )
     *     )
     *
     * Returns list of Step
     */
    public function listAllStep(){
        try{

            $steps = Step_by_Step::all();
            return $steps;

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
    /**
     * @OA\Get(
     *      path="/Step/list/{id}",
     *      operationId="listOneStep",
     *      tags={"Step"},
     *      description="Return a Step",
     *      @OA\Parameter(
     *          name="id",
     *          description="Step id",
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
    public function listOneStep($Tools_idTools){
        try{

            $step = Step_by_Step::where ('Tools_idTools', '=', $Tools_idTools)->get();;
            
            return $step;

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
    public function listAespecifc($id, $tipo){
        try{

            $step = Step_by_Step::find($id);
            return $step[$tipo];

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
    public function update(Request $request, $id){
        try{

            $step = Step_by_Step::find($id);

            
            $step->title = $request->title;
            $step->description = $request->description;
            $step->alert = $request->alert;
            

            $step -> save();

            echo($step);

            return ['retorno' => 'ok', 'data' => $request->all()];

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
    public function delete($id){
        try{

            $step = Step_by_Step::find($id);
            
            $step->delete();

            return ['status' => 'ok'];

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
}
