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
            $step->origin = $request->origin;
            $step->step_idstep = $request -> step_idstep;


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

            $step->id = $request->nome;
            $step->name_pt = $request->name_pt;
            $step->name_en = $request->name_en;
            $step->effort = $request->effort;
            $step->origin = $request->origin;
            $step->type_of_data = $request->type_of_data;
            $step->users = $request -> users;
            $step -> experts = $request -> experts;
            $step -> participants = $request -> participants;
            $step -> icon = $request -> icon;
            $step -> tip = $request -> tip;
            $step -> templateName = $request -> templateName;
            $step -> Stage_idStage = $request -> Stage_idStage;

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
