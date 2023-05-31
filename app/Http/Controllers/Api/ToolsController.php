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
    public function listAll(){
        try{

            $tools = Tool::all();
            return $tools;

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
    public function listOne($id){
        try{

            $tool = Tool::find($id);
            return $tool;

        }catch(\Exception $erro){
            
            return ['status' => 'erro', 'details' => $erro];

        }
    }
    public function update(Request $request, $id){
        try{

            $tool = Tool::find($id);

            $tool->id = $request->nome;
            $tool->name_pt = $request->name_pt;
            $tool->name_en = $request->name_en;
            $tool->effort = $request->effort;
            $tool->origin = $request->origin;
            $tool->type_of_data = $request->type_of_data;
            $tool->users = $request -> users;
            $tool -> experts = $request -> experts;
            $tool -> participants = $request -> participants;
            $tool -> icon = $request -> icon;
            $tool -> tip = $request -> tip;
            $tool -> templateName = $request -> templateName;
            $tool -> Stage_idStage = $request -> Stage_idStage;

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
