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
            $step->Tool_idTool  = $request -> Tool_idTool ;


            $step->save();

            return ['status' => 'ok'];

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
    public function listAll(){
        try{

            $steps = Step_by_Step::all();
            return $steps;

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
    public function listOne($id){
        try{

            $step = Step_by_Step::find($id);
            return $step;

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
    public function update(Request $request, $id){
        try{

            $step = Step_by_Step::find($id);

            $step->id = $request->id;
            $step->title = $request->title;
            $step->description = $request->description;
            $step->alert = $request->alert;
            $step->origin = $request->origin;
            $step->Tool_idTool  = $request -> Tool_idTool ;

            $step -> save();

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
