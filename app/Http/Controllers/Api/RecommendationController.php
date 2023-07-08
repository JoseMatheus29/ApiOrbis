<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tool;

class RecommendationController extends Controller
{
    public function getRecommendation(Request $request)
    {
        try {
            $respostas = $request->all();
            
            $data = Tool::all();
        
            $recIdeal = [];
            $recParecida = [];
            $recNaoFunciona = [];
        
            foreach ($data as $item) {
                if ($item->Stage_idStage == $respostas['Stage_idStage']) {
                    if ($item->time == $respostas['time'] && $item->effort == $respostas['effort']) {
                        $recIdeal[] = ['tool' => $item, 'score' => 3];
                        
                    } elseif ($item->time == $respostas['time'] || $item->effort == $respostas['effort']) {
                        $recParecida[] = ['tool' => $item, 'score' => 2];
                        
                    } else {
                        $recNaoFunciona[] = ['tool' => $item, 'score' => 0];
                    }
                }
            }
        
            if (!empty($recIdeal)) {
                usort($recIdeal, function ($a, $b) {
                    return $b['score'] - $a['score'];
                });
                $recommendedIdeal = $recIdeal[0]['tool']->name_pt;
            } else {
                $recommendedIdeal = "Nenhuma recomendação ideal encontrada.";
            }
        
            if (!empty($recParecida)) {
                usort($recParecida, function ($a, $b) {
                    return $b['score'] - $a['score'];
                });
                $recommendedSimilar = $recParecida[0]['tool']->name_pt;
            } else {
                $recommendedSimilar = "Nenhuma recomendação parecida encontrada.";
            }
        
            if (!empty($recNaoFunciona)) {
                usort($recNaoFunciona, function ($a, $b) {
                    return $b['score'] - $a['score'];
                });
                $recommendedNotWorking = $recNaoFunciona[0]['tool']->name_pt;
            } else {
                $recommendedNotWorking = "Nenhuma recomendação que não funciona encontrada.";
            }
        
            $recommendations = [
                'recommendedIdeal' => $recommendedIdeal,
                'recommendedSimilar' => $recommendedSimilar,
                'recommendedNotWorking' => $recommendedNotWorking
            ];
        
            return response()->json($recommendations);
        } catch (\Exception $erro) {
            return ['status' => 'erro', 'details' => $erro];
        }
    }
}
